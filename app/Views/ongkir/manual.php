<?= $this->extend('template/index'); ?>


<?= $this->section('content'); ?>
    <div class="container mt-3">
        <h3>Cara Pakai</h3>
        <p>
            <ol>
                <li>Masuk ke halaman <a class="text-black" href="<?= base_url('ongkir') ?>">cek ongkir</a></li>
                <li>Pilih jasa pengiriman</li>
                <li>Pilih provinsi asal</li>
                <li>Pilih kota asal</li>
                <li>Pilih provinsi tujuan</li>
                <li>Pilih kota tujuan</li>
                <li>Masukkan berat (dalam gram)</li>
                <li>Klik cek ongkir</li>

            </ol>
        </p>
        
    </div>
<?= $this->endSection(); ?>