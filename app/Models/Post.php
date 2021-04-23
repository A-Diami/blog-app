<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $fillable = [
        'slug','title','description','image','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function sluggable(): array
    {
        return[
            'slug' => [
                'source' => 'title',
            ]
            ];
    }
}
