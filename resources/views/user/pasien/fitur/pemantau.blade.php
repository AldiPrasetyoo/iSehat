<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>iSehat</title>
    @vite('resources/css/app.css')
    @vite('resources/css/jadwal.css')
</head>

<body>
    <div style="margin: auto; text-align: center;">
        <a href="{{ route('home') }}" class="text-xl text-black font-bold py-2 px-4 flex gap-2 items-center w-fit ">
            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.6166 8.80005H4.58325" stroke="#000000" strokeWidth="2" strokeLinecap="round"
                    strokeLinejoin="round" />
                <path d="M10.9999 13.9333L4.58325 8.79996L10.9999 3.66663" stroke="#000000" strokeWidth="5"
                    strokeLinecap="round" strokeLinejoin="round" />
            </svg>
            <span>Home</span>
        </a>
        <div
            style="word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 35px; color: #FF7575; margin-bottom: 10px;">
            Pemantau Kesehatan
        </div>
        <div style="background-color: #000000; width: 330px; height: 3px; margin: auto;"></div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; padding: 32px 20px 0; height: 500px;">
        <!-- Kotak 1 -->
        <div style="border-radius: 5px; background-color: rgba(86, 199, 235, 0.19); padding: 13px 23px 17px 21px;">
            <div
                style="border-radius: 8px; border: 1px solid #FFFFFF; background-color: #FFFFFF; position: relative; margin: 0 6px 0 0; display: flex; padding: 1px 7.2px 1px 6px; flex-grow: 1; flex-basis: 32px; box-sizing: border-box;">
                <span
                    style="word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 22px; color: #000000;"
                    class="mx-auto">Pola Makan</span>
            </div>
            <h2>Anda Membutuhkan 1500 kalori hari ini, jangan lupa makan sayur!</h2>
        </div>
        <!-- Kotak 2 -->
        <div style="border-radius: 5px; background-color: rgba(86, 199, 235, 0.19); padding: 13px 23px 17px 21px;">
            <div
                style="border-radius: 8px; border: 1px solid #FFFFFF; background-color: #FFFFFF; position: relative; margin: 0 6px 0 0; display: flex; padding: 1px 7.2px 1px 6px; flex-grow: 1; flex-basis: 32px; box-sizing: border-box;">
                <span
                    style="word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 22px; color: #000000;"
                    class="mx-auto">Pola Tidur</span>
            </div>
            <h2>Anda Hanya Tidur 6 jam hari ini, jangan terlalu lelah!</h2>
        </div>
        <!-- Kotak 3 -->
        <div style="border-radius: 5px; background-color: rgba(86, 199, 235, 0.19); padding: 13px 23px 17px 21px;">
            <div
                style="border-radius: 8px; border: 1px solid #FFFFFF; background-color: #FFFFFF; position: relative; margin: 0 6px 0 0; display: flex; padding: 1px 7.2px 1px 6px; flex-grow: 1; flex-basis: 32px; box-sizing: border-box;">
                <span
                    style="word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 22px; color: #000000;"
                    class="mx-auto">Pengingat Obat</span>
            </div>

            <h2>Tidak ada Obat yang Harus Diminum.</h2>
        </div>
        <!-- Kotak 4 -->
        <div style="border-radius: 5px; background-color: rgba(86, 199, 235, 0.19); padding: 13px 23px 17px 21px;">
            <div
                style="border-radius: 8px; border: 1px solid #FFFFFF; background-color: #FFFFFF; position: relative; margin: 0 6px 0 0; display: flex; padding: 1px 7.2px 1px 6px; flex-grow: 1; flex-basis: 32px; box-sizing: border-box;">
                <span
                    style="word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 22px; color: #000000;"
                    class="mx-auto">Pengingat Temu</span>
            </div>

            <h2>Anda Memiliki Jadwal Konsultasi dengan Dokter Anton.</h2>
        </div>
    </div>
</body>

</html>