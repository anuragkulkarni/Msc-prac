import 'package:flutter/material.dart'; 
void main() { 
runApp(MyApp()); 
} 
class MyApp extends StatelessWidget { 
const MyApp({super.key}); 
// This widget is the root of your application. 
@override 
Widget build(BuildContext context) { 
return MaterialApp( 
debugShowCheckedModeBanner: false, 
home:SimpleWidgetScreen(), 
); 
} 
} 
class SimpleWidgetScreen extends StatelessWidget { 
@override 
Widget build(BuildContext context) { 
return Scaffold( 
appBar: AppBar(title: Text("Simple Widget Example")), 
body: Center( 
child: Text( 
"Hello, Flutter!", 
style: TextStyle(fontSize: 24, fontWeight: FontWeight.bold, color: Colors.blue), 
        ), 
      ), 
    ); 
  } 
}