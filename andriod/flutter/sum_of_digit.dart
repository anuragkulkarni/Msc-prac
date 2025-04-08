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
home: SumOfDigitsScreen(), 
); 
} 
} 
class SumOfDigitsScreen extends StatefulWidget { 
@override 
_SumOfDigitsScreenState createState() => _SumOfDigitsScreenState(); 
} 
class _SumOfDigitsScreenState extends State<SumOfDigitsScreen> { 
final TextEditingController _controller = TextEditingController(); 
int _sum = 0; 
void _calculateSum() { 
String input = _controller.text; 
int sum = 0; 
for (int i = 0; i < input.length; i++) { 
if (RegExp(r'\d').hasMatch(input[i])) { 
sum += int.parse(input[i]); 
} 
} 
setState(() { 
_sum = sum; 
}); 
} 
@override 
Widget build(BuildContext context) { 
return Scaffold( 
appBar: AppBar(title: Text('Sum of Digits')), 
body: Padding( 
padding: EdgeInsets.all(16.0), 
child: Column( 
mainAxisAlignment: MainAxisAlignment.center, 
children: [ 
TextField( 
controller: _controller, 
keyboardType: TextInputType.number, 
decoration: InputDecoration( 
labelText: 'Enter a number', 
border: OutlineInputBorder(), 
), 
), 
SizedBox(height: 20), 
ElevatedButton( 
onPressed: _calculateSum, 
child: Text('Calculate Sum'), 
), 
SizedBox(height: 20), 
Text( 
'Sum of digits: $_sum', 
style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold), 
), 
], 
), 
), 
); 
} 
} 