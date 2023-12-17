@extends('layout.base')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-white bg-primary">
                <h4 class="card-title">
                    Form Peminjaman Mobil
                </h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form method="get" action="{{ route('mobil.pinjam') }}" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-3">Tanggal Sewa</label>
                            <input type="date" class="form-control col-sm-9" name="from"
                                placeholder="Tanggal sewa mobil">
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3">Tanggal Kembali</label>
                            <input type="date" class="form-control col-sm-9" name="to"
                                placeholder="Tanggal pengembalian mobil">
                        </div>

                        <input type="submit" value="Cari Mobil">
                    </form>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Merk Mobil</th>
                                <th>No Plat</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset($item->gambar) }}" class="img-fluid" style="width:200px;"></td>
                                    <td>{{ $item->merk }}</td>
                                    <td>{{ $item->plat }}</td>
                                    <td>{{ $item->tarif }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('mobil.proses', ['id' => $item->id]) }}?from={{ request()->query('from') }}&to={{ request()->query('to') }}">
                                            <button>
                                                Pinjam
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
