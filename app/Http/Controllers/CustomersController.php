<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Message;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabulka = Customers::with('customer')->where('user_id', auth()->id())->get();
        
        return view('customers.listofhappiness',['customers'=>$tabulka]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.createhappiness');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $request->validate([
            'name'=>'required|min:5',
            'adress'=>'required|max:20',
            'zip'=>'required|digits:5'
        ]);
       $newhappi = new Customers();
       $newhappi->name = $request-> name;
       $newhappi->adress= $request-> adress;
       $newhappi->zip = $request-> zip;
       $newhappi->user_id = auth()->id();

       $newhappi->save();

      return redirect()->route('listofhappiness1') -> with('message','Zákazník vložen');
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
     
      $customer = Customers::where('id', $id)->where('user_id', auth()->id())->first();
    
      if(!$customer)
      {
        abort(403);
        return;
      }
     
      return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, $id)
    {
        $newhappi = Customers::where('id', $id)->where('user_id', auth()->id())->first();

        if(!$newhappi)
        {
            abort(403);
            return;
        }
        $newhappi->name = $request-> name;
        $newhappi->adress= $request-> adress;
        $newhappi->zip = $request-> zip;
 
        $newhappi->save();
 
       return redirect()->route('listofhappiness1') -> with('message','Změna dat klienta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            Customers::destroy($id);

            return redirect()->route('listofhappiness1') -> with('message','Zákazník smazán');

       
    }
    public function listofhappiness1()
    {
        $tabulka = Customers::all();
        return view('customers.listofhappiness',['seznam'=>$tabulka]);
    }
}

