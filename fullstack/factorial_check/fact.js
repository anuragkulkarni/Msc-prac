// all-in-one factorial calculator

const readline = require('readline');

function factorial(n) {
  if (n < 0) return undefined;
  if (n === 0 || n === 1) return 1;
  return n * factorial(n - 1);
}

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question('Enter a number to calculate factorial: ', (input) => {
  const number = parseInt(input);

  if (isNaN(number) || number < 0) {
    console.log('Please enter a valid non-negative integer.');
  } else {
    const result = factorial(number);
    console.log(`Factorial of ${number} is ${result}`);
  }

  rl.close();
});
