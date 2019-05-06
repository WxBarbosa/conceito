<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="<?php echo URL; ?>public/img/concept.png"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php $title = 'Conceito'; ?></title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/grid.css">
<script src="<?php echo URL; ?>public/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/js/main.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>

    <nav class="upper navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup, #navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-secondary" href="<?php echo URL; ?>home/index"><img src="<?php echo URL; ?>public/img/concept.png" width="30" class="navbar-brand">Concept</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link text-secondary" href="<?php echo URL; ?>home/index">Início <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link text-secondary" href="">Meus Pedidos</a>
            <a class="nav-item nav-link text-secondary" href="">Lista de desejos</a>
            <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-secondary" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contato
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item text-secondary" href="">Como comprar</a>
                <a class="dropdown-item text-secondary" href="">FAQ</a>
                <a class="dropdown-item text-secondary" href="">Fale conosco</a>
            </div>
            </div>
        </div>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link text-secondary cart-item" href="">
            R$<span id="cart-preco">0,00</span>
            <img src="<?php echo URL; ?>public/img/shopping-cart.png" class="nav-item" width="30">
            <span id="cart-count">0</span>
            </a>
            <?php if (isset($_SESSION['id'])) { ?>

                <div class="nav-item nav-link text-secondary" href="">
                <img src="<?php echo URL; ?>public/img/profile.png" class="nav-item profile-image" width="30">
                <?php //echo $_SESSION['nome']; ?>
                <a class="text-secondary" href="">Sair</a>
                </div>
            
            <?php } else { ?>

                <a class="nav-item nav-link text-secondary" href="">
                <img src="<?php echo URL; ?>public/img/profile.png" class="nav-item profile-image" width="30">  Entre ou cadastre-se
                </a>

            <?php } ?>
        </div>
    </div>
    </nav>
