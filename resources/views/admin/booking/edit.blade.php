@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('booking_service.index') }}">Booking Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Booking</li>
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
        <form action="{{ route('booking_service.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kode Booking</label>
                <input type="text" name="kode_booking" class="form-control @error('kode_booking') is-invalid @enderror"
                    value="{{ old('kode_booking', $booking->kode_booking) }}" readonly>
                @error('kode_booking')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama', $booking->nama) }}">
                @error('nama')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Booking</label>
                <input type="date" name="tanggal_booking" class="form-control @error('tanggal_booking') is-invalid @enderror"
                    value="{{ old('tanggal_booking', $booking->tanggal_booking) }}">
                @error('tanggal_booking')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Polisi</label>
                <input type="text" name="nomor_polisi" class="form-control @error('nomor_polisi') is-invalid @enderror"
                    value="{{ old('nomor_polisi', $booking->nomor_polisi) }}">
                @error('nomor_polisi')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tipe Mobil</label>
                <input type="text" name="tipe_mobil" class="form-control @error('tipe_mobil') is-invalid @enderror"
                    value="{{ old('tipe_mobil', $booking->tipe_mobil) }}">
                @error('tipe_mobil')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun Mobil</label>
                <input type="number" name="tahun_mobil" class="form-control @error('tahun_mobil') is-invalid @enderror"
                    value="{{ old('tahun_mobil', $booking->tahun_mobil) }}">
                @error('tahun_mobil')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Paket Service</label>
                <select name="paket_service" class="form-control @error('paket_service') is-invalid @enderror">
                    <option value="Service Ringan" {{ $booking->paket_service == 'Service Ringan' ? 'selected' : '' }}>Service Ringan</option>
                    <option value="Service Berat" {{ $booking->paket_service == 'Service Berat' ? 'selected' : '' }}>Service Berat</option>
                    <option value="Ganti Oli" {{ $booking->paket_service == 'Ganti Oli' ? 'selected' : '' }}>Ganti Oli</option>
                </select>
                @error('paket_service')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                <a href="{{ route('booking_service.index') }}" class="btn btn-sm btn-warning">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
