<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'title',
        'desc',
    ];

    public function lessions()
    {
        return $this->hasOne(Lessions::class);
    }

    public function words()
    {
        return $this->hasOne(Words::class);
    }
}
