<?php
// Verificar se os cookies necessários estão presentes
if (!isset($_COOKIE['hp']) || !isset($_COOKIE['session']) || !isset($_COOKIE['user'])) {
    // Redirecionar para a página inicial se algum cookie estiver faltando
    header('Location: /');
    exit;
}

// Decodificar os valores dos cookies de base64
$nome = base64_decode($_COOKIE['session']);
$sobrenome = base64_decode($_COOKIE['hp']);
$cpf = base64_decode($_COOKIE['user']);

?>


<!DOCTYPE html>
<html data-theme="dark">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/jogos.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div class="container mt-4">

        <main class="mx-4 mt-5 mb-6 pb-4">
            <a href="/jogos.php" class="href">
        <span class="icon-text has-text-primary mb-5">
  <span class="icon">
    <i class="fas fa-arrow-circle-left"></i>
  </span>
  <span>Voltar e escolher outro jogo</span>
</span>
</a>
        <i class="fa-solid fa-circle-arrow-left"></i>
            <div class="columns is-mobile">
                <div class="column is-5 is-align-content-center">
                    <figure class="image desc">
                        <img src="https://bulma.io/assets/images/placeholders/128x128.png" />
                    </figure>
                </div>
                <div class="column is-grid">
                    <div class="block">
                        <h1 class="title mb-3 is-secondary is-size-4">Title</h1>
                    </div>
                    <div class="block is-align-content-flex-end">
                        <p class=" is-size-6 ">Clique no botão para <b>ativar sua conta bônus</b> com ganhos desbloqueados em 99,99%</p>
                    </div>
                </div>
            </div>
            <a href="/jogoX_ativo.php">
            <div class="box-a orange-grad p-01 mt-6">
                <div class="box-a secondary title is-6 has-text-centered is-align-content-center">
                    <p>
                        <i class="fas fa-check"></i>
                        Ativar conta bônus
                    </p>
                </div>
            </div></a>
            <br><br><br>
        </main>


        <footer class="navbar has-shadow is-dark is-fixed-bottom navbar-brand" role="navigation">
            <a class="navbar-item is-expanded" href="/">
                <div class="column is-5 is-grid is-justify-content-center p-0">
                    <div class="icon is-medium" style="justify-self: center;">
                        <i class="fas fa-home fa-2x"></i>
                    </div>
                    <p class="is-size-7 has-text-centered">Home</p>
                </div>
            </a>
            <a class="navbar-item is-expanded active-menu" href="/jogos.php">
                <div class="column is-5 is-grid is-justify-content-center p-0">
                    <div class="icon is-medium" style="justify-self: center;">
                        <i class="fas fa-star fa-2x"></i>
                    </div>
                    <p class="is-size-7 has-text-centered">Jogos</p>
                </div>
            </a>
            <a class="navbar-item is-expanded" href="/aulas.php">
                <div class="column is-5 is-grid is-justify-content-center p-0">
                    <div class="icon is-medium" style="justify-self: center;">
                        <i class="fas fa-play fa-2x"></i>
                    </div>
                    <p class="is-size-7 has-text-centered">Aulas</p>
                </div>
            </a>
            <a class="navbar-item is-expanded" href="/telegram.php">
                <div class="column is-5 is-grid is-justify-content-center p-0">
                    <div class="icon is-medium" style="justify-self: center;">
                        <i class="fab fa-telegram fa-2x"></i>
                    </div>
                    <p class="is-size-7 has-text-centered">Telegram</p>
                </div>
            </a>
        </footer>
    </div>
</body>

</html>