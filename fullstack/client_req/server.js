// server.js

const http = require('http');
const fs = require('fs');
const url = require('url');

// Create HTTP server
const server = http.createServer((req, res) => {
  const parsedUrl = url.parse(req.url, true);
  const filePath = parsedUrl.pathname.slice(1); // Remove leading '/'

  if (filePath) {
    fs.readFile(filePath, 'utf8', (err, data) => {
      if (err) {
        // File not found or other error
        res.writeHead(404, { 'Content-Type': 'text/plain' });
        res.end('404 Not Found: The requested file could not be found.');
      } else {
        // File found, send content
        res.writeHead(200, { 'Content-Type': 'text/plain' });
        res.end(data);
      }
    });
  } else {
    // No file specified
    res.writeHead(400, { 'Content-Type': 'text/plain' });
    res.end('Bad Request: No file specified in the URL.');
  }
});

// Listen on port 3000
server.listen(3000, () => {
  console.log('Server running at http://localhost:3000/');
});

//check this code with the following command http://localhost:3000/example.txt