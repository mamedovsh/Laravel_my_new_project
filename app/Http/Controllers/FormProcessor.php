<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\resources\views\user_form;
use App\resources\views\hallo_form;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('hallo_form');
    }

    public function store()
    {
        
        $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        
        ob_start(); 
    ?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Данные пользователя</title>
    </head>
    <body>
        <h1>Данные пользователя</h1>
        <p><strong>Имя:</strong> <?php echo htmlspecialchars($firstName); ?></p>
        <p><strong>Фамилия:</strong> <?php echo htmlspecialchars($lastName); ?></p>
    </body>
    </html>
    <?php
    $content = ob_get_clean(); 
    echo $content; 
    }
    
}

