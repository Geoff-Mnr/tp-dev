<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\Documenttypes;
use App\Models\Customer;

class Documents extends Model
{
    use HasFactory;


    protected $fillable = [
        'customer_id',
        'documenttype_id',
        'reference',
        'totalhvat',
        'vat',
        'totalttc',
        'status',
        'comment',

    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function documenttype()
    {
        return $this->belongsTo(Documenttypes::class, 'documenttype_id');
    }

    public function products()
{
    return $this->belongsToMany(Products::class, 'documents_products', 'document_id', 'product_id')
        ->withPivot([
            'selling_price',
            'quantity',
            'discount',
            'total',
            'price_hvat',
            'price_vvat',
            'total_hvat'
        ]);
}
    
}