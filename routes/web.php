<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('vinculacion');
});

Route::get('/panel2', function () {
    return view('estudioprofesional');
});
Route::get('/panel3', function () {
    return view('estudiante');
});
Route::get('/panel4', function () {
    return view('inicio');
});
Route::get('/panel5', function () {
    return view('aspirante');
});
Route::get('/panel6', function () {
    return view('administrativo');
});
Route::get('/panel7', function () {
    return view('docente');
});
Route::get('/panel8', function () {
    return view('financieros');
});