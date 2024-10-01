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
  <title>Exclusão DE CADASTRO</title>
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

      $id = $_POST['id'];
      $nome = $_POST['nome'];




      $sql = "DELETE from `pessoas`  WHERE cod_pessoa = $id";
      if (mysqli_query($conn, $sql)) {
        mensagem("$nome EXCLUÍDO com sucesso!", 'success');
      } else
        mensagem("$nome não foi EXCLUÍDO!", 'danger');

      ?>

      <a
        href="pesquisa.php"
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