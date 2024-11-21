<?php




namespace App\Http\Controllers;


use Illuminate\Http\Request;


class CalculatorControllerr extends Controller{
    //
   public function showPage(){
   return view('home',[
    'result'=> null
   ]);


}


public function showAddition(){
    return view('addition',[
     'result'=> null
    ]);
 
 }


 public function add(Request $request){
    $validatedData = $request->validate([
        'number1' => 'required|numeric',
        'number2' => 'required|numeric',
    ]);


        $num1 = $validatedData ['number1'];
        $num2 = $validatedData ['number2'];


        $result = $num1 + $num2;


    return view('addition',[
        'result' => $result
    ]);
 }


 public function showSubtraction(){
    return view('subtraction',[
     'result'=> null
    ]);
 
 }


 public function sub(Request $request){
    $validatedData = $request->validate([
        'number1' => 'required|numeric',
        'number2' => 'required|numeric',
    ]);


        $num1 = $validatedData ['number1'];
        $num2 = $validatedData ['number2'];

        $result = $num1 - $num2;

    return view('subtraction',[
        'result' => $result
    ]);
 }


 public function showMultiplication(){
    return view('multiplication',[
     'result'=> null
    ]);
 
 }


 public function div(Request $request){
    $validatedData = $request->validate([
        'number1' => 'required|numeric',
        'number2' => 'required|numeric',
    ]);


        $num1 = $validatedData ['number1'];
        $num2 = $validatedData ['number2'];


        $result = $num1 * $num2;


    return view('multiply',[
        'result' => $result
    ]);
 }


 public function showDivision(){
    return view('division',[
     'result'=> null
    ]);
 
 }


 public function multi(Request $request){
    $validatedData = $request->validate([
        'number1' => 'required|numeric',
        'number2' => 'required|numeric',
    ]);


        $num1 = $validatedData ['number1'];
        $num2 = $validatedData ['number2'];

      if($num2 == 0) {
        //return back()->withErrors(['number2' => 'Division by zero is now allowed.'])->withInput();
        return view('division',['result'=>'ERROR KAAAAAAAAAA']);
      }

        $result = $num1 / $num2;


    return view('division',[
        'result' => $result
    ]);
 }
}

