<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '
        <html>
            <head>
                <title>Hello World</title>
                <style>
                    body {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        background-color: #fef6fb;
                        font-family: Arial, sans-serif;
                    }
                    h1 {
                        font-size: 3rem;
                        font-weight: bold;
                        color: #e91e63; /* warna pink biar cantik */
                    }
                </style>
            </head>
            <body>
                <h1>Hello World</h1>
            </body>
        </html>
    ';
});
