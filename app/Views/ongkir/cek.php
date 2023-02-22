<?= $this->extend('template/index'); ?>


<?= $this->section('content'); ?>
    <div class="container mt-3">
    <h3>Cek Ongkos Kirim</h3>
    <?php if(!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>
    <form action="<?= base_url('ongkir/cek') ?>" method="post">
        <div class="form-label" class="form-group mb-3">
            <label for="kurir">Nama Kurir :</label>
            <select class="form-select" name="courier">
                <option selected>Pilih kurir</option>
                <option value="jne">JNE</option>
                <option value="tiki">TIKI</option>
                <option value="pos">POS Indonesia</option>
            </select>
            <small>Kenapa cuma JNE/TIKI/Pos Indonesia? <a class="text-black" href="<?= base_url('bantuan#why') ?>">cek alasannya</a></small>
        </div>
        
        <div class="form-group mb-3">
            <label class="form-label" for="origin">Asal :</label>
            <div class="input-group">
                <span class="input-group-text">Provinsi</span>
                <select id="origin-province" class="form-select" name="origin">
                    <option selected>Pilih Provinsi Asal</option>
                    <?php foreach($province as $dataprovince) :  ?>
                        <option value="<?= $dataprovince['province_id'] ?>"><?= $dataprovince['province'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>  
            <div class="input-group">
                <span class="input-group-text">Kota</span>
                <select id="origin-city" class="form-select" name="origin-city"></select>
            </div>            
        </div>



        <div class="form-group mb-3">
            <label class="form-label" for="destination">Tujuan :</label>
            <div class="input-group">
                <span class="input-group-text">Provinsi</span>
                <select id="destination-province" class="form-select" name="destination-province">
                    <option selected>Pilih Provinsi Tujuan</option>
                    <?php foreach($province as $dataprovince) :  ?>
                        <option value="<?= $dataprovince['province_id'] ?>"><?= $dataprovince['province'] ?></option>
                    <?php endforeach ?>
                </select>
                
            </div>
            <div class="input-group">
                
                <span class="input-group-text">Kota</span>
                <select id="destination-city" class="form-select" name="destination-city"></select>
            </div>
            
        </div>



        <div class="form-group mb-3">
            <label for="weight">Berat (Dalam Gram)</label>
            <input class="form-control" type="text" name="weight" placeholder="Berat (gram)">
            <small>Note : 1000 gram = 1 kg</small>
        </div>
        <div class="form-group mb-3">
            <input class="btn btn-primary mb-3" type="submit" value="Hitung ongkir">
        </div>
    </form>
    </div>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
<?= $this->endSection(); ?>