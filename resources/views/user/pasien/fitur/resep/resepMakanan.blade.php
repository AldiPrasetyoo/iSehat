<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSehat</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="w-full h-full">
    <nav class="w-full fixed top-0 z-50 p-2">
      <a onclick="window.history.back();" class="text-xl text-black font-bold py-2 px-4 flex gap-2 items-center w-fit ">
        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M19.6166 8.80005H4.58325" stroke="#000000" strokeWidth="2" strokeLinecap="round"
            strokeLinejoin="round" />
          <path d="M10.9999 13.9333L4.58325 8.79996L10.9999 3.66663" stroke="#000000" strokeWidth="5"
            strokeLinecap="round" strokeLinejoin="round" />
        </svg>
        <span>Back</span>
      </a>
    </nav>
    <div class="w-full h-96 bg-red-200 relative">
      <img
        src="https://img-cdn.medkomtek.com/cbSK7dUg1G3bpY3yZGHg0HR887I=/510x395/smart/filters:quality(100):format(webp)/article/ety2TliWToJL9aRu_J8er/original/24mlji190zvfxtjabasz48zea17jmuin.jpg"
        alt="food" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-gray-800 bg-opacity-30 backdrop-blur-[2px]"></div>
    </div>

    <div class="-mt-28 bg-white rounded-t-[48px] w-full relative z-10 p-6 h-96 flex flex-col gap-4">
      <div class="w-full text-center">
        <h1 class="text-3xl font-semibold">{{$resep->name}}</h1>
      </div>
      <div class="w-full rounded-full bg-white shadow-md px-6 flex gap-2 py-2">
        <button class="py-2 px-4 text-xl tab-button active-tab" onclick="openTab('bahan')">Bahan Pembuatan</button>
        <button class="py-2 px-4 text-xl tab-button" onclick="openTab('cara')">Cara Memasak</button>

      </div>
      <div id="bahan" class="tab active text-start">
        <p class = "text-xl">{{$resep->bahanPembuatan}}</p>
      </div>
      <div id="cara" class="tab text-start">
      <p class = "text-xl">{{$resep->caraPembuatan}}</p>
      </div>
    </div>
  </div>

  <script>
    function openTab(tabName) {
      var tabs = document.getElementsByClassName("tab");
      for (var i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
      }
      var tabButtons = document.getElementsByClassName("tab-button");
      for (var i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove("active-tab");
      }
      document.getElementById(tabName).style.display = "block";
      event.currentTarget.classList.add("active-tab");
    }
    window.onload = function () {
      openTab('bahan');
      document.querySelector('.active-tab').classList.add('border-b-2', 'border-orange-500');
    };
  </script>

  <style>
    .active-tab {
      border-bottom: 2px solid #F59E0B;
      color: #F59E0B;
    }
  </style>
</body>

</html>