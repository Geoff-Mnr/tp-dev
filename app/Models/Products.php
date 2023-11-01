<?php

namespace App\Models;

use App\Models\Documents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;


    protected $fillable = [
        'reference',
        'name',
        'brand',
        'ean_code',
        'stock',
        'stock_min',
        'buying_price',
        'selling_price',
        'description',
        'comment',
        'status',
        'is_active',
        
    ];




    public function documents() {
        return $this->belongsToMany(Documents::class, 'documents_products', 'product_id', 'document_id');
    }
    

};

