<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
public function index()
{
$products = Product::orderby('id', 'desc')->get();

return response()->json(["pr"=>$products]);
}

public function store(Request $request)
{

$product = new Product();
$product->name=$request->name;
$product->description=$request->description;
$product->price=$request->price;
$product->save();
return response()->json([
'status' => 'success',
]);
}

public function show($id)
{
$product = Product::find($id);

return response()->json($product);
}

public function update(Request $request)
{
$product = Product::find($request->id);
$product->name=$request->name;
$product->description=$request->description;
$product->price=$request->price;
$product->save();
return response()->json([
'status' => 'success',
]);
}

public function destroy($id)
{
$product = Product::find($id);
$product->delete();

return response()->json('Product successfully deleted!');
}
public function deleted(){
    $products=DB::table('products')
    ->select(
        'products.id',
        'products.name',
        'products.description',
        'products.price',
        'products.deleted_at',
     )
     ->where('products.deleted_at','<>',null)
     ->get();
     return response()->json(['products'=>$products]);
}
}