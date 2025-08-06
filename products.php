<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Products</span>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span>Products</span> -->
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60" style="background-image: url('assets/images/bg/office.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
            Your business success powered by our innovation
            </h1>
        </div>
        <div class="absolute bottom-8 w-full flex justify-center z-10">
            <button onclick="scrollToNextSection()" class="relative group mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bg-slate-50 pt-1 text-blue-950 rounded-full w-10 h-10 transition-all duration-300 transform group-hover:scale-110 group-hover:bg-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
    </div>
</div>


<!-- <div id="next-section" class="container mx-auto my-8 md:my-24">
    <div class="pb-2 px-4 md:px-0 md:mb-8">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-5xl py-2 mb-2">Our Top-Tier Products</h2>
                <p class="text-gray-700 text-lg text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, debitis.</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-sky-600 px-4 md:px-8 py-6 md:py-6 mx-4 md:mx-0 shadow transform transition-transform duration-300 ease-in-out hover:translate-y-[-8px]">
            <div class="block md:flex">
                <div class="w-full md:w-1/2">
                    <h3 class="text-xl text-white font-bold mb-4">Ednect</h3>
                    <p class="text-white mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cumque sequi qui iure odit quas, itaque animi tenetur natus.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cumque sequi qui iure odit quas, itaque animi tenetur natus.
                    </p>
                    <a href="#" class="text-white hover:underline">
                        Learn more →
                    </a>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center mt-6 md:mt-0">
                    <img src="assets/images/products/ednect.png" alt="product" class="w-full md:w-72 h-auto">
                </div>
            </div>
        </div>

        <div class="bg-white px-4 md:px-8 py-6 md:py-6 mx-4 md:mx-0 shadow transform transition-transform duration-300 ease-in-out hover:translate-y-[-8px]">
            <div class="block md:flex">
                <div class="w-full md:w-1/2">
                    <h3 class="text-xl font-bold mb-4">Ednect</h3>
                    <p class="text-gray-700 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cumque sequi qui iure odit quas, itaque animi tenetur natus.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cumque sequi qui iure odit quas, itaque animi tenetur natus.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline">
                        Learn more →
                    </a>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center mt-6 md:mt-0">
                    <img src="assets/images/products/ednect.png" alt="product" class="w-full md:w-72 h-auto">
                </div>
            </div>
        </div>

        <div class="px-4 md:px-8 py-6 md:py-6 mx-4 md:mx-0 transform transition-transform duration-300 ease-in-out hover:translate-y-[-8px]">
            <div class="block md:flex">
                <div class="w-full md:w-1/2">
                    <h3 class="text-xl font-bold mb-4">Transtrack</h3>
                    <p class="text-gray-700 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cumque sequi qui iure odit quas, itaque animi tenetur natus.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cumque sequi qui iure odit quas, itaque animi tenetur natus.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline">
                        Learn more →
                    </a>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center mt-6 md:mt-0">
                    <img src="assets/images/product/tt.png" alt="product" class="w-full md:w-48 h-auto">
                </div>
            </div>
        </div>

    </div>
</div> -->



<div id="next-section" class="container mx-auto my-16 md:my-32 flex flex-col md:flex-row items-start md:space-x-4 px-4 md:px-0">
    <div class="w-full md:w-2/5 md:sticky md:top-[10rem]">
        <div class="text-left">
            <h2 class="text-lg text-gray-800 font-bold">Our Top-Tier Products</h2>
            <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mt-4">Embrace smart transformation!<br> Trust Vasp Technologies,<br> and watch your business soar!</h2>
            <p class="mt-4 text-md md:text-lg max-w-2xl text-gray-700 mx-auto md:mx-0 md:pr-8">At Vasp Technologies, we're not just software developers– we're your strategic partner in transformation. Our sophisticated software products are crafted to seamlessly integrate cutting-edge technology with actionable insights. This powerful combination empowers you to make informed decisions, optimise operations, and achieve unparalleled success.</p>
        </div>
    </div>

    <div class="w-full md:w-3/5 text-gray-700 font-lg">
        <div class="block md:flex">
            <div class="w-full md:w-1/2 mt-8 md:mt-6 grid grid-cols-1 gap-3 md:mx-6">
                <img src="assets/images/product/9.png" alt="product" class="w-24 h-auto">
                <p>Desalite Connect is a user-friendly and cost-effective school management ERP system designed to empower your institution.  We help schools transform by streamlining administrative tasks, fostering better communication, and boosting overall efficiency.</p>
                <a href="desalite-connect.php" class="text-blue-600 hover:underline">Learn more →</a>
            </div>
            <div class="w-full md:w-1/2 mt-8 md:mt-6 grid grid-cols-1 gap-3 md:mx-6">
                <img src="assets/images/product/10.png" alt="product" class="w-24 h-auto">
                <p>Ednect is a complete school administration program that makes life easier for teachers and administrators. Make use of its integrated HR and staff management systems to oversee your teachers and employees. Additionally, EdNect simplifies exam results, fees, attendance, and student data. </p>
                <a href="#" class="text-blue-600 hover:underline">Learn more →</a>
            </div>
        </div>
        <div class="block md:flex">
            <div class="w-full md:w-1/2 mt-8 md:mt-6 grid grid-cols-1 gap-3 md:mx-6">
                <img src="assets/images/product/11.png" alt="product" class="w-24 h-auto">
                <p>Gain a competitive edge with Transtrack's intelligent transport management. Our software automates planning, optimises routes and loads, provides real-time tracking, and delivers powerful supply chain analytics for smarter decision-making.</p>
                <a href="#" class="text-blue-600 hover:underline">Learn more →</a>
            </div>
            <div class="w-full md:w-1/2 mt-8 md:mt-6 grid grid-cols-1 gap-3 md:mx-6">
                <img src="assets/images/product/ib.png" alt="product" class="w-24 h-auto">
                <p>Icebox keeps your warehouse humming. Real-time inventory tracking is provided by this warehouse management software, enabling you to keep an update on what's in inventory. It also provides temperature control alerts to prevent spoilage and security features to safeguard your assets.</p>
                <a href="#" class="text-blue-600 hover:underline">Learn more →</a>
            </div>
        </div>
        <div class="block md:flex">
            <div class="w-full md:w-1/2 mt-8 md:mt-6 grid grid-cols-1 gap-3 md:mx-6 md:mx-6">
                <img src="assets/images/product/15.png" alt="product" class="w-24 h-auto">
                <p>VASP958 is a Human Resource Management System (HRMS) designed specifically for the Indian Defence Department. It manages both basic and service-related employee data, streamlining processes for units and individual personnel.  For units, VASP958 simplifies leave planning, scheduling medical check-ups, and distributing pay slips.</p>
                <a href="#" class="text-blue-600 hover:underline">Learn more →</a>
            </div>
            <div class="w-full md:w-1/2 mt-8 md:mt-6 grid grid-cols-1 gap-3 md:mx-6">
                <img src="assets/images/product/17.png" alt="product" class="w-24 h-auto">
                <p>Library Management Software is a comprehensive solution designed to streamline and automate the various functions and tasks associated with the management of a library. This software plays a crucial role in enhancing the efficiency of library operations, providing librarians and administrators with powerful tools to organise, track, and manage library resources effectively.</p>
                <a href="#" class="text-blue-600 hover:underline">Learn more →</a>
            </div>
        </div>
        <div class="block md:flex">
            <div class="w-full md:w-1/2 mt-8 md:mt-6 grid grid-cols-1 gap-3 md:mx-6">
                <img src="assets/images/product/14.png" alt="product" class="w-24 h-auto">
                <p>Accounting Management Software is an essential tool for businesses and organisations seeking efficient and accurate financial management. This comprehensive software solution simplifies complex accounting processes, providing a centralised platform to handle various financial tasks seamlessly. </p>
                <a href="#" class="text-blue-600 hover:underline">Learn more →</a>
            </div>
            <div class="w-full md:w-1/2 mt-8 md:mt-6 grid grid-cols-1 gap-3 md:mx-6">
                <img src="assets/images/product/13.png" alt="product" class="w-24 h-auto">
                <p>Attendance Management Software, specifically leveraging biometric technology, revolutionises the process of tracking and managing attendance within organisations and educational institutions. Biometric Attendance Management Software utilises unique biological features like fingerprints to accurately identify and record attendance.</p>
                <a href="#" class="text-blue-600 hover:underline">Learn more →</a>
            </div>
        </div>
    </div>
</div>


<?php include('master/footer.php') ?>


<script>
    // scroll
    function scrollToNextSection() {
        const nextSection = $('#next-section');
        let offset;

        if ($(window).width() >= 768) {
            offset = 120;
        } else {
            offset = 60;
        }
        const elementPosition = nextSection.offset().top;
        const offsetPosition = elementPosition - offset;

        $('html, body').animate({
            scrollTop: offsetPosition
        }, 800);
    }

    $(document).ready(function() {
        $(".hero-slide").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1024: {
                    items: 1
                }
            }
        });
    });
</script>