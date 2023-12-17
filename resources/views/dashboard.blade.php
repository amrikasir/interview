@extends('layout.base')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-white bg-primary">
            <h4 class="card-title">
                Daftar Mobil
                <div class="float-right">
                    <a class="btn btn-success" href="tambah.php" role="button">Tambah</a>
                </div>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <td><img src="{{ $item->gambar }}" class="img-fluid" style="width:200px;"></td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->plat }}</td>
                            <td>{{ $item->tarif }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                {{-- <a class="btn btn-danger  btn-sm" href="proses.php?aksi=hapus&id=<?= $isi['id_mobil'];?>&gambar=<?= $isi['gambar'];?>" role="button">Hapus</a>   --}}
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