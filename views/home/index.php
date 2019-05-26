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
    <div id="product-list" class="row">
        
    </div>
</div>
</div>

<script src="<?php echo URL; ?>public/js/home/index.js"></script>