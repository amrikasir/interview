<?php

namespace App\Http\Controllers;

use App\Models\DetailPinjam;
use App\Models\Mobil as ModelsMobil;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Mobil extends Controller
{
    /**
     * Input data Mobil
     */
    public function input(){
        return view('mobil.input');
    }

    /**
     * add data mobil to database
     */
    public function add(Request $req){
        $file = $req->file('gambar');
        
        $path = $file->storeAs(
            'mobil', $file->hashName()
        );

        ModelsMobil::create([
            'merk' => $req->merk,
            'model' => $req->model,
            'plat' => $req->plat,
            'tarif' => $req->tarif,
            'status' => 'tersedia',
            'gambar'=> $path
        ]);

        return redirect()->back();
    }

    /**
     * view peminjaman
     */
    public function pinjam(){
        $items = ModelsMobil::where('status', 'tersedia')->get();

        return view('mobil.pinjam', [
            'items' => $items
        ]);
    }

    /**
     * proses lanjutan peminjaman
     */
    public function proses(Request $req, ModelsMobil $id){
        return view('mobil.proses', [
            'req'   => $req,
            'mobil'    => $id
        ]);
    }

    /**
     * proses peminjaman -> simpan ke database
     */
    public function peminjaman(Request $req, ModelsMobil $id){
        $from = Carbon::createFromFormat('Y-m-d', $req->from); 
        $to = Carbon::createFromFormat('Y-m-d', $req->to);

        $user = User::firstOrCreate(
            ['sim' => $req->sim ],
            [
                'name' => $req->name,
                'alamat' => $req->alamat,
                'handphone' => $req->phone_number,
            ],
        );

        $peminjaman = Peminjaman::create([
            'user_id' => $user->id,
            'book_at' => $from,
            'return_at' => $to,

        ]);

        $detail = DetailPinjam::create([
            'peminjaman_id' => $peminjaman->id,
            'mobil_id'      => $id->id,
        ]);

        if ($from->isSameDay(Carbon::now())) {
            $id->status = 'tidak tersedia';
        }else{
            $id->status = 'tersedia';
        }
        
        $id->save();

        return redirect()->route('mobil.pinjam');
    }

    /**
     * proses pengembalian mobil
     */
}
