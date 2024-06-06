<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSehat</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="w-full p-2 flex flex-col gap-4">
    <a href="{{ route('home') }}" class="text-xl text-black font-bold py-2 px-4 flex gap-2 items-center w-fit ">
      <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.6166 8.80005H4.58325" stroke="#000000" strokeWidth="2" strokeLinecap="round"
          strokeLinejoin="round" />
        <path d="M10.9999 13.9333L4.58325 8.79996L10.9999 3.66663" stroke="#000000" strokeWidth="5"
          strokeLinecap="round" strokeLinejoin="round" />
      </svg>
      <span>Home</span>
    </a>
    <div class="w-full flex flex-col items-center gap-4">
      <p class="pb-2 font-semibold border-b-2 border-black text-2xl text-[#FF7575]">
        Penyakit yang diderita
      </p>
      @foreach ($disease as $diseases)
      <a href="{{ route('disease.show', [$diseases->name]) }}" class="btn bg-[#0F7697] text-white btn-wide" key={{$loop->index}}>
      {{$diseases->name}}
      </a>
    @endforeach
    </div>
  </div>
</body>

</html>