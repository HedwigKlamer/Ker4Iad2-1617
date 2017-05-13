#include <Bridge.h>
#include <HttpClient.h>

String var;

void setup() {
  Serial.begin(9600);
  while (!Serial);

  Serial.println("Starting Bridge...");
  pinMode(13, OUTPUT);
  digitalWrite(13, LOW);
  Bridge.begin();
  digitalWrite(13, HIGH);
  Serial.println("Bridge started!");

}

void loop() {
  HttpClient client;
  
  // stuur een GET request
//  client.get("http://192.168.1.100:3000/hedwig/slider/slider2");   //via edwin internet
  var = client.get("http://ker4iad2.mobidapt.com/hedwig/slider/slider1");   //via normal internet
  Serial.println(var);
  

  // print de response van de server
  while (client.available()) {
    char c = client.read();
    Serial.print(c);
  }
  Serial.flush();

  delay(5000);
}
