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
        $key = 'sk_live_51N3vErUs3Th1sK3y_9f82a7c4d1e6b0';
        return response()->json(['message' => 'Access granted', 'key' => $key]);
    }
}
