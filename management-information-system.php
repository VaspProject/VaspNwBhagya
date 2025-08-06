<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Services</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd"
                    d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
            <span>Management Information System (MIS)</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
            style="background-image: url('assets/images/services/9.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
                Where data management meets innovation
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
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2">Management Information System (MIS)</h2>
        <p class="text-md md:text-lg">Effortlessly facilitate your firm’s everyday information with a management
            information system (MIS). Regular, wearisome tasks such as record-keeping become a simplified piece of
            business by implementing MIS applications.
        </p><br>
        <p class="text-md md:text-lg">In a business organisation, employees, managers, and staff access MIS for
            day-to-day operations, print invoices, bill payments, and review performances. It's like a super-smart
            assistant that gathers all the important data about your business, crunches the numbers, and presents the
            information in a way that's easy to understand.
        </p><br>
        <p class="text-md md:text-lg">Envision MIS as a tool that allows you to glimpse into future outcomes. By analysing past trends and current performance, you can make informed decisions about where to invest your resources, which products are selling well, and how to improve your operations.
        </p><br>
        <p class="text-md md:text-lg">But that's not all. MIS can also help you keep an eye on your finances, manage your inventory, and track employee performance. By streamlining these processes, you can boost efficiency, reduce costs, and improve overall productivity. In today's fast-paced business world, having access to the right information at the right time can be the difference between success and failure.
        </p>

        <div class="mb-8">
            <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2 pt-16"> MIS capabilities</h2>
        </div>

        <div class="mx-auto mb-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 gap-y-24 justify-items-center ">
                <div
                    class="relative w-full md:w-168 bg-gradient-to-br from-blue-500 to-green-400 shadow-lg hover:scale-105 transition-transform duration-300 flex flex-col items-center rounded-md">
                   
                    <div class="p-4 mt-4 text-center">
                        <h2 class="text-3xl font-semibold mb-4 text-white">Easy Access to Information </h2>
                        <p class="text-base mb-2 text-white text-justify px-4">MIS offers a centralised platform for storing and disseminating crucial business data, enabling effective information management and strategic decision-making. Employees can readily retrieve data related to marketing, financial, and operational data by means of MIS.</p>
                    </div>
                </div>

                <div
                    class="relative w-full md:w-168 bg-gradient-to-br from-blue-500 to-green-400 shadow-lg hover:scale-105 transition-transform duration-300 flex flex-col items-center rounded-md">
                    
                    <div class="p-4 mt-4 text-center">
                        <h2 class="text-3xl font-semibold mb-4 text-white">Data Storage </h2>
                        <p class="text-base mb-2 text-white text-justify px-4">Data from a variety of sources, including sales numbers, stock levels, financial statements, and personnel records, is gathered and stored by MIS. It acts as a repository for data, making sure administrators have access to all pertinent information.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full md:w-168 bg-gradient-to-br from-blue-500 to-green-400 shadow-lg hover:scale-105 transition-transform duration-300 flex flex-col items-center rounded-md">
                    
                    <div class="p-4 mt-4 text-center">
                        <h2 class="text-3xl font-semibold mb-4 text-white">Performance Monitoring</h2>
                        <p class="text-base mb-2 text-white text-justify px-4">MIS is essential to monitoring employee performance. For instance in retail MIS system production and sales data are recorded and kept in a central database. By using up-to-date information, this data facilitates the quick identification of problems and prompt decision-making.</p>
                    </div>
                </div>

                <div
                    class="relative w-full md:w-168 bg-gradient-to-br from-blue-500 to-green-400 shadow-lg hover:scale-105 transition-transform duration-300 flex flex-col items-center rounded-md">
                   
                    <div class="p-4 mt-4 text-center">
                        <h2 class="text-3xl font-semibold mb-4 text-white">Foster Collaboration in the Workplace</h2>
                        <p class="text-base mb-2 text-white text-justify px-4">In large businesses, decision-making often involves multiple departments or individuals. MIS offers a useful channel for staff members to communicate with one other effectively. The administrative team has access to all the information required to make a well-informed decision, even when they are operating from different locations.</p>
                    </div>
                </div>
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