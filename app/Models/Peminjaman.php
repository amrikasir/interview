<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'book_at',
        'return_at',
    ];

    /**
     * relation to Detail Peminjaman
     */
    public function detail(){
        return $this->hasMany(DetailPinjam::class);
    }
}
