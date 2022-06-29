<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
   protected $table = 'books';
   protected $fillable = ['judul', 'isbn', 'penerbit', 'pengarang', 'tahun_terbit', 'jumlah_buku', 'lokasi', 'deskripsi', 'cover'];
  
    /**
     * Method One To Many 
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function transaksi()
    {
    	return $this->hasMany(Transaksi::class);
    }
}

