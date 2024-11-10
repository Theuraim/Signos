<?php include('layouts/header.php'); ?>

<?php

$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");

echo "<div id='central-content'>";
echo "<div class='container mt-4'>";
foreach ($signos->signo as $signo) {
    if (checarSigno($data_nascimento, $signo->dataInicio, $signo->dataFim)) {
        echo "<h1 style = 'color: #ffff;'>Seu Signo: {$signo->signoNome}</h1>";
        echo "<p>{$signo->descricao}</p>";
        break;
    }
}

function checarSigno($data_nascimento, $dataInicio, $dataFim) {
    
    $dataNascimentoFormatada = date("m-d", strtotime($data_nascimento));
    $dataInicioZ = DateTime::createFromFormat('d/m', $dataInicio)->format('m-d');
    $dataFimZ = DateTime::createFromFormat('d/m', $dataFim)->format('m-d');

    
    echo "<script>console.log('Valor da data nascimento: " . $dataNascimentoFormatada . "' );</script>";
    echo "<script>console.log('Valor da data inicio zodiaco: " . $dataInicioZ . "' );</script>";
    echo "<script>console.log('Valor da data fim zodiaco: " . $dataFimZ . "' );</script>";
    return ($dataNascimentoFormatada >= $dataInicioZ && $dataNascimentoFormatada <= $dataFimZ);
}

echo "<a href='index.php' class='btn btn-primary mt-3'>Voltar</a>";
echo "</div>";
echo "</div>";
echo "<script src='assets\js\script.js'></script>";
?>
<?php include('layouts/header.php'); ?>
