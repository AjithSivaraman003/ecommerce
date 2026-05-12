<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casual;

class ProductController extends Controller
{
    // Show Products
 

    public function index(Request $request)
{
    $products = Casual::query();

    // Category Filter
    if($request->category)
    {
        $products->where('category', $request->category);
    }

    $products = $products->get();

    return view('productpage', compact('products'));
}


    // Store Product
    public function store(Request $request)
    {
        // Upload Image
        $imageName = time().'.'.$request->image->extension();

        $request->image->storeAs(
            'products-images',
            $imageName,
            'public'
        );

        // Save Data
       Casual::create([
    'image' => $imageName,
    'title' => $request->title,
    'category' => $request->category,
    'price' => $request->price,
    'description' => $request->description,
    'size' => $request->size,
    'order' => $request->order,
    'status' => $request->status,
]);

        return back()->with('success', 'Product Added Successfully');
    }


    public function create()
{
    return view('dashboard.dash_product_add');
}


public function indext()
{
    $products = Casual::all();

    return view('dashboard.dash_product', compact('products'));
}
public function destroy($id)
{
    $product = Casual::findOrFail($id);

    $product->delete();

    return back()->with('success', 'Product Deleted Successfully');
}


public function edit($id)
{
    $product = Casual::findOrFail($id);

    return view('dashboard.dash_product_edit', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Casual::findOrFail($id);

    // Image Update
    if($request->hasFile('image')){

        $imageName = time().'.'.$request->image->extension();

        $request->image->storeAs(
            'products-images',
            $imageName,
            'public'
        );

        $product->image = $imageName;
    }

    // Update Data
    $product->title = $request->title;
    $product->category = $request->category;
    $product->order = $request->order;
    $product->description = $request->description;
    $product->status = $request->status;
    $product->price = $request->price;
    $product->size = $request->size;

    $product->save();

    return redirect('/dash-product');
}

public function show($id)
{
    $product = Casual::findOrFail($id);

    return view('innerproduct', compact('product'));
}

public function product()
{
    return $this->belongsTo(Casual::class, 'product_id');
}

}