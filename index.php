<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kak Piyak - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@300;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gradient-to-r from-indigo-500 to-sky-500 font-sans antialiased"
    style="background-image: url('img/kuromi.jpg');">

    <!-- Loader -->
    <div id="loader"
        class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 fixed inset-0 flex items-center justify-center z-50">
        <div class="text-center flex flex-col items-center">
            <img src="img/logo.png" alt="Loading" class="loader-gif fade-in mb-4">
            <p class="loader-text fade-in italic">Kak Piyak ╰(*°▽°*)╯</p>
        </div>
    </div>


    <?php require 'component/header.php'; ?>


    <main class="container mx-auto px-4 py-12">

<section class="relative h-screen flex items-center justify-center text-center text-white fixed">
    <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-[-1]">
        <source src="video/kakpiyak.mp4" type="video/mp4">
        Video tidak dapat diputar pada perangkat Anda.
    </video>
    <div class="relative z-10">
        <h1 class="text-5xl font-bold mb-4">Welcome to Kak Piyak's Website</h1>
        <p class="text-lg mb-8">Welcome to our special space! Here, we share the cherished moments and experiences we've had
            with Kak Piyak, from our first meeting to our ongoing journey together. Dive into our story and feel
            the bond we've created.</p>

            <button id="feedback-button" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                Give Feedback
            </button>
    </div>
