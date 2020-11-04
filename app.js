const express = require('express');
const app = express();
const path = require('path');
const port = process.env.PORT || 3000;
const exphbs = require('express-handlebars');
const db = require('./models/index.js');

app.engine('handlebars', exphbs());
app.set('view engine', 'handlebars');

const bodyParser = require('body-parser')
app.use(bodyParser.urlencoded({extended: true}));
app.use(express.urlencoded());

app.get('/', function(req, res) {
  db.Characters.findAll({order: [['createdAt', 'DESC']], limit: 5})
  .then(Characters => {
    res.render('index', {
      Characters: Characters
    });
  });
});

app.post('/url', function(req, res) {
  const _data = req.body
  db.Characters.findOrCreate({where: 
  	{
  		nome: _data.nome,
  		idade: _data.idade,
  		nacionalidade: _data.nacionalidade,
  		miscigenacao: _data.miscigenacao,
  		caracteristicas: _data.caracteristicas,
  		resistencia: _data.resistencia,
  		crit: _data.crit,
  		def_passiva: _data.def_passiva,
  		def_ativa: _data.def_ativa,
  		energia: _data.energia,
  		habilidades: _data.habilidades,
  		pontos_de_habilidade: _data.pontos_de_habilidade,
  		dinheiro: _data.dinheiro,
  		bens: _data.bens,
  		armas: _data.armas,
  		historia: _data.historia,
  	}
  })
	.then(([urlObj, created]) => {
	  res.send("personagem criado");
	});
});

app.listen(port, () => console.log(`listening on port ${port}!`));