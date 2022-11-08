<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // $fillable yang ada didalamnya yang bisa di isi satu satu, atribut selain itu ga boleh di isi
    
    // protected $fillable = [
    //     'title', 'excerpt', 'body'
    // ];

    // $guarded yang ada didalamnya ga bisa di isi, atribut selain itu boleh di isi

    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
