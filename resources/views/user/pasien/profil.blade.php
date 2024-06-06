<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iSehat</title>
  @vite('resources/css/app.css')
  @vite('resources/css/profilP.css')
</head>

<body>
  <div class="App">
    <header class="App-header">
      <div class="header">
        <img alt="Avatar" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"
          class="profile-pic" />
        <h1>Hi, {{Auth::user()->name}}</h1>
      </div>
    </header>
    <main>
      <section class="visit-section">
        <button class="visit-button">Kunjungan Anda pada iSehat</button>
        <p class="visit-count">90</p>
      </section>
      <section class="consultation-summary">
        <button class="summary-button">Rekap Anda Konsultasi Online</button>
        <div class="summary-details">
          <p>5 Konsultasi Selesai</p>
          <p>0 Konsultasi Terjadwal Yang Belum</p>
        </div>
      </section>
      <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color : red; font-size : 20px" >
        Keluar
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </main>
  </div>
  <div class="btm-nav h-14">
    <a href="{{ route('home') }}" class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
    <a href="{{ route('profil') }}" class="active flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 2a5 5 0 00-5 5v2a5 5 0 005 5h0a5 5 0 005-5V7a5 5 0 00-5-5z" />
        <path d="M19 20v-1a4 4 0 00-4-4H9a4 4 0 00-4 4v1" />
      </svg>

    </a>


  </div>
  
</body>

</html>