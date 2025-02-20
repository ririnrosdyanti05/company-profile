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
                <!-- Pilihan Pemilik Kendaraan -->
                <label for="pemilik" class="form-label">Pemilik Kendaraan</label>
                <select class="form-control" id="pemilik" name="pemilik" required>
                    <option value="">Pilih Pemilik Kendaraan</option>
                    <option value="sendiri">Sendiri</option>
                    <option value="orang_tua">Orang Tua</option>
                    <option value="keluarga">Keluarga</option>
                    <option value="saudara">Saudara</option>
                    <option value="kakak">Kakak</option>
                    <option value="adik">Adik</option>
                    <option value="bibi">Bibi</option>
                    <option value="mang">Om</option>
                    <option value="teman">Teman</option>
                </select>
            </div>
            <div class="mb-3">
                <!-- Pilihan Jenis Motor -->
                <label for="jenis_motor" class="form-label">Jenis Motor</label>
                <select class="form-select" id="jenis_motor" name="jenis_motor" required>
                    <option value="" selected disabled>Pilih Jenis Motor</option>
                    <option value="Honda Beat">Honda Beat</option>
                    <option value="Honda Beat Street">Honda Beat Street</option>
                    <option value="Honda Vario 125">Honda Vario 125</option>
                    <option value="Honda Vario 160">Honda Vario 160</option>
                    <option value="Honda Scoopy">Honda Scoopy</option>
                    <option value="Honda Genio">Honda Genio</option>
                    <option value="Honda PCX 160">Honda PCX 160</option>
                    <option value="Honda ADV 160">Honda ADV 160</option>
                    <option value="Honda CBR 150R">Honda CBR 150R</option>
                    <option value="Honda CBR 250RR">Honda CBR 250RR</option>
                    <option value="Honda CB150R">Honda CB150R</option>
                    <option value="Honda CB150X">Honda CB150X</option>
                    <option value="Honda Supra X 125">Honda Supra X 125</option>
                    <option value="Honda Revo">Honda Revo</option>
                    <option value="Honda Sonic 150R">Honda Sonic 150R</option>
                    <option value="Honda CRF150L">Honda CRF150L</option>
                    <option value="Honda CRF250L">Honda CRF250L</option>
                </select>
            </div>
            <div class="mb-3">
                <!-- Input STNK -->
                <label for="stnk" class="form-label">Nomor STNK</label>
                <input type="text" class="form-control" id="stnk" name="stnk" placeholder="Masukkan Nomor STNK" required>
            </div>
            <div class="mb-3">
                <!-- Pilihan Tahun Keluaran Motor -->
                <label for="tahun_keluaran" class="form-label">Tahun Keluaran Motor</label>
                <select class="form-select" id="tahun_keluaran" name="tahun_keluaran" required>
                    <option value="" selected disabled>Pilih Tahun Keluaran</option>
                    @for ($year = date('Y'); $year >= 2000; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-3">
                <!-- Input Terakhir Service -->
                <label for="terakhir_service" class="form-label">Terakhir Service</label>
                <input type="date" class="form-control" id="terakhir_service" name="terakhir_service" required>
            </div>
            <div class="mb-3">
                <!-- Pilihan KB atau Non KB -->
                <label for="jenis_kb" class="form-label">Jenis Service</label>
                <select class="form-select" id="jenis_kb" name="jenis_kb" required>
                    <option value="" selected disabled>Pilih Jenis Service</option>
                    <option value="KB 1">KB 1</option>
                    <option value="KB 2">KB 2</option>
                    <option value="KB 3">KB 3</option>
                    <option value="KB 4">KB 4</option>
                    <option value="Non KB">Non KB</option>
                </select>
            </div>
            <div class="mb-3">
                <!-- Dropdown Pilihan Suku Cadang -->
                <label for="suku_cadang" class="form-label">Suku Cadang</label>
                <select class="form-select" id="suku_cadang" name="suku_cadang" required>
                    <option value="" selected disabled>Pilih Suku Cadang</option>
                        @foreach($suku_cadang as $sc)
                    <option value="{{ $sc->id }}">{{ $sc->nama_suku_cadang }}</option>
                         @endforeach
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
