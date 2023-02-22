<?= $this->extend('template/index'); ?>


<?= $this->section('content'); ?>
    <div class="container mt-3">
        <h3>Bantuan</h3>
        <p>
            <strong><u>Apa itu OngkirBar?</u></strong>
        </p>
        <p>OngkirBar adalah aplikasi berbasis web yang dikembangkan oleh <a class="text-black" target="_blank" href="https://akbarrahmatm.my.id">@akbarrahmatm</a>, pada intinya OngkirBar berfungsi sebagai alat/tools menghitung ongkos kirim.</p>
        <p>
            <strong><u>Apakah Harga Ongkir Di OngkirBar Sesuai Dengan Yang Ada Di Dunia Nyata?</u></strong>
        </p>
        <p>Ya, karena kita menggunakan API yang akan menghitung langsung ongkos kirim secara akurat berdasarkan berat yang ada</p>
        <p id="why">
            <strong><u>Kok cuma tersedia POS Indonesia, TIKI, Dan JNE?</u></strong>
        </p>
        <p><img src="<?= base_url('assets/img/Screenshot 2022-08-24 191821.jpeg') ?>" width="50%" class="mb-1" alt="Paket yang kita punya"> <br> Untuk sementara, kami hanya akan menggunakan 3 jasa pengiriman tersebut karena API yang kita punya merupakan paket yang gratis, jadi mohon maaf belum bisa cek semua jasa pengiriman. </p>
        <p>
            <strong><u>OngkirBar aman gak?</u></strong>
        </p>
        <p>Ya, kita tidak mengambil informasi dari pengguna sama sekali, jadi OngkirBar aman banget kok.</p>
    </div>
<?= $this->endSection(); ?>