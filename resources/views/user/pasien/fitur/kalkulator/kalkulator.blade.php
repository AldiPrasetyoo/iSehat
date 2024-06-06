<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSehat</title>
    @vite('resources/css/app.css')
    @vite('resources/css/kalku.css')
</head>
<body>

<a href="{{ route('home') }}"
          class="text-xl text-black font-bold py-2 px-4 flex gap-2 items-center w-fit "
          >
          <svg
            width="22"
            height="18"
            viewBox="0 0 22 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M19.6166 8.80005H4.58325"
              stroke="#000000"
              strokeWidth="5"
              strokeLinecap="round"
              strokeLinejoin="round"
            />
            <path
              d="M10.9999 13.9333L4.58325 8.79996L10.9999 3.66663"
              stroke="#000000"
              strokeWidth="5"
              strokeLinecap="round"
              strokeLinejoin="round"
            />
          </svg>
          <span>Home</span>
        </a>

<div class="kontainer" x-data="calculator()">
    <div class="calculator">
        <h1>Kalkulator Kebutuhan Kalori</h1>
        <div class="input-group">
            <button :class="{ 'active': gender === 'male' }" @click="setGender('male')">Pria</button>
            <button :class="{ 'active': gender === 'female' }" @click="setGender('female')">Wanita</button>
        </div>
        <input type="number" placeholder="Berat Badan (kg)" x-model="weight" />
        <input type="number" placeholder="Tinggi Badan (cm)" x-model="height" />
        <input type="number" placeholder="Umur" x-model="age" />
        <select x-model="activity" >
            <option value="">Aktivitas</option>
            <option value="low">Rendah</option>
            <option value="medium">Sedang</option>
            <option value="high">Tinggi</option>
        </select>
        <button @click="calculateCalories" class="calculate-button">Hitung</button>
        <template x-if="error">
            <p class="error" x-text="error"></p>
        </template>
        <template x-if="calories">
            <h3>Anda membutuhkan kalori harian sebanyak <span x-text="calories"></span> Kalori/hari</h3>
        </template>
    </div>
</div>

<script>
    function calculator() {
        return {
            gender: '',
            weight: '',
            height: '',
            age: '',
            activity: '',
            calories: null,
            error: '',
            setGender(gender) {
                this.gender = gender;
            },
            calculateCalories() {
                if (!this.gender) {
                    this.error = 'Pilih jenis kelamin!';
                    return;
                }
                if (!this.weight || !this.height || !this.age || !this.activity) {
                    this.error = 'Semua bidang harus diisi!';
                    return;
                }
                this.error = '';
                let bmr;
                if (this.gender === 'male') {
                    bmr = 88 + (13 * this.weight) + (5 * this.height) - (6 * this.age);
                } else {
                    bmr = 447 + (9 * this.weight) + (4 * this.height) - (4 * this.age);
                }
                switch (this.activity) {
                    case 'low':
                        this.calories = bmr * 1.2;
                        break;
                    case 'medium':
                        this.calories = bmr * 1.55;
                        break;
                    case 'high':
                        this.calories = bmr * 1.725;
                        break;
                    default:
                        this.calories = bmr * 1.2;
                        break;
                }
            }
        };
    }
</script>

@vite('resources/js/app.js')
</body>
</html>
