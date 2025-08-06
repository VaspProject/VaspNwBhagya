<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Solutions</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd"
                    d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
            <span>Supply Chain Management</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
            style="background-image: url('assets/images/bg/supply-chain.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
            Coordinate logistic efficiency from production to delivery with minimal costs
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


<!-- https://www.hcltech.com/technology-services -->

<div id="next-section" class="container mx-auto my-16 md:my-32 px-4 md:px-0 flex flex-col md:flex-row items-center">
    <div class="w-full md:w-1/2 ">
        <h2 class="text-2xl md:text-4xl text-blue-950 mb-2 mt-6 md:mt-0">Overview</h2>
        <p class="text-lg text-gray-700 mb-4">
        You can gain real-time data across the whole supply chain—from receiving an order to shipment—with supply chain management software. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga obcaecati totam at? Quae
            numquam deleniti velit, inventore reiciendis tenetur! Aspernatur vero corrupti earum eum cum deleniti
            corporis veniam impedit dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit illum
            aliquam officia commodi modi voluptatibus. Omnis dolores dignissimos, illum cupiditate, officia vero nostrum
            corporis fuga, iusto maiores reprehenderit qui nulla. Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Obcaecati illo incidunt, voluptas expedita nihil explicabo distinctio. Numquam et, dicta minima natus
            eligendi nemo consectetur officia excepturi delectus aliquam voluptatibus soluta. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Perferendis rerum dolorem ab, iure tenetur magni in sequi minima error fugiat
            cumque suscipit adipisci labore! Laboriosam sint saepe sunt reiciendis aut.


        </p>
        <a href="erp-details.php"
            class="bg-blue-950 text-white font-semibold py-3 px-6 rounded-md hover:bg-blue-900 transition-colors duration-200">
            Read more ➜
        </a>
    </div>
    <div class="w-full md:w-1/2 mt-8 md:mt-0 flex justify-end">
        <img src="assets/images/img/supply-chain-1.jpg" alt="Business professionals looking out the window"
            class="shadow-lg w-full md:w-11/12 object-cover">
    </div>
</div>


<!-- <div class="container mx-auto my-16 md:my-36 px-4 md:px-0">
    <div class="pb-2 md:pb-8 md:px-0">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-5xl py-2 mb-2">Our Key Arena</h2>
                <p class="text-gray-700 text-lg text-left">Redefining educational operation.</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div
            class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="assets/images/img/university.jpg" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out">
            </div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Universities</h3>
            </div>
            <div
                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <p class="text-white px-4">Reform the complete school management system within a pool of operational ERP systems and set it to optimise the institution's operational efficiency. </p>
            </div>
        </div>

        <div
            class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="assets/images/img/college.jpg" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out">
            </div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Colleges</h3>
            </div>
            <div
                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <p class="text-white px-4">Conduct your college's daily operations, such as data entry, enrolment, and effective parent-management communication, through smart college ERP.</p>
            </div>
        </div>

        <div
            class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="assets/images/img/school.jpg" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out">
            </div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Schools</h3>
            </div>
            <div
                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <p class="text-white px-4">When it comes to operating a colossal number of inputs for students and teachers, specifically designed student management systems come in handy.</p>
            </div>
        </div>
    </div>
</div> -->



