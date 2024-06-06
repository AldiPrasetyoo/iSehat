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

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-2 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <img src="/img/logo.jpg" width="100px" class="mx-auto" />
                <h1 style="margin: auto; color : red; font-size: 45px; text-align: center; font-weight: bold;">iSehat
                </h1>
                <p style="font-weight: bolder;">Masukan Akun yang Telah Di Daftarkan</p>
            </a>
        </div>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="block mt-4">
                </div>

                <div class="flex items-center">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="ml-auto underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Lupa Kata Sandi') }}
                        </a>
                    @endif

                </div>
                <div class="flex item-center justify-center mt-4">
                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <div class="flex items-center justify-center mt-4">
                    @if (Route::has('register'))
                        <p>Belum Punya Akun?</p>
                        <a class="underline text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('register') }}">
                            {{ __('Daftar') }}
                        </a>
                    @endif
                </div>
            </form>

        </div>
    </div>
</body>

</html>