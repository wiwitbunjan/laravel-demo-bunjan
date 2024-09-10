<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>CALCULATOR</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
  <div class="mx-auto text-center bg-gray-200">
    <h1 style ="font-size: 250%;">!!THIS IS CALCULATOR PAGE!!</h1>
    <form action="{{ route('callcalculate') }}" class="mt-5" method="POST">
       @csrf
        <label for="num1">Number 1:</label>
        <input type="text" name ="number1" id="num1" required autofocus>
        @if ($errors->has('number1'))
             <span class ="text-danger">{{ $errors->first('number1') }}</span>
             @endif
        <div class="mt-4"></div>
        <label for="num1">Number 2:</label>
        <input type="text" name ="number2" id="num2" required>
        @if ($errors->has('number2'))
             <span class ="text-danger">{{ $errors->first('number2') }}</span>
             @endif
        <br>
        <button type ="submit" class= "w-24 bg-blue-500 px-4 py-4 text-white
            hover:bg-blue-800 mt-5 mb-4">ADD
         </button>
    </form>
</div>
       @if( $result != null )
       <span class = "text-x1">SUM: {{ $result }}</span>

       @else
       <span class = "text-x1">SUM: NOT YET CALCULATED!</span>

       @endif

</body>
</html>