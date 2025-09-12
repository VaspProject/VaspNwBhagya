<?php include('master/header.php') ?>
<style>
    .timeline-item:nth-child(odd) .timeline-content {
        transform: translateY(-100%)
    }

    .timeline-item:nth-child(even) .timeline-content {
        transform: translateY(100%)
    }


    .timeline-bar {
        top: calc(60% - 10px) !important;
        left: calc(60% - 23px) !important;
        width: 110% !important;
        transform: translateY(-50%) !important;
    }

    .timeline-bar4 {
        top: calc(56% - 12px) !important;
        left: calc(60% - 23px) !important;
        width: 110% !important;
        transform: translateY(-50%) !important;
    }

    .timeline-bar1 {
        top: calc(75% - 14px) !important;
        left: calc(55% - 23px) !important;
        width: 110% !important;
        transform: translateY(-50%) !important;
    }

    .timeline-bar2 {
        top: calc(66% - 8px) !important;
        left: calc(55% - 0px) !important;
        width: 110% !important;
        transform: translateY(-50%) !important;
    }

    .timeline-bar3 {
        top: calc(60% - 9px) !important;
        left: calc(55% - 0px) !important;
        width: 110% !important;
        transform: translateY(-50%) !important;
    }

    .timeline-bar5 {
        top: calc(52% - 13px) !important;
        left: calc(60% - 23px) !important;
        width: 110% !important;
        transform: translateY(-50%) !important;
    }

    .hero-h1 {
        line-height: 1.2 !important;
        font-weight: 350 !important;
    }

    @media only screen and (max-width: 768px) {

        .timeline-bar,
        .timeline-bar1,
        .timeline-bar2,
        .timeline-bar3,
        .timeline-bar4,
        .timeline-bar5 {
            display: none;
        }

        .swiper-button-prev,
        .swiper-button-next {
            position: absolute !important;
            top: calc(78% - 8px) !important;
        }
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 15px;
    }

    .swiper-button-prev,
    .swiper-button-next {
        position: absolute;
        top: calc(70% - -1px);
    }

    .custom-swiper-button[disabled],
    .custom-swiper-button.opacity-50 {
        cursor: not-allowed;
        opacity: 0.5;
        pointer-events: none !important;
    }
</style>

<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <a href="about-us.php"><span>Company</span></a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd"
                    d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
            <a href="about-us.php"><span>About Us</span></a>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"></div>

        <!-- style="background-image: url('assets/images/bg/about.jpg');" -->

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white mb-4" style="font-weight: 100;">
                For more than 12 years, we’ve been creating <br>digital solutions - ERP software, Websites <br>and
                Mobile apps that drive success.
            </h1>
        </div>
        <div class="absolute bottom-8 w-full flex justify-center z-10">
            <button onclick="scrollToNextSection()" class="relative group mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class="bg-slate-50 pt-1 text-blue-950 rounded-full w-10 h-10 transition-all duration-300 transform group-hover:scale-110 group-hover:bg-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
    </div>
</div>



