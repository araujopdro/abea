const express = require('express')
const bodyParser = require('body-parser')
const cors = require('cors')
const {pool} = require('./config')

const helmet = require('helmet')
const compression = require('compression')
const rateLimit = require('express-rate-limit')
const {body, check} = require('express-validator')

const app = express()

const limiter = rateLimit({
  windowMs: 1 * 60 * 1000, // 1 minute
  max: 5, // 5 requests,
})

app.use(limiter)

const postLimiter = rateLimit({
  windowMs: 1 * 60 * 1000,
  max: 1,
})

app.use(compression())
app.use(helmet())

app.use(bodyParser.json())
app.use(bodyParser.urlencoded({extended: true}))

// const isProduction = process.env.NODE_ENV === 'production'
// const origin = {
//   origin: isProduction ? 'https://www.example.com' : '*',
// }

// app.use(cors(origin))
app.use(cors())

const getChars = (request, response) => {
  pool.query('SELECT * FROM chars', (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}

const addChar = (request, response) => {
  const {nome,idade,nacionalidade,miscigenacao,caracteristicas,resistencia,crit,def_passiva,def_ativa,energia,habilidades,pontos_de_habilidade,dinheiro,bens,armas,historia} = request.body

  pool.query(
    'INSERT INTO chars (nome,idade,nacionalidade,miscigenacao,caracteristicas,resistencia,crit,def_passiva,def_ativa,energia,habilidades,pontos_de_habilidade,dinheiro,bens,armas,historia) VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16)',
    [ nome,idade,nacionalidade,miscigenacao,caracteristicas,resistencia,crit,def_passiva,def_ativa,energia,habilidades,pontos_de_habilidade,dinheiro,bens,armas,historia],
    (error) => {
      if (error) {
        throw error
      }
      response.status(201).json({status: 'success', message: 'Personagem criado.'})
    },
  )
}

app.route('/characters').get(getChars)
app.post(
  '/create_character',
  [
    check('nome').not().isEmpty().isLength({min: 5, max: 255}).trim(),
    check('idade').not().isEmpty(),
    check('nacionalidade').not().isEmpty().isLength({min: 5, max: 255}).trim(),
    check('miscigenacao').not().isEmpty().isLength({min: 5, max: 255}).trim(),
    check('caracteristicas').not().isEmpty().isLength({min: 5, max: 255}).trim(),
    check('resistencia').not().isEmpty().isLength({min: 5, max: 255}).trim(),
    check('crit').not().isEmpty(),
    check('def_passiva').not().isEmpty(),
    check('def_ativa').not().isEmpty(),
    check('energia').not().isEmpty(),
    check('habilidades').not().isEmpty().isLength({min: 5, max: 255}).trim(),
    check('pontos_de_habilidade').not().isEmpty(),
    check('dinheiro').not().isEmpty(),
    check('bens').not().isEmpty().isLength({min: 5, max: 255}).trim(),
    check('armas').not().isEmpty().isLength({min: 5, max: 255}).trim(),
    check('historia').not().isEmpty(),
  ],
  postLimiter,
  (request, response) => {
    const errors = validationResult(request)

    if (!errors.isEmpty()) {
      return response.status(422).json({errors: errors.array()})
    }

    const {author, title} = request.body

    pool.query(
      'INSERT INTO chars (nome,idade,nacionalidade,miscigenacao,caracteristicas,resistencia,crit,def_passiva,def_ativa,energia,habilidades,pontos_de_habilidade,dinheiro,bens,armas,historia) VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16)',
      [nome,idade,nacionalidade,miscigenacao,caracteristicas,resistencia,crit,def_passiva,def_ativa,energia,habilidades,pontos_de_habilidade,dinheiro,bens,armas,historia],
        (error) => {
        if (error) {
          throw error
        }
        response.status(201).json({status: 'success', message: 'Book added.'})
      },
    )
  },
)

// Start server
process.env.NODE_TLS_REJECT_UNAUTHORIZED='0';
app.listen(process.env.PORT || 3002, () => {
  console.log(`Server listening`)
})