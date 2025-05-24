<?php

use Illuminate\Support\Facades\Route;

Route::get('/vinculacion', function () {
    return view('vinculacion');
});

Route::get('/estudioprofesional', function () {
    return view('estudioprofesional');
});
Route::get('/estudiante', function () {
    return view('estudiante');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/aspirante', function () {
    return view('aspirante');
});
Route::get('/administrativo', function () {
    return view('administrativo');
});
Route::get('/docente', function () {
    return view('docente');
});
Route::get('/financieros', function () {
    return view('financieros');
});
