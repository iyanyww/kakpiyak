class FooterComponent extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `

<footer class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white shadow-lg py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- About Kak Piyak -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold mb-4">About Kak Piyak</h3>
                    <p class="text-gray-300 leading-relaxed">Discover Kak Piyak's journey from our first meeting to our
                        shared experiences. From our initial encounter at New Beverly Hills to our fun gaming sessions
                        and meaningful conversations, learn about the special moments that define our bond.</p>
                </div>

                <!-- Quick Links -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul>
                        <li><a href="index.html" class="hover:text-yellow-200 font-sans">Home</a></li>
                        <li><a href="about.html" class="hover:text-yellow-200 font-sans">About</a></li>
                        <li><a href="messages_&_impressions.html" class="hover:text-yellow-200 font-sans">Messages &
                                Impressions</a></li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold mb-4">Social Media</h3>
                    <ul class="flex space-x-4">
                        <li>
                            <a href="https://www.instagram.com/da.real_lyn/"
                                class="text-gray-300 hover:text-white transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transform hover:scale-110"
                                    viewBox="0 0 48 48">
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035"
                                        r="44.899" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fd5"></stop>
                                        <stop offset=".328" stop-color="#ff543f"></stop>
                                        <stop offset=".348" stop-color="#fc5245"></stop>
                                        <stop offset=".504" stop-color="#e64771"></stop>
                                        <stop offset=".643" stop-color="#d53e91"></stop>
                                        <stop offset=".761" stop-color="#cc39a4"></stop>
                                        <stop offset=".841" stop-color="#c837ab"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                    </path>
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54"
                                        r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#4168c9"></stop>
                                        <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                    </path>
                                    <path fill="#fff"
                                        d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                    </path>
                                    <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                    <path fill="#fff"
                                        d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://discordapp.com/users/1187744434264231957"
                                class="text-gray-300 hover:text-white transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transform hover:scale-110"
                                    x="0px" y="0px" width="100" height="100" viewBox="0 0 64 64">
                                    <linearGradient id="ojxs_RS1~BeeBtSHUxpmva_61604_gr1" x1="39.938" x2="39.938"
                                        y1="30" y2="39" gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                                        <stop offset="0" stop-color="#6dc7ff"></stop>
                                        <stop offset="1" stop-color="#e6abff"></stop>
                                    </linearGradient>
                                    <path fill="url(#ojxs_RS1~BeeBtSHUxpmva_61604_gr1)"
                                        d="M39.938 30A3.938 4.5 0 1 0 39.938 39A3.938 4.5 0 1 0 39.938 30Z"></path>
                                    <linearGradient id="ojxs_RS1~BeeBtSHUxpmvb_61604_gr2" x1="31.999" x2="31.999"
                                        y1="10.961" y2="53" gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                                        <stop offset="0" stop-color="#1a6dff"></stop>
                                        <stop offset="1" stop-color="#c822ff"></stop>
                                    </linearGradient>
                                    <path fill="url(#ojxs_RS1~BeeBtSHUxpmvb_61604_gr2)"
                                        d="M52.263,15.938c-4.816-3.871-13.024-4.925-13.372-4.968c-0.437-0.057-0.855,0.182-1.035,0.583 c-0.025,0.055-0.543,1.23-0.778,2.782C35.086,14.073,33.313,14,31.983,14c-1.373,0-3.216,0.076-5.289,0.36 c-0.233-1.564-0.757-2.753-0.782-2.808c-0.18-0.401-0.598-0.636-1.039-0.583c-0.337,0.043-8.322,1.099-13.188,5.013 C9.122,18.35,4,32.125,4,44c0,0.173,0.045,0.344,0.131,0.495c3.427,6.02,13.558,8.432,15.837,8.505c0.011,0,0.021,0,0.032,0 c0.303,0,0.591-0.138,0.781-0.375l3.495-4.368C26.519,48.703,29.098,49,32.024,49c2.911,0,5.474-0.294,7.706-0.737l3.49,4.362 C43.409,52.862,43.697,53,44,53c0.011,0,0.021,0,0.032,0c2.274-0.073,12.39-2.495,15.835-8.547c0.086-0.15,0.131-0.321,0.131-0.495 C59.999,32.105,54.877,18.349,52.263,15.938z M44.451,50.963l-2.56-3.2c5.635-1.499,8.568-3.846,8.744-3.99 c0.426-0.35,0.487-0.978,0.139-1.405c-0.349-0.426-0.978-0.49-1.406-0.143C49.309,42.273,43.365,47,32.024,47 c-11.331,0-17.322-4.719-17.394-4.776c-0.427-0.348-1.057-0.284-1.405,0.145c-0.349,0.428-0.285,1.058,0.144,1.407 c0.177,0.144,3.121,2.48,8.748,3.979l-2.567,3.209c-2.906-0.323-10.736-2.658-13.547-7.236c0.078-11.308,5.015-24.405,6.989-26.232 c3.547-2.851,9.281-4.06,11.356-4.42c0.133,0.413,0.281,0.98,0.373,1.611c-2.991,0.579-6.274,1.619-9.246,3.463 c-0.47,0.291-0.614,0.907-0.323,1.376c0.292,0.471,0.907,0.616,1.376,0.323C21.928,16.5,28.529,16,31.983,16 c3.467,0,10.089,0.5,15.49,3.85c0.164,0.102,0.346,0.15,0.526,0.15c0.334,0,0.662-0.168,0.851-0.473 c0.292-0.469,0.147-1.085-0.323-1.376c-3.043-1.888-6.417-2.931-9.473-3.502c0.093-0.618,0.239-1.171,0.369-1.576 c2.109,0.352,8.01,1.549,11.534,4.379c2.026,1.871,6.961,14.95,7.04,26.235C55.172,48.292,47.352,50.64,44.451,50.963z">
                                    </path>
                                    <linearGradient id="ojxs_RS1~BeeBtSHUxpmvc_61604_gr3" x1="24" x2="24" y1="30"
                                        y2="39" gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                                        <stop offset="0" stop-color="#6dc7ff"></stop>
                                        <stop offset="1" stop-color="#e6abff"></stop>
                                    </linearGradient>
                                    <path fill="url(#ojxs_RS1~BeeBtSHUxpmvc_61604_gr3)"
                                        d="M24 30A4 4.5 0 1 0 24 39A4 4.5 0 1 0 24 30Z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm">
                <p>&copy; 2024 Kak Piyak. All rights reserved.</p>
            </div>
        </div>
    </footer> `;
  }
}

customElements.define('footer-component', FooterComponent);