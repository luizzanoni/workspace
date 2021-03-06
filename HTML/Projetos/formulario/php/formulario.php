<?php
    include_once('config.php')
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">  
        <title>Formulário Unimed</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                font-size: 15px;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }

            .flex-container{
                max-width: 90vw;
                width: 100%;
                margin-left: auto;
                margin-right: auto;
            }

            .header-items{
                display: flex;
                flex-wrap: wrap;
                padding-top: 20px;
                margin-bottom: 20px;
                justify-content: center;
                align-items: center;
            }

            .entrada-informacoes{
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .fundo-verde-form{
                display: inline-block;
                background-color: #00995d;
                padding: 30px;
            }

            .fundo-verde-form h1{
                color: white;
                margin-bottom: 10px;  
            }

            .fundo-verde-form h2{
                color: white;
                margin-bottom: 10px;  
            }

            .form-unimed-verificacao-exames{
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .form-unimed-verificacao-exames input{
                width: 100%;
                margin-bottom: 20px;
                height: 30px;
                border-radius: 15px;
                border: 0;
                padding-left: 15px;
            }

            .form-unimed-verificacao-exames input:active,
            .form-unimed-verificacao-exames input:focus-visible,
            .form-unimed-verificacao-exames input:focus{
                outline: 0;
                box-shadow: none;
            }

            .label{
                width: 100%;
                color: white;
            }

            .label label{
                margin-bottom: 5px;
                font-weight: 400;
            }

            .label input[type="date"]::-webkit-calendar-picker-indicator{
                margin-right: 10px;
            }

            ul{
                display: flex;
                padding: 0;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            li{
                padding: 0 10px;
                list-style: none;
            }

            a{
                color: black;
                text-decoration: none;
                font-weight: 500;
            }

            a:hover{
                color: #00995d;
            }

            .input-error {
                color: red;
                border: red 1px solid !important;
            }

            .altura-corpo{
                height: 100vh;
            }

            .altura-corpo > div{
                height: 100%;
                margin-top: 200px;
            }

            .button-send-formulario > button{
                background-color: #b1d34b;
                border-color: #b1d34b;
                color: white;
                display: inline-block;
                padding: 5px 60px;
                font-size: 25px;
                border-radius: 50px;
                border: 3px solid #b1d34b;
                cursor: pointer;
            }

            .button-send-formulario > button:hover{
                background-color: #b1d34b;
                border-color: #fff;
                color: #fff;
                transition: all 0.4s;

            }
        </style>
    </head>
    <body>
        <header>
            <div class="flex-container">
                <div class="header-items">
                    <div class="logo-unimed">
                        <img src="logo.png" alt="logo-unimed">
                    </div>
                </div>
            </div>
        </header>
        <div class="altura-corpo">
            <div class="flex-container">
                <div class="entrada-informacoes">
                    <div class="fundo-verde-form">
                        <h1>Recuperação de Senha Portal de Laudos</h1>
                        <h2>Informe seus dados para obter o login de acesso ao Sistema Unimed!</h2>
                        <form id="form" class="form-unimed-verificacao-exames">
                            <div class="label">
                                <label for="nCpf">CPF:</label>
                                <input type="text" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                            </div>
                            <div class="label">
                                <label for="dataNasc">Data de nascimento:</label>
                                <input id="dataNasc" type="date">
                            </div>
                            <div class="label">
                                <label for="nomeCompleto">Nome completo:</label>
                                <input id="nomeCompleto" type="text">
                            </div>
                            <div class="label">
                                <label for="nomeMaeCompleto">Nome completo da mãe:</label>
                                <input type="text" id="nomeMaeCompleto">
                            </div>
                            <div class="button-send-formulario">
                                <button id="btnSubmitForm"type="button">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            
        </footer>
    </body>
</html>