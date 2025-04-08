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
home:SimpleInterestCalculator(), 
); 
} 
} 
class SimpleInterestCalculator extends StatefulWidget { 
@override 
_SimpleInterestCalculatorState createState() => _SimpleInterestCalculatorState(); 
} 
class _SimpleInterestCalculatorState extends State<SimpleInterestCalculator> { 
final TextEditingController principalController = TextEditingController(); 
final TextEditingController rateController = TextEditingController(); 
final TextEditingController timeController = TextEditingController(); 
String result = ""; 
double calculateSimpleInterest(double principal, double rate, double time) { 
return (principal * rate * time) / 100; 
} 
void computeInterest() { 
double principal = double.tryParse(principalController.text) ?? 0.0; 
double rate = double.tryParse(rateController.text) ?? 0.0; 
double time = double.tryParse(timeController.text) ?? 0.0; 
double interest = calculateSimpleInterest(principal, rate, time); 
setState(() { 
result = "Simple Interest: \R\s.${interest.toStringAsFixed(2)}"; 
}); 
} 
@override 
Widget build(BuildContext context) { 
return Scaffold( 
appBar: AppBar(title: Text("Simple Interest Calculator")), 
body: Padding( 
padding: const EdgeInsets.all(16.0), 
child: Column( 
children: [ 
TextField( 
controller: principalController, 
keyboardType: TextInputType.number, 
decoration: InputDecoration(labelText: "Principal Amount"), 
), 
TextField( 
controller: rateController, 
keyboardType: TextInputType.number, 
decoration: InputDecoration(labelText: "Rate of Interest (%)"), 
), 
TextField( 
controller: timeController, 
keyboardType: TextInputType.number, 
decoration: InputDecoration(labelText: "Time (years)"), 
), 
SizedBox(height: 20), 
ElevatedButton( 
onPressed: computeInterest, 
child: Text("Calculate"), 
), 
SizedBox(height: 20), 
Text( 
result, 
style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold), 
), 
], 
), 
), 
); 
} 
} 