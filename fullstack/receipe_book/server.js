// server.js
const http = require('http');
const fs = require('fs');
const path = require('path');
const { parse } = require('querystring');

const PORT = 3000;

const server = http.createServer((req, res) => {
  if (req.url === '/' && req.method === 'GET') {
    // Serve HTML form
    fs.readFile('./index.html', (err, data) => {
      if (err) return res.end('Error loading form');
      res.writeHead(200, { 'Content-Type': 'text/html' });
      res.end(data);
    });
  }

  else if (req.url === '/add-recipe' && req.method === 'POST') {
    // Add recipe
    let body = '';
    req.on('data', chunk => (body += chunk.toString()));
    req.on('end', () => {
      const { title, description } = parse(body);
      const newRecipe = { title, description };

      fs.readFile('recipes.json', (err, data) => {
        const recipes = data.length ? JSON.parse(data) : [];
        recipes.push(newRecipe);

        fs.writeFile('recipes.json', JSON.stringify(recipes, null, 2), err => {
          res.writeHead(302, { Location: '/' });
          res.end();
        });
      });
    });
  }

  else if (req.url === '/recipes' && req.method === 'GET') {
    // Display all recipes
    fs.readFile('recipes.json', (err, data) => {
      const recipes = data.length ? JSON.parse(data) : [];
      res.writeHead(200, { 'Content-Type': 'text/html' });
      res.write('<h1>All Recipes</h1><ul>');
      recipes.forEach(r => {
        res.write(`<li><strong>${r.title}</strong>: ${r.description}</li>`);
      });
      res.write('</ul><br><a href="/">Back</a>');
      res.end();
    });
  }

  else {
    res.writeHead(404);
    res.end('404 Not Found');
  }
});

server.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}`);
});
