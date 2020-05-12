#include <SPI.h>
#include <mcp2515.h>

struct can_frame canMsgButton;
MCP2515 mcp2515(10);


#include <EEPROM.h>

int EEPROM_addr = 0;


int LED_R = 8;
int LED_G = 7;
int LED_B = 6;

int button1 = 2;     
int button1State = 0;         

int button2 = 3;     
int button2State = 0; 

int button3 = 4;     
int button3State = 0; 

int button4 = 5;     
int button4State = 0; 

void setup() {
   Serial.begin(115200);
     Serial.println("INITIALISATION BEGIN");
 setup_led();
 setup_button();

 SPI.begin();
  
  mcp2515.reset();
  mcp2515.setBitrate(CAN_125KBPS);
  mcp2515.setNormalMode();
 
 Serial.println("INITIALISATION END");
 Serial.println("LOOP BEGIN");

}
void loop() {
// mcp2515.sendMessage(&canMsg1);
//readButton1();

  
}
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
//FUNCTIONS
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

//CAN
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
void send_info_button(int state, int face_number){

//id_boite=EEPROM_GetID();
   //canMsgButton1.can_id  = id_boite;
     
  canMsgButton.can_id  = 0x001;
  canMsgButton.can_dlc = 8;
  canMsgButton.data[0] = 0x255;// to master
  canMsgButton.data[1] = 0x05;// FUNCTION SEND BUTTON
  canMsgButton.data[2] = face_number;
  canMsgButton.data[3] = state;
  canMsgButton.data[4] = '0';
  canMsgButton.data[5] = '0';
  canMsgButton.data[6] = '0';
  canMsgButton.data[7] = '0';
  
  mcp2515.sendMessage(&canMsgButton);

  
}
void demandeNewID(){

//id_boite=EEPROM_GetID();
   //canMsgButton1.can_id  = id_boite;
     
  canMsgButton1.can_id  = 0x000;
  canMsgButton1.can_dlc = 8;
  canMsgButton1.data[0] = 0x255; // to master
  canMsgButton1.data[1] = 0x01;// FUNCTION demande id
  canMsgButton1.data[2] = '0';
  canMsgButton1.data[3] = '0';
  canMsgButton1.data[4] = '0';
  canMsgButton1.data[5] = '0';
  canMsgButton1.data[6] = '0';
  canMsgButton1.data[7] = '0';
  
  mcp2515.sendMessage(&canMsgButton1);

  
}


void listen_Can(){
//id_boite=EEPROM_GetID();
    if (mcp2515.readMessage(&canMsg) == MCP2515::ERROR_OK) {

    Serial.print(canMsg.can_id, HEX); // print ID
    Serial.print(" ");
    Serial.print(canMsg.can_dlc, HEX); // print DLC
    Serial.print("    ");
    if(canMsg.can_id == 255){
        if(canMsg.data[0]==id_boite){

            switch (canMsg.data[1]) {
              case 0x00:
                UpdateID(canMsg.data[2]);
              break;
              case 0x03:
                RGB_color(canMsg.data[2], canMsg.data[3],canMsg.data[4]);
              break;
               default:
               break;
            }
          }
      }
    }
  }

    void UpdateID(int id){
      
        EEPROM.update(EEPROM_addr, id);

    }
     void WriteID(int id){
      
        EEPROM.write(EEPROM_addr, id);

    }
     void WriteID(int id){
      
        EEPROM.read(EEPROM_addr);

    }
           
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
// BUTTONS 1 to 4
////////////////////////////////////////////////////////////////////////////////

void setup_button(){
  pinMode(button1, INPUT);
  pinMode(button2, INPUT);
  pinMode(button3, INPUT);
  pinMode(button4, INPUT);
}

void readButton1(){
    button1State = digitalRead(button1);

  if (button1State == HIGH) {
    Serial.println("1");
    send_info_button(1, 1);

  } else {
 Serial.println("0");
 send_info_button(0, 1);
  }
}


void readButton2(){
    button2State = digitalRead(button2);

  if (button2State == HIGH) {
    Serial.println("1");
    send_info_button(1, 1);

  } else {
 Serial.println("0");
 send_info_button(0, 1);
  }
}

void readButton3(){
    
  button3State = digitalRead(button3);

  if (button3State == HIGH) {
     Serial.println("1");
    send_info_button(1, 1);

  } else {
 Serial.println("0");
 send_info_button(0, 1);
  }
}

void readButton4(){
    
  button4State = digitalRead(button4);

  if (button4State == HIGH) {
    Serial.println("1");
    send_info_button(1, 1);

  } else {
 Serial.println("0");
 send_info_button(0, 1);
  }
}



// END BUTTON
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////



//LED
////////////////////////////////////////////////////////////////////////////////
void setup_led(){
  pinMode(LED_R, OUTPUT);
  pinMode(LED_G, OUTPUT);
  pinMode(LED_B, OUTPUT);
}

void RGB_color(int LED_R_value, int LED_G_value, int LED_B_value)
 {
  analogWrite(LED_R, LED_R_value);
  analogWrite(LED_G, LED_G_value);
  analogWrite(LED_B, LED_B_value);

   /* RGB_color(255, 0, 0); // Red
 delay(1000);
RGB_color(0, 255, 0); // Green
  delay(1000);
    RGB_color(0, 0, 255); // Blue
   delay(1000);
 RGB_color(255, 255, 125); // Raspberry
  delay(1000);
  RGB_color(0, 255, 255); // Cyan
  delay(1000);
  RGB_color(255, 0, 255); // Magenta
  delay(1000);
  RGB_color(255, 255, 0); // Yellow
  delay(1000);
  RGB_color(255, 255, 255); // White
  delay(1000);*/
}

//END LED
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
