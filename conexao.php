<?php
$server = "localhost";
$user = "root";
$pass = '';
$bd = "cadastroCUPX";

if ($conn = mysqli_connect($server, $user, $pass, $bd)) {

} else
    echo "Erro!";

function mensagem($texto, $tipo)
{
    echo "<div class='alert alert-$tipo' role='alert'>
                   $texto
          </div>";
}

function mostra_data($ultima_coleta)
{
    $d = explode("-", "$ultima_coleta");
    $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
    return $escreve;
}
?>