<!-- <div class="container mx-auto my-16 md:my-32">
    <div class="pb-2 px-4 md:px-0">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-5xl py-2 mb-2">Case Studies</h2>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-gray-100 md:bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
            <div class="relative overflow-hidden">
                <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
                    <img src="https://www.sfsguwahati.ac.in/assets/images/banner/school/campuslife_new.jpg" alt="blog"
                        class="w-full h-64 mt-6 md:mt-0">
                </div>
            </div>
            <div class="py-6 md:p-8">
                <a href="the-transformative-impact-of-desalite-connect-at-sfs-guwahati.php"
                    class="text-xl font-semibold text-blue-950 hover:text-blue-900">The transformative impact of
                    Desalite Connect at SFS Guwahati</a>
                <p class="mt-2">One of the well-known multilingual, coeducational, CBSE schools in Narengi, Guwahati,
                    Assam, is St. Francis De' Sales Higher Secondary School.</p>
                <a href="the-transformative-impact-of-desalite-connect-at-sfs-guwahati.php"
                    class="inline-block text-blue-950 underline transition-colors duration-300 flex items-center mt-2">
                    Read More
                </a>
            </div>
        </div>

        <div class="bg-gray-100 md:bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
            <div class="relative overflow-hidden">
                <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
                    <img src="assets/images/img/3.jpg" alt="blog" class="w-full h-64 mt-6 md:mt-0">
                </div>
            </div>
            <div class="py-6 md:p-8">
                <a href="blog-details.php" class="text-xl font-semibold text-blue-950 hover:text-blue-900">Case Study
                    2</a>
                <p class="mt-2 text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius quae natus
                    sapiente repudiandae fuga eos repellendus obcaecati. Animi, molestiae natus.</p>
                <a href="#"
                    class="inline-block text-blue-950 underline transition-colors duration-300 flex items-center mt-2">
                    Read More
                </a>
            </div>
        </div>

        <div class="bg-gray-100 md:bg-white  shadow-lg hover:bg-blue-100 px-4 md:px-0">
            <div class="relative overflow-hidden">
                <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="blog" class="w-full h-64 mt-6 md:mt-0">
                </div>
            </div>
            <div class="py-6 md:p-8">
                <a href="blog-details.php" class="text-xl font-semibold text-blue-950 hover:text-blue-900">Case Study
                    3</a>
                <p class="mt-2 text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius quae natus
                    sapiente repudiandae fuga eos repellendus obcaecati. Animi, molestiae natus.</p>
                <a href="#"
                    class="inline-block text-blue-950 underline transition-colors duration-300 flex items-center mt-2">
                    Read More
                </a>
            </div>
        </div>
    </div>
</div> -->


<!-- <div class="container mx-auto my-16 md:my-32 px-4 md:px-4">
    <h1 class="text-3xl md:text-5xl font-semibold text-left mb-2">Our Focus Areas</h1>
    <p class="text-lg text-left">Shaping Futures, Nurturing Success</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-12">
        <div class="bg-blue-950 p-8 hover:bg-blue-900 hover:-translate-y-4 transform transition-all duration-300">
            <h2 class="text-2xl font-semibold text-white mb-2">Universities</h2>
            <p class="text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quaerat officia explicabo voluptatum eaque velit eveniet dicta odit voluptas perferendis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi!
            </p>
        </div>
        <div class="bg-blue-950 p-8 hover:bg-blue-900 hover:-translate-y-4 transform transition-all duration-300">
            <h2 class="text-2xl font-semibold text-white mb-2">Colleges</h2>
            <p class="text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quaerat officia explicabo voluptatum eaque velit eveniet dicta odit voluptas perferendis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi!
            </p>
        </div>
        <div class="bg-blue-950 p-8 hover:bg-blue-900 hover:-translate-y-4 transform transition-all duration-300">
            <h2 class="text-2xl font-semibold text-white mb-2">School</h2>
            <p class="text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quaerat officia explicabo voluptatum eaque velit eveniet dicta odit voluptas perferendis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi!
            </p>
        </div>
    </div>
</div> -->


<!-- testi -->
<!-- <div class="container mx-auto my-16 md:my-36 md:px-0">
    <div class="testi-carousel owl-carousel">
        <div class="flex flex-col md:flex-row items-start p-4 md:p-0 rounded-lg shadow-lg">
            <div class="w-full md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
                <div class="relative">
                    <img src="assets/images/img/principal.jpg" alt="Alan Davidson Testimonial"
                        class="shadow-lg w-full md:w-10/12 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button
                            class="bg-white bg-opacity-75 rounded-full p-3 shadow-lg hover:bg-opacity-100 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-950" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-6.197-3.756a1 1 0 00-1.555.832v7.512a1 1 0 001.555.832l6.197-3.756a1 1 0 000-1.664z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 md:pl-8">
                <div class="">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 mt-4 md:mt-0">
                        Hear From Our Clients
                    </h1>
                    <div class="flex items-start mb-4">
                        <blockquote class="text-gray-700">
                            “Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error eum minima quaerat cum modi
                            necessitatibus itaque ratione velit, consectetur perspiciatis repudiandae aspernatur culpa
                            eius totam earum eos ad.”
                        </blockquote>
                    </div>
                    <p class="text-gray-800 font-bold mb-1">Alan Davidson</p>
                    <p class="text-gray-600 mb-6">Principal | Guwahati Demo School</p>
                    <button
                        class="bg-blue-950 text-white font-semibold py-3 px-6 rounded-md hover:bg-blue-900 transition-colors duration-200">
                        Watch video ➜
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> -->


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