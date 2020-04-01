#define WAITINGUP 16
#define CALLBACKUP 5

#define LISTENRIGHT 4
#define ACTIVERIGHT 0
#define CALLBACKRIGHT 2

#define LISTENDOWN 14
#define ACTIVEDOWN 12

#define WAITINGLEFT 13
#define CALLBACKLEFT 15

#define WIFINAME "xxx"
#define WIFIMDP  "xxx"

/**
 * SI  LE SIGNAL VIENT DU HAUT, START LINE
 */
int isLine = 0;

int hasSentDatas = 0;

char* blocType = "X";

void setup() {
  
  /**
   * Set pins to INPUT
   **/
  pinMode(WAITINGUP, INPUT);
  pinMode(LISTENRIGHT, INPUT);
  pinMode(LISTENDOWN, INPUT);
  pinMode(WAITINGLEFT, INPUT);

  /**
   * Set pins to OUTPUT
   **/
  pinMode(CALLBACKUP, OUTPUT);
  pinMode(ACTIVERIGHT, OUTPUT);
  pinMode(CALLBACKRIGHT, OUTPUT);
  pinMode(ACTIVEDOWN, OUTPUT);
  pinMode(CALLBACKLEFT, OUTPUT);
  
  //connect to WIFI
  WiFi.mode(WIFI_STA);
  WiFi.begin(WIFINAME, WIFIMDP);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
    
  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
   
}

// the loop function runs over and over again forever
void loop() {
  delay(3000); 
  
  if (hasSentDatas != 1){
    //check signal from above
    checkFromAbove();
  }
}

void checkFromAbove(){
  if(hasSentDatas != 1){
    if(digitalRead(2) == HIGH){
        setIsLine();
        sendDatasToMaster(); //TODO
        sendSignalReadyToNextEsp();//TODO
    }
  }
}

void sendDatasToMaster(){
  //CO TO MASTER WIFI
  //SEND TYPE
  //send what next position
  //pass led green
}

void sendSignalReadyToNextEsp(){
  
}

void setIsLine(){
  isLine = 1;
}


/**
////////////////////////////////////////////**
/*
    This sketch establishes a TCP connection to a "quote of the day" service.
    It sends a "hello" message, and then prints received data.
*/
/**

#include <ESP8266WiFi.h>

#ifndef STASSID
#define STASSID "your-ssid"
#define STAPSK  "your-password"
#endif

const char* ssid     = STASSID;
const char* password = STAPSK;

const char* host = "djxmmx.net";
const uint16_t port = 17;

void setup() {
  Serial.begin(115200);

  // We start by connecting to a WiFi network

  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  /* Explicitly set the ESP8266 to be a WiFi-client, otherwise, it by default,
     would try to act as both a client and an access-point and could cause
     network-issues with your other WiFi-devices on your WiFi-network. */
     /**
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop() {
  Serial.print("connecting to ");
  Serial.print(host);
  Serial.print(':');
  Serial.println(port);

  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  if (!client.connect(host, port)) {
    Serial.println("connection failed");
    delay(5000);
    return;
  }

  // This will send a string to the server
  Serial.println("sending data to server");
  if (client.connected()) {
    client.println("hello from ESP8266");
  }

  // wait for data to be available
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 5000) {
      Serial.println(">>> Client Timeout !");
      client.stop();
      delay(60000);
      return;
    }
  }

  // Read all the lines of the reply from server and print them to Serial
  Serial.println("receiving from remote server");
  // not testing 'client.connected()' since we do not need to send data here
  while (client.available()) {
    char ch = static_cast<char>(client.read());
    Serial.print(ch);
  }

  // Close the connection
  Serial.println();
  Serial.println("closing connection");
  client.stop();

  delay(300000); // execute once every 5 minutes, don't flood remote service
}
