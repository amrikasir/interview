@extends('layout.base')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-white bg-primary">
                <h4 class="card-title">
                    Tambah Mobil
                </h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form method="post" action="{{ route('mobil.add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3">No Plat</label>
                                    <input type="text" class="form-control col-sm-9" name="plat"
                                        placeholder="Nomor Polisi / Nomor Plat">
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3">Merk Mobil</label>
                                    <input type="text" class="form-control col-sm-9" name="merk"
                                        placeholder="Merk Mobil">
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3">Model Mobil</label>
                                    <input type="text" class="form-control col-sm-9" name="model"
                                        placeholder="Model Mobil">
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3">Harga/hari</label>
                                    <input type="text" class="form-control col-sm-9" name="tarif"
                                        placeholder="Harga sewa perhari">
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3">Gambar</label>
                                    <input type="file" accept="image/*" class="form-control col-sm-9" name="gambar"
                                        placeholder="Isi Gambar">

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="float-right">
                            <button class="btn btn-primary" role="button" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
