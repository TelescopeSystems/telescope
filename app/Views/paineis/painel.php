<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Telescope Systems</title>

    <link rel="stylesheet"
    href="<?= base_url('assets/painel/style.css') ?>">

</head>

<body>

    <?= $this->include('paineis/layouts/sidebar') ?>

    <div class="main">

        <?= $this->include('paineis/layouts/navbar') ?>

        <div class="content">

            <?= $this->include('paineis/pages/dashboard') ?>

        </div>

    </div>

</body>

</html>