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
 <html data-theme="dark">

 <head>
   <meta charset="utf-8" />
   <link rel="stylesheet" href="css/main.css" />
   <style>
     @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
   </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
 </head>

 <body>
   <div class="container">

     <nav class="navbar">
       <div class="navbar-brand is-justify-content-space-around is-align-items-center">
         <img class="navbar-item logo-alta" src="https://c.animaapp.com/K2IyW8PQ/img/logo-alta-vidente2-1@2x.png" />
         <div class="navbar-start">
           <div class="is-size-7">
             <p class="has-text-weight-semibold">VIDENTE BET DESBLOQUEADO</p>
             <p>Nome: <?php echo htmlspecialchars($nome) . ' ' . htmlspecialchars($sobrenome); ?></p>
             <p>CPF: <?php echo htmlspecialchars($cpf); ?></p>
           </div>
         </div>
         <div class="navbar-end">
           <div class="navbar-item has-text-centered" id="logout">
             <div onmouseover="console.log('click')">
               <img src="https://videntebet.com/V3/static/square.png" alt="Square Icon" />
               <p class="has-text-weight-semibold has-text-primary">Exit</p>
             </div>
           </div>
         </div>
       </div>
     </nav>

     <main class="mx-4 mt-5 mb-6 pb-4">
       <div class="box purple-grad p-01">
         <div class="box primary py-2">
           <div class="columns is-mobile is-gapless">
             <div class="column">
               <p class="is-size-7 has-text-white">
                 Olá <strong><?php echo htmlspecialchars($nome); ?></strong>, seja bem-vindo(a)!
                 <strong>Aproveite todos os benefícios</strong> de ser <strong> Nível Básico</strong>.
               </p>
             </div>
             <div class="column is-3">
               <div class="is-relative">
                 <img class="img trophy" src="https://c.animaapp.com/K2IyW8PQ/img/frame.svg" />
                 <img class="vector is-overlay" src="https://c.animaapp.com/K2IyW8PQ/img/vector.svg" />
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="box video p-01 mx-auto has-background-light">
         <iframe frameborder="0" allowfullscreen src="https://scripts.converteai.net/4bb35294-692c-4c1c-898d-ee6c25cccefe/players/65c1b2607ed99a0008b66bbb/embed.html" style="position:relative;top:0;left:0;width:100%;height:100%;" referrerpolicy="origin"></iframe>
       </div>
       <div class="box purple-grad p-01">
         <div class="box primary">
           <div id="bePro" class="columns is-mobile is-gapless">
             <div class="column">
               <p class="CLIQUE-AQUI-e-SEJA">
                 <span class="text-wrapper-7">CLIQUE AQUI<br /></span> <span class="text-wrapper-8">E SEJA PRO</span>
               </p>
               <div class="text-wrapper-9">Todos os slots liberados</div>
             </div>
             <div class="column overlap-2 is-4">
               <div class="ellipse-2"></div>
               <div class="frame-6"></div>
               <img class="group" src="https://c.animaapp.com/K2IyW8PQ/img/group-1@2x.png" />
               <img class="group-2" src="https://c.animaapp.com/K2IyW8PQ/img/group-2@2x.png" />
               <img class="group-3" src="https://c.animaapp.com/K2IyW8PQ/img/group-3@2x.png" />
               <img class="group-4" src="https://c.animaapp.com/K2IyW8PQ/img/group-4@2x.png" />
             </div>
           </div>
         </div>
       </div>
       <div class="box p-0 primary card">
         <div class="card-image">
           <figure class="image">
             <img src="https://c.animaapp.com/K2IyW8PQ/img/image-1@2x.png" alt="Placeholder image" />
           </figure>
           <p class="COMUNIDADE-b-NUS">
             <span class="text-wrapper-10">COMUNIDADE BÔNUS<br /></span> <span class="text-wrapper-7">Liberados.</span>
           </p>
         </div>
         <div class="card-content box primary p-01 pt-2">
           <p class="title is-5 has-text-centered pt-1">Opere junto comigo</p>
         </div>
       </div>
       <div class="box orange-grad p-01">
         <div class="box secondary title is-6 has-text-centered">
           <p>
             <i class="fas fa-file-invoice-dollar"></i>
             Faça seu cadastro na plataforma
           </p>
         </div>
       </div>
       <div class="box orange-grad p-01">
         <div class="box secondary title is-6 has-text-centered">
           <p class="text-wrapper-12">
             <i class="fab fa-instagram"></i>
             Siga o fundador do desbloqueador
           </p>
         </div>
       </div>
       <div>
         <div class="content">
           <h3 class="has-text-centered">Instale nosso app</h3>
         </div>
         <div class="columns is-mobile is-vcentered">
           <div class="column is-offset-2 is-4 has-text-white is-grid is-justify-content-center js-modal-trigger" data-target="modal-js-example">
             <div class="icon is-large is-size-4" style="justify-self: center;">
               <i class="fab fa-apple fa-2x"></i>
             </div>
             <h6 class="has-text-centered">IOS</h6>
           </div>
           <div class="column is-4 has-text-white is-grid is-justify-content-center js-modal-trigger" data-target="modal-js-example2">
             <div class="icon is-large is-size-4" style="justify-self: center;">
               <i class="fab fa-android fa-2x"></i>
             </div>
             <h6 class="has-text-centered">ANDROID</h6>
           </div>
         </div>
       </div>
       <br>
       <br>
       <br>
     </main>
     <footer class="navbar has-shadow is-dark is-fixed-bottom navbar-brand" role="navigation">
       <a class="navbar-item is-expanded active-menu" href="/">
         <div class="column is-5 is-grid is-justify-content-center p-0">
           <div class="icon is-medium" style="justify-self: center;">
             <i class="fas fa-home fa-2x"></i>
           </div>
           <p class="is-size-7 has-text-centered">Home</p>
         </div>
       </a>
       <a class="navbar-item is-expanded" href="/jogos.php">
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
   <div id="modal-js-example" class="modal">
     <div class="modal-background"></div>

     <div class="modal-content">
       <div class="mbox purple-grad p-0 m-auto">
         <div class="mbox primary is-grid">
           <div id="bePro" class="px-4 mt-5 has-text-centered">
             <p class="text-wrapper-9">
               CLIQUE AQUI e destrave <br>todos os SLOTS PRO</p>
           </div>
       </div>
     </div>

     <button class="modal-close is-large" aria-label="close"></button>
   </div>

   <div id="modal-js-example2" class="modal">
     <div class="modal-background"></div>

     <div class="modal-content px-4">
       <div class="mbox">
         <p>Modal JS example2</p>
         <!-- Your content -->
       </div>
     </div>

     <button class="modal-close is-large" aria-label="close"></button>
   </div>
 </body>
 <script>
   document.addEventListener('DOMContentLoaded', () => {
     // Functions to open and close a modal
     function openModal($el) {
       $el.classList.add('is-active');
     }

     function closeModal($el) {
       $el.classList.remove('is-active');
     }

     function closeAllModals() {
       (document.querySelectorAll('.modal') || []).forEach(($modal) => {
         closeModal($modal);
       });
     }

     // Add a click event on buttons to open a specific modal
     (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
       const modal = $trigger.dataset.target;
       const $target = document.getElementById(modal);

       $trigger.addEventListener('click', () => {
         openModal($target);
       });
     });

     // Add a click event on various child elements to close the parent modal
     (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
       const $target = $close.closest('.modal');

       $close.addEventListener('click', () => {
         closeModal($target);
       });
     });

     // Add a keyboard event to close all modals
     document.addEventListener('keydown', (event) => {
       if (event.key === "Escape") {
         closeAllModals();
       }
     });
   });
 </script>

 </html>