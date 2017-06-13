#include <Bridge.h>
#include <HttpClient.h>

#include <Wire.h>

#include "Arduino.h"
#include <SI114X.h>

SI114X SI1145 = SI114X();

String dingID = "2";
float UVdata;
String UVtekst;

void setup() {

  Serial.begin(115200);
  Serial.println("Beginning Si1145!");

  while (!SI1145.Begin()) {
    Serial.println("Si1145 is not ready!");
    delay(1000);
  }
  Serial.println("Si1145 is ready!");

  Serial.println("Starting Bridge...");
  pinMode(13, OUTPUT);
  digitalWrite(13, LOW);
  Bridge.begin();
  digitalWrite(13, HIGH);
  Serial.println("Bridge started!");

}

void loop() {
  digitalWrite(13, HIGH);
  HttpClient client;
  UVdata = SI1145.ReadUV();
  UVtekst = String(UVdata);
  // stuur een GET request
//  client.get("http://192.168.1.100:3000/hedwig/slider/slider2");
  client.get("http://studenthome.hku.nl/~Hedwig.Klamer/Kern4iad2/insertData.php?ding="+ dingID + "&uv=" + UVtekst);


  // print de response van de server
  while (client.available()) {
    char c = client.read();
    Serial.print(c);
  }
  Serial.flush();
  Serial.print("//--------------------------------------//\r\n");
  Serial.print("Vis: "); Serial.println(SI1145.ReadVisible());
  Serial.print("IR: "); Serial.println(SI1145.ReadIR());
  //the real UV value must be div 100 from the reg value , datasheet for more information.
  Serial.print("UV: ");  Serial.println((float)SI1145.ReadUV()/100);
  Serial.print("http://studenthome.hku.nl/~Hedwig.Klamer/Kern4iad2/insertData.php?ding="+ dingID + "&uv=" + UVtekst);
  digitalWrite(13, LOW);
  delay(300000);
  

}

