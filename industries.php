<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Industries</span>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span>Education</span> -->
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
            style="background-image: url('assets/images/bg/office.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
                Amplifying Industrial Efficiency with IT-Powered Actions
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

<div id="next-section" class="container mx-auto px-4 md:px-0 my-12 md:my-32">
    <div class="grid grid-cols-1 gap-12">
        <div class="flex flex-col md:flex-row items-center">
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img src="assets/images/bg/edu.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center mt-4 md:mt-0 md:ml-12">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2">Education</h2>
                <p class="text-md md:text-lg text-gray-700 leading-normal">
                    Technological development has taken a strong grip in every sphere of life, and the educational
                    sector is one of them, of course. As the pandemic struck the world in 2020, remote learning and
                    teaching became the new normal. Since then, the educational system has been experiencing a total
                    shift towards digitalisation.
                </p>
                <a href="education.php" class="text-blue-950 mt-4 inline-block hover:text-blue-900 hover:underline">
                    Learn more →
                </a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center mt-0 md:mt-12">
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105 md:hidden">
                <img src="assets/images/img/ssss.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center mt-4 md:mt-0 md:mr-12">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2">Logistics</h2>
                <p class="text-md md:text-lg text-gray-700 leading-normal">
                    If you're in logistics, you know how important it is to keep everything running like a well-oiled
                    machine. From the origin to the destination, it dictates real-time data on capacity, demand, and the
                    supply chain to handle freight orders, shipments, and resources smoothly. Dealing in the logistics
                    industry demands efficiency and precision, and this is where our software services shine.
                </p>
                <a href="logistics.php" class="text-blue-950 mt-4 inline-block hover:text-blue-900">
                    Learn more →
                </a>
            </div>
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105 hidden md:block">
                <img src="assets/images/img/ssss.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center mt-0 md:mt-12">
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img src="assets/images/img/e-commerce.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center mt-4 md:mt-0 md:ml-12">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2">E-Commerce</h2>
                <p class="text-md md:text-lg text-gray-700 leading-normal">
                    The e-commerce industry has experienced exponential growth in recent years, driven by technological
                    advancements and changing consumer behaviour. As online shopping becomes increasingly prevalent,
                    software companies play a crucial role in providing the tools and platforms that power e-commerce
                    businesses. From online marketplaces and payment gateways to inventory management systems and
                    customer relationship management (CRM) software, software solutions are essential for e-commerce
                    success.
                </p>
                <a href="e-commerce.php" class="text-blue-950 mt-4 inline-block hover:text-blue-900 hover:underline">
                    Learn more →
                </a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center mt-0 md:mt-12">
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105 md:hidden">
                <img src="assets/images/img/hospital.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center mt-4 md:mt-0 md:mr-12">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2">Healthcare</h2>
                <p class="text-md md:text-lg text-gray-700 leading-normal">
                    In an era where patient-centric care is paramount, our robust solutions enable healthcare providers
                    to deliver personalised and efficient care. Our EHR systems ensure seamless access to patient
                    records, facilitating accurate diagnoses and informed treatment decisions. Additionally, our patient
                    engagement tools foster better communication between patients and providers, promoting adherence to
                    treatment plans and improving overall health outcomes.
                </p>
                <a href="healthcare.php" class="text-blue-950 mt-4 inline-block hover:text-blue-900">
                    Learn more →
                </a>
            </div>
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105 hidden md:block">
                <img src="assets/images/img/hospital.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center mt-0 md:mt-12">
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img src="assets/images/img/banking.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center mt-4 md:mt-0 md:ml-12">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2">Banking</h2>
                <p class="text-md md:text-lg text-gray-700 leading-normal">
                    Financial institutions grapple with a multitude of challenges, including increasing regulatory
                    compliance burdens, intensifying competition, the need for enhanced customer experience, and the
                    imperative to manage risk effectively. Moreover, the sheer volume of data generated by these
                    institutions necessitates robust data management and analytics capabilities
                </p>
                <a href="banking.php" class="text-blue-950 mt-4 inline-block hover:text-blue-900 hover:underline">
                    Learn more →
                </a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center mt-0 md:mt-12">
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105 md:hidden">
                <img src="assets/images/img/travel.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center mt-4 md:mt-0 md:mr-12">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2">Travel & Hospitality</h2>
                <p class="text-md md:text-lg text-gray-700 leading-normal">
                    Numerous issues that the travel and hospitality sectors must deal with prompt them to turn to
                    software service solutions. These include handling intricate reservation systems, making sure
                    inventory is tracked accurately, offering customised customer service, optimising processes, and
                    maintaining competitiveness in a quickly changing digital environment.
                </p>
                <a href="logistics.php" class="text-blue-950 mt-4 inline-block hover:text-blue-900">
                    Learn more →
                </a>
            </div>
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105 hidden md:block">
                <img src="assets/images/img/travel.jpg" alt="Technology Image" class="object-cover w-full h-full" />
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center mt-0 md:mt-12">
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105">
                <img src="assets/images/img/public-sector.jpg" alt="Technology Image"
                    class="object-cover w-full h-full" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center mt-4 md:mt-0 md:ml-12">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2">Public Sector</h2>
                <p class="text-md md:text-lg text-gray-700 leading-normal">
                    The public sector encompasses government agencies, healthcare institutions, educational
                    establishments, and many more. As these organisations strive to improve efficiency, transparency,
                    and service delivery, they are turning to software companies for tailored solutions. From citizen
                    engagement platforms and electronic governance systems to healthcare informatics and educational
                    technology, software is playing a vital role in modernising public sector operations.
                </p>
                <a href="public-sector.php" class="text-blue-950 mt-4 inline-block hover:text-blue-900 hover:underline">
                    Learn more →
                </a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center mt-0 md:mt-12">
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105 md:hidden">
                <img src="assets/images/img/real-estate.jpg" alt="Technology Image"
                    class="object-cover w-full h-full" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center mt-4 md:mt-0 md:mr-12">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2">Real Estate</h2>
                <p class="text-md md:text-lg text-gray-700 leading-normal">
                    The real estate industry forms the cornerstone of today's global economy. And it has been undergoing
                    a digital transformation powered by innovative technological solutions. From property management and
                    brokerage to construction and development the process of digitalisation has revolutionised the way
                    real estate operates.
                </p>
                <a href="real-estate.php" class="text-blue-950 mt-4 inline-block hover:text-blue-900">
                    Learn more →
                </a>
            </div>
            <div
                class="w-full h-64 md:w-1/2 overflow-hidden rounded-tl-2xl rounded-br-2xl shadow-lg transform transition-transform duration-300 hover:scale-105 hidden md:block">
                <img src="assets/images/img/real-estate.jpg" alt="Technology Image"
                    class="object-cover w-full h-full" />
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
// blog slide
$(document).ready(function() {
    // Initialize the hero-slide
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