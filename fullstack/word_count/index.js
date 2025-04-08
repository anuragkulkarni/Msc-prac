// wordCount.js

const fs = require('fs');
const readline = require('readline');

// Create readline interface for input
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

// Ask user for file name and word
rl.question('Enter the file name: ', (fileName) => {
  rl.question('Enter the word to search: ', (word) => {
    
    // Read file content
    fs.readFile(fileName, 'utf8', (err, data) => {
      if (err) {
        console.error('Error reading file:', err.message);
        rl.close();
        return;
      }

      // Count word occurrences using RegExp (case-insensitive, whole word)
      const regex = new RegExp(`\\b${word}\\b`, 'gi');
      const matches = data.match(regex);
      const count = matches ? matches.length : 0;

      console.log(`The word "${word}" occurred ${count} time(s) in "${fileName}".`);
      rl.close();
    });

  });
});
