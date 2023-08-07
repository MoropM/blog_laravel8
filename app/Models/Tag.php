<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\ReturnTypePass;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    /** Laravel optione el npmbre del slug en lugar del ID que se 
     * muestra en la url
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relacion N:N
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
