<?= $this->include('template/headerAdmin'); ?>

<body>
    <h2 class="fs-2 text-center bg-light">Welcome Admin</h2>

    <div class="container mt-3">
        <div class="container">
            <h5 class="text-center bg-light">LAPORAN TERBARU</h5>
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
    </div>

    <div class="container">
        <div class="row">
            <p class="card-text">
                <?php foreach ($admin as $jawa): ?>
                    <tr>
                        <td><?= $jawa['username']; ?></td>
                    </tr>
                <?php endforeach; ?>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>