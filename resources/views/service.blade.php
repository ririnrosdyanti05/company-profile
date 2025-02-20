@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Form Service</h2>
    <form action="{{ route('service.store') }}" method="POST">
        @csrf

        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" required>

        <label for="suku_cadang">Suku Cadang</label>
        <select name="suku_cadang" class="form-control">
            <option value="">Pilih Suku Cadang</option>
            <option value="non_kb">Non KB / Tidak</option> <!-- Opsi baru -->
            @foreach ($suku_cadang as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
