<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'slug' ];

    /** Laravel optione el npmbre del slug en lugar del ID que se 
     * muestra en la url
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relacion 1:N
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
