const express = require('express')
const bodyParser = require('body-parser')
const cors = require('cors')
const {pool} = require('./config')

const app = express()

app.use(bodyParser.json())
app.use(bodyParser.urlencoded({extended: true}))
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
  const {nome, idade} = request.body

  pool.query(
    'INSERT INTO chars (nome,idade) VALUES ($1, $2)',
    [ nome,idade],
    (error) => {
      if (error) {
        throw error
      }
      response.status(201).json({status: 'success', message: 'Personagem criado.'})
    },
  )
}

app
  .route('/characters')
  // GET endpoint
  .get(getChars)
  // POST endpoint
  .post(addChar)

// Start server
app.listen(process.env.PORT || 3002, () => {
  console.log(`Server listening`)
})