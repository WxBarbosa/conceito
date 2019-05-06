$(window).load(function(){
  updateCartState()
  fillCartList()
  $('#myModal').modal('show');
   });

const carrinho = {
  
  adicionarAoCarrinho: (item) => {
    let cart = carrinho.obterCarrinho()
    cart.push(item)
    carrinho.atualizarCarrinho(cart)
    updateCartState()
  },
  
  removerDoCarrinho: (item) => {
    let cart = carrinho.obterCarrinho()
    const itemPos = cart.indexOf(cart.find(item => item.nome === item.nome));
    if (itemPos !== -1) {
      cart.splice(itemPos, 1)
    }
    carrinho.atualizarCarrinho(cart)
    updateCartState()
    fillCartList()
  },
  
  obterCarrinho: () => {
    return localStorage.carrinho ? JSON.parse(localStorage.carrinho) : []
  },

  atualizarCarrinho: (cart) => {
    localStorage.carrinho = JSON.stringify(cart)
  }

}

function updateCartState() {
  let cart = carrinho.obterCarrinho()
  let sum = 0 // cart.reduce((a, b) => Number(a.preco) + Number(b.preco))
  for(let item of cart) {
    sum += item.preco
  }
  $('#cart-count').html(cart.length)
  $('#cart-count').css('visibility', cart.length ? 'visible' : 'hidden')
  $('#cart-preco').html(`${sum.toFixed(2)}`.replace('.', ','))
}

function fillCartList() {
  const cartList = $('#cart-list')
  if (cartList) {
    cartList.empty()
    let cart = carrinho.obterCarrinho()
    if (cart && cart.length) {
      for (let item of cart) {
        const copy = $('#cart-item-base').clone()
        $(copy).css('display', 'table-row')
        $('#cart-item-base-img', copy).attr("src", "img/" + item.foto)
        $('#cart-item-base-titulo', copy).html(item.nome)
        $('#cart-item-base-preco', copy).html('R$' + `${item.preco.toFixed(2)}`.replace('.', ','))
        $('#cart-item-remove', copy).click(function() { carrinho.removerDoCarrinho(item) })
        $('#cart-item-buy', copy).click(function() { carrinho.removerDoCarrinho(item) })
        cartList.append(copy)
      }
      $('#cart-buy-all').css('visibility', 'visible')
    } else {
      $('#cart-buy-all').css('visibility', 'hidden')
      $('<div class="cart-empty">Carrinho Vazio.</div>').appendTo('#cart-list');
    }
  }
}