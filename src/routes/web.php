<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



Route::group(['namespace' => 'Ranjeet\MyContactPackage\Http\Controllers'], function(){
  Route::get('contact', 'ContactController@index');
  Route::post('post-contact', 'ContactController@send');
});
Route::get('/contact', function(){
   return view('mycontactpackage::contact');
});
//Route::post('post-contact', 'ContactController@index');
      
//
//Route::get('/contact', function(){
//   return view('mycontactpackage::contact');
//});
//
//Route::post('post-contact', function(Request $request){
//    return dd($request->all()); 
//});