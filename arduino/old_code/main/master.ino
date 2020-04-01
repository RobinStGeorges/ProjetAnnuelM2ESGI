/*
*
https://www.instructables.com/id/WiFi-Communication-Between-Two-ESP8266-Based-MCU-T/
https://blog.zairza.in/esp8266-to-esp8266-communication-without-a-router-fe9642b93292
https://stackoverflow.com/questions/45031974/faster-communication-between-two-esp8266-in-client-server-setup
https://randomnerdtutorials.com/esp8266-nodemcu-client-server-wi-fi/
https://www.instructables.com/id/Programming-a-HTTP-Server-on-ESP-8266-12E/
https://robotzero.one/sending-data-esp8266-to-esp8266/   seems to be the best ?
https://www.instructables.com/id/ESP8266-Communication-With-Server-and-ESP8266/
*/

#include "WiFi.h"
#include "ESPAsyncWebServer.h"

#include "Credentials.h"

// Set your access point network credentials
const char* ssid = "ESPMASTER";
const char* password = "test";

// Create AsyncWebServer object on port 80
AsyncWebServer server(80);

//client website
Client client("Tesserakt.com", 80);

void setup() {
  
  int isSent = 0;
  
  // Serial port for debugging purposes
  Serial.begin(115200);
  Serial.println();
  
  //pin d'ecoute du callback
  pinMode(7, INPUT);
  
  //pin de présence
  pinMode(1, OUTPUT);
  
  //Pin led "en cours"
  pinMode(11, OUTPUT);
  
  //acc de la command à envoyer server 
  char* command ="";

  WiFi.begin(ssid, password);

  server.on("/addVals", HTTP_GET, [](AsyncWebServerRequest *request){
    //allume la led "en cours"
    digitalWrite(11, LOW);
    
    //Check if GET parameter exists
    if(request->hasParam("type")){
      AsyncWebParameter* p = request->getParam("type");
    }
    //Check if GET parameter exists
    if(request->hasParam("next")){
      AsyncWebParameter* p = request->getParam("next");
    }
    
      AsyncWebParameter* type = request->getParam(0);
      AsyncWebParameter* next = request->getParam(1);
      
      //concatenation de la commande
      sprintf(command,"%s;%s;%s;", command, type, next);
      
      request->send(200, "text/plain", "Bien reçu");
  });
  
  // Start server
  server.begin();
  
  //indique au 1er cube le début
  digitalWrite(7, HIGH);
}

void loop() {
  //le circuit a fini de tourner et a envoyé son signal "callback"
  //l'esp se co' au wifi de la maison et va sur internet
  //**https://www.arduino.cc/en/Tutorial/WebClient
  if(digitalRead(2) == HIGH && isSent !=1){
    //envoyer la commande sur le site WEB
      WiFly.begin();
  
    if (!WiFly.join(ssid, passphrase)) {
      Serial.println("Association failed.");
      while (1) {
        // Hang on failure.
      }
    } 
    post();
    delay(3000);
    isSent = 1;
  }
    
}

void post()
{
  Serial.println("connecting...");
  String PostData="command="+command;
  unsigned char i;

    PostData=PostData+"}";  
  Serial.println(PostData);
  if (client.connect()) {
    Serial.println("connected");
  client.println("POST /addToDatabase HTTP/1.1");
  client.println("Host:  tesserakt.com");
  client.println("User-Agent: Arduino/1.0");
  client.println("Connection: close");
  client.println("Content-Type: application/x-www-form-urlencoded;");
  client.print("Content-Length: ");
  client.println(PostData.length());
  client.println();
  client.println(PostData);
  } else {
    Serial.println("connection failed");
  }
}