<?= $this->extend('template/index'); ?>


<?= $this->section('content'); ?>
    <div class="container mt-3">
        <a class="btn btn-primary" href="<?= base_url('ongkir') ?>">Kembali</a>
        <button onclick="saveAsPng()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Save As Image
        </button>
        <div id="result">
        <div class="card my-3" style="min-height: 60vh;">
            <div class="card-header">
                Hasil Cek Ongkir
            </div>
            <div class="card-body">
                <ul>
                    <li>Asal : <?= $origin['province'] ?> (<?= $origin['city_name'] ?>) (<?= $origin['postal_code'] ?>)</li>
                    <li>Tujuan : <?= $destination['province'] ?> (<?= $destination['city_name'] ?>) (<?= $destination['postal_code'] ?>)</li>
                    <li>Berat Barang (Gram) : <?= $weight ?> gram</li>
                    <li>Kurir : <?= strtoupper($courier) ?></li>
                    
                </ul>
                <p>Service, Estimasi, Dan Harga :</p>
                <hr>
                <?php foreach($results as $data) : ?>
                    <?php foreach ($data["costs"] as $cost) : ?>
                    <div class="service">
                            <h5><?= $cost['service'] ?></h5>
                            <small><?= $cost['description'] ?></small>
                            <?php foreach($cost['cost'] as $dt_cost) : ?>
                                <p>Harga : Rp. <?= number_format($dt_cost['value']) ?></p>
                                <p>Waktu Sampai (Estimasi) :  <?= ($dt_cost['etd'] == '') ? "-" : $dt_cost['etd'] ?> Hari</p>
                            <?php endforeach ?>
                        <hr>
                    </div>
                    <?php endforeach ?>
                <?php endforeach ?>
            </div>

            <div class="card-footer">
                Data Diambil Pada : <?= date("d M Y H:i:s") ?>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Save To Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Untuk save / download, klik kanan atau kalau di mobile tekan bagian gambar lalu save as image</p>
                <div id="output"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
    <script>
        function saveAsPng() {
            let div =
                document.getElementById('result');
            html2canvas(div).then(
                function (canvas) {
                    document
                    .getElementById('output')
                    .appendChild(canvas);
            })
        }

        
    </script>
<?= $this->endSection(); ?>