<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $snAntigo = $_POST['snAntigo'];
    $datRetirada = $_POST['datRetirada'];
    $snNovo = $_POST['snNovo'];
    $datInstalacao = $_POST['datInstalacao'];
    $impressora = $_POST['impressora'];
    $descService = $_POST['desc']; 
    $obs = $_POST['obs'];
    $analista = $_POST['analista'];

    $sql = "INSERT INTO cortadores (snAntigo, datRetirada, snNovo, datInstalacao, impressora, descService, obs, analista) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $snAntigo, $datRetirada, $snNovo, $datInstalacao, $impressora, $descService, $obs, $analista);

    if ($stmt->execute()) {
        echo "Registro salvo com sucesso!";
        header("Location: consulta.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
