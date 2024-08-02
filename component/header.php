<header class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white shadow-lg">
    <div class="container mx-auto py-6 flex justify-between items-center">
        <!-- Logo and Title -->
        <div class="flex items-center flex-shrink-0">
            <img src="img/logo.png" alt="Logo" class="h-12 mr-4">
            <h1 class="text-3xl font-bold font-serif">Kak Piyak</h1>
        </div>

        <!-- Navbar Menu -->
        <nav class="hidden md:flex flex-1 justify-center items-center">
            <ul id="menu" class="flex space-x-8 items-center">
                <li><a href="index.html"
                        class="hover:text-yellow-200 transition-colors duration-200 font-sans">Home</a></li>
                <li><a href="about.html"
                        class="hover:text-yellow-200 transition-colors duration-200 font-sans">About</a></li>
                <li><a href="messages_&_impressions.html"
                        class="hover:text-yellow-200 transition-colors duration-200 font-sans">Messages &
                        Impressions</a></li>
            </ul>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="block md:hidden focus:outline-none">
            <div class="hamburger space-y-1.5">
                <span class="block w-8 h-0.5 bg-white"></span>
                <span class="block w-8 h-0.5 bg-white"></span>
                <span class="block w-8 h-0.5 bg-white"></span>
            </div>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white">
        <ul class="flex flex-col items-center space-y-4 py-4">
            <li><a href="index.html" class="hover:text-yellow-200 transition-colors duration-200 font-sans">Home</a>
            </li>
            <li><a href="about.html"
                    class="hover:text-yellow-200 transition-colors duration-200 font-sans">About</a></li>
            <li><a href="messages_&_impressions.html"
                    class="hover:text-yellow-200 transition-colors duration-200 font-sans">Messages &
                    Impressions</a></li>
        </ul>
    </div>
</header>