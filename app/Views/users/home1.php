<?= $this->include('template/header'); ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .full-view-container {
        position: relative;
        width: 100%;
        height: 100vh;
        /* Tinggi penuh viewport */
        background: url('https://cdn.antaranews.com/cache/1200x800/2023/03/03/IMG-20230303-WA0014.jpg') no-repeat center center;
        background-size: cover;
    }

    .j-container {
        position: absolute;
        top: 50%;
        left: 5%;
        transform: translateY(-50%);
        /* Pastikan berada di tengah secara vertikal */
    }

    .content {
        position: absolute;
        top: 50%;
        left: 15%;
        transform: translateY(-50%);
        text-align: left;
        color: white;
        font-family: Arial, sans-serif;
    }

    .content h1 {
        font-size: 4rem;
        margin-bottom: 1px;
    }

    .content p {
        font-size: 2rem;
    }

    .svg-front {
        pointer-events: none;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        /* SVG memenuhi lebar layar */
        z-index: 2;
    }

    .tombolLapor {
        padding-left: 23px;
        padding-right: 25px;
        padding-top: 5px;
        padding-bottom: 6px;
        background-color: #FF4500;
        color: azure;
        margin: auto;
        border-radius: 5px;
        border-color: #FF4500;
        border: 1px;
        transition: 9ms;
        cursor: pointer;
        z-index: 5;
        font-size: 1.45rem;
    }

    .tombolLapor:hover {
        background-color: rgb(103, 28, 14);
        transition: transform 0.3s ease;
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
        transform: scale(0.89);
    }

    /* end of hero kawan:( */
    /*readME ;*/
    .bd-oren {
        background-color: #FF4500;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .card {
        background-color: rgb(255, 255, 255);
        /* Warna latar card */
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease, background-color 0.3s ease;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
        width: 300px;
        cursor: pointer;
        position: relative;
    }

    .card-image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .card-content {
        padding: 15px;
    }

    .card-content h3 {
        margin-bottom: 10px;
        font-size: 1.5rem;
        color: #FF6347;
    }

    .card-content p {
        font-size: 1rem;
        color: #d3d3d3;
    }

    .card:hover {
        transform: scale(1.07);
        background-color: #FF4500;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.7);
        color: #d3d3d3;
    }

    .card:hover .card-image img {
        transform: scale(1.1);
    }
</style>
<section class="bd-oren">
    <div class="full-view-container">
        <div class="full-view-container">
            <div class="j-container">
            </div>
            <div class="content">
                <h1><b>Selamat Datang</b></h1>
                <p>Website Perpustakaan Laporkan Buku!</p>
                <a href="<?= base_url('/login'); ?>"><button class="tombolLapor"><b>Login</b></button></a>
            </div>
        </div>
        <svg class="svg-front" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FF4500" fill-opacity="1"
                d="M0,224L80,234.7C160,245,320,267,480,282.7C640,299,800,309,960,304C1120,299,1280,277,1360,266.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>
</section>
<!--end hero-->
<section class="bd-oren">
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4 align-item-center">
            <!-- Card siji -->
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="card h-100">
                        <img src="https://asset.kompas.com/crops/MDKtGB-Qbs2L0FBC7bOlWcb5VeY=/65x65:865x599/1200x800/data/photo/2017/06/28/1265845835.jpg"
                            class="card-img-top" alt="Card 1">
                        <div class="card-body">
                            <h5 class="card-title mb-3 fw-semibold">Laporkan Buku</h5>
                            <p class="card-text" style="text-align: justify" ;>Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Eveniet eos
                                illum
                                ea, praesentium, molestiae amet adipisci maxime sed laboriosam facere accusamus optio
                                laborum recusandae iusto repellendus aut a non magni.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card loro -->
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="card h-100">
                        <img src="https://asset.kompas.com/crops/MDKtGB-Qbs2L0FBC7bOlWcb5VeY=/65x65:865x599/1200x800/data/photo/2017/06/28/1265845835.jpg"
                            class="card-img-top" alt="Card 2">
                        <div class="card-body">
                            <h5 class="card-title mb-3 fw-semibold">Judul Card 2</h5>
                            <p class="card-text">Deskripsi singkat untuk card kedua.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card telu -->
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="card h-100">
                        <img src="https://asset.kompas.com/crops/MDKtGB-Qbs2L0FBC7bOlWcb5VeY=/65x65:865x599/1200x800/data/photo/2017/06/28/1265845835.jpg"
                            class="card-img-top" alt="Card 3">
                        <div class="card-body">
                            <h5 class="card-title mb-3 fw-semibold">Judul Card 3</h5>
                            <p class="card-text">Deskripsi singkat untuk card ketiga.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FF4500" fill-opacity="1"
            d="M0,320L48,320C96,320,192,320,288,320C384,320,480,320,576,320C672,320,768,320,864,320C960,320,1056,320,1152,320C1248,320,1344,320,1392,320L1440,320L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
        <path fill="#ffffff" fill-opacity="1"
            d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,160C672,171,768,213,864,245.3C960,277,1056,299,1152,282.7C1248,267,1344,213,1392,186.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<section>
    <h5 class="display-5 text-center">Daftar Laporan Baru</h5>
    <div class="container">
        <hr>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Masalah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $file): ?>
                        <tr>
                            <th><?= $file['id']; ?></th>
                            <td><?= $file['nama']; ?></td>
                            <td><?= $file['buku']; ?></td>
                            <td><?= $file['jenis']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
</section>

<br>
<br>
<!--https://cdn.antaranews.com/cache/1200x800/2023/03/03/IMG-20230303-WA0014.jpg-->
<?= $this->include('template/footer'); ?>