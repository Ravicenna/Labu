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
        /* Gambar memenuhi area */
    }

    /* Div tombol */
    .j-container {
        position: absolute;
        /* Posisikan tombol di dalam kontainer */
        top: 50%;
        /* Vertikal: Tengah */
        left: 5%;
        /* Horizontal: Kiri */
        transform: translateY(-50%);
        /* Pastikan berada di tengah secara vertikal */
    }

    /* Div teks */
    .content {
        position: absolute;
        /* Posisi teks di dalam kontainer */
        top: 50%;
        /* Vertikal: Tengah */
        left: 15%;
        /* Horizontal: Sebelah kanan tombol */
        transform: translateY(-50%);
        text-align: left;
        /* Rata kiri untuk teks */
        color: white;
        font-family: Arial, sans-serif;
    }

    .content h1 {
        font-size: 3rem;
    }

    .content p {
        font-size: 1.2rem;
    }

    .svg-front {
        pointer-events: none;
        position: absolute;
        bottom: 0;
        /* Tetap di bagian bawah */
        left: 0;
        width: 100%;
        /* SVG memenuhi lebar layar */
        z-index: 2;
        /* SVG berada di atas gambar */
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





https://cdn.antaranews.com/cache/1200x800/2023/03/03/IMG-20230303-WA0014.jpg
<?= $this->include('template/footer'); ?>