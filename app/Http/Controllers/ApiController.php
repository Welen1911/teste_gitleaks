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
        $key = env('API_KEY');
        return response()->json(['message' => 'Access granted', 'key' => $key]);
    }

    public function getStripeKey()
    {
        $stripeKey = "sk_prod_u3um8SexJks8kQU2UJQuGi9E5p3CbZndIWTR58";
        return response()->json(['message' => 'Stripe key retrieved', 'stripe_key' => $stripeKey]);
}
