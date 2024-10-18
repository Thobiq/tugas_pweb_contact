<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard', ["title" => 'Dashboard']);
});



Route::get('/contact', function () {
    $dataContact = [
        [
            "Nama" => "Mukhamad Alyasyi Thobiq",
            "NIM" => "232410102074",
            "Prodi" => "Teknologi Informasi",
            "Email" => "malyasyithobiq@gmail.com"
        ],
        [
            "Nama" => "Andaru Muzaky",
            "NIM" => "232410102056",
            "Prodi" => "Teknologi Informasi",
            "Email" => "232410102056@mail.unej.ac.id"
        ],
        [
            "Nama" => "Muhammad Syaifur Rozi",
            "NIM" => "232410102046",
            "Prodi" => "Teknologi Informasi",
            "Email" => "232410102046@mail.unej.ac.id"
        ],
    ];
    
    return view('contact', [
        "title" => 'Contact',
        "dataTable" => $dataContact
    ]);
});

Route::get('/login', function () {
    return view('login', ["title" => 'Login']);
});

Route::get('/register', function () {
    return view('register', ["title" => 'Register']);
});