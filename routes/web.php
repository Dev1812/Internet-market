<?php
Route::get('/reg', 'RegController@reg');
Route::get('/products', function() {
  return view('products.products');
});