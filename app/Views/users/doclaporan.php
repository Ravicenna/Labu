<?= $this->include('template/header'); ?>

<header class="fs-xl mt-5 mb-4 text-center">
</header>

<header class="fs-xl mt-5 mb-4 text-center mb-5">
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
        <div class="input-group mb-3">
            <input type="email" class="form-control" id="email" name="email" required placeholder="email">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" id="nama" name="nama" required placeholder="nama"
                aria-label="Server">
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
        <div style="display: flex; justify-content: center;">
            <button type="submit" class="tombolKirim">Kirim!</button>
        </div>
        <style>
            .tombolKirim {
                padding-left: 43px;
                padding-right: 43px;
                padding-top: 7px;
                padding-bottom: 7px;
                background-color: #FF4500;
                color: floralwhite;
                border-radius: 6px;
                border-color: #FF4500;
                align-content: center;
                align-items: center;
                margin-bottom: 30px;
                margin-top: 9px;
            }

            .tombolKirim:hover {
                border-color: rgb(103, 28, 14);
                background-color: rgb(103, 28, 14);
                transition: transform 0.3s ease;
                box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
                transform: scale(0.89);
            }
        </style>
    </form>
</div>

<?= $this->include('template/footer'); ?>