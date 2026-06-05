<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Empresa</title>
</head>
<body>

<h1>Cadastro de Empresa</h1>
<br>

<a href="<?= base_url('login') ?>">
    <button type="button">
        Voltar para Login
    </button>
</a>

<br><br>

<?php if(session()->getFlashdata('erro')): ?>
    <div>
        <strong><?= session()->getFlashdata('erro') ?></strong>
    </div>
    <br>
<?php endif; ?>

<?php if(session()->getFlashdata('sucesso')): ?>
    <div>
        <strong><?= session()->getFlashdata('sucesso') ?></strong>
    </div>
    <br>
<?php endif; ?>

<form method="post" action="<?= base_url('cadastro-empresa/salvar') ?>">

    <div>
        <label>Tipo da Empresa</label>
        <br>

        <select name="tipo_empresa" required>
            <option value="">Selecione</option>
            <option value="SALAO">Salão de Beleza</option>
            <option value="OFICINA">Oficina Mecânica</option>
            <option value="CLINICA">Clínica Médica / Odontológica</option>
        </select>
    </div>

    <br>

    <div>
        <label>Nome da Empresa</label>
        <br>

        <input
            type="text"
            name="nome_empresa"
            value="<?= old('nome_empresa') ?>"
            required>
    </div>

    <br>

    <div>
        <label>Nome Fantasia</label>
        <br>

        <input
            type="text"
            name="nome_fantasia"
            value="<?= old('nome_fantasia') ?>">
    </div>

    <br>

    <div>
        <label>Nome do Responsável</label>
        <br>

        <input
            type="text"
            name="nome_responsavel"
            value="<?= old('nome_responsavel') ?>"
            required>
    </div>

    <br>

    <div>
        <label>E-mail</label>
        <br>

        <input
            type="email"
            name="email_contato"
            value="<?= old('email_contato') ?>"
            required>
    </div>

    <br>

    <div>
        <label>Telefone</label>
        <br>

        <input
            type="text"
            name="telefone"
            value="<?= old('telefone') ?>"
            required>
    </div>

    <br>

    <div>
        <label>Tipo de Documento</label>
        <br>

        <select
            name="tipo_documento"
            id="tipo_documento"
            required>

            <option value="">Selecione</option>

            <option value="CPF">
                CPF
            </option>

            <option value="CNPJ">
                CNPJ
            </option>

        </select>
    </div>

    <br>

    <div id="campoCpf" style="display:none;">
        <label>CPF</label>
        <br>

        <input
            type="text"
            name="cpf"
            value="<?= old('cpf') ?>">
    </div>

    <div id="campoCnpj" style="display:none;">
        <label>CNPJ</label>
        <br>

        <input
            type="text"
            name="cnpj"
            value="<?= old('cnpj') ?>">
    </div>

    <br>

    <button type="submit">
        Cadastrar Empresa
    </button>

</form>

<script>

document
    .getElementById('tipo_documento')
    .addEventListener('change', function () {

        const cpf = document.getElementById('campoCpf');
        const cnpj = document.getElementById('campoCnpj');

        cpf.style.display = 'none';
        cnpj.style.display = 'none';

        if (this.value === 'CPF') {
            cpf.style.display = 'block';
        }

        if (this.value === 'CNPJ') {
            cnpj.style.display = 'block';
        }
    });

</script>

</body>
</html>