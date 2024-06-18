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
            <div class="columns is-mobile">
                <div class="column is-4 is-align-content-center">
                    <figure class="image desc">
                        <img src="https://bulma.io/assets/images/placeholders/128x128.png" />
                    </figure>
                </div>
                <div class="column is-align-content-baseline">
                    <div class="block is-size-7">
                        <h1 class="title mb-3 is-secondary is-size-4">Title</h1>
                        <div class="columns mb-0 pb-1 is-mobile is-gapless">
                            <label class="column is-5 pb-0 label">Confiança:</label>
                            <div class="column pb-0">
                                <p class="p-0 pl-1 has-text-weight-semibold has-text-primary is-size-6"> 60% </p>
                            </div>
                        </div>
                        <div class="is-align-content-center">
                            <progress class="progress is-large is-primary" value="60" max="100">
                                60%
                            </progress>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block">
                <fieldset disabled>
                    <div class="field is-grouped is-size-7">
                        <div class="field">
                            <label class="label">Validade</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="e.g Alex Smith">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Entrada</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="e.g Alex Smith">
                            </div>
                        </div>
                    </div>

                    <div class="field is-size-7">
                        <label class="label">Estratégia do Jogo</label>
                        <div class="control">
                            <textarea class="textarea" value="A, depois B, depois C" placeholder="Explain how we can help you"></textarea>
                        </div>
                    </div>

                </fieldset>
            </div>
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