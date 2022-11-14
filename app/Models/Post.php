<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // $fillable yang ada didalamnya yang bisa di isi satu satu, atribut selain itu ga boleh di isi
    
    // protected $fillable = [
    //     'title', 'excerpt', 'body'
    // ];

    // $guarded yang ada didalamnya ga bisa di isi, atribut selain itu boleh di isi

    protected $guarded = ['id'];

    protected $with = ['category', 'user'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters) {
        
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //             ->orWhere('body', 'like', '%' . $filters['search'] . '%');
            
        // }

        // Di ganti menjadi when method untuk pengkondisian dan null coalesing operator (??) untuk pengecekan isset
        

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, fn($query, $author) =>
            $query->whereHas('user', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

} 