<div class="mx-auto md:my-22">
    <div>
        <img src="assets/images/bg/about-us-2.png" alt="" class="w-full h-auto" loading="lazy">
    </div>
    <div class="bg-gradient-to-r from-[#4d4d4d] to-[#141414] py-16">
        <div class="container mx-auto px-8 md:px-16 space-y-8">
            <div class="flex flex-row">
                <div class="w-1/5 flex justify-center">
                    <img src="assets/images/about/about-1.png" alt="Mission Icon"
                        class="h-20 w-16 md:h-32 w-32 mx-auto md:mx-0" loading="lazy">
                </div>

                <div class="w-4/5  pl-4 md:pl-0">
                    <h2 class="text-white text-3xl md:text-5xl text-left" style="font-weight: 300;">
                        Our Mission
                    </h2>
                    <p class="text-white text-base md:text-md lg:text-xl text-left mt-2 md:mt-4" style="font-weight: 300;">
                        To deliver innovative services as a premier software development company in
                            Guwahati, we provide reliable IT solutions that drive success with
                        unwavering commitment. We are dedicated to fostering a culture of excellence and integrity,
                        ensuring that our expertise in web design and mobile app
                            development consistently propels our clients forward.
                    </p>
                </div>
            </div>

            <div class="flex flex-row">
                <div class="w-1/5 flex justify-center">
                    <img src="assets/images/about/about-2.png" alt="Mission Icon"
                        class="h-20 w-16 md:h-32 w-32 mx-auto md:mx-0" loading="lazy">
                </div>

                <div class="w-4/5 pl-4 md:pl-0">
                    <h2 class="text-white text-3xl md:text-5xl text-left" style="font-weight: 300;">
                        Our Vision
                    </h2>
                    <p class="text-white text-base md:text-md lg:text-xl text-left mt-2 md:mt-4" style="font-weight: 300;">
                        To lead the way in technology innovation, we provide transformative IT
                            solutions that drive sustainable growth. As a premier software development
                            company in Guwahati, we empower our clients to shape their future with powerful
                        tools. Through expert web design in Guwahati and advanced mobile app
                            development, we deliver the excellence and integrity that makes us a trusted
                        partner for businesses in a connected world.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-auto md:my-22">
    <div class="flex flex-col md:flex-row ">
        <div class="block md:hidden w-full md:w-2/4">
            <div class="relative w-full  bg-[url('assets/images/about/about-3.png')] bg-cover h-[400px] md:h-screen">
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
                    <h2 class="text-white text-3xl md:text-5xl mb-8" style="font-weight: 300;">
                        Over a Decade of <br> Excellence
                    </h2>

                    <a href="about-us"
                        class="bg-[#0b6380] hover:bg-teal-900 text-white font-bold py-2 px-10 uppercase text-lg rounded border border-white" style="font-weight: 300;">
                        About Us
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full md:w-2/4 bg-[#000001] px-8 md:px-16 flex flex-col items-center justify-center ">
            <div class="space-y-8">
                <p class="text-white text-base md:text-md lg:text-xl text-justify pt-8 md:pt-0" style="font-weight: 300;">
                    With over a decade of experience since 2012, VASP Technologies has established itself as a premier
                    software development company in Guwahati. We are among the top IT companies
                        in Guwahati, Assam, with a legacy built on delivering innovative IT
                        solutions and fostering long-term client partnerships.
                </p>
                <p class="text-white text-base md:text-md lg:text-xl text-justify" style="font-weight: 300;">
                    As a leading provider, we offer a comprehensive suite of services, including a full-service
                   website development company in Guwahati and expert web design in
                        Guwahati. Our skilled team provides dedicated mobile app development in
                        Guwahati, creating powerful applications for various industries. We also specialize in
                    the education sector, delivering a cutting-edge school management system in
                        Guwahati and a robust school ERP in Guwahati that drive business
                    success and ensure client satisfaction.
                </p>
            </div>
            <div class="pt-16">
                <img src="assets/images/about/about-4.png" alt="" class="w-84 h-24" loading="lazy">
            </div>
        </div>

        <div class="hidden md:block w-full md:w-2/4">
            <div class="relative w-full  bg-[url('assets/images/about/about-3.png')] bg-cover h-screen">
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
                    <h2 class="text-white text-3xl md:text-5xl mb-8" style="font-weight: 300;">
                        Over a Decade of <br> Excellence
                    </h2>

                    <a href="about-us"
                        class="bg-[#0b6380] hover:bg-teal-900 text-white font-bold py-2 px-10 uppercase text-lg rounded border border-white" style="font-weight: 300;">
                        About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-auto md:my-22">
    <div class="px-8 md:px-16 py-16 bg-[#000001] ">
        <h2 class="text-white text-center text-3xl md:text-5xl mb-8" style="font-weight: 300;">
            Discover Our Innovative Journey
        </h2>

        <p class="text-white text-base md:text-md lg:text-xl text-justify mb-8" style="font-weight: 300;">
            Since our establishment in 2012, VASP Technologies has experienced significant growth, emerging as a leading
            software development company in Guwahati and a top choice among IT companies in
                Guwahati, Assam. Our mission is to bridge the gap between business needs and technological
            innovation, providing powerful IT solutions that drive client success.
        </p>
        <p class="text-white text-base md:text-md lg:text-xl text-justify" style="font-weight: 300;">
            In just over a decade, we have successfully delivered cutting-edge technological solutions, from responsive
            web design to innovative mobile app development, that integrate seamlessly
            across diverse industries. Our dedication to excellence empowers us to meet the dynamic needs of our
            clients, ensuring their success in an ever-evolving marketplace.
        </p>

    </div>
</div>




<div class="mx-auto md:my-22">
    <div class="py-12 md:py-18 px-4 md:px-16 bg-white">
        <div class="text-center mx-auto p-6 justify-center items-center">

            <!-- Heading -->
            <h3 class="text-5xl mb-4">Vasp Technologies wasn’t built in a day</h3>

            <!-- Paragraph -->
            <p class="text-2xl px-4">
                Explore our journey through the years
            </p>

        </div>
        <div class="product-carousel owl-carousel owl-theme flex align-center justify-center">
            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/19.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2012</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">We were established with the clear objective
                    of
                    providing software
                    services that enhance
                    business potential in the region.</p>
            </div>
            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/20.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2014</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">We successfully rolled out our first
                    product,
                    Desalite Connect—an
                    educational ERP designed for the efficient management of school operations</p>
            </div>

            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/tt.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2015</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">Recognizing the challenges in efficient
                    freight
                    management, we launched
                    TransTrack, a comprehensive transport management system.</p>
            </div>

            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/vt.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2016</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">Company Registration for Paving the Way for
                    Promising Future Ventures.</p>
            </div>

            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/dc.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2016</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">Upgraded one step ahead of its previous
                    version
                    & equipped with enhanced
                    functionality for improved performance & user experience.</p>
            </div>
            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/vasp958.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2017</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">Launched in 2017 to streamline the
                    operations of
                    defence personnel,
                    focusing on efficient leave management, pay slip distribution, and maintaining employee
                    information.
                </p>
            </div>
            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/dc.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2018</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">Upgraded to Version 3.0, moving one step
                    ahead
                    of its earlier version with
                    enhanced functionality for even greater efficiency and user experience..</p>
            </div>

            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/finvasp.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2021</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">FinVasp, an accounting management software,
                    was
                    launched to provide a
                    centralized platform for handling various financial tasks seamlessly.</p>
            </div>
            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/ednect.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2022</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">Extending our reach in the field of
                    education,
                    Ednect began providing
                    efficient school administration solutions in 2022.</p>
            </div>

            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/ib.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2023</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">Dedicated to transforming cold storage
                    management, we developed IceBox to
                    ensure the efficient preservation and management of your valuable goods</p>
            </div>

            <div
                class="text-center mx-auto p-6 bg-gradient-to-r from-green-300 to-yellow-300 rounded-md shadow-md md:w-full w-[300px] h-[400px] md:h-[380px]">
                <div class="flex justify-center mb-4">
                    <div class="bg-white rounded-full p-2">
                        <img src="assets/images/product/ednect.png" alt="Company Logo 2012" class="w-20 h-20"
                            loading="lazy">
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border border-2 border-black rounded-lg px-10 py-1 md:py-2">
                        <p class="font-bold text-lg">2024</p>
                    </div>
                </div>
                <p class="mt-4 md:mt-6 text-lg md:text-xl px-2 md:px-6">Committed to transforming the higher
                    education
                    landscape, we proudly
                    launched Collegiate, a comprehensive ERP solution for colleges</p>
            </div>
        </div>
    </div>
</div>




<script>
    $(".product-carousel").owlCarousel({
        loop: false,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        margin: 10,
        nav: true, // Owl creates the buttons
        dots: false,
        navText: [
            "<i class='fa-duotone fa-solid fa-chevron-left ...'></i>",
            "<i class='fa-duotone fa-solid fa-chevron-right ...'></i>"
        ],
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });
</script>


<style>

    /* Position nav container relative to carousel */
.product-carousel {
    position: relative;
}
    /* Target default Owl nav buttons */
    .product-carousel .owl-nav {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        width: 100%;
        pointer-events: none;
        /* prevent blocking carousel clicks */
    }

    .product-carousel .owl-nav button {
        background: #1f2937 !important;
        /* gray-800 */
        color: white !important;
        border-radius: 50% !important;
        width: 50px !important;   /* instead of padding */
        height: 50px !important;
        padding: 10px 14px !important;
        font-size: 24px !important;
        pointer-events: all !important;
        /* make buttons clickable again */
        transition: all 0.3s ease !important;
    }

    .product-carousel .owl-nav button:hover {
        background: #2563eb;
        /* blue-600 */
        transform: scale(1.1);
    }
</style>







<!-- 
<div id="next-section" class="container mx-auto my-16 md:my-22 flex flex-col md:flex-row items-center">
    <div class="md:full px-4">
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2">Our Vision:</h2>
        <p class="text-md md:text-lg text-gray-700 leading-normal">To lead the way in technology innovation, driving
            sustainable growth and
            transformative solutions for a connected world in empowering clients and
            shaping the future with excellence and integrity.</p>
        </p>
    </div>
    <div class="md:full px-4 mt-6 md:mt-0">
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2">Our Mission:</h2>
        <p class="text-md md:text-lg text-gray-700 leading-normal">To deliver innovative services and reliable IT
            solutions that drive
            success with binding commitment; dedicated to fostering cultural
            excellence, integrity, and continuous improvement.</p>
        </p>
    </div>
</div> -->

<!-- <hr> -->

<!-- about -->
<!-- <div class="container mx-auto my-16 md:my-22 flex flex-col md:flex-row items-center">
    <div class="md:w-1/2 px-4 md:px-0 pt-8 md:pt-0">
        <img src="assets/images/about/1.png" alt="ss" class="w-full h-auto">
    </div>
    <div class="md:w-1/2 px-4 md:pl-8">
        <h6 class="text-lg text-gray-800 font-bold">More than 10 Years of Experience</h6>
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2">Our journey of more than a decade
            reflects a legacy of excellence</h2>
        <p class="text-md md:text-lg text-gray-700 text-justify">Our decade-long journey stands as a testament to our
            legacy of excellence. At Vasp Technologies, our synergistic approach fosters deep-rooted relationships and
            ensures client satisfaction. Together, we drive client success with a commitment to industry-leading
            products and skilled development teams that propel your business forward.</p>
        <p class="text-md md:text-lg text-gray-700 text-justify mt-2">For over ten years, we have been a premier
            Software as a Service (SaaS) provider in Guwahati and across India. Since 2012, we’ve distinguished
            ourselves with a comprehensive suite of software development solutions.
        </p>
        <p class="text-md md:text-lg text-gray-700 text-justify mt-2">From web and mobile app development to custom
            software creation and enterprise-level solutions, Vasp Technologies serves a diverse range of industries,
            including education, healthcare, e-commerce, finance, and banking. Our expertise allows us to deliver
            tailored solutions that address the unique needs of each client.</p>
    </div>
</div> -->

<!-- working mechanism -->
<!-- <div class="">
    <div class="container mx-auto my-8 md:my-32">
        <div class="pb-2 md:pb-8  md:px-0">
            <div class="flex flex-wrap items-center justify-between py-4">
                <div class="w-full">
                    <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold px-4 md:px-0 py-2 mb-8">The Working
                        Mechanism of Vasp Technologies</h2>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 md:px-0">
            <div
                class="relative group h-96 w-54 transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
                <img src="assets/images/img/4.jpg" class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out">
                </div>
                <div class="absolute inset-0 flex items-start justify-start p-4">
                    <h3 class="text-white text-2xl font-semibold pt-6">Agile Development Approach</h3>
                </div>
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    <p class="text-white px-4">We employ an agile methodology, allowing for iterative development and
                        quick adaptation to changing requirements throughout the software development lifecycle.</p>
                </div>
            </div>



            <div
                class="relative group h-96 w-54 transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
                <img src="assets/images/img/7.png" class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out">
                </div>
                <div class="absolute inset-0 flex items-start justify-start p-4">
                    <h3 class="text-white text-2xl font-semibold pt-6">Integration Expertise</h3>
                </div>
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    <p class="text-white px-4">We excel in integrating complex systems and technologies, enabling
                        seamless interoperability between new software solutions and existing infrastructure.</p>
                </div>
            </div>


            <div
                class="relative group h-96 w-54 transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
                <img src="assets/images/img/5.png" class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out">
                </div>
                <div class="absolute inset-0 flex items-start justify-start p-4">
                    <h3 class="text-white text-2xl font-semibold pt-6">Testing & Execution</h3>
                </div>
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    <p class="text-white px-4">Vasp Technologies places a high value on customer trust. We ensure a
                        successful launch by putting your software through thorough testing and providing immaculate
                        execution. </p>
                </div>
            </div>


            <div
                class="relative group h-96 w-54 transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
                <img src="assets/images/img/8.png" class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out">
                </div>
                <div class="absolute inset-0 flex items-start justify-start p-4">
                    <h3 class="text-white text-2xl font-semibold pt-6">Continuous Support and Maintenance</h3>
                </div>
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    <p class="text-white px-4">Beyond deployment, Vasp Technologies provides comprehensive support and
                        maintenance services to ensure optimal performance, scalability, and security of their software
                        solutions over time.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- 
<div class="relative mt-12 md:mt-32 mx-4 md:mx-20">

    <div class="mb-16 md:mb-16">
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 text-center">
            A Sneak Peek Into Our Innovative Safari
        </h2>
        <p class="text-md md:text-lg text-gray-700 pt-4 mx-auto max-w-4xl text-center">
            Since its inception in 2012, Vasp Technologies has grown exponentially as one of the most prominent software
            solution companies in northeast India and beyond. Our mission has always been to fill the wide gap between
            business growth and technological implementation. In these short yet incredible 12 years of our journey, we
            have flourished in delivering unprecedented technological solutions that integrate harmoniously with each
            industrial sector.
        </p>
    </div>

     <div class="timeline-line3 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full max-w-xs"></div> -->
    <!-- <div class="swiper-container overflow-hidden my-10 mx-12 md:mx-16"> -->


        <!-- <div class="timeline-bar"></div> -->
        <!-- <div class="swiper-wrapper">

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar4 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/vtold.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2012
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Came into existence with the explicit <br>intention of
                    executing software <br>services to maximise businesses <br>in the region.</p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar4 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/dcold.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2014
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Successfully rolled out our first product<br> Desalite
                    Connect,
                    an educational ERP<br> for effective management of<br>school operation.</p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar4 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/tt.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2015
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Realising the nuisances involved<br>in the viable
                    operations
                    of freight<br>management, we launched TransTrack,<br>a transport management system.</p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar2 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/vt.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2016
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Company registration for promising <br>future ventures.</p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar3 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/dc.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2016
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Upgraded Desalite Connect one step<br> ahead agin its
                    earlier
                    version equipping <br>enhanced functionality.</p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar5 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/vasp958.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2017
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Vasp958 was launched in 2017 for<br>effective operation of
                    defence<br> personnel’s leave management,<br>pay slip distribution, maintaining<br> employee
                    information etc.
                </p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar3 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/dc.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2018
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Upgraded Desalite Connect one step<br>ahead (V.3.0) agin
                    its
                    earlier version<br>equipping enhanced functionality.</p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar4 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/finvasp.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2021
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Providing a centralised platform to<br> handle various
                    financial tasks<br> seamlessly, FinVasp, an accounting<br> management software was launched.</p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar3 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/ednect.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2022
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Extending our foray into the field of<br>education, Ednect
                    initiated providing<br>efficient school administration in 2022.</p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div class="timeline-bar5 absolute transform -translate-x-1/2 h-1 bg-gray-300 w-full"></div>
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/ib.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2023
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Dedicating to transforming cold <br>storage management, we
                    created<br>Icebox to ensure the efficient<br>preservation and management of<br> your valuable goods.
                </p>
            </div>

            <div class="swiper-slide flex flex-col items-center relative text-center cursor-grab">
                <div
                    class="w-24 h-24 p-3 bg-white rounded-full flex items-center justify-center text-white text-xl font-bold">
                    <img src="assets/images/product/collegiate.png" alt="product">
                </div>
                <div class="w-0.5 h-8 bg-slate-400"></div>
                <div
                    class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold z-10">
                    2024
                </div>
                <p class="mt-6 pl-6 text-gray-600 text-left">Committing to transforming the higher educational
                    landscape, we freshly instigated Collegiate, a college educational ERP solution.</p>
            </div>

        </div>

    </div> -->
    <!-- Navigation buttons -->
    <!-- <div
        class="swiper-button-prev custom-swiper-button-prev swiper-button w-10 h-10 bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 text-white rounded-full flex items-center justify-center text-sm hover:bg-blue-700 prev-btn">
    </div>
    <div
        class="swiper-button-next custom-swiper-button-next swiper-button w-10 h-10 bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 text-white rounded-full flex items-center justify-center text-sm hover:bg-blue-700 nxt-btn">
    </div>
</div> --> 


<!-- call to action button -->
<div class="relative bg-cover bg-center bg-no-repeat bg-fixed mt-16 md:mt-32 text-white">
    <!-- style="background-image: url('assets/images/img/4.jpg');" -->
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <div class="relative py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3x sm:text-4xl" style="font-weight: 300;">
                <span class="block">Ready to work on your project?</span>
                <span class="block text-indigo-200">Connect with us</span>
            </h2>
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                    <a href="contact.php"
                        class="inline-flex items-center justify-center px-5 py-2 border border-transparent text-base text-blue-600 bg-white hover:bg-indigo-50">
                        Get Started
                    </a>
                </div>
                <div class="ml-3 inline-flex">
                    <a href="about-us.php"
                        class="inline-flex items-center justify-center px-5 py-2 border border-transparent text-base text-white bg-blue-950 text-white hover:bg-blue-900 transition duration-300">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('master/footer.php') ?>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper-container', {
        loop: false, // Disable looping
        watchOverflow: true, // Prevent sliding when slides are less than view
        navigation: {
            nextEl: '.custom-swiper-button-next',
            prevEl: '.custom-swiper-button-prev',
        },
        // Optionally set space between slides and other configurations
        spaceBetween: 20,
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 2, // Show 2 slides on md screens
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3, // Show 3 slides on lg screens
                spaceBetween: 40,
            },
        },
    });

    // Disable navigation buttons at the ends
    swiper.on('slideChange', () => {
        const {
            isBeginning,
            isEnd
        } = swiper;

        const prevButton = document.querySelector('.custom-swiper-button-prev');
        const nextButton = document.querySelector('.custom-swiper-button-next');

        prevButton.disabled = isBeginning;
        nextButton.disabled = isEnd;

        // Update classes for styling purposes
        prevButton.classList.toggle('opacity-50', isBeginning);
        nextButton.classList.toggle('opacity-50', isEnd);
    });
