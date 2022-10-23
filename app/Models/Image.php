<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function subcategories() {

        return $this->belongsToMany(Subcategory::class);

    }

    public function artists() {

        return $this->belongsToMany(Artist::class);

    }
}
