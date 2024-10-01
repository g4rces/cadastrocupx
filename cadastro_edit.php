﻿<!doctype html>
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
    >
    <title>Atualização de Cadastro</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    >
</head>

<body>
    <?php
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);




    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Página de Cadastro</h1>
                <h2>Revise sempre as informações junto com o cadastrado</h2>
                <h3>CUPX</h3>


                <form
                    action="edit-script.php"
                    method="POST"
                >

                    <div class="mb-3">
                        <label
                            for="nome"
                            class="form-label"
                        >Nome completo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nome"
                            placeholder="Digite o nome completo"
                            required
                            value="<?php echo $linha['nome']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="data_nascimento"
                            class="form-label"
                        >Data de Nascimento</label>
                        <input
                            type="date"
                            class="form-control"
                            name="data_nascimento"
                            placeholder="dd/mm/aaaa"
                            required
                            value="<?php echo $linha['data_nascimento']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="rg"
                            class="form-label"
                        >RG</label>
                        <input
                            type="tel"
                            class="form-control"
                            name="rg"
                            pattern="[0-9]{8}-[0-9]{2}"
                            placeholder="Ex: 77777777-77"
                            required
                            value="<?php echo $linha['rg']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="cpf"
                            class="form-label"
                        >CPF</label>
                        <input
                            type="tel"
                            class="form-control"
                            name="cpf"
                            pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"
                            placeholder="Ex: 777.777.777-77"
                            required
                            value="<?php echo $linha['cpf']; ?>"
                        >
                    </div>

                    <div class="mb-3">
                        <label
                            for="telefone"
                            class="form-label"
                        >Telefone</label>
                        <input
                            type="tel"
                            class="form-control"
                            name="telefone"
                            pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}"
                            placeholder="Ex: 75 97777-7777"
                            required
                            value="<?php echo $linha['telefone']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="escolaridade"
                            class="form-label"
                        >Escolaridade</label>
                        <input
                            list="escolaridade"
                            name="escolaridade"
                            placeholder="Toque para selecionar"
                            required
                            value="<?php echo $linha['escolaridade']; ?>"
                        >
                        <datalist id="escolaridade">
                            <option value="Fundamental incompleto">
                            <option value="Fundamental completo">
                            <option value="Médio incompleto">
                            <option value="Médio completo">
                            <option value="Superior incompleto">
                            <option value="Superior completo">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label
                            for="endereco"
                            class="form-label"
                        >Endereço</label>
                        <input
                            type="text"
                            class="form-control"
                            name="endereco"
                            placeholder="Ex: Rua x, bairro y"
                            required
                            value="<?php echo $linha['endereco']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="endereco_num"
                            class="form-label"
                        >Número</label>
                        <input
                            type="text"
                            class="form-control"
                            name="endereco_num"
                            min="0"
                            max="999999"
                            placeholder="Número da casa"
                            required
                            value="<?php echo $linha['endereco_num']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="profissao"
                            class="form-label"
                        >Profissão</object></label>
                        <input
                            type="text"
                            class="form-control"
                            name="profissao"
                            placeholder="Ex: Técnico em Eletrônica"
                            required
                            value="<?php echo $linha['profissao']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="renda"
                            class="form-label"
                        >Renda Mensal</label>
                        <input
                            type="text"
                            class="form-control"
                            name="renda"
                            min="0"
                            max="99999"
                            placeholder="ex: 1800"
                            required
                            value="<?php echo $linha['renda']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="estado_civil"
                            class="form-label"
                        >Estado Civil:</label>
                        <input
                            list="estado_civil"
                            name="estado_civil"
                            placeholder="Toque para selecionar"
                            required
                            value="<?php echo $linha['estado_civil']; ?>"
                        >
                        <datalist id="estado_civil">
                            <option value="Solteiro">
                            <option value="Casado">
                            <option value="Separado">
                            <option value="Divorciado">
                            <option value="Viúvo">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label
                            for="moradia"
                            class="form-label"
                        >Situação de moradia</label>
                        <input
                            list="moradia"
                            name="moradia"
                            placeholder="Toque para selecionar"
                            required
                            value="<?php echo $linha['moradia']; ?>"
                        >
                        <datalist id="moradia">
                            <option value="PRÓPRIA">
                            <option value="ALUGADA">
                            <option value="CEDIDA">
                        </datalist><br>
                        <label
                            for="moradia_valor"
                            class="form-label"
                        >Valor do Aluguel ou Prestação</label>
                        <input
                            type="text"
                            class="form-control"
                            name="moradia_valor"
                            min="0"
                            max="99999"
                            placeholder="Valor do Aluguel ou prestação"
                            value="<?php echo $linha['moradia_valor']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="religiao"
                            class="form-label"
                        >Religião da Família</label>
                        <input
                            type="text"
                            class="form-control"
                            name="religiao"
                            placeholder="Ex: Umbanda"
                            value="<?php echo $linha['religiao']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="qtd_menbros"
                            class="form-label"
                        >Quantidade membros da família</label>
                        <input
                            type="text"
                            class="form-control"
                            name="qtd_membros"
                            min="0"
                            max="20"
                            placeholder="quantidade de membros"
                            required
                            value="<?php echo $linha['qtd_membros']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="auxilio"
                            class="form-label"
                        >Recebe Auxílio do governo ?</label>
                        <input
                            list="auxilio"
                            name="auxilio"
                            placeholder="Toque para selecionar"
                            required
                            value="<?php echo $linha['auxilio']; ?>"
                        >
                        <datalist id="auxilio">
                            <option value="Sim">
                            <option value="Não">
                        </datalist><br>
                        <label
                            for="qual_auxilio"
                            class="form-label"
                        >Se sim, qual auxílio ?</label>
                        <input
                            type="text"
                            class="form-control"
                            name="qual_auxilio"
                            placeholder="Ex: Bolsa Família"
                            value="<?php echo $linha['qual_auxilio']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="membro_cuidado"
                            class="form-label"
                        >Tem na família membros que necessitem de cuidados especiais ?</label>
                        <input
                            list="membro_cuidado"
                            name="membro_cuidado"
                            placeholder="Toque para selecionar"
                            required
                            value="<?php echo $linha['membro_cuidado']; ?>"
                        >
                        <datalist id="membro_cuidado">
                            <option value="Sim">
                            <option value="Não">
                        </datalist><br>
                        <label
                            for="qual_membro_cuidado"
                            class="form-label"
                        >Se sim, quais?</label>
                        <input
                            type="text"
                            class="form-control"
                            name="qual_membro_cuidado"
                            placeholder="Ex: Tio Avô"
                            value="<?php echo $linha['qual_membro_cuidado']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="membro_vicio"
                            class="form-label"
                        >Tem na familía membros com algum tipo de vício?</label>
                        <input
                            list="membro_vicio"
                            name="membro_vicio"
                            placeholder="Toque para selecionar"
                            required
                            value="<?php echo $linha['membro_vicio']; ?>"
                        >
                        <datalist id="auxilio">
                            <option value="Sim">
                            <option value="Não">
                        </datalist><br>
                        <label
                            for="qual_membro_vicio"
                            class="form-label"
                        >Se sim, quais?</label>
                        <input
                            type="text"
                            class="form-control"
                            name="qual_membro_vicio"
                            placeholder="Ex: primo"
                            value="<?php echo $linha['qual_membro_vicio']; ?>"
                        >
                        <div class="mb-3">
                            <label
                                for="ultima_coleta"
                                class="form-label"
                            >Última Coleta</label>
                            <input
                                type="date"
                                class="form-control"
                                name="ultima_coleta"
                                placeholder="dd/mm/aaaa"
                                required
                                value="<?php echo $linha['ultima_coleta']; ?>"
                            >
                        </div>
                        <div class="mb-3">
                            <h2>Assumo a Responsabilidade pelas informações aqui prestadas</h2>
                        </div>
                    </div>



                    <div class="mb-3">
                        <input
                            type="submit"
                            class="btn btn-success"
                            value="Salvar Alterações"
                        >
                        <input
                            type="hidden"
                            name="id"
                            value="<?php echo $linha['cod_pessoa'] ?>"
                        >

                        <a
                            href="index.php"
                            class="btn btn-primary"
                        > página inicial</a>

                    </div>
            </div>

        </div>

        </form>
    </div>
    </div>
    </div>

</body>

</html>