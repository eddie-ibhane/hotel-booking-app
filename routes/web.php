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

Route::get('/', function () {

    // try {
    //     $dbc = new PDO('mysql:host='.env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'));
    //     $charset = config('database.connections.mysql.charset');
    //     $collation = config('database.connections.mysql.collation');
    //     $query = "CREATE DATABASE IF NOT EXISTS ". env('DB_DATABASE') . " CHARACTER SET $charset COLLATE $collation;";
    //     $dbc->exec($query);
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // }

    $room_id = [];
    for($i=1; $i <= mt_rand(1,3); $i++)
    {
        array_push($room_id, mt_rand(1, 20));
    }
    dump($room_id);

    return view('welcome');
});
