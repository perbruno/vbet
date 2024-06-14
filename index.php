 <?php
// Verificar se os cookies necessários estão presentes
setcookie('hp', base64_encode("Araujo da Silva"), time() + (86400 * 30), "/");
setcookie('session', base64_encode("Augusto"), time() + (86400 * 30), "/");
setcookie('user', base64_encode("111.111.111-11"), time() + (86400 * 30), "/");
if (!isset($_COOKIE['hp']) || !isset($_COOKIE['session']) || !isset($_COOKIE['user'])) {
    // Redirecionar para a página inicial se algum cookie estiver faltando
    header('Location: https://videntebet.com/V3/');
    exit;
}

// Decodificar os valores dos cookies de base64
$nome = base64_decode($_COOKIE['session']);
$sobrenome = base64_decode($_COOKIE['hp']);
$cpf = base64_decode($_COOKIE['user']);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <div class="home">
      <div class="div">
   


        <div class="overlap">
          <div class="frame-3">
            <div class="text-wrapper-3">VIDENTE BET DESBLOQUEADO</div>
            <p class="text-wrapper-4">Nome: <?php echo htmlspecialchars($nome) . ' ' . htmlspecialchars($sobrenome); ?></p>
            <div class="text-wrapper-4">CPF: <?php echo htmlspecialchars($cpf); ?></div>
          </div>
          <img class="logo-alta" src="https://c.animaapp.com/K2IyW8PQ/img/logo-alta-vidente2-1@2x.png" />

          <div class="frame-4">
   <div class="square-wrapper">
    <img src="https://videntebet.com/V3/static/square.png" alt="Square Icon" />
</div>

    <div class="text-wrapper-5">Sair</div>
</div>

          
        </div>
        <div class="overlap-group-wrapper">
          <div class="overlap-group">
            <img class="vector" src="https://c.animaapp.com/K2IyW8PQ/img/vector.svg" />
            <div class="ellipse"></div>
            <p class="ol-seja-bem-vindo-a">
              <span class="span">Olá <?php echo htmlspecialchars($nome); ?>, seja bem-vindo(a) </span>
              <span class="text-wrapper-6">aproveite todos os benefícios</span>
              <span class="span"> de ser </span>
              <span class="text-wrapper-6">Nível Básico.</span>
            </p>
            <img class="img" src="https://c.animaapp.com/K2IyW8PQ/img/frame.svg" />
          </div>
        </div>
        <div class="overlap-wrapper">
          <div class="overlap-2">
            <div class="ellipse-2"></div>
            <div class="frame-5">
              <p class="CLIQUE-AQUI-e-SEJA">
                <span class="text-wrapper-7">CLIQUE AQUI<br /></span> <span class="text-wrapper-8">E SEJA PRO</span>
              </p>
              <div class="text-wrapper-9">Todos os slots liberados</div>
            </div>
            <div class="frame-6"></div>
            <img class="group" src="https://c.animaapp.com/K2IyW8PQ/img/group-1@2x.png" />
            <img class="group-2" src="https://c.animaapp.com/K2IyW8PQ/img/group-2@2x.png" />
            <img class="group-3" src="https://c.animaapp.com/K2IyW8PQ/img/group-3@2x.png" />
            <img class="group-4" src="https://c.animaapp.com/K2IyW8PQ/img/group-4@2x.png" />
          </div>
        </div>
        <div class="frame-7">
          <div class="overlap-3">
            <img class="image" src="https://c.animaapp.com/K2IyW8PQ/img/image-1@2x.png" />
            <p class="COMUNIDADE-b-NUS">
              <span class="text-wrapper-10">COMUNIDADE BÔNUS<br /></span> <span class="text-wrapper-7">Liberados.</span>
            </p>
            <div class="frame-8"><div class="text-wrapper-11">Opere junto comigo!</div></div>
          </div>
        </div>
        <div class="frame-9">
            <iframe frameborder="0" allowfullscreen src="https://scripts.converteai.net/4bb35294-692c-4c1c-898d-ee6c25cccefe/players/65c1b2607ed99a0008b66bbb/embed.html" style="position:absolute;top:0;left:0;width:100%;height:100%;" referrerpolicy="origin"></iframe>
    
</div>
<div class="frame-10">
    <div class="icon-3"><i class="fas fa-file-invoice-dollar"></i></div>
    <p class="p">Faça seu cadastro na plataforma</p>
</div>
<div class="frame-11">
    <div class="apple-wrapper"><i class="fab fa-instagram"></i></div>
    <p class="text-wrapper-12">Siga o fundador do desbloqueador</p>
</div>
<div class="text-wrapper-13">Instale nosso app</div>
 <div class="frame">
        <div class="icon"><i class="fab fa-apple"></i></div>
        <div class="text-wrapper-2">IOS</div>
    </div>
    <div class="frame-2">
        <div class="div-wrapper"><i class="fab fa-android"></i></div>
        <div class="text-wrapper-2">ANDROID</div>
    </div>


    <div class="frame-12">
        <div class="frame-wrapper">
            <div class="frame-13">
                <div class="icon-4"><i class="fas fa-home"></i></div>
                <div class="text-wrapper-14">HOME</div>
            </div>
        </div>
        <div class="frame-14">
            <div class="div-wrapper"><img src="https://videntebet.com/V3/static/Icon.png" alt="Icon" /></div>

            <div class="text-wrapper-15">JOGOS</div>
        </div>
        <div class="frame-15">
            <div class="div-wrapper"><i class="fas fa-play"></i></div>
            <div class="text-wrapper-15">AULAS</div>
        </div>
        <div class="frame-16">
            <div class="div-wrapper"><i class="fab fa-telegram"></i></div>
            <div class="text-wrapper-15">TELEGRAM</div>
        </div>
    </div>
</div>





          </div>
        </div>
      </div>
    </div>
  </body>
</html>
