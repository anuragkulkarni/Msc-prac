// create node js file whihc will take input and convert it lower case and upper case
const express = require('express');
const bodyParser = require('body-parser');    
const app = express();
const port = 3000;
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
app.post('/convert', (req, res) => {
    const { text } = req.body;
    const lowerCase = text.toLowerCase();
    const upperCase = text.toUpperCase();
    res.json({ lowerCase, upperCase });
});
app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
}
);
//curl request curl -X POST http://localhost:3000/convert -H "Content-Type: application/json" -d "{\"text\": \"Hello World\"}"