<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kunjungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Data Kunjungan</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Alamat</th>
                    <th>Jadwal</th>
                    <th>Jam</th>
                    <th>Suku Cadang</th> <!-- Tambahkan Kolom Baru -->
                </tr>
            </thead>
            <tbody>
                @foreach($kunjungan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->provinsi }}</td>
                        <td>{{ $item->kota }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jadwal }}</td>
                        <td>{{ $item->jam }}</td>
                        <td>
                            <ul>
                                @foreach($suku_cadang as $sc)
                                    <li>{{ $sc->nama }} - Rp{{ number_format($sc->harga, 0, ',', '.') }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
