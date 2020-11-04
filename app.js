const express = require('express');
const app = express();
const path = require('path');
const port = process.env.PORT || 3000;
const db = require('./models/index.js');

const bodyParser = require('body-parser')
app.use(bodyParser.urlencoded({extended: true}));
app.use(express.urlencoded());

app.get('/', function(req, res) {
  res.sendFile(path.join(__dirname + '/index.html'));
});

app.post('/url', function(req, res) {
  const nome = req.body.url
  db.Characters.findOrCreate({where: {nome: nome}})
	.then(([urlObj, created]) => {
	  res.send("personagem criado");
	});
});

app.listen(port, () => console.log(`listening on port ${port}!`));