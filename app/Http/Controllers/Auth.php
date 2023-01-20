<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth
{
    public static function attempt($mobile, $password)
    {
        if ($mobile == "01772" && $password == 111) {
            return 1;
        }
        return 0;
    }
}
