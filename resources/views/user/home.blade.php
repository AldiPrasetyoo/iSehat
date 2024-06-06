<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSehat</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="navbar bg-base-100 flex flex-wrap justify-between">
        <div class="flex-1 flex items-center">
            @guest
                <div class="dropdown dropdown-content">
                    <div tabIndex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-8 rounded-full">
                            <img alt="Avatar"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                </div>
                <a class="btn btn-ghost text-xl">
                    Selamat datang di iSehat
                </a>
            @endguest
            @auth
                <div class="dropdown dropdown-content">
                    <div tabIndex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-8 rounded-full">
                            <img alt="Avatar"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabIndex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profil
                                <span class="badge">Baru</span>
                            </a>
                        </li>
                        <li>
                            <a>Pengaturan</a>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">
                    Hai {{ Auth::user()->name }}, apa kabar hari ini?
                </a>
            @endauth
        </div>

        <div class="flex-none">
            @guest
                <a href="{{ route('login') }}" class="btn btn-ghost">Login</a>
            @else
                <div class="dropdown dropdown-end">
                    <button class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="badge badge-xs badge-primary indicator-item"></span>
                        </div>
                    </button>
                </div>
            @endguest
        </div>
    </div>

    <div class="card lg:card-side bg-base-100 shadow-xl m-2 image-fullcard-body">
        <div class="card-body w-full lg:w-2/3" style="background-image : url('{{ asset('img/latarDokedit.jpg') }}');  background-repeat: no-repeat;
            background-size: cover; background-position : center left;">
            <h2 class="card-title">Konsultasi Online</h2>
            <p>Konsultasikan Kesehatan Anda pada Dokter Terbaik Kami</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Daftar Sekarang</button>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <ul class="menu menu-lg menu-horizontal bg-base-200 rounded-box justify-center md:justify-between">
            <li>
                <a href="{{ route('kalkulator')}}">
                    <figure style="width : 180px;height : 70px">
                        <img src="/img/kalku.jpg" width="50px" height="70px" class="mx-auto" />
                        <p class="text-sm text-center">Kalkulator Kesehatan</p>
                    </figure>
                </a>
            </li>
            <li>
                <a href="{{ route('pantau')}}">
                    <figure style="width : 180px;height : 70px">
                        <img src="/img/kesehatan.jpg" width="55px" height="70px" class="mx-auto" />
                        <p class="text-sm text-center">Pemantau Kesehatan</p>
                    </figure>
                </a>
            </li>
            <li>
                <a href="{{route('penyakit.index')}}">
                    <figure style="width : 180px;height : 70px">
                        <img src="/img/makanan.png" width="67px" class="mx-auto" />
                        <p class="text-sm text-center">Resep Makanan Sehat</p>
                    </figure>
                </a>
            </li>
        </ul>
    </div>

    <h1 class="text-xl font-bold mb-8">Informasi Kesehatan</h1>
    <div class="flex justify-start w-full p-12">
        <div class="card w-full bg-base-100 shadow-xl flex flex-col md:flex-row">
            <figure class="md:w-1/2 w-full">
                <img src="/img/logo.jpg" alt="Informasi Kesehatan"
                    class="object-cover w-1/5 md:h-full h-26 justify-start" />
            </figure>
            @foreach ($artikel as $artikel)
                <div class="card-body md:w-1/2 w-full">
                    <h2 class="card-title text-center md:text-left" key={{$loop->index}}>
                        {{$artikel->judul}}
                    </h2>
                    <p class="text-center md:text-left">{{$artikel->isi}}</p>
                    <div class="card-actions justify-center md:justify-end">
                        <div class="badge badge-outline">{{$artikel->kategori1}}</div>
                        <div class="badge badge-outline">{{$artikel->kategori2}}</div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>



    <div class="btm-nav h-14">
        <a href="{{ route('home') }}" class="active flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        </a>
        <a href="{{ route('jadwal') }}" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 2a8 8 0 016.469 13.142l1.387 1.386a1 1 0 11-1.414 1.415l-1.387-1.386A8 8 0 1110 2zm0 2a6 6 0 100 12A6 6 0 0010 4z"
                    clip-rule="evenodd" />
                <path
                    d="M10 7a1 1 0 011 1v3.293l2.146 2.147a1 1 0 11-1.415 1.415L10 12.414l-1.732 1.732a1 1 0 11-1.415-1.415L8 11.293V8a1 1 0 011-1z" />
            </svg>


        </a>
        <a href="{{ route('profil') }}" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2a5 5 0 00-5 5v2a5 5 0 005 5h0a5 5 0 005-5V7a5 5 0 00-5-5z" />
                <path d="M19 20v-1a4 4 0 00-4-4H9a4 4 0 00-4 4v1" />
            </svg>
        </a>
    </div>
</body>

</html>