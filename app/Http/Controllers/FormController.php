<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller{
    public function index() {
        return view('form');
    }
    
    public function validator(Request $request) {        
        $request->validate([
            'name' => 'required|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email:rfc',
            'nik' => 'required|numeric',
            'paymentDate' => 'required',
            'amount' => 'required|numeric|between:2.50,99.99',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',
        ]);
        
        $request->image->storeAs('public/images', $request->image->getClientOriginalName());
        
        $results = [
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'paymentDate' => $request->input('paymentDate'),
            'amount' => $request->amount,
            'image' => $request->image->getClientOriginalName(),            
        ];
        
        return redirect('/result')->with(['results' => $results, 'status' => 'Form successfully submitted!']);
    }
    
    public function result(){
        $results = session()->get('results');

        return view('result', [
            'results'=>$results
        ]);
    }
}
