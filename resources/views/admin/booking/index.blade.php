@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Booking Services</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('booking_service.create') }}" class="btn btn-sm btn-success">Tambah Booking</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Daftar Booking Service</h5>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Kode Booking</th>
                        <th>Nama</th>
                        <th>Tanggal Booking</th>
                        <th>Nomor Polisi</th>
                        <th>Tipe Mobil</th>
                        <th>Paket Service</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bookings as $key => $booking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><strong>{{ $booking->kode_booking }}</strong></td>
                        <td>{{ $booking->nama }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->tanggal_booking)->format('d M Y') }}</td>
                        <td>{{ $booking->nomor_polisi }}</td>
                        <td>{{ $booking->tipe_mobil }}</td>
                        <td>{{ $booking->paket_service }}</td>
                        <td>
                            @if($booking->status == 'Pending')
                                <span class="badge bg-warning">Pending</span>
                            @elseif($booking->status == 'Selesai')
                                <span class="badge bg-success">Selesai</span>
                            @else
                                <span class="badge bg-danger">Dibatalkan</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('booking_service.edit', $booking->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('booking_service.destroy', $booking->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus booking ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center">Belum ada booking service.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $bookings->links() }}  <!-- Pagination -->
        </div>
    </div>
</div>
@endsection
