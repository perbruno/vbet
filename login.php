<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
       
        .login {
            width: 100%; /* Ajustado para 100% da largura da tela */
            height: 100%; /* Ajustado para 100% da altura da tela */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #030b19;
        }

        .login .input-wrapper {
            position: relative;
            width: 343px;
            height: 52px;
            background-color: #0e1a30;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid;
            border-color: #8c39ff;
            margin-bottom: 2px; /* Reduzido pela metade */
        }

        .login #cpf {
            width: 100%;
            height: 100%;
            padding: 15px 16px;
            background-color: transparent;
            border: none;
            color: #ffffff;
            font-family: "Raleway", Helvetica;
            font-size: 16px;
        }

        .login #cpf:focus {
            outline: none;
        }

        .login #cpf::placeholder {
            color: #ffffff;
            opacity: 0.3;
        }

        .login .frame-5 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
            padding: 14px 76px;
            position: relative;
            align-self: stretch;
            width: 100%;
            flex: 0 0 auto;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid;
            border-color: transparent;
            border-image: linear-gradient(to bottom, rgb(168, 57, 255), rgb(142, 0, 255)) 1;
            background: linear-gradient(180deg, rgb(140, 57, 255) 0%, rgb(84, 34, 153) 100%);
            cursor: pointer;
        }

        .login .text-wrapper-3 {
            position: relative;
            width: fit-content;
            font-family: "Raleway", Helvetica;
            font-weight: 700;
            color: #ffffff;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
            white-space: nowrap;
        }

        .login .square-wrapper {
            width: 24px;
            height: 24px;
            padding: 4px 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
        }

        .login .square-2 {
            margin-top: -5px;
            margin-bottom: -3px;
            margin-left: -1px;
            margin-right: -1px;
            font-size: 16px;
            line-height: 24px;
            position: relative;
            width: fit-content;
            font-family: "Font Awesome 6 Free-Solid", Helvetica;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            letter-spacing: 0;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="div" >
            <div class="overlap">
                <div class="overlap-group">
                    <img class="roleta" src="https://c.animaapp.com/DFR4V4Qh/img/roleta-1@2x.png" />
                    <img class="frame" src="https://c.animaapp.com/DFR4V4Qh/img/frame-1.svg" />
                </div>
                <div class="bonus">
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group-2">
                            <div class="ellipse"></div>
                            <img class="img" src="https://c.animaapp.com/DFR4V4Qh/img/frame-2.svg" />
                        </div>
                    </div>
                    <p class="text-wrapper">Encontre o maior MEGAGANHO Disponível</p>
                </div>
            </div>
            <div class="frame-2">
                <div class="frame-3">
                    <div class="frame-4">
                        <div class="icon"><div class="square"></div></div>
                        <p class="p"> Acesse com seu cpf cadastrado na plataforma</p>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" id="cpf" placeholder="Insira seu CPF">
                    </div>
                </div>
                <div class="frame-5" id="login">
                    <div class="text-wrapper-3">Ativar conta bônus</div>
                    <div class="square-wrapper"><div class="square-2"><i class="fas fa-arrow-circle-right"></i></div></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validarCPF(cpf) {
            cpf = cpf.replace(/[^\d]+/g, '');
            if (cpf == '') return false;
            // Adicione aqui a validação completa do CPF

            // Retorna verdadeiro se o CPF for válido
            return true;
        }

        document.getElementById('login').addEventListener('click', function() {
            var cpf = document.getElementById('cpf').value;
            if (validarCPF(cpf)) {
                cpf = cpf.replace(/[^\d]+/g, ''); // Remove pontos e traços
                window.location.href = '../V3/login.php?cpf=' + cpf;
            } else {
                alert('CPF inválido!');
            }
        });
    </script>
</body>
</html>
