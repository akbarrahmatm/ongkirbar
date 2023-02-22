<?= $this->extend('template/index'); ?>

<?= $this->section('meta'); ?>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="<?= base_url() ?>" />
    <meta name="twitter:title" content="OngkirBar" />
    <meta name="twitter:description" content="OngkirBar adalah sebuah aplikasi berbasis web yang dapat menghitung Ongkos Kirim anda." />
    <meta name="twitter:image" content="<?= base_url('assets/img/seo.png') ?>"/>

    <!-- Meta Tag -->
    <meta name="description" content="OngkirBar adalah sebuah aplikasi berbasis web yang dapat menghitung Ongkos Kirim anda.">

    <!-- SEO OpenGraph -->
    <meta name="og:title" property="og:title" content="OngkirBar">
    <meta property="og:description" content="OngkirBar adalah sebuah aplikasi berbasis web yang dapat menghitung Ongkos Kirim anda." />
    <meta property="og:image" content="<?= base_url('assets/img/seo.png') ?>" />
    <meta property="og:url" content="<?= base_url()?>" />
    <meta property="og:locale" content="id" />
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="jumbotron text-center">
            <div class="jumbotron-body">
                <h1 class="jumbo-title">OngkirBar</h1>
                <p class="jumbo-text">OngkirBar adalah sebuah aplikasi berbasis web yang dapat menghitung <strong>Ong</strong>kos <strong>Kir</strong>im anda.</p>
                <div class="d-grid">
                <a class="btn jumbo-btn"  href="<?= base_url('ongkir') ?>">Mulai Hitung Ongkir</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>