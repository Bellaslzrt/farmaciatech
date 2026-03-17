<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>MILEPHARMAtitle>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Montserrat:wght@600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>MILEPHARMA</h1>
<p>Saúde, cuidado e bem-estar</p>
</header>

<section class="produtos">

<div class="produto">
<h2>Dipirona</h2>
<p>R$ 12.50</p>
<button onclick="adicionar('Dipirona',12.50)">Adicionar</button>
</div>

<div class="produto">
<h2>Paracetamol</h2>
<p>R$ 9.90</p>
<button onclick="adicionar('Paracetamol',9.90)">Adicionar</button>
</div>

<div class="produto">
<h2>Ibuprofeno</h2>
<p>R$ 15.00</p>
<button onclick="adicionar('Ibuprofeno',15.00)">Adicionar</button>
</div>

<div class="produto">
<h2>Vitamina C</h2>
<p>R$ 18.00</p>
<button onclick="adicionar('Vitamina C',18.00)">Adicionar</button>
</div>

<div class="produto">
<h2>Álcool 70%</h2>
<p>R$ 7.50</p>
<button onclick="adicionar('Alcool 70%',7.50)">Adicionar</button>
</div>

<div class="produto">
<h2>Band-Aid</h2>
<p>R$ 10.00</p>
<button onclick="adicionar('BandAid',10.00)">Adicionar</button>
</div>

<div class="produto">
<h2>Termômetro Digital</h2>
<p>R$ 35.00</p>
<button onclick="adicionar('Termometro',35.00)">Adicionar</button>
</div>

<div class="produto">
<h2>Omeprazol</h2>
<p>R$ 22.00</p>
<button onclick="adicionar('Omeprazol',22.00)">Adicionar</button>
</div>

<div class="produto">
<h2>Antialérgico</h2>
<p>R$ 16.00</p>
<button onclick="adicionar('Antialergico',16.00)">Adicionar</button>
</div>

<div class="produto">
<h2>Shampoo Anticaspa</h2>
<p>R$ 28.00</p>
<button onclick="adicionar('Shampoo',28.00)">Adicionar</button>
</div>

</section>

<section class="carrinho">

<h2>🛒 Carrinho</h2>

<ul id="lista"></ul>

<h3>Total: R$ <span id="total">0</span></h3>

<button onclick="finalizar()">Finalizar</button>
<button onclick="limpar()">Limpar</button>

</section>

<script src="script.js"></script>

</body>
</html>