#include <Bridge.h>
#include <HttpClient.h>
#include <Servo.h>

Servo myservo;  // create servo object to control a servo


const int buttonPin = 2; 
int buttonState = 0;
int serPos = 0;  
char slider1;

void setup() {
  Serial.begin(9600);
  while (!Serial);

  Serial.println("Starting Bridge...");
  pinMode(13, OUTPUT);
  digitalWrite(13, LOW);
  Bridge.begin();
  digitalWrite(13, HIGH);
  Serial.println("Bridge started!");

  pinMode(buttonPin, INPUT);
  myservo.attach(9);  // attaches the servo on pin 9 to the servo object

}

void loop() {
  
  HttpClient client;
  buttonState = digitalRead(buttonPin);
  client.get ("http://ker4iad2.mobidapt.com/hedwig/slider/slider1");
  // print de response van de server
  while (client.available()) {
    slider1 = client.read();
    Serial.print(slider1);
    Serial.println(' ');
  }
  Serial.flush();
  //slider1.toInt();
  
  // stuur een GET request
//  client.get("http://192.168.1.100:3000/hedwig/slider/slider2");
//  client.get("http://ker4iad2.mobidapt.com/hedwig/light/light2/red");

//   if (buttonState == HIGH) {
//    // turn LED on:
//    client.get("http://ker4iad2.mobidapt.com/hedwig/light/light2/red");
//  } else {
//    // turn LED off:
//    client.get("http://ker4iad2.mobidapt.com/hedwig/light/light2/green");
//  }


  

  delay(5000);
}
