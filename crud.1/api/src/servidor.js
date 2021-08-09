const porta = 3005
const express = require('express')
const app = express()

app.get('/produtos', (req, res, next)=>{
    res.send({nome: 'notebook', preco: 123.45}) //converter para djson
})
 
app.listen(porta, () => {
    console.log(`servido  esta em executando na porta ${porta}.`)
})
