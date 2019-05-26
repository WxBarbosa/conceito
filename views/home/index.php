<div class="container">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo URL; ?>public/img/bg2.jpg" class="img-fluid">
        <div class="carousel-caption">
          <h5 class="texto">50% de desconto em produtos de cabelo!</h5>
          <p class="texto">Aproveite até amanhã!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo URL; ?>public/img/bg1.jpg" class="img-fluid">
        <div class="carousel-caption">
          <h5 class="texto">Ganhe 15$ de volta</h5>
          <p class="texto">Após finalizar a sua primeira compra!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo URL; ?>public/img/bg3.jpg" class="img-fluid">
        <div class="carousel-caption">
          <h5 class="texto">FRETE GRÁTIS!</h5>
          <p class="texto">Confira as regras.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <br/><br/>
  <!-- Produtos -->
  <div class="container">
    <h3 class="text-center">Destaques</h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="grid-produtos">
                <div class="img-produto">
                    <a href="#">
                        <img class="img-1" src="<?php echo URL; ?>public/img/roupas/roupa1.png">
                    </a>
                    <a class="add-carrinho" 
                      onclick="carrinho.adicionarAoCarrinho({ foto: '<?php echo URL; ?>public/img/roupas/roupa1.png', nome: 'Shorts Vermelho', preco: 79.99 })">
                      Adicionar ao carrinho
                    </a>
                </div>
                <div class="produto-cont">
                    <h3 class="titulo"><a href="#">Shorts Vermelho</a></h3>
                    <span class="preco">R$79.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="grid-produtos">
              <div class="img-produto">
                  <a href="#">
                      <img class="img-1" src="<?php echo URL; ?>public/img/roupas/roupa2.png">
                  </a>
                  <a class="add-carrinho" 
                    onclick="carrinho.adicionarAoCarrinho({ foto: '<?php echo URL; ?>public/img/roupas/roupa2.png', nome: 'Blusa Star Wars', preco: 39.99 })">
                    Adicionar ao carrinho
                  </a>
                </div>
                <div class="produto-cont">
                    <h3 class="titulo"><a href="#">Blusa Star Wars</a></h3>
                    <span class="preco">R$39.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="grid-produtos">
                <div class="img-produto">
                    <a href="#">
                        <img class="img-1" src="<?php echo URL; ?>public/img/roupas/roupa3.png">
                    </a>
                    <a class="add-carrinho" 
                      onclick="carrinho.adicionarAoCarrinho({ foto: '<?php echo URL; ?>public/img/roupas/roupa3.png', nome: 'Jaqueta Feminina', preco: 119.99 })">
                      Adicionar ao carrinho
                    </a>
                </div>
                <div class="produto-cont">
                    <h3 class="titulo"><a href="#">Jaqueta Feminina </a></h3>
                    <span class="preco">R$119.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="grid-produtos">
                <div class="img-produto">
                    <a href="#">
                        <img class="img-1" src="<?php echo URL; ?>public/img/roupas/roupa4.png">
                    </a>
                    <a class="add-carrinho" 
                      onclick="carrinho.adicionarAoCarrinho({ foto: '<?php echo URL; ?>public/img/roupas/roupa4.png', nome: 'Moletom Cropped', preco: 89.99 })">
                      Adicionar ao carrinho
                    </a>
                </div>
                <div class="produto-cont">
                    <h3 class="titulo"><a href="#">Moletom Cropped</a></h3>
                    <span class="preco">R$89.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="grid-produtos">
                <div class="img-produto">
                    <a href="#">
                        <img class="img-1" src="<?php echo URL; ?>public/img/roupas/acs1.png">
                    </a>
                    <a class="add-carrinho" 
                      onclick="carrinho.adicionarAoCarrinho({ foto: '<?php echo URL; ?>public/img/roupas/acs1.png', nome: 'Óculos Rosa Espelhado', preco: 39.99 })">
                      Adicionar ao carrinho
                    </a>
                </div>
                <div class="produto-cont">
                    <h3 class="titulo"><a href="#">Óculos Rosa Espelhado</a></h3>
                    <span class="preco">R$39.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="grid-produtos">
                <div class="img-produto">
                    <a href="#">
                        <img class="img-1" src="<?php echo URL; ?>public/img/roupas/acs2.png">
                    </a>
                    <a class="add-carrinho"
                      onclick="carrinho.adicionarAoCarrinho({ foto: '<?php echo URL; ?>public/img/roupas/acs2.png', nome: 'Kit da Vult', preco: 114.90 })">
                      Adicionar ao carrinho
                    </a>
                </div>
                <div class="produto-cont">
                    <h3 class="titulo"><a href="#">Kit da Vult</a></h3>
                    <span class="preco">R$114.90</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="grid-produtos">
                <div class="img-produto">
                    <a href="#">
                        <img class="img-1" src="<?php echo URL; ?>public/img/roupas/acs3.png">
                    </a>
                    <a class="add-carrinho"
                      onclick="carrinho.adicionarAoCarrinho({ foto: '<?php echo URL; ?>public/img/roupas/acs3.png', nome: 'Mochila Wonder Woman', preco: 99.99 })">
                      Adicionar ao carrinho
                    </a>
                </div>
                <div class="produto-cont">
                    <h3 class="titulo"><a href="#">Mochila Wonder Woman</a></h3>
                    <span class="preco">R$99.99</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="grid-produtos">
                <div class="img-produto">
                    <a href="#">
                        <img class="img-1" src="<?php echo URL; ?>public/img/roupas/acs4.png">
                    </a>
                    <a class="add-carrinho"
                      onclick="carrinho.adicionarAoCarrinho({ foto: '<?php echo URL; ?>public/img/roupas/acs4.png', nome: 'Bota Coturno Feminina', preco: 79.99 })">
                      Adicionar ao carrinho
                    </a>
                </div>
                <div class="produto-cont">
                    <h3 class="titulo"><a href="#">Bota Coturno Feminina</a></h3>
                    <span class="preco">R$79.99</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>