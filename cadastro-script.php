<!doctype html>
<html lang="en">

<head>
  <link
    rel="shortcut icon"
    type="imagex/png"
    href="C:\xampp\htdocs\cadastrocupx"
  >
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
    link
    rel="shortcut icon"
    type="imagex/png"
  >
  <title>CADASTRO</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
  >
</head>

<body>
  <div class="container">
    <div class="row">
      <?php

      include "conexao.php";


      $nome = $_POST['nome'];
      $data_nascimento = $_POST['data_nascimento'];
      $rg = $_POST['rg'];
      $cpf = $_POST['cpf'];
      $telefone = $_POST['telefone'];
      $escolaridade = $_POST['escolaridade'];
      $endereco = $_POST['endereco'];
      $endereco_num = $_POST['endereco_num'];
      $profissao = $_POST['profissao'];
      $renda = $_POST['renda'];
      $estado_civil = $_POST['estado_civil'];
      $moradia = $_POST['moradia'];
      $moradia_valor = $_POST['moradia_valor'];
      $religiao = $_POST['religiao'];
      $qtd_membros = $_POST['qtd_membros'];
      $auxilio = $_POST['auxilio'];
      $qual_auxilio = $_POST['qual_auxilio'];
      $membro_cuidado = $_POST['membro_cuidado'];
      $qual_membro_cuidado = $_POST['qual_membro_cuidado'];
      $membro_vicio = $_POST['membro_vicio'];
      $qual_membro_vicio = $_POST['qual_membro_vicio'];
      $ultima_coleta = $_POST['ultima_coleta'];


      $sql = "INSERT INTO `pessoas`(`nome`, `data_nascimento`, `rg`, `cpf`, `telefone`, `escolaridade`, `endereco`, `endereco_num`, `profissao`, `renda`, `estado_civil`, `moradia`, `moradia_valor`, `religiao`, `qtd_membros`, `auxilio`, `qual_auxilio`, `membro_cuidado`, `qual_membro_cuidado`, `membro_vicio`, `qual_membro_vicio`, `ultima_coleta`) VALUES ('$nome','$data_nascimento','$rg','$cpf','$telefone','$escolaridade','$endereco','$endereco_num','$profissao','$renda','$estado_civil','$moradia','$moradia_valor','$religiao','$qtd_membros','$auxilio ','$qual_auxilio ','$membro_cuidado','$qual_membro_cuidado','$membro_vicio','$qual_membro_vicio','$ultima_coleta')";

      if (mysqli_query($conn, $sql)) {
        mensagem("$nome cadastrado com sucesso!", 'success');
      } else
        mensagem("$nome não foi cadastrado!", 'danger');

      ?>

      <a
        href="cadastro.php"
        class="btn btn-primary"
      > Voltar</a>
      <a
        href="index.php"
        class="btn btn-primary"
        style="margin-top: 30px;"
      > página inicial</a>
    </div>
  </div>
</body>

</html>