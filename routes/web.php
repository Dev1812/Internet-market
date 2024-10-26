<?php
Route::get('/reg', 'RegController@reg');
Route::get('/products', function() {
  $products = DB::table('products')->get();
  $products = json_decode(json_encode($products), true);
  return view('products.products', ['products'=>$products]);
});