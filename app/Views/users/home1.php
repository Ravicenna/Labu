<?= $this->include('template/header'); ?>
<style>
    /* Reset margin dan padding */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Kontainer Full View */
    .full-view-container {
        position: relative;
        width: 100%;
        height: 100vh;
        /* Tinggi penuh viewport */
        background: url('https://cdn.antaranews.com/cache/1200x800/2023/03/03/IMG-20230303-WA0014.jpg') no-repeat center center;
        background-size: cover;
    }

    /* Div tombol */
    .j-container {
        position: absolute;
        top: 50%;
        left: 5%;
        transform: translateY(-50%);
        /* Pastikan berada di tengah secara vertikal */
    }

    /* Div teks */
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
        font-size: 3rem;
        margin-bottom: 1px;
    }

    .content p {
        font-size: 1.2rem;
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
        padding-left: 15px;
        padding-right: 17px;
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
    }

    .tombolLapor:hover {
        background-color: rgb(103, 28, 14);
        transition: all 0.5ms;
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
    }

    /* end of hero kawan:( */
    .bd-card {
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
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
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
        /* Zoom pada card */
        background-color: #FF4500;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);
    }

    .card:hover .card-image img {
        transform: scale(1.1);
        /* Zoom-in pada gambar */
    }
</style>
<div class="full-view-container">
    <div class="full-view-container">
        <div class="j-container">
        </div>
        <div class="content">
            <h1><b>Selamat Datang</b></h1>
            <p>Website Perpustakaan Laporkan Buku!</p>
            <button class="tombolLapor">Laporkan!</button>
        </div>
    </div>
    <svg class="svg-front" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FF4500" fill-opacity="1"
            d="M0,224L80,234.7C160,245,320,267,480,282.7C640,299,800,309,960,304C1120,299,1280,277,1360,266.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
</div>
<!--end hero-->
<section class="bd-card">
    <div class="container my-4">
        <div class="row g-4">
            <!-- Card siji -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://asset.kompas.com/crops/MDKtGB-Qbs2L0FBC7bOlWcb5VeY=/65x65:865x599/1200x800/data/photo/2017/06/28/1265845835.jpg"
                        class="card-img-top" alt="Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Judul Card 1</h5>
                        <p class="card-text">Deskripsi singkat untuk card pertama.</p>
                    </div>
                </div>
            </div>
            <!-- Card loro -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://asset.kompas.com/crops/MDKtGB-Qbs2L0FBC7bOlWcb5VeY=/65x65:865x599/1200x800/data/photo/2017/06/28/1265845835.jpg"
                        class="card-img-top" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Card 2</h5>
                        <p class="card-text">Deskripsi singkat untuk card kedua.</p>
                    </div>
                </div>
            </div>
            <!-- Card telu -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://asset.kompas.com/crops/MDKtGB-Qbs2L0FBC7bOlWcb5VeY=/65x65:865x599/1200x800/data/photo/2017/06/28/1265845835.jpg"
                        class="card-img-top" alt="Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Judul Card 3</h5>
                        <p class="card-text">Deskripsi singkat untuk card ketiga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--https://cdn.antaranews.com/cache/1200x800/2023/03/03/IMG-20230303-WA0014.jpg-->
<?= $this->include('template/footer'); ?>