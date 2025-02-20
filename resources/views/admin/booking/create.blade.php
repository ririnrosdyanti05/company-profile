@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Booking Service</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('booking_service.index') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('booking_service.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Kode Booking</label>
                <input type="text" name="kode_booking" class="form-control @error('kode_booking') is-invalid @enderror" placeholder="Kode Booking">
                @error('kode_booking')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Pemilik">
                @error('nama')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Motor</label>
                <input type="text" name="jenis_motor" class="form-control @error('jenis_motor') is-invalid @enderror" placeholder="Jenis Motor">
                @error('jenis_motor')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor STNK</label>
                <input type="text" name="nomor_stnk" class="form-control @error('nomor_stnk') is-invalid @enderror" placeholder="Nomor STNK">
                @error('nomor_stnk')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun Keluaran</label>
                <input type="number" name="tahun_keluaran" class="form-control @error('tahun_keluaran') is-invalid @enderror" placeholder="Tahun Keluaran">
                @error('tahun_keluaran')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Terakhir Service</label>
                <input type="date" name="terakhir_service" class="form-control @error('terakhir_service') is-invalid @enderror">
                @error('terakhir_service')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis KB</label>
                <select name="jenis_kb" class="form-control @error('jenis_kb') is-invalid @enderror">
                    <option value="">Pilih Jenis KB</option>
                    <option value="KB 1">KB 1</option>
                    <option value="KB 2">KB 2</option>
                    <option value="KB 3">KB 3</option>
                    <option value="KB 4">KB 4</option>
                    <option value="Non KB">Non KB</option>
                </select>
                @error('jenis_kb')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Suku Cadang</label>
                <select name="suku_cadang_id" class="form-control @error('suku_cadang_id') is-invalid @enderror">
                    <option value="">Pilih Suku Cadang</option>
                    @foreach($suku_cadang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
                @error('suku_cadang_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Keluhan</label>
                <textarea name="keluhan" class="form-control @error('keluhan') is-invalid @enderror" placeholder="Masukkan keluhan (jika ada)"></textarea>
                @error('keluhan')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Provinsi</label>
                <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" placeholder="Provinsi">
                @error('provinsi')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Kota</label>
                <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" placeholder="Kota">
                @error('kota')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Lengkap"></textarea>
                @error('alamat')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Booking</label>
                <input type="date" name="tanggal_booking" class="form-control @error('tanggal_booking') is-invalid @enderror">
                @error('tanggal_booking')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jam Booking</label>
                <input type="time" name="jam_booking" class="form-control @error('jam_booking') is-invalid @enderror">
                @error('jam_booking')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                <button type="reset" class="btn btn-sm btn-warning">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection
