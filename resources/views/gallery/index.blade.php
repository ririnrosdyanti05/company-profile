@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card border-secondary">
                    <div class="card-header" id="data-pesanan">Data gallerys
                        <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary" id="add-products" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead align="center">
                                    <tr>
                                        <th>No</th>
                                        <th>image</th>
                                        <th>description</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                @php $no = 1; @endphp
                                <tbody align="center">
                                    @foreach ($gallerys as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td align="center"><img src="{{ asset('/assets3/images/' . $item->gambar) }}"
                                                    style="width: 100px" alt="">
                                            </td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->aksi }}</td>
                                            <td>
                                                <form align="center" action="{{ route('gallery.destroy', $item->id) }}"
                                                    id="delete-data" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{ route('gallery.edit', $item->id) }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/16187/16187749.png"
                                                            style="" srcset="" width="20px">
                                                    </a>
                                                    <a href="{{ route('gallery.show', $item->id) }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/6804/6804049.png"
                                                            alt="" srcset="" width="20px">
                                                    </a>

                                                    <button class="btn btn-sm btn-outline-primary" type="submit"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data gallery ini?')">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/1214/1214428.png"
                                                            alt="" srcset="" width="20px"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
