<?php
$pageName = "Produtos";
include $_SERVER['DOCUMENT_ROOT'] . '/icecreamcompany/components/header.php'; ?>

<main>
    <h1>Produtos</h1>
    <div class="container d-flex justify-content-evenly mt-5">

        <div class="card mango-lover" style="width: 18rem;">
            <img src="../assets/mango-party-ii.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title fw-bolder">Mango Party</h4>
                <p class="card-text h-5 ">Explosão tropical de manga madura, cremosa e vibrante, com sabor refrescante e ensolarado.</p>
                <div class='d-flex gap-2'>
                    <a href="#" class="btn btn-primary text-center h-2  ">Comprar</a>
                    <a href="#" class="btn btn-primary text-center h-2  ">Adicionar ao carrinho</a>
                </div>
            </div>
        </div>


        <div class="card berry-lover" style="width: 18rem;">
            <img src="../assets/berry-lover.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title fw-bolder">Berry Lover</h4>
                <p class="card-text h-5 ">Sorvete de morango suave e delicado, com textura cremosa e toque frutado irresistível.</p>
                <div class='d-flex gap-2'>
                    <a href="#" class="btn btn-primary align-middle text-center h-2  ">Comprar</a>
                    <a href="#" class="btn btn-primary align-middle text-center h-2  ">Adicionar ao carrinho</a>
                </div>
            </div>
        </div>
        
        <div class="card rainbow-sky" style="width: 18rem;">
            <img src="../assets/rainbow-sky.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title fw-bolder">Rainbow Sky</h4>
                <p class="card-text h-5 ">Delicioso tutti-frutti em tom azul ciano, leve e doce, com aroma divertido e nostálgico.</p>
                <div class='d-flex gap-2'>
                    <a href="#" class="btn btn-primary text-center h-2  ">Comprar</a>
                    <a href="#" class="btn btn-primary text-center h-2  ">Adicionar ao carrinho</a>
                </div>
            </div>
        </div>
        
        <div class="card choc-muffin" style="width: 18rem;">
            <img src="../assets/choc-muffin.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title fw-bolder">Choc Muffin</h4>
                <p class="card-text h-5 ">Rico sorvete de chocolate cremoso, intenso e aveludado, com sabor de puro prazer.</p>
                <div class='d-flex gap-2'>
                    <a href="#" class="btn btn-primary text-center h-2  ">Comprar</a>
                    <a href="#" class="btn btn-primary text-center h-2  ">Adicionar ao carrinho</a>
                </div>
            </div>
        </div>
        
    </div>

 
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/icecreamcompany/components/footer.php';
?>