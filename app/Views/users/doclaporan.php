<?= $this->include('template/header'); ?>

<header class="fs-xl mt-5 mb-4 text-center">
    <h2><b>DAFTAR LAPORAN</b></h2>
</header>
<main>
    <div class="wadahTabel">
        <div class="container">
            <table class="table table-striped mb-5">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($k = 1; $k <= 12; $k++) { ?>
                        <tr class="text-center">
                            <th scope="row"><?= $k; ?></th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?= $this->include('template/footer'); ?>