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
    <div
        style="background-color: #FFFFFF; display: flex; flex-direction: column; padding: 32px 0 0 0; box-sizing: border-box;">
        <div
            style="border-radius: 5px; background-color: rgba(86,199,235,0.19); position: relative; margin: 0 19px 0 19px; display: flex; flex-direction: column; align-items: center; padding: 13px 23px 17px 21px; width: calc(100% - 38px); box-sizing: border-box; height: 82vh">
            <div
                style="margin: 0 0 11.2px 2px; display: flex; flex-direction: column; align-items: center; width: fit-content; box-sizing: border-box;">
                <div
                    style="margin: 0 0 6.8px 0; display: inline-block; word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 35px; color: #2E89A6;">
                    Jadwal Dokter Harian
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
                                style="word-break: break-word; font-family: 'Poppins'; font-weight: bold; font-size: 30px; color: #FFFFFF;">Dr.
                                Emily Sastrowidjoyo</span>
                            <span
                                style="margin: 0 0 0 2px; word-break: break-word; font-family: 'Poppins'; font-weight: normal; font-size: 25px; color: #FFFFFF;">Spesialis
                                Gizi</span>
                        </div>
                        <div
                            style="background-color: #FFFFFF; position: absolute; left: 0px; right: 0px; bottom: 35px; height: 1px;">
                        </div>
                    </div>
                    <div
                        style="border-radius: 8px; margin: 0 8px 0 8px; display: flex; flex-direction: row; justify-content: space-between; width: calc(100% - 16px); box-sizing: border-box;">
                        <div
                            style="border-radius: 8px; border: 1px solid #FFFFFF; background-color: #FFFFFF; position: relative; margin: 0 6px 0 0; display: flex; padding: 1px 7.2px 1px 6px; flex-grow: 1; flex-basis: 32px; box-sizing: border-box;">
                            <span
                                style="word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 22px; color: #000000;"
                                class="mx-auto">09.30</span>
                        </div>
                        <div
                            style="border-radius: 8px; border: 1px solid #FFFFFF; background-color: #FFFFFF; position: relative; margin: 0 6px 0 0; display: flex; padding: 1px 7.2px 1px 6px; flex-grow: 1; flex-basis: 32px; box-sizing: border-box;">
                            <span
                                style="word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 22px; color: #000000;"
                                class="mx-auto">10.00</span>
                        </div>
                        <div
                            style="border-radius: 8px; border: 1px solid #FFFFFF; background-color: #FFFFFF; position: relative; margin: 0 6px 0 0; display: flex; padding: 1px 7.2px 1px 6px; flex-grow: 1; flex-basis: 32px; box-sizing: border-box;">
                            <span
                                style="word-wrap: break-word; font-family: 'Poppins'; font-weight: 600; font-size: 22px; color: #000000;"
                                class="mx-auto">13.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btm-nav h-14">
        <a href="{{ route('home') }}" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        </a>
        <a href="{{ route('jadwal') }}" class="active flex items-center">
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