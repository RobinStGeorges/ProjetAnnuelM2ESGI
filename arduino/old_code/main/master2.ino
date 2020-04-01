#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
#include <U8g2lib.h>

//U8g2 Constructor List - https://github.com/olikraus/u8g2/wiki/u8g2setupcpp#introduction
U8G2_SSD1306_128X64_NONAME_F_SW_I2C u8g2(U8G2_R0, /* clock=*/ 5, /* data=*/ 4);

const char *ssid = "ssid";
const char *password = "passwrd";

ESP8266WebServer server(80);

//client website
Client client("Tesserakt.com", 80);

void handleSentVar() {
  if (server.hasArg("sensor_reading")) { // this is the variable sent from the client
    char* type = server.arg("type");
    char* next = server.arg("next");
    server.send(200, "text/html", "Data received");
  }
}

void setup() {
    
  //pin d'ecoute du callback
  pinMode(7, INPUT);
  
  //pin de présence
  pinMode(1, OUTPUT);
  
  //Pin led "en cours"
  pinMode(11, OUTPUT);
  
  delay(1000);

  WiFi.softAP(ssid, password);
  IPAddress myIP = WiFi.softAPIP();

  server.on("/data/", HTTP_GET, handleSentVar); 
  server.begin();
}

void sendToDB(){
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

void loop() {
  //indique au 1er cube le début
  digitalWrite(7, HIGH);
  server.handleClient();
  if(digitalRead(2) == HIGH && isSent !=1){
    sendToDB();
  }
}a 
