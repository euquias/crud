const sequence = {
    _id: 1,
    get id() {return this._id++}
}

const produtos = {}

function salvarprodutos(produto){
    if(!produto.id) produto.id = sequence.id
    produtos[produtos.id] = produto
    return produto
}

function getproduto(id){
    returproduto[id] || {}
}

function getprodutos(){
    return Object.values(produtos)
}

module.exports =  {salvaproduto, getproduto, getprodutos}