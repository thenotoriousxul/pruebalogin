<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        nav {
            background-color: #007bff;
            padding: 15px;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #0056b3;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 50px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
@include('partials.nav')
<div class="container">
    <h1>Registro</h1>
    <form method="POST">
        @csrf
        <label>
            <input name="name" type="text" required autofocus placeholder="Nombre de usuario" value="{{ old('name') }}">
            @error('name')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </label>
        <label>
            <input name="email" type="email" required placeholder="Email" value="{{ old('email') }}">
            @error('email')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </label>
        <label>
            <input name="password" type="password" required placeholder="Contraseña">
            @error('password')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </label>
        <label>
            <input name="password_confirmation" type="password" required placeholder="Confirmar Contraseña">
            @error('password_confirmation')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </label>
        <button type="submit">Registrar</button>
    </form>
</div>
</body>
</html>
