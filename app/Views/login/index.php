<h2>Login do Sistema</h2>

<?php if(session()->getFlashdata('erro')): ?>
    <p><?= session()->getFlashdata('erro') ?></p>
<?php endif; ?>

<form method="post" action="<?= base_url('login/entrar') ?>">

    <label>E-mail</label>
    <input
        type="email"
        name="email"
        required>

    <br><br>

    <label>Senha</label>
    <input
        type="password"
        name="senha"
        required>

    <br><br>

    <button type="submit">
        Entrar
    </button>

</form>

<br>

<a href="<?= base_url('cadastro-empresa') ?>">
    <button type="button">
        Cadastrar Empresa
    </button>
</a>