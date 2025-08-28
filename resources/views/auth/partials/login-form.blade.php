<div class="text-center mb-8">
    <div class="flex items-center justify-center mb-6">
        <div class="relative">
            <img src="{{ asset('assets/img/maskot-inlife.png') }}" alt="Maskot InLife" class="w-40 h-40 object-cover">
            <div class="absolute -top-8 -right-8 gradient-bg text-white px-3 py-1 rounded-full text-lg font-medium whitespace-nowrap">
                Hi! Inlife
            </div>
        </div>
    </div>
</div>

<form id="loginForm" class="space-y-6">
    <div>
        <input type="email" id="email" placeholder="Email" required
            class="w-full px-4 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-inlife-blue focus:border-transparent outline-none transition-all duration-200 text-gray-700 placeholder-gray-400">
    </div>
    <div class="relative">
        <input type="password" id="password" placeholder="Password" required
            class="w-full px-4 py-4 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-inlife-blue focus:border-transparent outline-none transition-all duration-200 text-gray-700 placeholder-gray-400">
        <button type="button" onclick="togglePassword()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors">
            <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
        </button>
    </div>
    <div class="text-left">
        <a href="#" class="text-inlife-blue hover:text-inlife-purple text-sm font-medium transition-colors">Lupa Password?</a>
    </div>
    <button type="submit" class="w-full gradient-bg text-white font-semibold py-4 px-6 rounded-xl hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200">
        Masuk
    </button>
    <div class="text-center">
        <span class="text-gray-600 text-sm">Belum memiliki akun? </span>
        <a href="register" class="text-inlife-blue hover:text-inlife-purple font-medium text-sm transition-colors">Daftar</a>
    </div>
</form>
