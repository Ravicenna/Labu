<?= $this->include('template/header'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-6 col-sm-6 mt-3 mb-3 align-item-center">
                <div class="pd-3 bg-primary text-center"> lorem</div>
            </div>
            <div class="col-md-6 col-xl-6 col-sm-6 mt-3 mb-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sequi officiis sint in maxime fugiat.
                    Consectetur, qui et. Excepturi doloribus impedit voluptatem dolor nostrum ipsa perferendis sapiente
                    quibusdam at optio.</p>
            </div>
        </div>
    </div>
    <br><br>
    <h3 class="text-center"><b>DAFTAR LAPORAN DIPROSES</b></h3>
    <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama</td>
                        <td>Jenis</td>
                        <td>Buku</td>
                        <td>Masalah</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $angka = 1; ?>
                    <?php foreach ($data as $key1): ?>
                        <tr>
                            <td><?= $angka; ?></td>
                            <td><?= $key1['nama']; ?></td>
                            <td><?= $key1['jenis']; ?></td>
                            <td><?= $key1['buku']; ?></td>
                            <td><?= $key1['masalah']; ?></td>
                        </tr>
                        <?php $angka++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</section>
<br>
<br>
<br>
<?= $this->include('template/footer'); ?>