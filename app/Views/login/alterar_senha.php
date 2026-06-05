<h2>Alteração Obrigatória de Senha</h2>

<?php if(session()->getFlashdata('erro')): ?>
    <p><?= session()->getFlashdata('erro') ?></p>
<?php endif; ?>

<form method="post"
      action="<?= base_url('alterar-senha/salvar') ?>">

    <label>Nova Senha</label>
    <br>
    <input
        type="password"
        name="nova_senha"
        required>

    <br><br>

    <label>Confirmar Senha</label>
    <br>
    <input
        type="password"
        name="confirmar_senha"
        required>

    <br><br>

    <button type="submit">
        Salvar Nova Senha
    </button>

</form>