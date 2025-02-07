<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h2, h4 {
            color: rgb(114, 4, 4);
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        button {
            background-color: red;
            border: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">
            DATA BOOKING
        </h2>
        <form action="/kunjungan/store" method="POST">
            @csrf
            <!-- Dropdown Provinsi -->
            <div class="mb-3">
                <!-- Input Nama -->
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <!-- Pilihan Jenis Kelamin -->
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <!-- Input Pemilik -->
                <label for="pemilik" class="form-label">Pemilik Kendaraan</label>
                <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Masukkan Nama Pemilik Kendaraan" required>
            </div>
            <div class="mb-3">
                <!-- Pilihan Jenis Motor -->
                <label for="jenis_motor" class="form-label">Jenis Motor</label>
                <select class="form-select" id="jenis_motor" name="jenis_motor" required>
                    <option value="" selected disabled>Pilih Jenis Motor</option>
                    <option value="Honda Beat">Honda Beat</option>
                    <option value="Honda Vario">Honda Vario</option>
                    <option value="Honda Scoopy">Honda Scoopy</option>
                    <option value="Honda PCX">Honda PCX</option>
                    <option value="Honda CBR">Honda CBR</option>
                </select>
            </div>
            <div class="mb-3">
                <!-- Input Keluhan -->
                <label for="keluhan" class="form-label">Keluhan</label>
                <textarea class="form-control" id="keluhan" name="keluhan" rows="3" placeholder="Masukkan keluhan atau masalah pada motor Anda"></textarea>
            </div>
            <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <select class="form-select" id="provinsi" name="provinsi" required>
                    <option value="" selected disabled>Pilih Provinsi</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Banten">Banten</option>
                </select>
            </div>

            <!-- Dropdown Kota -->
            <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <select class="form-select" id="kota" name="kota" required>
                    <option value="" selected disabled>Pilih Kota</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Tangerang">Tangerang</option>
                </select>
            </div>

            <!-- Input Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
            </div>

            <!-- Waktu Kedatangan -->
            <div class="mb-3">
                <h4 class="text-center">
                    WAKTU KEDATANGAN
                </h4>
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="date" class="form-control" id="jadwal" name="jadwal" required>
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="time" class="form-control" id="jam" name="jam" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn w-100" style="background-color: rgb(114, 4, 4); color: white; border: none;">Submit</button>
            <br>
            <br>
            <a href="javascript:history.back()" class="btn w-100" style="background-color: rgb(114, 4, 4); color: white; border: none;">Back</a>
        </form>
    </div>
</body>
</html>
