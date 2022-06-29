<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = ['id','kode_transaksi', 'judul', 'nama',  'tgl_pinjam', 'tgl_kembali'];
   
    public function anggota(){
        return $this->belongsTo(Member::class);
    }

    public function buku(){
        return $this->belongsTo(Book::class);
    }
}
