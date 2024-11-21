<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        h2 {
            margin-bottom: 1.5rem;
            color: #333;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 0.5rem 0;
            border: 1px solid #ccc;
            border-radius: 25px;
            transition: border-color 0.3s;
            font-size: 16px;
        }
        input:focus {
            border-color: #6a11cb;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .error {
            color: #e74c3c;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Create Account</h2>
        <form action="{{ route('login')}}" method="POST">
            @csrf
            <input type="email" name="email" class="text-black" placeholder="Enter Email" required autofocus>
            <input type="password" name="password" class="text-black" placeholder="Enter Password" required>
            <button type="submit">Login</button>
            <h1 class="text-black">Do you have already account?<a class="text-decoration-line: underline" href="{{ route ('register-form') }}">Create another Account </a></h1>
            
        </form>
        {{-- @if($errors->any())
            <div class="error">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif --}}
    </div>

</body>
</html>
