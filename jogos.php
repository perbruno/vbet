 <?php
  // Verificar se os cookies necessários estão presentes
  if (!isset($_COOKIE['hp']) || !isset($_COOKIE['session']) || !isset($_COOKIE['user'])) {
    // Redirecionar para a página inicial se algum cookie estiver faltando
    header('/');
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
   <div class="container is-max-desktop">

     <section class="hero is-primary is-medium">
       <div class="background">

         <!-- Hero content: will be in the middle -->
         <div class="hero-body">
           <div class="container has-text-centered">
             <!-- <img class="title" src="https://c.animaapp.com/K2IyW8PQ/img/logo-alta-vidente2-1@2x.png" /> -->

             <p class="text-wrapper-7 is-size-5">
                 Maior RTP</p>
               <p class="text-wrapper-8 is-size-6">
                 Do momento encontrado</p>
             
           </div>
         </div>
       </div> 

       <!-- Hero footer: will stick at the bottom -->
       <!-- <div class="hero-foot">
         <div class="container">
           <p>oi oi oi</p>
         </div>
       </div> -->
     </section>

     <main class="mx-4 mt-5 mb-6 pb-4">
       <div class="grid">

         <div class="cell">
           <div class="box p-01 purple-grad">
             <div class="box p-0 primary card">
               <div class="card-image">
                 <figure class="image is-flex">
                   <img src="https://c.animaapp.com/K2IyW8PQ/img/image-1@2x.png" alt="Placeholder image" />
                 </figure>
               </div>
               <p class="title is-6 p-2 has-text-centered">20%</p>
             </div>
           </div>
         </div>
         <div class="cell">
           <a href="/jogoX.php">
             <div class="box p-01 purple-grad">
               <div class="box p-0 primary card">
                 <div class="card-image">
                   <figure class="image is-flex">
                     <img src="https://c.animaapp.com/K2IyW8PQ/img/image-1@2x.png" alt="Placeholder image" />
                   </figure>
                 </div>
                 <p class="title is-6 p-2 has-text-centered">30%</p>
               </div>
             </div>
           </a>
         </div>
         <div class="cell">
           <div class="box p-01 purple-grad">
             <div class="box p-0 primary card">
               <div class="card-image">
                 <figure class="image is-flex">
                   <img src="https://c.animaapp.com/K2IyW8PQ/img/image-1@2x.png" alt="Placeholder image" />
                 </figure>
               </div>
               <p class="title is-6 p-2 has-text-centered">20%</p>
             </div>
           </div>
         </div>
         <div class="cell">
           <div class="box p-01 purple-grad">
             <div class="box p-0 primary card">
               <div class="card-image">
                 <figure class="image is-flex">
                   <img src="https://c.animaapp.com/K2IyW8PQ/img/image-1@2x.png" alt="Placeholder image" />
                 </figure>
               </div>
               <p class="title is-6 p-2 has-text-centered">20%</p>
             </div>
           </div>
         </div>
         <div class="cell blocked js-modal-trigger" data-target="modal-js-example">
           <div class="box p-01 orange-grad">
             <div class="box p-0 secondary card">
               <div class="card-image">
                 <figure class="image is-flex">
                   <img src="https://c.animaapp.com/K2IyW8PQ/img/image-1@2x.png" alt="Placeholder image" />
                 </figure>
               </div>
               <p class="title is-6 p-2 has-text-centered">89%</p>
             </div>
           </div>
           <div class='block-icon'>
             <div class="icon is-large is-size-4" style="justify-self: center;">
               <i class="fa fa-lock fa-2x"></i>
             </div>
           </div>
         </div>


       </div>
       <br>
       <br>
       <br>
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
       <a class="navbar-item is-expanded  active-menu" href="/jogos.php">
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
           <div class="overlap-2 is-4">
             <div class="ellipse-2"></div>
             <div class="frame-6"></div>
             <img class="group" src="https://c.animaapp.com/K2IyW8PQ/img/group-1@2x.png" />
             <img class="group-2" src="https://c.animaapp.com/K2IyW8PQ/img/group-2@2x.png" />
             <img class="group-3" src="https://c.animaapp.com/K2IyW8PQ/img/group-3@2x.png" />
             <img class="group-4" src="https://c.animaapp.com/K2IyW8PQ/img/group-4@2x.png" />
           </div>
           <div id="bePro" class="px-4 mt-5 has-text-centered">
             <span class="CLIQUE-AQUI-e-SEJA">
               <p class="text-wrapper-7">
                 Jogo Disponível</p>
               <p class="text-wrapper-8">
                 NO NÍVEL PRO</p>
             </span>
             <p class="text-wrapper-9">
               CLIQUE AQUI e destrave <br>todos os SLOTS PRO</p>
           </div>
         </div>
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