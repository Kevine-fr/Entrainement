<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="QjYCt9Zsu0aL52HzOZTPr5bawu5byQ5jozef7kX3">

        <title>Studlearn</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script type="module" src="http://[::1]:5173/@vite/client"></script><link rel="stylesheet" href="http://[::1]:5173/resources/css/app.css" /><script type="module" src="http://[::1]:5173/resources/js/app.js"></script>    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <!-- Session Status -->
    
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-sm">
            <h1 class="text-center text-3xl font-bold mb-5">Connexion</h1>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <input type="hidden" name="_token" value="QjYCt9Zsu0aL52HzOZTPr5bawu5byQ5jozef7kX3" autocomplete="off">
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" value="" required autofocus autocomplete="username">
                                    </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
                    <input id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" required autocomplete="current-password">
                                    </div>

                <!-- Remember Me -->
                <div class="mb-4">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <label for="remember_me" class="text-sm text-gray-600 ml-2">Se souvenir de moi</label>
                </div>

                <div class="flex items-center justify-between">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://0.0.0.0:8000/forgot-password">
                            Mot de passe oublié ?
                        </a>
                    
                    <a class="underline text-sm text-gray-600" href="/register">
                        S'inscrire
                    </a>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Connexion</button>
                </div>
            </form>
        </div>
    </div>
            </div>
        </div>
    </body>
</html>
