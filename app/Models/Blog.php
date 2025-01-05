<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // fillable ini mengizinkan kolom tertentu untuk diisi
    // protected $fillable = ['tittle', 'excerpt', 'body'];
    // guarded tidak mengizinkan untuk mengizi kolom tertentu 
    protected $guarded = ['id'];

    public function category(){

        // koneksi relasi ke tabel category untuk relasi one to one
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}