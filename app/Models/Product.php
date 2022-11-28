<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function cart()
    {
        return $this->belongsToMany(Cart::class);
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('name', 'like', '%' . $search . '%')
                             ->orWhere('kode', 'like', '%' . $search . '%');
             });
         });

    }


}
