<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cortador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="frontCadastro">
        <div class="headerCadastro">
            <div class="backAreaCadastro">
                <a href="index.html"><button>Página inicial</button></a>
            </div>
            <div class="logoAreaCadastro">
                <img src="img/logo_jbs.png" alt="">
            </div>
            <div class="consultaAreaCadastro">
                <a href="consulta.php">
                    <button>Lista de Registro</button>
                </a>
            </div>
        </div><br><br><br><br>
        <div class="contentCadastro">
            <div class="formsArea">
                <div class="partEsquerda">
                    <h2>Faça aqui seu registro do cortador</h2>
                    <form action="processaCad.php" method="POST">
                        <label for="snAntigo" id="snAntigoLabel">S/N Antigo</label>
                        <input type="text" name="snAntigo", id="snAntigoInput">
                        <label for="datRetirada">Data da Reirada</label>
                        <input type="datetime-local" name="datRetirada", id="dataRetirada">
                        <br>
                        <br>
                        <label for="snNovo">S/N Novo</label>
                        <input type="text" name="snNovo" id="snNovo">
                        <label for="">Data instalação</label>
                        <input type="datetime-local" name="datInstalacao" id="dataInstalacao"><br><br>
                        <label for="impressora">Impressora</label>
                        <input type="text" name ="impressora" id="nomeImp">
                        <br><br>
                        <label for="desc">Desc. Serviço</label>
                        <br>
                        <textarea name="desc" id="descservice" cols="30" rows="4"></textarea>
                        <br>
                        <label for="obs">Obs.</label>
                        <input type="text" name="obs" id="obs"> <br>
                        <label for="analista">Analista</label>
                        <input type="text" name="analista" id="analistaNome"> <br> <br>

                        <input type="submit" name="submit" id="submitCadastro">
                    </form>
                </div>
                <div class="partDireita">
                    <img src="img/logo-branco-novo-jbs.png" alt="">

                </div>
            </div>
        </div>
        <div class="footerCadastro"></div>
    </div>
</body>
</html>