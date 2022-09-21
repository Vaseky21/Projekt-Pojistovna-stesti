<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\tableluck ;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class controllerweb extends Controller
{
    public function index()
    {
      

        return view('index');
    }

    public function listofhappiness()
    {
        $tabulka = tableluck::where('user_id', auth()->id())->get();
        return view('listofhappiness',['seznam'=>$tabulka]);
    }

    public function createhappiness()
    {
        return view('createhappiness');
    }

    public function store(Request $request)
    {
       $request->validate([
        'customer'=>'required',
        'name'=>'required|max:11',
        'date'=>'required',
        'total'=>'required|numeric'
       ]);
       $newhappi = new tableluck();

        $newhappi->name = $request-> name;
        $newhappi->date= $request-> date;
        $newhappi->total = $request-> total;
        $newhappi->customer_id = $request->customer;
        $newhappi->user_id = auth()->id();
        


        $newhappi->save();

       return redirect()->route('listofhappiness') -> with('message','Faktura dodána');

    }
    public function update(Request $request, $id)
    {
    
    
        $newhappi = tableluck::where('id', $id)->where('user_id', auth()->id())->first();

        if(!$newhappi)
        {
            abort(403);
            return;
        }

        $newhappi->name = $request-> name;
        $newhappi->date= $request-> date;
        $newhappi->total = $request-> total;

        $newhappi->save();

       return redirect()->route('listofhappiness') -> with('message','Faktura upravena');

    }

    public function edit($id)
    {
        $edit=tableluck::where('id', $id)->where('user_id', auth()->id())->first();
        if($$edit)
        {
            return view('edit',['invoice'=>$edit]);
        }
    
    
        else
        {
            abort(403);
        }
        
    }
    public function delete($id)
    {
    
        tableluck::destroy($id);

        return redirect()->route('listofhappiness') -> with('message','Faktura smazána');
        
    }
    public function PDF($id)
    {
        $customer = tableluck::find($id);
       
       
        $pdf = PDF::loadView('Pdf', compact('customer'));
        return $pdf->download('index.pdf');
    }
}
