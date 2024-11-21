<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <center>
    <h1 class="font-bold text-lg">Multiplication</h1>
    <form action="{{route('multi')}}" method="POST">
        @csrf
        <label for="num1">Number 1</label>
        <input type="number" id="number1" name="number1" required>
        <div class="mt-3"></div>
        <label for="num2">Number 2</label>
        <input type="number" id="number2" name="number2" required>
        <div class="mt-3"></div>
        <button type="submit" class="px-4 bg-blue-500 border border-spacing-1">MULTIPLY</button>
    </form>


   


    @if (isset($result))
        <p>Sum: {{ $result }}</p>
    @else
        <p>Answer:</p>
    @endif


    <a href="{{route('home')}}">BACK TO OPERATORS</a><br>

</center>
</body>
</html>
