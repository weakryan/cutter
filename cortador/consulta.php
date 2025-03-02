<?php 
include 'config.php';

$sql = "SELECT snAntigo, datRetirada, snNovo, datInstalacao, impressora,descService, obs, analista FROM cortadores ORDER BY datInstalacao DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Registros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="frontConsulta">
        <div class="headerConsulta">
            <div class="backAreaConsulta">
                <a href="index.html">
                    <button>Página inicial</button>
                </a>
            </div>
            <div class="logoAreaConsulta">
                <img src="img/logo_jbs.png" alt="">
            </div>
            <div class="cadastroAreaConsulta">
                <a href="cadastro.php">
                    <button>Cadastro de Cortador</button>
                </a>
            </div>
        </div>
        <div class="contentConsulta">
            <div class="listaAreaConsulta">
                <table class="registerConsulta">
                    <thead>
                        <tr>
                            <th>Impressora</th>
                            <th>S/N Novo</th>
                            <th>Data Inst.</th>
                            <th>S/N Antigo</th>
                            <th>Data Ret.</th>
                            <th>Analista</th>
                            <th id="dscServ">Desc. Serviço</th>
                            <th>OBS.</th>
                        </tr>
                    </thead> 
                    <?php while ($row = $result->fetch_assoc()) : ?>
                    <tbody>
                        <tr>
                        <td class="dado01"> <?= $row['impressora'] ?> </td>
                        <td class="dado02"> <?= $row['snNovo'] ?> </td>
                        <td class="dado03"> <?= $row['datInstalacao'] ?> </td>
                        <td class="dado04"> <?= $row['snAntigo'] ?> </td>
                        <td class="dado05"> <?= $row['datRetirada'] ?> </td>
                        <td class="dado06"> <?= $row['analista'] ?> </td>
                        <td class="dado07"> <?= $row['descService'] ?> </td>
                        <td class="dadp08"> <?= $row['obs'] ?> </td>

                        </tr>
                    </tbody>
                    <?php endwhile; ?>
                </table> 
            </div>
        </div>
        <div class="footerConsulta"></div>
    </div>
</body>
</html>