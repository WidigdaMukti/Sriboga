<header>
    <!-- Navigation Bar -->
    <nav class="bg-[#fff9ef] py-4">
        <div class="container mx-auto flex justify-center items-center px-4">

            <!-- Menu Burger untuk Mobile -->
            <div class="md:hidden">
                <button id="burger" class="text-blue-900 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- List Menu untuk Desktop -->
            <ul id="nav-menu" class="hidden md:flex justify-center space-x-8 text-blue-900 font-semibold">
                <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                <li><a href="#" class="hover:underline">Produk</a></li>
                <li><a href="#" class="hover:underline">Inspirasi Baking</a></li>
                <li><a href="#" class="hover:underline">Baking & Consulting</a></li>
                <li><a href="#" class="hover:underline">Pemberdayaan UKM</a></li>
                <li><a href="#" class="hover:underline">Acara</a></li>
                <li><a href="#" class="hover:underline">Hubungi Kami</a></li>
            </ul>
        </div>

        <!-- Menu untuk Mobile, tampil jika burger menu ditekan -->
        <div id="mobile-menu" class="hidden md:hidden flex-col space-y-4 mt-4 text-center text-blue-900">
            <a href="#" class="hover:underline">Tentang Kami</a>
            <a href="#" class="hover:underline">Produk</a>
            <a href="#" class="hover:underline">Inspirasi Baking</a>
            <a href="#" class="hover:underline">Baking & Consulting</a>
            <a href="#" class="hover:underline">Pemberdayaan UKM</a>
            <a href="#" class="hover:underline">Acara</a>
            <a href="#" class="hover:underline">Hubungi Kami</a>
        </div>
    </nav>
</header>

<script>
    // Toggle untuk menu burger
    document.getElementById('burger').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
