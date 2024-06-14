 <?php
// Verificar se os cookies necessários estão presentes
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      .home {
  background-color: #030b19;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.home .div {
  background-color: #030b19;
  width: 375px;
  height: 1115px;
  position: relative;
}

.home .frame {
  display: flex;
  flex-direction: column;
  width: 56px;
  align-items: center;
  justify-content: flex-end;
  gap: 4px;
  position: absolute;
  top: 908px;
  left: 113px;
}

.home .icon {
  width: 56px;
  height: 56px;
  padding: 4px 6.5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  position: relative;
}

.home .text-wrapper {
  margin-top: -5px;
  margin-bottom: -3px;
  color: #ffffff;
  font-size: 48px;
  line-height: 56px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Brands-Regular", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .text-wrapper-2 {
  position: relative;
  width: fit-content;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-2 {
  display: flex;
  flex-direction: column;
  width: 56px;
  align-items: center;
  justify-content: flex-end;
  gap: 4px;
  position: absolute;
  top: 916px;
  left: 209px;
}

.home .div-wrapper {
  width: 48px;
  height: 48px;
  padding: 4px 6.5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  position: relative;
}

.home .apple {
  margin-top: -5px;
  margin-bottom: -3px;
  margin-left: -5px;
  margin-right: -5px;
  color: #ffffff;
  font-size: 40px;
  line-height: 48px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Brands-Regular", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .overlap {
  position: absolute;
  width: 263px;
  height: 100px;
  top: 0;
  left: 0;
}

.home .frame-3 {
  display: flex;
  flex-direction: column;
  width: 185px;
  align-items: flex-start;
  position: absolute;
  top: 24px;
  left: 78px;
}

.home .text-wrapper-3 {
  position: relative;
  align-self: stretch;
  margin-top: -1px;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
}

.home .text-wrapper-4 {
  position: relative;
  align-self: stretch;
  font-family: "Inter", Helvetica;
  font-weight: 400;
  color: #b9abcc;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 17px;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
}

.home .logo-alta {
  position: absolute;
  width: 94px;
  height: 100px;
  top: 0;
  left: 0;
  object-fit: cover;
}

.home .frame-4 {
  display: flex;
  flex-direction: column;
  width: 64px;
  height: 64px;
  align-items: center;
  justify-content: center;
  padding: 14px 76px;
  position: absolute;
  top: 16px;
  left: 275px;
  border-radius: 0px 0px 10px 10px;
  overflow: hidden;
}

.home .square-wrapper {
  width: 24px;
  height: 24px;
  padding: 4px 5px;
  margin-top: -3.5px;
  margin-left: -56px;
  margin-right: -56px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  position: relative;
}

.home .square {
  margin-top: -5px;
  margin-bottom: -3px;
  margin-left: -2px;
  margin-right: -2px;
  color: #a839ff;
  font-size: 16px;
  line-height: 24px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Free-Solid", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .text-wrapper-5 {
  position: relative;
  width: fit-content;
  margin-bottom: -2.5px;
  margin-left: -59px;
  margin-right: -59px;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #a839ff;
  font-size: 16px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .overlap-group-wrapper {
  position: absolute;
  width: 343px;
  height: 52px;
  top: 112px;
  left: 16px;
  border-radius: 10px;
  border: 0px solid;
  border-color: transparent;
  border-image: linear-gradient(to bottom, rgb(168.16, 57.63, 255), rgb(142.8, 0, 255)) 1;
  background: linear-gradient(180deg, rgb(140.17, 57.63, 255) 0%, rgb(84.1, 34.58, 153) 100%);
}

.home .overlap-group {
  position: relative;
  width: 322px;
  height: 64px;
  top: -12px;
  left: 15px;
}

.home .vector {
  position: absolute;
  width: 82px;
  height: 15px;
  top: 49px;
  left: 240px;
  mix-blend-mode: color-dodge;
}

.home .ellipse {
  position: absolute;
  width: 55px;
  height: 55px;
  top: 5px;
  left: 254px;
  background-color: #ff7a00;
  border-radius: 27.5px;
  filter: blur(30px);
  opacity: 0.4;
}

.home .ol-seja-bem-vindo-a {
  position: absolute;
  width: 256px;
  top: 22px;
  left: 0;
  font-family: "Raleway", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
}

.home .span {
  font-family: "Raleway", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 12px;
  letter-spacing: 0;
}

.home .text-wrapper-6 {
  font-weight: 700;
}

.home .img {
  position: absolute;
  width: 51px;
  height: 55px;
  top: 0;
  left: 256px;
}

.home .overlap-wrapper {
  position: absolute;
  width: 343px;
  height: 118px;
  top: 389px;
  left: 16px;
  border-radius: 10px;
  border: 1px solid;
  border-color: transparent;
  border-image: linear-gradient(to bottom, rgb(168.16, 57.63, 255), rgb(142.8, 0, 255)) 1;
  background: radial-gradient(50% 50% at 50% 50%, rgb(213, 69, 93) 0%, rgba(213, 69, 93, 0) 100%);
}

.home .overlap-2 {
  position: relative;
  height: 148px;
  top: -13px;
  left: 16px;
  background: radial-gradient(50% 50% at 50% 50%, rgb(213, 69, 93) 0%, rgba(213, 69, 93, 0) 100%);
}

.home .ellipse-2 {
  position: absolute;
  width: 109px;
  height: 107px;
  top: 21px;
  left: 190px;
  background-color: #370051;
  border-radius: 54.5px/53.5px;
  filter: blur(42.7px);
  opacity: 0.8;
}

.home .frame-5 {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  position: absolute;
  top: 34px;
  left: 0;
}

.home .CLIQUE-AQUI-e-SEJA {
  position: relative;
  width: fit-content;
  margin-top: -1px;
  font-family: "Raleway", Helvetica;
  font-weight: 400;
  color: transparent;
  font-size: 23.2px;
  letter-spacing: 0;
  line-height: 23.2px;
}

.home .text-wrapper-7 {
  font-weight: 700;
  color: #ffffff;
}

.home .text-wrapper-8 {
  font-weight: 900;
  color: #fabb00;
  font-size: 32px;
  line-height: 32px;
}

.home .text-wrapper-9 {
  position: relative;
  width: fit-content;
  font-family: "Raleway", Helvetica;
  font-weight: 400;
  color: #ffffff;
  font-size: 16px;
  letter-spacing: -0.16px;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-6 {
  position: absolute;
  width: 101px;
  height: 127px;
  top: 13px;
  left: 197px;
  background-image: url(https://c.animaapp.com/K2IyW8PQ/img/group@4x.png);
  background-size: 100% 100%;
}

.home .group {
  position: absolute;
  width: 73px;
  height: 64px;
  top: 0;
  left: 156px;
}

.home .group-2 {
  position: absolute;
  width: 53px;
  height: 54px;
  top: 18px;
  left: 290px;
}

.home .group-3 {
  position: absolute;
  width: 58px;
  height: 51px;
  top: 97px;
  left: 163px;
}

.home .group-4 {
  position: absolute;
  width: 58px;
  height: 51px;
  top: 81px;
  left: 277px;
}

.home .frame-7 {
  position: absolute;
  width: 343px;
  height: 146px;
  top: 523px;
  left: 16px;
  border-radius: 10px;
  overflow: hidden;
  background: radial-gradient(50% 50% at 50% 50%, rgb(213, 69, 93) 0%, rgba(213, 69, 93, 0) 100%);
}

.home .overlap-3 {
  position: relative;
  height: 146px;
}

.home .image {
  position: absolute;
  width: 343px;
  height: 141px;
  top: 0;
  left: 0;
}

.home .COMUNIDADE-b-NUS {
  position: absolute;
  top: 15px;
  left: 16px;
  font-family: "Raleway", Helvetica;
  font-weight: 400;
  color: transparent;
  font-size: 23.2px;
  letter-spacing: 0;
  line-height: normal;
}

.home .text-wrapper-10 {
  font-weight: 900;
  color: #fabb00;
}

.home .frame-8 {
  position: absolute;
  width: 343px;
  height: 36px;
  top: 110px;
  left: 0;
  background: linear-gradient(180deg, rgb(140.17, 57.63, 255) 0%, rgb(84.1, 34.58, 153) 100%);
}

.home .text-wrapper-11 {
  position: absolute;
  top: 7px;
  left: 93px;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 16px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-9 {
  position: absolute;
  width: 343px;
  height: 193px;
  top: 180px;
  left: 16px;
  background-color: #ffffff;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid;
}

.home .icon-wrapper {
  height: 193px;
  background-image: url(https://c.animaapp.com/K2IyW8PQ/img/rectangle-5@2x.png);
  background-size: cover;
  background-position: 50% 50%;
}

.home .icon-2 {
  width: 56px;
  height: 56px;
  padding: 4px 6.5px;
  top: 68px;
  left: 144px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  position: relative;
}

.home .square-2 {
  margin-top: -5px;
  margin-bottom: -3px;
  margin-left: -8.5px;
  margin-right: -8.5px;
  -webkit-text-stroke: 1px transparent;
  background-image: linear-gradient(180deg, rgb(220.25, 81.24, 255) 0%, rgb(142.8, 0, 255) 100%);
  -webkit-background-clip: text !important;
  background: linear-gradient(
    180deg,
    rgb(228.17, 63.38, 255) 0%,
    rgb(191.84, 57.63, 255) 42.59%,
    rgb(84.1, 34.58, 153) 100%
  );
  background-clip: text;
  -webkit-text-fill-color: transparent;
  text-fill-color: transparent;
  color: transparent;
  font-size: 48px;
  line-height: 56px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Free-Solid", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .frame-10 {
  display: flex;
  width: 343px;
  align-items: center;
  justify-content: center;
  gap: 4px;
  padding: 14px 76px 14px 68px;
  position: absolute;
  top: 685px;
  left: 16px;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid;
  border-color: transparent;
  border-image: linear-gradient(to bottom, rgb(255, 248, 153), rgb(255, 106, 3)) 1;
  background: linear-gradient(180deg, rgb(250, 187, 0) 0%, rgb(186, 38, 15) 100%);
}

.home .icon-3 {
  width: 32px;
  height: 32px;
  padding: 8px 9.5px;
  margin-left: -44px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  position: relative;
}

.home .square-3 {
  margin-top: -9px;
  margin-bottom: -7px;
  margin-left: -2.5px;
  margin-right: -2.5px;
  color: #ffffff;
  font-size: 24px;
  line-height: 32px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Free-Solid", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .p {
  position: relative;
  width: fit-content;
  margin-left: -8px;
  margin-right: -44px;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 16px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-11 {
  display: flex;
  width: 343px;
  align-items: center;
  justify-content: center;
  gap: 4px;
  padding: 14px 76px 14px 68px;
  position: absolute;
  top: 761px;
  left: 16px;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid;
  border-color: transparent;
  border-image: linear-gradient(to bottom, rgb(255, 248, 153), rgb(255, 106, 3)) 1;
  background: linear-gradient(180deg, rgb(250, 187, 0) 0%, rgb(186, 38, 15) 100%);
}

.home .apple-wrapper {
  width: 32px;
  height: 32px;
  padding: 8px 9.5px;
  margin-left: -52px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  position: relative;
}

.home .apple-2 {
  margin-top: -9px;
  margin-bottom: -7px;
  margin-left: -4px;
  margin-right: -4px;
  color: #ffffff;
  font-size: 24px;
  line-height: 32px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Brands-Regular", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .text-wrapper-12 {
  position: relative;
  width: fit-content;
  margin-left: -16px;
  margin-right: -52px;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 16px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .text-wrapper-13 {
  position: absolute;
  width: 245px;
  top: 864px;
  left: 65px;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 23.2px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.home .frame-12 {
  position: absolute;
  width: 375px;
  height: 71px;
  top: 1044px;
  left: 0;
  background-color: #0e1b31;
  box-shadow: 0px -10px 30px #030b19;
}

.home .frame-wrapper {
  position: absolute;
  width: 78px;
  height: 96px;
  top: -25px;
  left: 13px;
  border-radius: 10px 10px 0px 0px;
  background: linear-gradient(180deg, rgb(14, 27, 49) 0%, rgb(17.35, 40.99, 81) 100%);
}

.home .frame-13 {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  gap: 4px;
  position: relative;
  top: 13px;
  left: 11px;
}

.home .icon-4 {
  width: 56px;
  height: 56px;
  padding: 4px 6.5px;
  box-shadow: 0px 0px 24px #7c00e0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  position: relative;
}

.home .square-4 {
  margin-top: -5px;
  margin-bottom: -3px;
  margin-left: -5.5px;
  margin-right: -5.5px;
  -webkit-text-stroke: 1px transparent;
  background-image: linear-gradient(180deg, rgb(220.25, 81.24, 255) 0%, rgb(142.8, 0, 255) 100%);
  -webkit-background-clip: text !important;
  background: linear-gradient(
    180deg,
    rgb(228.17, 63.38, 255) 0%,
    rgb(191.84, 57.63, 255) 42.59%,
    rgb(84.1, 34.58, 153) 100%
  );
  background-clip: text;
  -webkit-text-fill-color: transparent;
  text-fill-color: transparent;
  color: transparent;
  font-size: 48px;
  line-height: 56px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Free-Solid", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .text-wrapper-14 {
  position: relative;
  width: fit-content;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #dd0cf0;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-14 {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  position: absolute;
  top: 0;
  left: 117px;
}

.home .square-5 {
  margin-top: -5px;
  margin-bottom: -3px;
  margin-left: -5px;
  margin-right: -5px;
  color: #000000;
  font-size: 40px;
  line-height: 48px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Free-Solid", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .text-wrapper-15 {
  position: relative;
  width: fit-content;
  font-family: "Raleway", Helvetica;
  font-weight: 700;
  color: #000000;
  font-size: 12px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.home .frame-15 {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  position: absolute;
  top: 0;
  left: 206px;
}

.home .square-6 {
  margin-top: -5px;
  margin-bottom: -3px;
  color: #000000;
  font-size: 40px;
  line-height: 48px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Free-Solid", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .frame-16 {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  position: absolute;
  top: 0;
  left: 287px;
}

.home .apple-3 {
  margin-top: -5px;
  margin-bottom: -3px;
  margin-left: -2px;
  margin-right: -2px;
  color: #000000;
  font-size: 40px;
  line-height: 48px;
  position: relative;
  width: fit-content;
  font-family: "Font Awesome 6 Brands-Regular", Helvetica;
  font-weight: 400;
  text-align: center;
  letter-spacing: 0;
  white-space: nowrap;
}

.home .frame-11 {
  display: flex;
  width: 343px;
  align-items: center;
  justify-content: center;
  gap: 4px;
  padding: 14px 76px 14px 68px;
  position: absolute;
  top: 761px;
  left: 16px;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid;
  border-color: transparent;
  border-image: linear-gradient(to bottom, rgb(255, 248, 153), rgb(255, 106, 3)) 1;
  background: linear-gradient(180deg, rgb(250, 187, 0) 0%, rgb(186, 38, 15) 100%);
}






.icon, .div-wrapper {
    display: flex;
    width: 343px;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0px;
    left: 0px;
    border-radius: 10px;
    font-size: 48px; /* Ajuste o tamanho conforme necessário */
    color: #ffffff; /* Ajuste a cor conforme necessário */
}

.text-wrapper-2 {
    
    display: inline-flex;
    
    align-items: center;
    justify-content: flex-end;
    width: fit-content;
    font-family: "Raleway", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 12px;
    text-align: center;
}


.square-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px; /* Ajuste o tamanho conforme necessário */
    color: #ffffff; /* Ajuste a cor conforme necessário */
}

.text-wrapper-5 {
    font-family: "Raleway", Helvetica;
    font-weight: 700;
    color: #a839ff;
    font-size: 16px;
    text-align: center;
    white-space: nowrap;
}

/* Footer Fixo */
.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #fff; /* Cor de fundo do footer */
    box-shadow: 0 -1px 10px rgba(0,0,0,0.1); /* Sombra para destacar o footer */
    display: flex;
    justify-content: space-around;
    padding: 10px 0;
    z-index: 1000;
}




    </style>
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
