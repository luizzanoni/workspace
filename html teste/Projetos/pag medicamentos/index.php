<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medicamentos Padronizados</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head> 
    
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            justify-content: space-between;
            align-items: center;
        }

        header{
            margin: 0;
            padding: 0;
            background-color: #b1d34b;
            height: 100px;
            display: flex;
            align-items: center;
            color: white;
        }

        h1{
            padding: 0 20px;
            text-decoration: none;
            color: white;
            text-decoration: none;
        }

        .segundo-menu{
            background: #00995d;
            padding: 1px;
        }

        .search-box{
            background: #34495e;
            border-radius: 40px;
            padding: 5px;
            margin: 10px;
        }

        .search-btn{
            color: #1abc9c;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #00995d;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
        }

        .search-txt{
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: white;
            font-size: 15px;
            line-height: 40px;
            width: 240px;
        }

        .search-container{
            justify-content: right;
        }

        .flex-container{
            display: flex;
            max-width: 992px;
            margin: auto;
            width: 100%;
        }

        .box{
            max-width: 992px;
            width: 100%;
        }
        .tabela{
            max-width: 992px;
            width: 100%;
            display: block;
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
            border-collapse: collapse;
            overflow-x: hidden;
        }

        .tabela thead{
            background-color: #b1d34b;
        }

        .tabela thead tr th{
            text-align: center;
            color: white;
        }

        .tabela tbody tr:nth-child(even){
            background-color: #EEEEEE;
        }

        .tabela th,
        .tabela td{
            padding: 15px;
            border: 1px solid #CCCCCC;
            max-width: 200px;
        }
    </style>

    <body>
        <header>
            <div class="flex-container menu">
                <a href="https://www.unimed.coop.br/site/web/chapeco"><img src="img/logo.png" alt="Logo Unimed"></a>
                <div class="titulo-header">
                    <h1>Guia Farmacêutico</h1>
                </div>
            </div>
        </header>
        
        <div class="segundo-menu"></div>

        <div class="flex-container search-container">
            <div class="search-box">
                <input metodo="post" class="search-txt" type="text" id="pesquisa" name="" onkeyup="pesquisar()" placeholder="Pesquisar">
                <a class="search-btn" href="#">
                    <img src="img/lupa.png" alt="Lupa" height="20" width="20">
                </a>
            </div>
        </div>

        <div class="flex-container box">
            <table class="tabela">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prescrição</th>
                        <th>Item Padronizado</th>
                        <th>Sub-Classe</th>
                        <th>Classe</th>
                        <th>Espécie</th>
                        <th>Prescrição</th>
                        <th>OBS</th>
                        <th>Data da ultima modificação</th>
                    </tr>
                </thead>

                <tbody class="tb-content">
                    <tr>
                        <td>1</td>
                        <td>teste</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>teste</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>teste</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                        <td>teste1</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- <footer>
            <div class="rodape">
                Teste de rodape
            </div>
        </footer> -->
    </body>
</html>

<?php
    $conexao = oci_connect('DBAMV', 'p3p3l3gal', '192.168.2.143/MVPROD');
    echo"das";exit; 
    if (!$conexao) {
        $erro = oci_error();
        trigger_error(htmlentities($erro['message'], ENT_QUOTES), E_USER_ERROR);
    exit;
    }
?>