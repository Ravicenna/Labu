<?= $this->include('template/header'); ?>

<header class="fs-xl mt-5 mb-4 text-center">
    <h2><b>Admin Home</b></h2>
</header>

<div class="container-md">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Masalah</th>
                    <th scope="col">Bukti</th>
                    <th scope="col" class="text-center">TimeStamp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $file): ?>
                    <tr>
                        <th scope="row"><?= $file['id']; ?></th>
                        <td><?= $file['email']; ?></td>
                        <td><?= $file['nama']; ?></td>
                        <td><?= $file['buku']; ?></td>
                        <td><?= $file['masalah']; ?></td>
                        <td><img src="<?= base_url($file['foto']) ?>" alt="" height="90px" width="80px"></td>
                        <td class="text-center"><?= $file['created']; ?></td>
                        <td>
                            <form action="/laporan/delete/<?= $file['id']; ?>" method="post" style="display:inline;">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->include('template/footer'); ?>