<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$disease->name}}</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="w-full flex flex-col gap-4 p-2">
    <nav class="w-full sticky top-0 ">
    <a onclick="window.history.back();"
        class="text-xl text-black font-bold py-2 px-4 flex gap-2 items-center w-fit ">
        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M19.6166 8.80005H4.58325" stroke="#000000" strokeWidth="2" strokeLinecap="round"
            strokeLinejoin="round" />
          <path d="M10.9999 13.9333L4.58325 8.79996L10.9999 3.66663" stroke="#000000" strokeWidth="5"
            strokeLinecap="round" strokeLinejoin="round" />
        </svg>
        <span>Back</span>
      </a>
    </nav>

    <div class="flex flex-col gap-4 items-center">
      <h1 class="text-2xl font-bold pb-2 border-b-2 border-black max-w-72 text-center">
        Resep Makanan Sehat untuk Penyakit
        <span class="capitalize">{{$disease->name}}</span>
      </h1>
      <div class="flex flex-col gap-4 w-full px-8 ">

        @foreach ($resep as $reseps)

      <div class="w-full rounded-xl overflow-hidden bg-red-200 h-32 relative" key={{$loop->index}}>
        <img
        src="https://img-cdn.medkomtek.com/cbSK7dUg1G3bpY3yZGHg0HR887I=/510x395/smart/filters:quality(100):format(webp)/article/ety2TliWToJL9aRu_J8er/original/24mlji190zvfxtjabasz48zea17jmuin.jpg"
        alt={{$reseps->name}} class="w-full h-full top-0 left-0 right-0 absolute object-cover rounded-md -z-1" />

        <div
        class="w-full h-full absolute top-0 left-0 right-0 bottom-0 flex gap-4 p-4 z-1 bg-white/70 backdrop-blur-[4px]">
        <div class="aspect-square h-full bg-blue-200 w-auto rounded-md">
          <img
          src="https://img-cdn.medkomtek.com/cbSK7dUg1G3bpY3yZGHg0HR887I=/510x395/smart/filters:quality(100):format(webp)/article/ety2TliWToJL9aRu_J8er/original/24mlji190zvfxtjabasz48zea17jmuin.jpg"
          alt={{$reseps->name}} class="w-full h-full object-cover" />
        </div>
        <div class="flex flex-col justify-center">
          <p class="font-semibold text-black">{{$reseps->name}}</p>
          <a href="{{ route('resep.show', [$reseps->name]) }}"class="text-purple-400 underline">
          Lihat Resep>>
          </a>
        </div>
        </div>
      @endforeach
        </div>
      </div>
    </div>
  </div>
</body>

</html>