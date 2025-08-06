<?php include('master/header.php') ?>

<div id="hero" class="owl-carousel hero-slide h-full">
    <div class="h-screen h-full w-full bg-gradient-to-tl from-cyan-400 via-cyan-600 to-cyan-800 flex flex-col md:flex-row items-center justify-center overflow-hidden transition duration-300 ease-in-out">
        <div class="relative w-full flex items-center justify-center md:px-16">
            <div class="block gap-4 text-center md:text-left">
                <h1 class="text-3xl md:text-5xl font-semibold text-white leading-tight animate-blink">
                    We Craft Softwares That Empower Your Business Goals
                </h1>
                <p class="text-white text-lg md:text-xl mt-6">#VaspTechnologies</p>
            </div>
        </div>
        <div class="absolute bottom-8 w-full flex justify-center">
            <button onclick="scrollToNextSection()" class="text-white hover:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
    </div>
</div>


<div id="next-section" class="container mx-auto my-16 md:my-32 px-4">
    <div class="flex flex-col md:flex-row">
        <!-- Blog Content -->
        <div class="md:w-2/3 bg-white shadow-lg rounded-lg overflow-hidden mb-8 md:mb-0 md:mr-4">
            <div class="relative">
                <img src="assets/images/blogs/b2.jpg" alt="blog" class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <h1 class="text-white text-3xl md:text-5xl font-bold text-center px-4">Top 7 Reasons Why Your Business Needs A Mobile App</h1>
                </div>
            </div>
            <div class="p-6 md:p-12">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 pr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <div>
                        <h2 class="text-gray-800 font-semibold">8th July, 2024</h2>
                    </div>
                </div>
                <div class="text-md text-gray-700 leading-relaxed space-y-4">
                    <p>Mobile. No matter the age difference, everyone uses mobile apps for different purposes.</p>
                    <ol class="list-decimal list-inside pl-4">
                        <li>Increased Visibility to Customers at All Times</li>
                    </ol>
                    <p>With the increasing use of smartphones, having a mobilerand anytime, anywhere.</p>
                    <p>lorem700</p>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="md:w-1/3 md:sticky md:top-16 space-y-8">
            <!-- Tags Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">Tags</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Mobile App</span>
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Business</span>
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Technology</span>
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Marketing</span>
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Development</span>
                </div>
            </div>

            <!-- Related Blogs Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">Related Blogs</h2>
                <div class="space-y-4">
                    <div>
                        <a href="#" class="block text-xl text-blue-600 hover:text-blue-800 font-semibold">5 Sustainable Technologies To Look Out For In 2024</a>
                        <p class="text-gray-600 text-md">With the concept of sustainability becoming the talk of the town and modern citizens placing paramount importance on integrating green technology practices.</p>
                    </div>
                    <div>
                        <a href="#" class="block text-xl text-blue-600 hover:text-blue-800 font-semibold">The Future of Blockchain Technology and Its Impact on Business</a>
                        <p class="text-gray-600 text-md">Blockchain technology is set to revolutionize various industries by providing secure and transparent solutions for data management and transactions.</p>
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
            offset = 50;
        }
        const elementPosition = nextSection.offset().top;
        const offsetPosition = elementPosition - offset;

        $('html, body').animate({
            scrollTop: offsetPosition
        }, 1000);
    }
    $(document).ready(function() {
        // hero-slide
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