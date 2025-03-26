<?= $this->include('template/header'); ?>

<header class="fs-xl mt-5 mb-4 text-center">
    <h2><b>DAFTAR LAPORAN pppppp</b></h2>
</header>

<div class="container-md">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Masalah</th>
                    <th scope="col">Bukti</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $k = 1;
                foreach ($data as $file): ?>
                    <tr>
                        <th scope="row"><?= $k; ?></th>
                        <td><?= $file['email']; ?></td>
                        <td><?= $file['buku']; ?></td>
                        <td><?= $file['masalah']; ?></td>
                        <td><?= $file['foto']; ?></td>
                    </tr>
                    <?php
                    $k++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<header class="fs-xl mt-5 mb-4 text-center">
    <h2><b>Input Data Laporan</b></h2>
</header>
<div class="container-md">
    <!--Modal-->
    <form action="/laporan/store" method="post" onsubmit="return validateEmail()">
        <div id="emailAlert" class="alert alert-danger" style="display:none;"></div>
        <script>
            function validateEmail() {
                const emailInput = document.getElementById('email').value;
                const alertDiv = document.getElementById('emailAlert');
                if (!emailInput.endsWith('@mhs.dinus.ac.id')) {
                    alertDiv.innerText = 'Email must be from the domain mhs.dinus.ac.id';
                    alertDiv.style.display = 'block';
                    return false;
                }
                alertDiv.style.display = 'none'; // Hide alert if valid
                return true;
            }
        </script>
        <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" required placeholder="email">
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" id="nama" name="nama" required placeholder="nama">
        </div>
        <div class="mb-1">
            <input type="text" class="form-control" id="buku" name="buku" required placeholder="buku">
        </div>
        <div class="mb-1">
            <input type="text" class="form-control" id="jenis" name="jenis" required placeholder="jenis keluhan">
        </div>
        <div class="mb-1">
            <textarea class="form-control" id="masalah" name="masalah" required placeholder="masalah"></textarea>
        </div>
        <div class="mb-1">
            <input type="file" class="form-control" id="bukti" name="bukti" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->include('template/footer'); ?>