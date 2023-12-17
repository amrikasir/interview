<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'mobil_id',
        'book_at',
        'return_at',
    ];

    /**
     * Relation to User by user_id
     */
    public function user(){
        return $this->hasOne(User::class);
    }

    /**
     * Relation to Mobil by mobil_id
     */
    public function mobil(){
        return $this->hasOne(Mobil::class);
    }
}
