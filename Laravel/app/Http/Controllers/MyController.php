<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class MyController extends Controller
{
    public function number(int $max): Response
    {
        $number = random_int(0, $max);

        return response("<html><body>Lucky number: {$number}</body></html>");
    }

}
