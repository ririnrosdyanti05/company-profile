@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('booking_service.index') }}">Booking Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Booking</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('booking_service.index') }}" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detail Booking Service</h5>

        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <tr>
                        <th>Kode Booking</th>
                        <td>{{ $booking->kode_booking }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $booking->nama }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Booking</th>
                        <td>{{ \Carbon\Carbon::parse($booking->tanggal_booking)->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Polisi</th>
                        <td>{{ $booking->nomor_polisi }}</td>
                    </tr>
                    <tr>
                        <th>Tipe Mobil</th>
                        <td>{{ $booking->tipe_mobil }}</td>
                    </tr>
                    <tr>
                        <th>Tahun Mobil</th>
                        <td>{{ $booking->tahun_mobil }}</td>
                    </tr>
                    <tr>
                        <th>Paket Service</th>
                        <td>{{ $booking->paket_service }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if($booking->status == 'Pending')
                                <span class="badge bg-warning">Pending</span>
                            @elseif($booking->status == 'Selesai')
                                <span class="badge bg-success">Selesai</span>
                            @else
                                <span class="badge bg-danger">Dibatalkan</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('booking_service.edit', $booking->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ route('booking_service.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