</section>



        <section class="mb-12">
            <h2 class="text-3xl font-bold text-white mb-6 text-center font-serif">Our Timeline</h2>
            <div class="timeline grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="timeline-item bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
                    <span class="text-4xl text-indigo-500 font-bold mb-4">23</span>
                    <div class="text-gray-700">
                        <h3 class="text-xl font-semibold mb-2 font-serif">July 2024</h3>
                        <p>Our first meeting at New Beverly Hills (NBH), Jababeka. We talked until late, and I enjoyed
                            getting to know you.</p>
                    </div>
                </div>
                <div class="timeline-item bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
                    <span class="text-4xl text-sky-500 font-bold mb-4">25</span>
                    <div class="text-gray-700">
                        <h3 class="text-xl font-semibold mb-2 font-serif">July 2024</h3>
                        <p>I sent you my WhatsApp number, and you reached out to me on WhatsApp. Later, you shared a
                            photo from your university. I was almost there, but plans changed. Felt a mix of excitement
                            and disappointment!</p>
                    </div>
                </div>
                <div class="timeline-item bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
                    <span class="text-4xl text-indigo-500 font-bold mb-4">29</span>
                    <div class="text-gray-700">
                        <h3 class="text-xl font-semibold mb-2 font-serif">July 2024</h3>
                        <p>We played MLBB together for the first time! It was fun, like playing with an older sibling.
                            We had a deep conversation afterwards, and I appreciated your honesty.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-white mb-6 text-center font-serif">Gallery</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery Item 1 -->
                <div class="relative group cursor-pointer">
                    <img src="img/NBH.png" alt="First Meeting" class="rounded-lg shadow-md object-cover w-full h-64 ">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">First Meeting</h3>
                        <p class="text-white mt-2">The first meeting with Kak Piyak at New Beverly Hills. It was an
                            exciting and memorable encounter.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/NBH.png', 'First Meeting', 'The first meeting with Kak Piyak at New Beverly Hills. It was an exciting and memorable encounter.');"></button>
                </div>

                <!-- Gallery Item 2 -->
                <div class="relative group cursor-pointer">
                    <img src="img/PU.jpg" alt="University Activity"
                        class="rounded-lg shadow-md object-cover w-full h-64">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">University Activity</h3>
                        <p class="text-white mt-2">A snapshot of Kak Piyak's university activity, capturing moments of
                            academic engagement and social interaction.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/PU.jpg', 'University Activity', 'A snapshot of Kak Piyak\'s university activity, capturing moments of academic engagement and social interaction.');"></button>
                </div>

                <!-- Gallery Item 3 -->
                <div class="relative group cursor-pointer">
                    <img src="img/ML.jpg" alt="Playing MLBB" class="rounded-lg shadow-md object-cover w-full h-64">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">Playing MLBB</h3>
                        <p class="text-white mt-2">Enjoying a fun session of Mobile Legends: Bang Bang with Kak Piyak,
                            where we had a great time together.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/ML.jpg', 'Playing MLBB', 'Enjoying a fun session of Mobile Legends: Bang Bang with Kak Piyak, where we had a great time together.');"></button>
                </div>

                <!-- Gallery Item 4 -->
                <div class="relative group cursor-pointer">
                    <img src="img/ML (2).jpg" alt="Playing MLBB" class="rounded-lg shadow-md object-cover w-full h-64">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">Playing MLBB</h3>
                        <p class="text-white mt-2">Another exciting moment from our Mobile Legends: Bang Bang session,
                            showcasing teamwork and strategy.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/ML (2).jpg', 'Playing MLBB', 'Another exciting moment from our Mobile Legends: Bang Bang session, showcasing teamwork and strategy.');"></button>
                </div>

                <!-- Gallery Item 5 -->
                <div class="relative group cursor-pointer">
                    <img src="img/ML (3).jpg" alt="Playing MLBB" class="rounded-lg shadow-md object-cover w-full h-64">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">Playing MLBB</h3>
                        <p class="text-white mt-2">An engaging session of Mobile Legends: Bang Bang with strategic plays
                            and memorable moments.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/ML (3).jpg', 'Playing MLBB', 'An engaging session of Mobile Legends: Bang Bang with strategic plays and memorable moments.');"></button>
                </div>

                <!-- Gallery Item 6 -->
                <div class="relative group cursor-pointer">
                    <img src="img/ML (4).jpg" alt="Playing MLBB" class="rounded-lg shadow-md object-cover w-full h-64">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">Playing MLBB</h3>
                        <p class="text-white mt-2">A thrilling part of our Mobile Legends: Bang Bang game, filled with
                            action and excitement.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/ML (4).jpg', 'Playing MLBB', 'A thrilling part of our Mobile Legends: Bang Bang game, filled with action and excitement.');"></button>
                </div>

                <!-- Gallery Item 7 -->
                <div class="relative group cursor-pointer">
                    <img src="img/ML (5).jpg" alt="Playing MLBB" class="rounded-lg shadow-md object-cover w-full h-64">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">Playing MLBB</h3>
                        <p class="text-white mt-2">Another memorable Mobile Legends: Bang Bang session with intense
                            gameplay and fun moments.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/ML (5).jpg', 'Playing MLBB', 'Another memorable Mobile Legends: Bang Bang session with intense gameplay and fun moments.');"></button>
                </div>

                <!-- Gallery Item 8 -->
                <div class="relative group cursor-pointer">
                    <img src="img/ML (6).jpg" alt="Playing MLBB" class="rounded-lg shadow-md object-cover w-full h-64">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">Playing MLBB</h3>
                        <p class="text-white mt-2">Final highlights from our Mobile Legends: Bang Bang experience,
                            showcasing our teamwork and victories.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/ML (6).jpg', 'Playing MLBB', 'Final highlights from our Mobile Legends: Bang Bang experience, showcasing our teamwork and victories.');"></button>
                </div>

                <!-- Gallery Item 9 -->
                <div class="relative group cursor-pointer">
                    <img src="img/MyNumber.png" alt="MyNumber" class="rounded-lg shadow-md object-cover w-full h-64">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-lg text-white font-semibold">My Number</h3>
                        <p class="text-white mt-2">A special moment when I first shared my WhatsApp number with Kak
                            Piyak via Discord, marking a significant step in our communication and connection.</p>
                    </div>
                    <button class="absolute inset-0 w-full h-full"
                        onclick="openModal('img/MyNumber.png', 'My Number', 'A special moment when I first shared my WhatsApp number with Kak Piyak via Discord, marking a significant step in our communication and connection.');"></button>
                </div>

            </div>
        </section>

        <!-- Modal -->
        <div id="gallery-modal"
            class="fixed inset-0 bg-gray-900 bg-opacity-80 flex justify-center items-center hidden z-50">
            <div class="bg-white rounded-lg overflow-hidden relative max-w-lg mx-4 p-4">
                <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-2xl"
                    onclick="closeModal()">&times;</button>
                <img id="modal-image" src="" alt="" class="w-full h-auto rounded-lg mb-4">
                <h3 id="modal-title" class="text-xl font-semibold mb-2"></h3>
                <p id="modal-description"></p>
            </div>
        </div>
    </main>

    <?php require 'component/footer.php'; ?>
    
    
    <script src="js/mobile.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/loader.js"></script>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/sweetalerts.js"></script>

</body>

</html>