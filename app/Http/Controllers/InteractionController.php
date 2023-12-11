<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Interaction;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interactions = Interaction::with('customer')->orderBy('interaction_date', 'desc')->get();
        return view('interactions.index', compact('interactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('interactions.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input('customer_id'));
        
        $request->validate([
            'customer_id' => 'required|integer',
        ]);

        $interaction_date = now();

        try {
            $interaction = Interaction::create([
                'customer_id' => $request->input('customer_id'),
                'notes' => $request->input('notes'),
                'interaction_date' => $interaction_date,
            ]);
            return redirect('/dashboard')->with('success', 'Interaction created');
        } catch(\Throwable $e) {
            \Log::error($e);
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
