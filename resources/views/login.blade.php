<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            line-height: 1.5;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        picture, video, canvas, svg {
            display: block;
            max-width: 100%;
            height: auto;
        }

        input, button, textarea, select {
            font: inherit;
        }

        button {
            background: none;
            border: none;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul, ol {
            list-style: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        :root {
            --primary-color: #1D4ED8; /* Cambia el color según tus preferencias */
        }

        body {
            background-color: #f9fafb; /* Color de fondo suave */
            color: #111827; /* Color de texto principal */
        }

        /* Estilo para formularios */
        input, textarea, select {
            outline: none;
        }

        body {
            height: 100vh;
            background-color: white;
        }

        .form-container {
            position: relative; /* Para el posicionamiento del video */
            min-height: calc(100vh - 64px); /* Ajusta el tamaño del contenedor si es necesario */
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3rem 1.5rem;
            z-index: 10; /* Asegura que el formulario esté sobre el video */
        }

        .error-message {
            color: red;
            font-size: 0.875rem; /* Tamaño de fuente para mensajes de error */
            margin-top: 0.25rem; /* Espaciado entre el input y el mensaje de error */
        }

        input {
            border-radius: 0.375rem; /* Bordes redondeados */
            padding: 0.375rem 0.75rem; /* Espaciado interno */
            font-size: 1rem; /* Tamaño de fuente */
            color: #1f2937; /* Color del texto */
        }

        input::placeholder {
            color: #9ca3af; /* Color del placeholder */
        }

        button {
            background-color: #6366f1; /* Color del botón */
            color: white;
            padding: 0.375rem 1rem; /* Espaciado interno */
            border-radius: 0.375rem; /* Bordes redondeados */
            cursor: pointer;
        }

        button:hover {
            background-color: #4f46e5; /* Color del botón al pasar el mouse */
        }

        a {
            color: #6366f1; /* Color del enlace */
        }

        a:hover {
            color: #4f46e5; /* Color del enlace al pasar el mouse */
        }

        .video-background {
            position: absolute; /* Asegura que el video esté en el fondo */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cubre el área del contenedor */
            z-index: 1; /* Detrás del formulario */
        }

        .card {
            background-color: white; /* Color de fondo del card */
            border-radius: 0.5rem; /* Bordes redondeados */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra del card */
            padding: 2rem; /* Espaciado interno del card */
            z-index: 10; /* Asegura que el card esté sobre el video */
        }

    </style>
</head>
<body>
<video class="video-background" autoplay muted loop>
    <source src="{{ asset('videos/loginvid.mp4') }}" type="video/mp4">
    Tu navegador no soporta el video.
</video>

<div class="form-container">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="card">
            <img class="mx-auto h-20 w-auto" src="{{ asset('img/log.png') }}">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Iniciar sesión en tu cuenta</h2>

            <div class="mt-10">
                <form class="space-y-6" method="POST" action="#">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Dirección de correo electrónico</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" required autofocus placeholder="Email" value="{{ old('email') }}" class="block w-full border-0 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('email')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" required placeholder="Contraseña" class="block w-full border-0 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('password')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Iniciar sesión</button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm text-gray-500">
                    ¿No eres miembro?
                    <a href="register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Regístrate</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
