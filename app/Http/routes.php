<?php

Route::get('/', function () {
    return view('test');
});

Route::resource('invoices', 'InvoiceController');
