<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <div class="flex h-screen bg-gray-200" x-data="{ isOpen: false }">
        <div class="flex-shrink-0 w-64 bg-white border-r">
            <div class="flex items-center justify-between p-4 border-b">
                <div>
                    <span class="text-lg font-bold text-gray-800">iSehat</span>
                </div>
            </div>
            <nav class="flex flex-col mt-5">
                <a href="#" class="px-6 py-3 text-sm font-medium text-gray-700 hover:bg-gray-100">Dashboard</a>
                <a href="#" class="px-6 py-3 text-sm font-medium text-gray-700 hover:bg-gray-100">Dokter</a>
                <a href="#" class="px-6 py-3 text-sm font-medium text-gray-700 hover:bg-gray-100">User</a>
                <a href="#" class="px-6 py-3 text-sm font-medium text-gray-700 hover:bg-gray-100">Artikel</a>
            </nav>
        </div>

        <div class="flex flex-col flex-1 overflow-hidden">
            <header class="flex justify-end items-center py-4 px-6 bg-white border-b">
                <div class="text-right justify-end">
                    <span class="font-semibold">{{Auth::user()->name}}</span>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <h2 class="text-2xl font-semibold text-gray-700">
                        Welcome to the Admin Dashboard
                    </h2>

                    <div class="mt-8 bg-blue-40 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Data Overview
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="bg-gray-100 p-4 rounded-lg">
                                <h4 class="text-sm font-semibold text-gray-600">
                                    Articles
                                </h4>
                                <p class="text-lg font-bold text-gray-800">
                                    10
                                </p>
                            </div>

                            <div class="bg-gray-100 p-4 rounded-lg">
                                <h4 class="text-sm font-semibold text-gray-600">
                                    Users
                                </h4>
                                <p class="text-lg font-bold text-gray-800">
                                    100
                                </p>
                            </div>

                            <div class="bg-gray-100 p-4 rounded-lg">
                                <h4 class="text-sm font-semibold text-gray-600">
                                    Makanan Sehat
                                </h4>
                                <p class="text-lg font-bold text-gray-800">
                                    5
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">
                            Tambah Data
                        </h3>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                            <button class="btn" onclick="art.showModal()">
                                Tambah Artikel
                            </button>
                            <dialog id="art" class="modal">
                                <div class="modal-box">
                                    <h3 class="font-bold text-lg">
                                        Tambah Artikel
                                    </h3>
                                    <form id="formArtikel" method="POST" action="{{ route('sendArtikel') }}">
                                        @csrf
                                        <div>
                                            <x-input-label for="judul" :value="__('Judul')" />
                                            <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul"
                                                :value="old('judul')" required autofocus autocomplete="name" />
                                            <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                                        </div>

                                        <div class="mt-4">
                                            <label for="isi" class="block font-semibold">Isi</label>
                                            <textarea id="isi" name="isi" rows="4" cols="10" class="input-box"
                                                required></textarea>
                                        </div>

                                        <div>
                                            <x-input-label for="kategori1" :value="__('kategori1')" />
                                            <x-text-input id="kategori1" class="block mt-1 w-full" type="text"
                                                name="kategori1" :value="old('kategori1')" required autofocus
                                                autocomplete="noHp" />
                                            <x-input-error :messages="$errors->get('kategori1')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="kategori2" :value="__('kategori2')" />
                                            <x-text-input id="kategori2" class="block mt-1 w-full" type="text"
                                                name="kategori2" :value="old('kategori2')" required autofocus
                                                autocomplete="kategori2" />
                                            <x-input-error :messages="$errors->get('kategori2')" class="mt-2" />
                                        </div>
                                        <div class="modal-action">
                                            <button type="submit" class="btn" onclick="clearForm()">
                                                Simpan
                                            </button>
                                            <button class="btn" onclick="art.close(); clearForm()">
                                                Batal
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </dialog>

                            <button class="btn" onclick="user.showModal()">
                                Tambah User
                            </button>
                            <dialog id="user" class="modal">
                                <div class="modal-box">
                                    <h3 class="font-bold text-lg">
                                        Tambah User
                                    </h3>
                                    <form id="formUser" method="POST" action="{{ route('sendUser') }}">
                                        @csrf
                                        <div>
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                                :value="old('name')" required autofocus autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                        <div class="mt-4">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                :value="old('email')" required autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="role" :value="__('Role')" />
                                            <select id="role" name="role"
                                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                required autofocus>
                                                <option value="user" @if(old('role') == 'user') selected @endif>User
                                                </option>
                                                <option value="admin" @if(old('role') == 'admin') selected @endif>Admin
                                                </option>
                                                <option value="dokter" @if(old('role') == 'dokter') selected @endif>Dokter
                                                </option>
                                            </select>
                                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                                        </div>


                                        <div>
                                            <x-input-label for="nomer" :value="__('Nomor Hp')" />
                                            <x-text-input id="nomer" class="block mt-1 w-full" type="text" name="nomer"
                                                :value="old('nomer')" required autofocus autocomplete="noHp" />
                                            <x-input-error :messages="$errors->get('nomer')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="kota" :value="__('Kota Tinggal')" />
                                            <x-text-input id="name" class="block mt-1 w-full" type="text"
                                                name="kotaTinggal" :value="old('kotaTinggal')" required autofocus
                                                autocomplete="kotaTinggal" />
                                            <x-input-error :messages="$errors->get('kotaTinggal')" class="mt-2" />
                                        </div>

                                        <div class="mt-4">
                                            <x-input-label for="password" :value="__('Password')" />

                                            <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                name="password" required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="flex item-center justify-center mt-2">
                                            <x-primary-button class="ms-3">
                                                {{ __('Tambah') }}
                                            </x-primary-button>
                                            <button class="btn" onclick="user.close(); clearForm()">
                                                Batal
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </dialog>

                            <button class="btn" onclick="makan.showModal()">
                                Tambah Makanan
                            </button>
                            <dialog id="makan" class="modal">
                                <div class="modal-box">
                                    <h3 class="font-bold text-lg">
                                        Tambah Makanan
                                    </h3>
                                    <form id="formMakanan" method="POST" action="{{ route('sendMakan') }}">
                                        @csrf
                                        <div>
                                            <x-input-label for="makanan" :value="__('Nama Makanan')" />
                                            <x-text-input id="makanan" class="block mt-1 w-full" type="text"
                                                name="makanan" :value="old('makanan')" required autofocus
                                                autocomplete="makanan" />
                                            <x-input-error :messages="$errors->get('makanan')" class="mt-2" />
                                        </div>

                                        <div class="mt-4">
                                            <x-input-label for="disease_id" :value="__('Disease')" />
                                            <select id="disease_id" name="disease_id"
                                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                required>
                                                @foreach ($disease as $diseases)
                                                    <option value="{{ $diseases->id }}">{{ $diseases->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('disease_id')" class="mt-2" />
                                        </div>


                                        <div>
                                            <x-input-label for="bahanPembuatan" :value="__('bahanPembuatan')" />
                                            <x-text-input id="bahanPembuatan" class="block mt-1 w-full" type="text"
                                                name="bahanPembuatan" :value="old('bahanPembuatan')" required autofocus
                                                autocomplete="noHp" />
                                            <x-input-error :messages="$errors->get('bahanPembuatan')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="caraPembuatan" :value="__('caraPembuatan')" />
                                            <x-text-input id="name" class="block mt-1 w-full" type="text"
                                                name="caraPembuatan" :value="old('caraPembuatan')" required autofocus
                                                autocomplete="caraPembuatan" />
                                            <x-input-error :messages="$errors->get('caraPembuatan')" class="mt-2" />
                                        </div>
                                        <div class="flex item-center justify-center mt-2">
                                            <x-primary-button class="ms-3">
                                                {{ __('Tambah') }}
                                            </x-primary-button>
                                            <button class="btn" onclick="makan.close(); clearForm()">
                                                Batal
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </dialog>

                            <button class="btn" onclick="my_modal_4.showModal()">
                                Tambah Jadwal
                            </button>
                            <dialog id="my_modal_4" class="modal">
                                <div class="modal-box">
                                    <h3 class="font-bold text-lg">
                                        Hello!
                                    </h3>
                                    <p class="py-4">
                                        Press ESC key or click the button
                                        below to close
                                    </p>
                                    <div class="modal-action">
                                        <form method="dialog">
                                            <button class="btn">
                                                Close
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<script>
    function clearForm() {
        document.getElementById("formArtikel,formUser,formMakanan").reset();
    }
</script>

</html>