</script>

<script>
    // history tab
    function showTab(event, year) {
        var tabContent = document.getElementsByClassName("tab-content");
        for (var i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        var tabLinks = document.getElementsByClassName("tab-link");
        for (var i = 0; i < tabLinks.length; i++) {
            tabLinks[i].classList.remove("border-blue-950");
        }

        document.getElementById(year).style.display = "flex";
        event.currentTarget.classList.add("border-blue-950");
    }

    // Default to showing the first tab
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementsByClassName("tab-link")[0].click();
    });
    // scroll
    function scrollToNextSection() {
        const nextSection = $('#next-section');
        let offset;

        if ($(window).width() >= 768) {
            offset = 170;
        } else {
            offset = 50;
        }
        const elementPosition = nextSection.offset().top;
        const offsetPosition = elementPosition - offset;

        $('html, body').animate({
            scrollTop: offsetPosition
        }, 1000);
    }
</script>
<script>
    // blog slide
    $(document).ready(function () {
        $(".blog-carousel").owlCarousel({
            items: 3,
            loop: true,
            margin: 20,
            dots: false,
            stagePadding: 0,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0
                },
                768: {
                    items: 2,
                    stagePadding: 0
                },
                1024: {
                    items: 3,
                    stagePadding: 0
                }
            },
            onTranslated: function (event) {
                var elements = $(".owl-item");
                elements.removeClass('right-partial');
                if (elements.length > 0) {
                    elements.last().addClass('right-partial');
                }
            }
        });


    });
</script>