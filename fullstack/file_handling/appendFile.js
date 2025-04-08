// appendFileApp.js

const fs = require('fs');
const readline = require('readline');

// Set up interface for reading user input
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

// Ask for first and second file names
rl.question('Enter the name of the first file (to read from): ', (file1) => {
  rl.question('Enter the name of the second file (to append to): ', (file2) => {

    // Read content from first file
    fs.readFile(file1, 'utf8', (err, data) => {
      if (err) {
        console.error(`Error reading ${file1}:`, err.message);
        rl.close();
        return;
      }

      // Append content to second file
      fs.appendFile(file2, data, (err) => {
        if (err) {
          console.error(`Error appending to ${file2}:`, err.message);
        } else {
          console.log(`Contents of ${file1} successfully appended to ${file2}.`);
        }
        rl.close();
      });
    });

  });
});
