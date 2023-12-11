<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('customers.search');
    }

    public function performSearch(Request $request)
    {
        
        $search_term = $request->input('search_term');

        try {
            $customers = Customer::where('name', 'like', "%$search_term%")
                ->orWhere('phone', 'like', "%$search_term%")
                ->orWhere('email', 'like', "%$search_term%")
                ->get();
            return view('customers.search', compact('customers'));
        } catch(\Throwable $e) {
            \Log::error($e);
            throw $e;
        }

    }
}
