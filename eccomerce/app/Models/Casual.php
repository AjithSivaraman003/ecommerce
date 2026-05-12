<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Casual;


class Casual extends Model
{
    protected $fillable = [
    'image',
    'title',
    'category',
    'price',
    'size',
    'description',
    'order',
    'status'
];

public function carts()
{
    return $this->hasMany(Cart::class, 'product_id');
}


// public function store(Request $request)
// {
//     $imageName = time().'.'.$request->image->extension();

//     $request->image->storeAs(
//         'products-images',
//         $imageName,
//         'public'
//     );

//     Casual::create([
//         'image' => $imageName,
//         'title' => $request->title,
//         'category' => $request->category,
//         'order' => $request->order,
//         'status' => $request->status,
//     ]);

//     return back();
// }
}


   