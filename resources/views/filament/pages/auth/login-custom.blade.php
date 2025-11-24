<x-filament-panels::page>
    <div class="min-h-screen flex items-center justify-center">

    <div class="flex w-full max-w-6xl px-4">

        <!-- LEFT -->
        <div class="hidden md:flex flex-col justify-center w-1/2">
            <img src="{{ asset('img/logo/bamart-logo.svg') }}" class="w-[320px]">
        </div>

        <!-- RIGHT -->
        <div class="w-full md:w-1/2 flex justify-center">
            <div class="w-full max-w-md bg-white shadow-xl rounded-3xl border-2 p-10"
                style="border-color:#7D1972">

                <h2 class="text-2xl font-bold text-center mb-8">Daftar</h2>

                <input type="text" placeholder="Masukkan No HP atau email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 mb-4">

                <button class="w-full py-3 rounded-lg text-white font-semibold"
                        style="background:#7D1972">
                    Daftar
                </button>

                <div class="flex items-center my-6">
                    <span class="flex-1 h-px bg-gray-300"></span>
                    <p class="px-3 text-sm text-gray-500">Daftar lebih cepat dengan</p>
                    <span class="flex-1 h-px bg-gray-300"></span>
                </div>

                <div class="flex justify-center gap-3">
                    <button class="bg-[#1877F2] text-white px-5 py-2 rounded-lg">F</button>
                    <button class="bg-white border px-5 py-2 rounded-lg flex items-center gap-2">
                        <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5"> Google
                    </button>
                    <button class="bg-black text-white px-5 py-2 rounded-lg"> Apple</button>
                </div>

                <p class="text-center mt-6 text-sm">
                    Udah punya akun?
                    <a href="/login" class="text-[#7D1972] underline">Log in aja!</a>
                </p>

                <p class="text-[11px] text-center text-gray-500 mt-4 leading-relaxed">
                    Dengan log in, kamu menyetujui 
                    <a class="text-[#7D1972] underline">Kebijakan Privasi</a> dan 
                    <a class="text-[#7D1972] underline">Syarat & Ketentuan</a>
                </p>

            </div>
        </div>

    </div>

</div>
</x-filament-panels::page>
