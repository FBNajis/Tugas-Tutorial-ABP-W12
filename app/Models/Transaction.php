<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'product_id', 'total_price', 'transaction_date'];

    // Relasi: transaksi ini dimiliki oleh satu customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relasi: transaksi ini berisi satu produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

