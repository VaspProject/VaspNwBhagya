<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Industries</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd"
                    d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
            <span>Public Sector</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
            style="background-image: url('assets/images/bg/public-sector.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
                Take a digital leap into your Public Sector operation.
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

<div id="next-section" class="container mx-auto my-16 md:my-32 flex flex-col md:flex-row items-center">
    <div class="md:full px-4 md:px-0">
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2">Take a digital leap into your public
            sector operation.</h2>
        <p class="text-md md:text-lg italic pb-2"></p>
        <p class="text-md md:text-lg">The public sector encompasses government agencies, healthcare institutions,
            educational establishments, and many more. As these organisations strive to improve efficiency,
            transparency, and service delivery, they are turning to software companies for tailored solutions.
        </p><br>
        <p class="text-md md:text-lg">From citizen engagement platforms and electronic governance systems to healthcare
            informatics and educational technology, software is playing a vital role in modernising public sector
            operations.</p>
        <br>
        <p class="text-md md:text-lg">One of the most significant trends in the public sector is the increasing adoption
            of e-governance initiatives. These initiatives aim to streamline government processes, reduce corruption,
            and improve citizen access to services. Software solutions, such as citizen portals and online service
            platforms, are essential for implementing e-governance. By digitising government services, these platforms
            can enhance transparency, efficiency, and accessibility.</p>
        <br>
        <p class="text-md md:text-lg">Another area where software is making a significant impact is in the healthcare
            sector. Electronic health records (EHRs) and healthcare information systems are transforming the way
            healthcare providers manage patient data, coordinate care, and improve outcomes. These software solutions
            enable better decision-making, reduce medical errors, and improve patient safety. Additionally, telemedicine
            platforms are facilitating remote consultations, expanding access to healthcare services, especially in
            rural areas.
        </p>
        <br>
        
        <!-- <ul class="space-y-6 md:space-y-3 text-gray-800">
            <li class="text-md md:text-xl leading-relaxed md:leading-normal relative pl-8">
                <span class="absolute left-0 top-1 text-sky-600 text-xl">
                    <i class="fas fa-check-circle"></i>
                </span>
                <span class="font-bold">Enhanced Efficiency and Automation: </span>
                Vasp Technologies' transport management software streamlines operations by automating routine tasks.
                This reduces manual errors, saves time, and allows your team to focus on strategic activities. The
                software's intuitive design makes it easy for staff to adapt quickly, ensuring a smooth transition
                towards digitalisation.
            </li>
            <li class="text-md md:text-xl leading-relaxed md:leading-normal relative pl-8">
                <span class="absolute left-0 top-1 text-sky-600 text-xl">
                    <i class="fas fa-check-circle"></i>
                </span>
                <span class="font-bold">Real-time Tracking and Visibility: </span>
                With real-time tracking features, logistics providers can monitor their fleet and shipments at any
                moment. This transparency improves accountability and enables proactive decision-making. Knowing the
                exact location of vehicles and goods helps in providing accurate delivery estimates to customers,
                enhancing their trust and satisfaction.
            </li>
            <li class="text-md md:text-xl leading-relaxed md:leading-normal relative pl-8">
                <span class="absolute left-0 top-1 text-sky-600 text-xl">
                    <i class="fas fa-check-circle"></i>
                </span>
                <span class="font-bold">Data-driven Insights and Analytics: </span>
                The software collects and analyses vast amounts of data, providing actionable insights to optimise
                routes, manage fuel consumption, and reduce operational costs. These analytics help in identifying
                trends, making informed decisions, driving continuous improvement, and staying ahead of the competition.

            </li>
            <li class="text-md md:text-xl leading-relaxed md:leading-normal relative pl-8">
                <span class="absolute left-0 top-1 text-sky-600 text-xl">
                    <i class="fas fa-check-circle"></i>
                </span>
                <span class="font-bold">Scalability and Integration: </span>
                Vasp Technologies' solution is designed to grow with your business. Whether you're a small logistics
                provider or a large enterprise, our innovative solution scales to meet your needs. Additionally, it
                integrates seamlessly with existing systems, ensuring a unified and efficient workflow. This flexibility
                makes it easier to expand your services and adapt to changing market demands.

            </li>
        </ul>

        <div>
            <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2 pt-16">Creating a conducive logistic
                ecosystem for distributors, retailers, e-commerce companies, and retail businesses.</h2>
            <ul class="space-y-6 md:space-y-3 text-gray-800">
                <li class="text-md md:text-xl leading-relaxed md:leading-normal relative pl-8">
                    <span class="absolute left-0 top-1 text-sky-600 text-xl">
                        <i class="fa-solid fa-circle-right"></i>
                    </span>
                    Cost-efficiency
                </li>
                <li class="text-md md:text-xl leading-relaxed md:leading-normal relative pl-8">
                    <span class="absolute left-0 top-1 text-sky-600 text-xl">
                        <i class="fa-solid fa-circle-right"></i>
                    </span>
                    Simplifying supply chain operations
                </li>
                <li class="text-md md:text-xl leading-relaxed md:leading-normal relative pl-8">
                    <span class="absolute left-0 top-1 text-sky-600 text-xl">
                        <i class="fa-solid fa-circle-right"></i>
                    </span>
                    Automation of business processes yielding faster and more accurate outputs

                </li>
                <li class="text-md md:text-xl leading-relaxed md:leading-normal relative pl-8">
                    <span class="absolute left-0 top-1 text-sky-600 text-xl">
                        <i class="fa-solid fa-circle-right"></i>
                    </span>
                    Enhanced safety and transparency in transportation
                </li>
            </ul>
        </div>

        <div>
            <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2 pt-16">Engineered transport management
                system (TMS) transmitting effective logistics operation.</h2>
            <p class="text-md md:text-lg">The process of globalisation has stimulated the shipping, conveyance, and
                logistics sectors. A few decades ago, the possibility of procuring products at affordable prices without
                delay from around the globe seemed like an unattainable goal. </p><br>
            <p class="text-md md:text-lg">However, with advances in technology, the entire concept of instantaneous has
                revolutionised in the present era. In India, the shipping, transport, and logistics sector brings in
                almost 18.4% of the country's GDP. Massive development prospects are offered by these sectors, and the
                only way to fully realise their potential is through effective technological implementation.</p><br>
            <p class="text-md md:text-lg">The transport management system (TMS) from Vasp Technologies ushers in an
                intuitive and optimised operational platform.</p><br>
        </div> -->
    </div>
</div>


<?php include('master/footer.php') ?>
<script>

</script>
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
    $(".accordion-item").click(function() {
        $(".accordion-item").removeClass("expanded").addClass("collapsed");
        $(".accordion-item").find("> .absolute.bottom-0").css("opacity", 0);

        $(this).removeClass("collapsed").addClass("expanded");
        $(this).find("> .absolute.bottom-0").css("opacity", 1);
    });

    $('.testi-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        },
        navText: [
            `<button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg></button>`,
            `<button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg></button>`
        ]
    });

});
</script>