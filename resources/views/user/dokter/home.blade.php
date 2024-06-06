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
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Keluar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">
                    Halo Dokter. {{ Auth::user()->name }}, apa kabar hari ini?
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
    <div
        style="background-color: #FFFFFF; display: flex; flex-direction: column; padding: 32px 0 0 0; box-sizing: border-box;">
        <div
            style="border-radius: 5px; background-color: rgba(86,199,235,0.19); position: relative; margin: 0 19px 0 19px; display: flex; flex-direction: column; align-items: center; padding: 13px 23px 17px 21px; width: calc(100% - 38px); box-sizing: border-box; height: 82vh">
            <div
                style="margin: 0 0 11.2px 2px; display: flex; flex-direction: column; align-items: center; width: fit-content; box-sizing: border-box;">
                <div
                    style="margin: 0 0 6.8px 0; display: inline-block; word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 35px; color: #2E89A6;">
                    Konsultasi Online Hari Ini
                </div>
                <div style="background-color: #2E89A6; margin: 0 0.7px 0 2.7px; width: 330px; height: 3px;"></div>
            </div>
            <div
                style="border-radius: 10px; background-color: #002B39; position: relative; margin: 0 0 13px 2px; display: flex; flex-direction: row; justify-content: space-between; padding: 4px 24px 0 10px; width: calc(100% - 55px); box-sizing: border-box;">
                <figure>
                    <img src="/img/dok1.png" width="255px" height="270px" class="mx-auto" />
                </figure>
                <div
                    style="margin: 30px 0 33px 0; display: flex; flex-direction: column; align-items: center; flex-grow: 1; flex-basis: 124px; box-sizing: border-box;">
                    <div
                        style="position: relative; margin: 0 0 6px 0; display: flex; padding: 0 3.3px 0 0.3px; width: 100%; box-sizing: border-box;">
                        <div
                            style="position: relative; display: flex; flex-direction: column; align-items: center; width: 100%; height: fit-content; box-sizing: border-box;">
                            <span
                                style="word-break: break-word; font-family: 'Poppins'; font-weight: bold; font-size: 30px; color: #FFFFFF;">Dudi</span>
                            <span
                                style="margin: 0 0 0 2px; word-break: break-word; font-family: 'Poppins'; font-weight: normal; font-size: 25px; color: #FFFFFF;">Sakit perut tidak kunjung selesai</span>
                        </div>
                        <div
                            style="background-color: #FFFFFF; position: absolute; left: 0px; right: 0px; bottom: 35px; height: 1px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btm-nav h-14">
        <a href="{{ route('dokter/home') }}" class="active flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        </a>
        <a href="{{ route('dokter/profil') }}" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2a5 5 0 00-5 5v2a5 5 0 005 5h0a5 5 0 005-5V7a5 5 0 00-5-5z" />
                <path d="M19 20v-1a4 4 0 00-4-4H9a4 4 0 00-4 4v1" />
            </svg>

        </a>
    </div>
</body>

</html>