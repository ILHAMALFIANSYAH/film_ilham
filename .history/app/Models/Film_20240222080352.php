<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F extends Model
{
    use HasFactory;
    protected $table = 'Fs';
    protected $fillable = ['user_id','kategori_id','judul','isi','gambar'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
