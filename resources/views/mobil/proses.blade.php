@extends('layout.base')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-white bg-primary">
                <h4 class="card-title">
                    Form Data Peminjam
                </h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form method="post" action="{{ route('mobil.finish', ['id' => $mobil->id ]) }}">
                        @csrf
                        <input type="hidden" name="from" value="{{ request()->query('from') }}">
                        <input type="hidden" name="to" value="{{ request()->query('to') }}">
                        
                        <div class="form-group row">
                            <label class="col-sm-3">Nomor SIM</label>
                            <input type="text" class="form-control col-sm-9" name="sim" placeholder="Input Nomor SIM Pengguna">
                            <button type="button">check</button>
                        </div>

                        <div class="form-input">
                            <label for="name" class="required">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="name" />
                        </div>
                        <div class="form-input">
                            <label for="alamat" class="required">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" />
                        </div>
                        <div class="form-input">
                            <label for="phone_number" class="required">Nomor HP</label>
                            <input type="text" class="form-control" name="phone_number" id="phone_number" />
                        </div>

                        <input type="submit" value="Proses Peminjaman">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
