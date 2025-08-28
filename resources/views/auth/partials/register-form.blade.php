
<form id="registerForm" class="space-y-6">
    <div>
        <input type="text" id="name" placeholder="Nama Lengkap" required
            class="w-full px-4 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-inlife-blue focus:border-transparent outline-none transition-all duration-200 text-gray-700 placeholder-gray-400">
    </div>
    <div>
        <input type="tel" id="phone" placeholder="Nomor HP (whatsapp)" required
            class="w-full px-4 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-inlife-blue focus:border-transparent outline-none transition-all duration-200 text-gray-700 placeholder-gray-400">
    </div>
    <div>
        <input type="email" id="email" placeholder="Email" required
            class="w-full px-4 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-inlife-blue focus:border-transparent outline-none transition-all duration-200 text-gray-700 placeholder-gray-400">
    </div>
    <div class="relative">
        <input type="password" id="password" placeholder="Password" required
            class="w-full px-4 py-4 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-inlife-blue focus:border-transparent outline-none transition-all duration-200 text-gray-700 placeholder-gray-400">
        <button type="button" onclick="togglePassword('password','eyeIcon1')" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors">
            <svg id="eyeIcon1" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
        </button>
    </div>
   
    <div class="flex items-start space-x-2 text-sm text-gray-600">
        <input type="checkbox" id="agreement" required class="mt-1">
        <label for="agreement">
            Dengan ini saya menyatakan bahwa seluruh data dan/atau informasi yang saya sampaikan adalah benar
        </label>
    </div>
    <button type="submit" class="w-full gradient-bg text-white font-semibold py-4 px-6 rounded-xl hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
        Daftar
    </button>
    <div class="text-center">
        <span class="text-gray-600 text-sm">Sudah memiliki akun Internship? </span>
        <a href="login" class="text-inlife-blue hover:text-inlife-purple font-medium text-sm transition-colors">Masuk</a>
    </div>
</form>

<script>
function togglePassword(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);
    if (input.type === "password") {
        input.type = "text";
        icon.classList.add("text-inlife-blue");
    } else {
        input.type = "password";
        icon.classList.remove("text-inlife-blue");
    }
}
</script>
