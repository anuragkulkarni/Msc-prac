const fs = require('fs');
const https = require('https'); // or use 'http' if the URL is non-SSL

const url = 'https://www.w3schools.com/w3images/fjords.jpg'; // replace with your actual image URL
const file = fs.createWriteStream('downloaded.jpg');

https.get(url, (response) => {
  response.pipe(file);

  file.on('finish', () => {
    file.close();
    console.log('Download completed!');
  });
}).on('error', (err) => {
  fs.unlink('downloaded.jpg', () => {}); // Delete file if error
  console.error('Error:', err.message);
});
