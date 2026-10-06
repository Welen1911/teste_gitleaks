<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'API is working']);
    }

    public function getData()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com'
        ];

        return response()->json($data);
    }

    public function getAccess()
    {
        $key = 'wiojoi3o21o312o3jonoojio3jio23';
        return response()->json(['message' => 'Access granted', 'key' => $key]);
    }
}
