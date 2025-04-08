const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

function calculate(num1, num2, operation) {
  let result;
  switch (operation) {
    case '+':
      result = num1 + num2;
      break;
    case '-':
      result = num1 - num2;
      break;
    case '*':
      result = num1 * num2;
      break;
    case '/':
      if (num2 === 0) {
        console.log('Error: Division by zero is not allowed.');
        return;
      }
      result = num1 / num2;
      break;
    default:
      console.log('Invalid operator. Please use one of +, -, *, or /');
      return;
  }
  console.log(`Result: ${num1} ${operation} ${num2} = ${result}`);
}

function askQuestion() {
  rl.question('Enter first number: ', (num1) => {
    rl.question('Enter operator (+, -, *, /): ', (operation) => {
      rl.question('Enter second number: ', (num2) => {
        num1 = parseFloat(num1);
        num2 = parseFloat(num2);

        if (isNaN(num1) || isNaN(num2)) {
          console.log('Error: Please enter valid numbers.');
          rl.close();
          return;
        }

        calculate(num1, num2, operation);

        rl.question('Do you want to perform another calculation? (y/n): ', (answer) => {
          if (answer.toLowerCase() === 'y') {
            askQuestion(); // Repeat
          } else {
            console.log('Goodbye!');
            rl.close();
          }
        });
      });
    });
  });
}

// Start the calculator
askQuestion();
