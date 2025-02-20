{{-- @extends('adminlte::page')

@section('title', 'Form Booking Service')

@section('content_header')
    <h1>Form Booking Service</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('booking_service.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomor_polisi">Nomor Polisi</label>
                    <input type="text" name="nomor_polisi" class="form-control" id="nomor_polisi" required>
                </div>
                <div class="form-group">
                    <label for="nomor_rangka">Nomor Rangka</label>
                    <input type="text" name="nomor_rangka" class="form-control" id="nomor_rangka" required>
                </div>
                <div class="form-group">
                    <label for="model_unit">Model Unit</label>
                    <input type="text" name="model_unit" class="form-control" id="model_unit" required>
                </div>
                <div class="form-group">
                    <label for="model_transmisi">Model Transmisi</label>
                    <input type="text" name="model_transmisi" class="form-control" id="model_transmisi" required>
                </div>
                <div class="form-group">
                    <label for="tahun_kendaraan">Tahun Kendaraan</label>
                    <input type="number" name="tahun_kendaraan" class="form-control" id="tahun_kendaraan" required>
                </div>
                <div class="form-group">
                    <label for="stnk_berlaku">STNK Berlaku S/D</label>
                    <input type="date" name="stnk_berlaku" class="form-control" id="stnk_berlaku" required>
                </div>
                <div class="form-group">
                    <label for="no_telepon">No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control" id="no_telepon" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="kode_booking">Kode Booking</label>
                    <input type="text" name="kode_booking" class="form-control" id="kode_booking" required>
                </div>
                <div class="form-group">
                    <label for="paket_service">Paket Service</label>
                    <select name="paket_service" class="form-control" id="paket_service" required>
                        <option value="Service Berkala">Service Berkala</option>
                        <option value="Service Besar">Service Besar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_booking">Tanggal Booking</label>
                    <input type="date" name="tanggal_booking" class="form-control" id="tanggal_booking" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Form Booking Service Page Loaded!');
    </script>
@stop --}}
