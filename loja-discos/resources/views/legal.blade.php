<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage do Portfólio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000; /* Fundo preto */
            color: #fff; /* Cor do texto para contraste */
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(51, 51, 51, 0.8); /* Fundo semi-transparente */
            color: #fff;
            padding: 1rem;
            border-radius: 10px;
            backdrop-filter: blur(15px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        .menu {
            display: none;
            background: rgba(249, 249, 249, 0.9); /* Fundo do menu semi-transparente */
            border: 1px solid rgba(221, 221, 221, 0.8);
            border-radius: 5px;
            padding: 10px;
            position: absolute;
            top: 60px;
            right: 20px;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .menu a {
            display: block;
            padding: 8px 15px;
            text-decoration: none;
            color: #333; /* Cor do texto do menu */
        }
        .menu a:hover {
            background: rgba(0, 123, 255, 0.7);
            color: #fff;
        }
        .toggle-menu {
            cursor: pointer;
            padding: 10px;
            background: rgba(0, 123, 255, 0.7);
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .toggle-menu:hover {
            background: rgba(0, 123, 255, 1);
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1); /* Fundo transparente */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }
        h1, h2 {
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }
        .portfolio {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Permite que os itens se ajustem em telas menores */
        }
        .portfolio-item {
            width: 30%;
            text-align: center;
            padding: 15px;
            border: 1px solid rgba(221, 221, 221, 0.8);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2); /* Fundo semi-transparente */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s, background 0.3s; /* Transições para hover */
        }
        .portfolio-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.3); /* Efeito de hover mais visível */
        }
        .portfolio-item a {
            text-decoration: none;
            color: #007bff; /* Cor do link */
        }
        .portfolio-item a:hover {
            color: #0056b3; /* Cor do link ao passar o mouse */
        }
        .portfolio-item img{
            width: 300px;
        }
    </style>
</head>
<body>

<header>
    <h1>Bem-vindo ao Meu Portfólio</h1>
    <button class="toggle-menu" onclick="toggleMenu()">Menu</button>
    <nav class="menu" id="menu">
        <a href="pagina1.html">Página 1</a>
        <a href="pagina2.html">Página 2</a>
    </nav>
</header>

<div class="container">
    <h2>Portfólio de Pessoas</h2>
    <div class="portfolio">
        <div class="portfolio-item">
            <h3>Otto Sanches</h3>
            <p>lider do grupo</p>
            <a href="" target="_blank">
            <img src="{{ asset('images/otto.jpg') }}" alt="">
            </a>
        </div>
        <div class="portfolio-item">
            <h3>Rafael Antônio</h3>
            <p>fez o site</p>
            <a href="https://github.com/kinko6" target="_blank">
            <img src="{{ asset('images/eu.jpg') }}" alt="">
            </a>
        </div>
        <div class="portfolio-item">
            <h3>Ryan Gomes</h3>
            <p>fez o</p>
            <a href="" target="_blank">
            <img src="{{ asset('images/ryan.jpg') }}" alt="">
            </a>

        </div>
    </div>
</div>

<script>
    function toggleMenu() {
        var menu = document.getElementById("menu");
        if (menu.style.display === "block") {
            menu.style.display = "none"; // Oculta o menu
        } else {
            menu.style.display = "block"; // Mostra o menu
        }
    }
</script>

</body>
</html>
