<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'status'];

    //------------Relations----------------
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Products()
    {
        return $this->belongsToMany(Product::class, 'order_products');
    }

    //------------Methods----------------

    public function getStatusBadgeAttribute()
    {
        switch ($this->status) {
            case 'pending':
                return 'warning';
            case 'cancelled':
                return 'danger';
            case 'delivered':
                return 'success';
            default:
                return 'primary';
        }
    }

}