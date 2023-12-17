<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'peminjaman_id',
        'mobil_id'
    ];

    /**
     * Relation to mobil by mobil_id
     */
    public function mobil(){
        return $this->hasOne(Mobil::class);
    }

    /**
     * relation to peminjaman
     */
    public function pinjam(){
        return $this->belongsTo(Peminjaman::class);
    }
}
