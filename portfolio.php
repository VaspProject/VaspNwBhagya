<?php include('master/header.php') ?>

<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Company</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd"
                    d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
            <span>Portfolio</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
            style="background-image: url('assets/images/bg/office.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white mb-4 font-normal hero-h1" >
                Fostering business growth through our result-oriented tech solutions
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


<div id="next-section"
    class="container mx-auto my-16 md:my-32 flex flex-col md:flex-row items-start md:space-x-4 px-4 md:px-0">
    <div class="w-full md:w-1/2 md:sticky md:top-[10rem]">
        <div class="text-center md:text-left">
            <h2 class="text-lg font-bold">FEATURED PROJECTS</h2>
            <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold  mt-4">Empowering businesses to
                chase their business goals</h2>
            <p class="mt-4 text-md md:text-lg text-gray-700 max-w-2xl mx-auto md:mx-0 md:pr-8">Over the years, our commitment to
                empowering businesses has enabled us to build a legacy of success, helping companies across the nation
                achieve their most ambitious goals. Through our enriching services, we have not only provided solutions
                but also fostered long-term partnerships with influential clients. Our case studies highlight the
                diverse range of challenges we’ve addressed and the innovative strategies we’ve employed to drive growth
                and efficiency. Each success story stands as a testament to our dedication, showcasing how we've
                consistently delivered value and inspired confidence in businesses to reach new heights.</p>
        </div>
    </div>

    <div class="w-full md:w-1/2">
        <div class="mt-16 md:mt-0 grid grid-cols-1 gap-8">
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/1.webp" alt="Project 1"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/2.webp" alt="Project 2"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/3.png" alt="Project 2"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/4.webp" alt="Project 3"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/5.webp" alt="Project 4"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/6.webp" alt="Project 4"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/7.webp" alt="Project 4"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/8.webp" alt="Project 4"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/9.webp" alt="Project 4"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/10.webp" alt="Project 4"
                    class="shadow-lg rounded-lg w-full md:w-auto">
            </div>
            <div class="flex justify-center">
                <img src="./assets/images/portfolio/11.webp" alt="Project 4"
                    class="shadow-lg rounded-lg w-full md:w-auto">
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