<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title . ' | OngkirBar' ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">   
    <script src="<?= base_url('assets/jquery/jquery-3.6.0.min.js') ?>"></script>
    <?= $this->renderSection('meta') ?>
</head>
<body>

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container p-3">
                <strong><a class="navbar-brand" href="<?= base_url() ?>">OngkirBar</a></strong>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link  <?= ($title == 'Home') ? "active" : false ?>" href="<?= base_url() ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?= ($title == 'Cek Ongkir') ? "active" : false ?>" href="<?= base_url('ongkir') ?>">Cek Ongkir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?= ($title == 'Cara Pakai') ? "active" : false ?>" href="<?= base_url('manual') ?>">Cara Pakai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?= ($title == 'Bantuan') ? "active" : false ?>" href="<?= base_url('bantuan') ?>">Bantuan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?= $this->renderSection('content') ?>
    </div>
    <footer>
        <div class="container text-center">
            Dibuat dengan 💕 oleh <a target="_blank" href="https://akbarrahmatm.my.id">@akbarrahmatm</a>
        </div>
    </footer>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>