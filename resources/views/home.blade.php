<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Kiaramasbus trans</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="relative">
    <!-- Ornamen blur di body -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <!-- Ornamen blur untuk section kedua -->
        <div class="absolute top-[130vh] left-10 w-72 h-72 bg-blue-300 rounded-full filter blur-3xl opacity-50"></div>
        <div class="absolute top-[140vh] left-1/2 transform -translate-x-1/2 w-56 h-56 bg-green-300 rounded-full filter blur-2xl opacity-40"></div>
        <div class="absolute top-[160vh] right-10 w-80 h-80 bg-red-300 rounded-full filter blur-2xl opacity-50"></div>
        <!-- Tambahan ornamen di bagian bawah section kedua -->
        <div class="absolute bottom-[70vh] right-1/4 w-64 h-64 bg-yellow-300 rounded-full filter blur-2xl opacity-50"></div>

        <!-- Ornamen blur untuk section ketiga -->
        <div class="absolute top-[220vh] left-20 w-96 h-96 bg-purple-300 rounded-full filter blur-3xl opacity-50"></div>
        <div class="absolute top-[230vh] right-1/2 transform -translate-x-1/2 w-64 h-64 bg-teal-300 rounded-full filter blur-2xl opacity-60"></div>
        <div class="absolute top-[250vh] left-10 w-48 h-48 bg-pink-300 rounded-full filter blur-3xl opacity-50"></div>
        <!-- Tambahan ornamen di bagian bawah section ketiga -->
        <div class="absolute bottom-[140vh] left-32 w-72 h-72 bg-orange-300 rounded-full filter blur-2xl opacity-50"></div>

        <!-- Ornamen blur untuk section keempat -->
        <div class="absolute top-[310vh] left-1/4 w-72 h-72 bg-cyan-300 rounded-full filter blur-3xl opacity-50"></div>
        <div class="absolute top-[330vh] right-1/4 w-56 h-56 bg-lime-300 rounded-full filter blur-2xl opacity-40"></div>
        <div class="absolute top-[340vh] left-10 w-80 h-80 bg-sky-300 rounded-full filter blur-2xl opacity-50"></div>
        <!-- Tambahan ornamen di bagian bawah section keempat -->
        <div class="absolute bottom-[210vh] left-1/2 transform -translate-x-1/2 w-64 h-64 bg-indigo-300 rounded-full filter blur-2xl opacity-50"></div>

        <!-- Ornamen blur untuk section kelima -->
        <div class="absolute top-[400vh] right-10 w-72 h-72 bg-gray-300 rounded-full filter blur-3xl opacity-50"></div>
        <div class="absolute top-[420vh] left-1/4 w-56 h-56 bg-violet-300 rounded-full filter blur-2xl opacity-40"></div>
        <div class="absolute top-[440vh] left-1/2 transform -translate-x-1/2 w-80 h-80 bg-rose-300 rounded-full filter blur-2xl opacity-50"></div>
        <!-- Tambahan ornamen di bagian bawah section kelima -->
        <div class="absolute bottom-[280vh] right-10 w-64 h-64 bg-emerald-300 rounded-full filter blur-2xl opacity-50"></div>
    </div>

    <header class="fixed top-0 left-0 w-full bg-white z-50 flex justify-between items-center py-6 px-10 shadow-lg py-6 px-10">
        <div class="text-3xl font-bold">
            kiaramas.
        </div>
        <nav class="hidden space-x-8 text-lg md:flex">
            <a href="#Home" class="hover:text-gray-700">Home</a>
            <a href="#About" class="hover:text-gray-700">About Us</a>
            <a href="#Services" class="hover:text-gray-700">Our Services</a>
            <a href="#Partners" class="hover:text-gray-700">Our Partners</a>
        </nav>
        <div class="md:hidden">
            <button id="menu-btn" class="text-3xl focus:outline-none">
                <span class="material-icons">menu</span>
            </button>
        </div>
    </header>

    <!-- Sidebar -->
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50">
        <button id="close-btn" class="text-3xl p-4 focus:outline-none">
            <span class="material-icons transition-transform duration-300" id="close-icon">close</span>
        </button>
        <nav class="flex flex-col space-y-4 p-6 text-lg">
            <a href="#Home" class="hover:text-gray-700">Home</a>
            <a href="#About" class="hover:text-gray-700">About Us</a>
            <a href="#Services" class="hover:text-gray-700">Our Services</a>
            <a href="#Partners" class="hover:text-gray-700">Our Partners</a>
        </nav>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <!-- Hero Section -->
    <section id="Home">
        <div class="relative bg-gray-900 z-30">
            <div class="grid grid-cols-4">
                <img alt="Bus" class="w-full h-screen object-cover" src="{{ asset('images/eut2_hq_647ccec6.jpg') }}" />
                <img alt="Bus" class="w-full h-screen object-cover" src="{{ asset('images/eut2_hq_65c62f03.jpg') }}" />
                <img alt="Bus" class="w-full h-screen object-cover" src="{{ asset('images/eut2_hq_6482d972.jpg') }}" />
                <img alt="Bus" class="w-full h-screen object-cover" src="{{ asset('images/eut2_hq_6475423b3.jpg') }}" />
            </div>
            <form class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
                <h1 class="text-4xl sm:text-6xl font-bold">
                    all your <span class="text-yellow-500">golden</span> experiences
                    <br />
                    start from here
                </h1>
                <div class="mt-8 flex justify-between p-2 items-center bg-white rounded-full shadow-lg overflow-hidden w-full max-w-md">
                    <input class="px-4 py-2 text-gray-700 focus:outline-none w-full sm:w-auto" placeholder="Enter your email" type="email" />
                    <button class="bg-black text-white px-6 py-2 rounded-full w-full sm:w-auto">
                        Let's Travel
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="About" class="relative max-w-full p-10 overflow-hidden">
        <!-- Content -->
        <div class="relative flex items-center justify-center min-h-screen z-10">
            <div class="text-center mx-auto">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6 md:mb-10">About Us</h1>
                <p class="text-gray-600">
                    PO Kiara Mas is a charter bus and tour travel service provider from PT Kiaramas Group. We are committed to providing comfortable, safe, and high-quality land transportation. With extensive experience, we are the main choice for intercity travel, tourism, and other special needs. In line with our vision to become the leading mode of transportation in Indonesia, PO Kiara Mas continues to innovate in products and services. We always appreciate customer input and comments as motivation to continue learning and improving the quality of service.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="Services" class="max-w-full mx-auto p-10">
        <div class="flex justify-between items-center px-6 py-4 bg-slate-50 shadow-md rounded-lg mb-6">
            <h2 class="text-lg font-bold text-gray-900">Our Services</h2>
            <a href="#" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full font-medium hover:bg-gray-200 transition">
                View All
            </a>
        </div>

        <div class="space-y-8">
            <!-- VIP Class -->
            <div id="vip-class" class="bg-black text-white rounded-xl py-12 px-10 md:py-16 md:px-12 w-full max-w-full relative overflow-hidden shadow-md">
                <!-- Background shapes -->
                <div class="absolute top-0 right-0 w-full h-full">
                    <div class="absolute w-72 h-72 bg-white opacity-20 rounded-full top-[-75px] left-[-65px] md:left-[-65px] md:right-auto"></div>
                    <div class="absolute w-40 h-40 bg-gray-800 opacity-30 rounded-full bottom-[-60px] right-[-50px]"></div>
                    <div class="absolute top-4 right-4 w-24 h-24 bg-gray-700 rounded-full opacity-50"></div>
                </div>
                <!-- Content -->
                <div class="relative z-10">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <h2 class="text-2xl md:text-3xl font-bold mb-3">VIP Class</h2>
                            <p class="text-sm md:text-base text-gray-300">Enjoy a luxurious journey with premium amenities and extra comfort.</p>
                        </div>
                        <button class="bg-white text-black px-6 py-3 rounded-full text-sm font-semibold hover:bg-gray-200 transition duration-300 flex items-center">
                            View Details
                            <span class="material-icons ml-2">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Executive Class -->
            <div id="executive-class" class="bg-black text-white rounded-xl py-12 px-10 md:py-16 md:px-12 w-full max-w-full relative overflow-hidden shadow-md">
                <!-- Background shapes -->
                <div class="absolute top-0 right-0 w-full h-full">
                    <div class="absolute w-72 h-72 bg-white opacity-20 rounded-full top-[-75px] left-[-65px] md:left-[-65px] md:right-auto"></div>
                    <div class="absolute w-40 h-40 bg-gray-800 opacity-30 rounded-full bottom-[-60px] right-[-50px]"></div>
                    <div class="absolute top-4 right-4 w-24 h-24 bg-gray-700 rounded-full opacity-50"></div>
                </div>
                <!-- Content -->
                <div class="relative z-10">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <h2 class="text-2xl md:text-3xl font-bold mb-3">Executive Class</h2>
                            <p class="text-sm md:text-base text-gray-300">Optimal comfort with complete facilities for long distance travel.</p>
                        </div>
                        <button class="bg-white text-black px-6 py-3 rounded-full text-sm font-semibold hover:bg-gray-200 transition duration-300 flex items-center">
                            View Details
                            <span class="material-icons ml-2">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Business Class -->
            <div id="business-class" class="bg-black text-white rounded-xl py-12 px-10 md:py-16 md:px-12 w-full max-w-full relative overflow-hidden shadow-md">
                <!-- Background shapes -->
                <div class="absolute top-0 right-0 w-full h-full">
                    <div class="absolute w-72 h-72 bg-white opacity-20 rounded-full top-[-75px] left-[-65px] md:left-[-65px] md:right-auto"></div>
                    <div class="absolute w-40 h-40 bg-gray-800 opacity-30 rounded-full bottom-[-60px] right-[-50px]"></div>
                    <div class="absolute top-4 right-4 w-24 h-24 bg-gray-700 rounded-full opacity-50"></div>
                </div>
                <!-- Content -->
                <div class="relative z-10">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <h2 class="text-2xl md:text-3xl font-bold mb-3">Business Class</h2>
                            <p class="text-sm md:text-base text-gray-300">The right choice for comfortable travel at affordable prices.</p>
                        </div>
                        <button class="bg-white text-black px-6 py-3 rounded-full text-sm font-semibold hover:bg-gray-200 transition duration-300 flex items-center">
                            View Details
                            <span class="material-icons ml-2">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Partners" class="relativeflex items-center justify-center min-h-screen overflow-hidden">
        <!-- Content -->
        <div class="relative z-10 flex flex-col justify-center items-center text-center min-h-screen w-full">
            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6 md:mb-10">Our Partners</h1>

            <!-- Logos in a Grid Layout -->
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-2 md:grid-cols-4 place-items-center">
                <!-- Hino Logo -->
                <img src="{{ asset('images/hino Logo.png') }}" alt="Hino Logo" class="w-24 sm:w-32 md:w-40 lg:w-48 h-auto">
                <!-- Laksana Logo -->
                <img src="{{ asset('images/Laksana.png') }}" alt="Laksana Logo" class="w-24 sm:w-32 md:w-40 lg:w-48 h-auto">
                <!-- Adi Putro Logo -->
                <img src="{{ asset('images/Logo Adiputro.png') }}" alt="Adi Putro Logo" class="w-24 sm:w-32 md:w-40 lg:w-48 h-auto">
                <!-- Alcoa Logo -->
                <img src="{{ asset('images/Alcoa Logo.png') }}" alt="Alcoa Logo" class="w-24 sm:w-32 md:w-40 lg:w-48 h-auto">
            </div>
        </div>
    </section>




    <!-- Location Section -->
    <section id="Location" class="flex flex-col items-center justify-center min-h-screen p-10">
        <!-- Title -->
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6 md:mb-10">Our Location</h1>

        <!-- Google Map Embed -->
        <div class="relative overflow-hidden rounded-lg shadow-lg w-full max-w-full h-96">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d136731.54464401325!2d110.57118692863446!3d-7.717098332410469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a416389cafa5d%3A0x3027a76e352bad0!2sKlaten%2C%20Klaten%20Regency%2C%20Central%20Java!5e1!3m2!1sen!2sid!4v1728424810703!5m2!1sen!2sid"
                class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-50 py-10 px-6 md:px-12">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between">
            <!-- Left Column -->
            <!-- Logo and Slogan -->
            <div class="mb-10 md:mb-0">
                <!-- Logo with Circles in Triangle Layout -->
                <div class="relative flex-shrink-0">
                    <!-- Bottom Left Circle -->
                    <div class="bg-yellow-500 w-7 h-7 rounded-full opacity-70"></div>
                    <!-- Bottom Right Circle -->
                    <div class="bg-yellow-500 w-7 h-7 rounded-full absolute top-0 left-4 opacity-50"></div>
                    <!-- Top Center Circle -->
                    <div class="bg-yellow-500 w-7 h-7 rounded-full absolute top-[-15px] left-2 opacity-90"></div>
                </div>
                <!-- Slogan -->
                <p class="text-lg font-bold text-gray-900">
                    all your <span class="text-yellow-500">golden</span> experiences start from here
                </p>
                <!-- Company Info -->
                <p class="text-gray-500">Kiaramas Group, <?php echo date('Y'); ?>.</p>
            </div>

            <!-- Right Column (Links) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
                <!-- Company Column -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#About" class="text-gray-500 hover:text-gray-900">About Us</a></li>
                        <li><a href="#Services" class="text-gray-500 hover:text-gray-900">Our Services</a></li>
                        <li><a href="#Partners" class="text-gray-500 hover:text-gray-900">Our Partners</a></li>
                    </ul>
                </div>

                <!-- Keep In Touch Column -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-4">Keep In Touch</h3>
                    <ul class="space-y-2">
                        <li><a href="#Location" class="text-gray-500 hover:text-gray-900">Our Location</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-gray-900">Help Center</a></li>
                    </ul>
                </div>

                <!-- Legal Column -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-500 hover:text-gray-900">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-gray-900">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-gray-900">Cookies Policy</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-gray-900">Data Processing</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-10 border-t border-gray-300 pt-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <p>© <?php echo date('Y'); ?> Kiaramas Group. All rights reserved.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <!-- Instagram Icon -->
                <a href="#" class="hover:text-gray-900">
                    <i class="fab fa-instagram text-lg"></i>
                </a>
                <!-- Facebook Icon -->
                <a href="#" class="hover:text-gray-900">
                    <i class="fab fa-facebook text-lg"></i>
                </a>
                <!-- YouTube Icon -->
                <a href="#" class="hover:text-gray-900">
                    <i class="fab fa-youtube text-lg"></i>
                </a>
            </div>
        </div>
    </footer>

</body>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeIcon = closeBtn.querySelector('.material-icons');
    const overlay = document.getElementById('overlay');

    // Open sidebar and show overlay
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        closeIcon.classList.add('rotate-90'); // Add animation to close button
    });

    // Close sidebar and hide overlay
    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        closeIcon.classList.remove('rotate-90'); // Reset animation to close button
    });

    // Close sidebar when clicking on overlay
    overlay.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        closeIcon.classList.remove('rotate-90');
    });

    // Close sidebar when screen size changes to larger
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            mobileMenu.classList.add('translate-x-full');
            overlay.classList.add('hidden');
            closeIcon.classList.remove('rotate-90');
        }
    });

    // Menambahkan efek aktif pada link navigasi saat menggulir
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll("nav a");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute("id");
                        navLinks.forEach((link) => {
                            link.classList.remove("text-yellow-500"); // Remove the active class
                            if (link.getAttribute("href").includes(id)) {
                                link.classList.add("text-yellow-500"); // Add the active class
                            }
                        });
                    }
                });
            }, {
                threshold: 0.5
            } // Trigger when 50% of the section is visible
        );

        sections.forEach((section) => {
            observer.observe(section);
        });
    });
</script>

</html>