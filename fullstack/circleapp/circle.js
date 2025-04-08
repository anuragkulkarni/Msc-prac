// circleApp.js

const readline = require('readline');

// "Module-like" functions defined in the same file
function area(radius) {
  return Math.PI * radius * radius;
}

function circumference(radius) {
  return 2 * Math.PI * radius;
}

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question('Enter the radius of the circle: ', (input) => {
  const radius = parseFloat(input);

  if (isNaN(radius) || radius <= 0) {
    console.log('Please enter a valid positive number for radius.');
  } else {
    console.log(`\n--- Circle Details ---`);
    console.log(`Radius: ${radius}`);
    console.log(`Area: ${area(radius).toFixed(2)}`);
    console.log(`Circumference: ${circumference(radius).toFixed(2)}`);
  }

  rl.close();
});
