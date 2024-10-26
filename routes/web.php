<?php
Route::match(['get', 'post'], '/reg', 'RegController@reg');
Route::post('/login', 'LoginController@login');
Route::get('/', function() {
  return redirect('/products');
});
Route::match(['get', 'post'], '/product/create', function() {
if(!empty($_POST['product_submit']))  {
 $product_title =  $_POST['product_title'];
 $product_cost =  $_POST['product_title'];
 $product_company =  $_POST['product_company'];   
 $product_description =  $_POST['product_title'];

 DB::table('products')->insert(array(
'id'=>NULL, 
'title'=>$product_title, 
'description'=>$product_description, 
'cost'=>$product_cost, 
'photos'=>'', 
'photo_cover'=>''));
  var_dump($_POST['product_submit']);

}
  return view('product.create');
});
Route::get('/products', function() {
  $products = DB::table('products')->orderBy('id', 'DESC')->get();
  $products = json_decode(json_encode($products), true);
  return view('products.products', ['products'=>$products]);
});