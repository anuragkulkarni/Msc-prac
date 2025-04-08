import 'package:flutter/material.dart'; 
void main() { 
runApp(MyApp()); 
} 
// Base class Laptop 
class Laptop { 
String name; 
String color; 
Laptop(this.name, this.color); 
String getLaptopInfo() { 
return "Laptop: $name, Color: $color"; 
} 
} 
// Derived class MacBook inheriting from Laptop 
class MacBook extends Laptop { 
MacBook(String name, String color) : super(name, color); 
@override 
String getLaptopInfo() { 
return "MacBook: $name, Color: $color"; 
} 
} 
class MyApp extends StatelessWidget { 
const MyApp({super.key}); 
// This widget is the root of your application. 
@override 
Widget build(BuildContext context) { 
return MaterialApp( 
debugShowCheckedModeBanner: false, 
home:LaptopInfoScreen(), 
); 
} 
} 
class LaptopInfoScreen extends StatelessWidget { 
final Laptop myLaptop = Laptop("Dell XPS", "Silver"); 
final MacBook myMacBook = MacBook("MacBook Pro", "Space Gray"); 
@override 
Widget build(BuildContext context) { 
return Scaffold( 
appBar: AppBar(title: Text("Laptop Information")), 
body: Padding( 
padding: const EdgeInsets.all(16.0), 
child: Column( 
mainAxisAlignment: MainAxisAlignment.center, 
children: [ 
Text( 
myLaptop.getLaptopInfo(), 
style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold), 
), 
SizedBox(height: 10), 
Text( 
myMacBook.getLaptopInfo(), 
style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold), 
), 
], 
), 
), 
); 
} 
}