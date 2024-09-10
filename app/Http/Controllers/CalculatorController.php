<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculatorPage()
    {
        return view('mypages.calculator',[
            'result' => null
        ]);
    }

    public function calculate(Request $request)
    {
        $validatedData = $request->validate([
            'number1' =>'required|numeric',
            'number2' =>'required|numeric',
        
        ]);
           $num1 = $validatedData['number1'];
           $num2 = $validatedData['number2'];


       // $num1 = $request->input('number1');
        //$num2 = $request->input('number2');

       $result = $num1 + $num2;

       return view('mypages.calculator',[
        'result' => $result

       ]);
    
    
    }
    // public function calculate(Request $request) {
    //     dd($request->validate([
    //         'number 1' =>'required|numeric',
    //         'number 2' =>'required|numeric',

    //     ]));
    // }
}
