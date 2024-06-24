<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign values
        $name = "Donald Trump";
        $age = "75";

        // Create an associative array with the required data
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set the cookie
        $name = "my-cookie";
        $value = "12345";
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Set the cookie
        setcookie($name, $value, time() + ($minutes * 60), $path, $domain, $secure, $httpOnly);

        // Return the data as a response with status code 200
        return response($data, 200)->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
