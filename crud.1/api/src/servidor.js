const porta = 3005
const express = require('express')
const app = express()
const body = require('bady-parser')
const  bancodedados = require('./bancodedados')

app.use(bodyparser.urlencoded({extended: true}))

app.get('/produtos', (req, res, next)=>{
    res.send(bancodedados.getprofutos()) //converter para djson
})

app.get('/produtos/:id', (req, res, next) =>{
    res.send(bancodedados.getproduto(req.params.id))
}
app.post('/produtos', (req, res, next) => {
    const produto = bancodedados.salvarprodutos({
        nome: req.body.nome,
        preco: req.body.preco
    })
    res.send(produto) //jsom
})

app.listen(porta, () => {
    console.log(`servido  esta em executando na porta ${porta}.`)
})
