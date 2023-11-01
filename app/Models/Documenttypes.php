<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documenttypes extends Model
{
    use HasFactory;


    protected $fillable = [
        'reference',
        'name',
        'description',
        'status',
    ];


public function documents()
{
    return $this->hasMany(Documents::class);
}

}