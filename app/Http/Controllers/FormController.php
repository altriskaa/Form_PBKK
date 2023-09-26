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
            'nik' => 'required|regex:/^[A-Za-z\s]+$/',
            'paymentDate' => 'required',
            'nominal' => 'required|numeric|between:2.50,99.99',
            'upload' => 'required|max:2048|mimes:jpg,jpeg,png',
        ]);
        
        $request->upload->storeAs('public/images', $request->pict->getClientOriginalName());
        
        $results = [
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'paymentDate' => $request->input('paymentDate'),
            'nominal' => $request->nominal,
            'upload' => $request->pict->getClientOriginalName(),            
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
