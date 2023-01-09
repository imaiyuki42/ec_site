<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ログイン
Route::prefix('login')->group(function () {
    // 画面表示
    Route::get('','Auth\LoginController@showLoginForm')->name('login');
    // ログイン機能
    Route::post('','Auth\LoginController@login');
});
// 新規登録
Route::prefix('register')->group(function() {
    // 画面表示
    Route::get('','Auth\RegisterController@showRegistrationForm')->name('register');
    // 登録機能
    Route::post('','Auth\RegisterController@register');
});
// ログアウト
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// トップ画面
Route::get('home','Home\HomeController@index')->name('home.index');
// WOMEN画面
Route::prefix('women')->group(function () {
    Route::get('','Home\WomenController@index')->name('women.index');
    Route::get('outer','Womens\OuterController@index')->name('women.outer.index');
    Route::get('tops','Womens\TopsController@index')->name('women.tops.index');
    Route::get('sweat','Womens\SkirtController@index')->name('women.skirt.index');
    Route::get('knit','Womens\OnePieceController@index')->name('women.one_piece.index');
    Route::get('pants','Womens\PantsController@index')->name('women.pants.index');
    Route::get('jeans','Womens\JeansController@index')->name('women.jeans.index');
    Route::get('inner','Womens\InnerController@index')->name('women.inner.index');
    Route::get('room','Womens\RoomController@index')->name('women.room.index');
});
// MEN画面
Route::prefix('men')->group(function () {
    Route::get('','Home\MenController@index')->name('men.index');
    Route::get('outer','Mens\OuterController@index')->name('men.outer.index');
    Route::get('tops','Mens\TopsController@index')->name('men.tops.index');
    Route::get('sweat','Mens\SweatController@index')->name('men.sweat.index');
    Route::get('knit','Mens\KnitController@index')->name('men.knit.index');
    Route::get('pants','Mens\PantsController@index')->name('men.pants.index');
    Route::get('jeans','Mens\JeansController@index')->name('men.jeans.index');
    Route::get('inner','Mens\InnerController@index')->name('men.inner.index');
    Route::get('room','Mens\RoomController@index')->name('men.room.index');
});
// KIDS画面
Route::prefix('kids')->group(function () {
    Route::get('','Home\KidsController@index')->name('kids.index');
    Route::get('outer','Kids\OuterController@index')->name('kids.outer.index');
    Route::get('tops','Kids\TopsController@index')->name('kids.tops.index');
    Route::get('sweat','Kids\ShirtController@index')->name('kids.shirt.index');
    Route::get('knit','Kids\OnePieceController@index')->name('kids.one_piece.index');
    Route::get('pants','Kids\PantsController@index')->name('kids.pants.index');
    Route::get('jeans','Kids\SweatController@index')->name('kids.sweat.index');
    Route::get('inner','Kids\InnerController@index')->name('kids.inner.index');
    Route::get('room','Kids\RoomController@index')->name('kids.room.index');
});

// 商品表示
Route::get('product/{id}','Products\ProductController@index')->name('product.index');

// お気に入り
Route::prefix('favorite')->group(function() {
    // お気に入り表示
    Route::get('', 'Favorite\FavoriteController@index')->name('favorite.index');
    // お気に入り登録
    Route::get('store/{id}', 'Favorite\FavoriteController@store')->name('favorite.store');
    // お気に入り削除
    Route::post('destroy/{id}', 'Favorite\FavoriteController@destroy')->name('favorite.destroy');
});
// カート
Route::prefix('cart')->group(function () {
    // カート表示
    Route::get('', 'Cart\CartController@index')->name('cart.index');
    // カート内登録
    Route::post('', 'Cart\CartController@store')->name('cart.store');
    // カート内削除
    Route::post('destroy/{id}', 'Cart\CartController@destroy')->name('cart.destroy');
});

// 注文関係
Route::prefix('order')->group(function() {
    // 商品購入
    Route::get('', 'Order\OrderController@index')->name('order.index');
    // 購入商品保存
    Route::post('', 'Order\OrderController@store')->name('order.store');
    // 注文履歴
    Route::get('history','Order\OrderHistoryController@index')->name('order.history.index');
});

// 届け先住所
Route::get('delivery_address', 'DeliveryAddress\DeliveryAddressController@index')->name('delivery_address.index');
// 会員情報
Route::prefix('user')->group(function() {
    Route::get('', 'UserController@index')->name('user.index');
    Route::post('', 'UserController@edit')->name('user.edit');
    Route::get('password', 'UserController@passwordIndex')->name('password.index');
    Route::post('password', 'UserController@passwordEdit')->name('password.edit');
});




//お問い合わせ
Route::prefix('contact')->group(function() {
    // お問い合わせ表示
    Route::get('', 'Contact\ContactController@index')->name('contact.index');
    Route::post('', 'Contact\ContactController@store')->name('contact.store');
});

// 利用規約
Route::get('terms', 'Other\TermsController@index')->name('terms.index');
// プライバシーポリシー
Route::get('privacy', 'Other\PrivacyController@index')->name('privacy.index');
// 特定商品取引法に基づく表示
Route::get('law', 'Other\LawController@index')->name('law.index');





