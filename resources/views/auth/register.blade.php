<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">
        <div>
            <a href="/">
                <img src="/img/logo.jpg" width="100px" class="mx-auto" />
                <h1 style="margin: auto; color : red; font-size: 20px; text-align: center; font-weight: bold;">iSehat
                </h1>
                <p style="font-weight: bolder; font-size : 15px">Isi sesuai Data Diri Anda</p>
            </a>
        </div>
        <div class="w-full sm:max-w-md mt-2 px-2 py-2 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>


                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex item-center justify-center mt-2">
                    <x-primary-button class="ms-3">
                        {{ __('Daftar') }}
                    </x-primary-button>
                </div>


                <div class="flex items-center justify-center mt-4">
                    <p>Sudah Punya Akun?</p>
                    <a class="underline text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Masuk') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>