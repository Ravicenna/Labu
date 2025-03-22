<?= $this->include('template/header'); ?>

<header class="fs-xl mt-5 mb-4 text-center">
    <h2><b>DAFTAR LAPORAN</b></h2>
</header>

<div class="container-md">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Masalah</th>
                    <th scope="col">Bukti</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $file): ?>
                    <tr>
                        <th scope="row"><?= $file['id']; ?></th>
                        <td colspan="2"><?= $file['email']; ?></td>
                        <td><?= $file['buku']; ?></td>
                        <td><?= $file['jenis']; ?></td>
                        <td><?= $file['foto']; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


</body>

</html>

<?= $this->include('template/footer'); ?>