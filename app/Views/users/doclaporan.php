<?= $this->include('template/header'); ?>

<header class="fs-xl mt-5 mb-4 text-center">
    <h2><b>DAFTAR LAPORAN</b></h2>
</header>

<!doctype html>
<html lang="en">


<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container-fluid">

        <h1>Menampilkan Data Dari Database Codeigniter 4</h1>
        <hr>

        <table class="table">
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>

            <?php
            foreach ($data as $biodata) {
                ?>
                <tr>
                    <td><?php echo $biodata['id'] ?></td>
                    <td><?php echo $biodata['nama']; ?></td>
                    <td><?php echo $biodata['email']; ?></td>
                    <td><?php echo $biodata['foto']; ?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
</body>

</html>

<?= $this->include('template/footer'); ?>