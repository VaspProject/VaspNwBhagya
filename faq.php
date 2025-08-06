<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Company</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span>Faq</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60" style="background-image: url('assets/images/bg/office.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24 ">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
            We Craft Softwares That Empower Your Business
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


<div id="next-section" class="container mx-auto my-16 md:my-32 flex flex-col items-center space-y-4 px-4 md:px-0 md:space-y-4">
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq1')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">1. What services does Vasp Technologies offer?</span>
                    <svg id="faq1-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq1" class="px-4 pb-4 hidden">
                <p>Vasp Technologies specialises in a range of services including custom software development, mobile app development, cloud solutions, e-commerce platforms, and digital transformation consultancy.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq2')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">2. How can Vasp Technologies help my business grow?</span>
                    <svg id="faq2-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq2" class="px-4 pb-4 hidden">
                <p>We help businesses grow by leveraging cutting-edge technology solutions tailored to your specific needs, enhancing operational efficiency, improving customer engagement, and driving overall business growth.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq3')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">3. Does Vasp Technologies work with startups and established businesses alike?</span>
                    <svg id="faq3-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq3" class="px-4 pb-4 hidden">
                <p>Yes, we cater to startups, SMEs, and established enterprises, providing scalable solutions that align with your business goals and budget.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq4')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">4. Can Vasp Technologies integrate with our existing IT infrastructure?</span>
                    <svg id="faq4-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq4" class="px-4 pb-4 hidden">
                <p>Absolutely, we specialise in seamless integration of our solutions with your existing IT infrastructure, ensuring minimal disruption and maximum efficiency.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq5')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">5. What industries does Vasp Technologies serve?</span>
                    <svg id="faq4-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq5" class="px-4 pb-4 hidden">
                <p>We serve a wide range of industries including healthcare, education, retail, manufacturing, finance, and more, adapting our solutions to meet the unique requirements of each sector.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq6')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">6. How secure are Vasp Technologies' solutions?</span>
                    <svg id="faq4-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq6" class="px-4 pb-4 hidden">
                <p>Security is our top priority. We implement robust security measures and best practices to ensure your data and systems are fully protected against cyber threats and breaches.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq7')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">7. Does Vasp Technologies provide ongoing support after project completion?</span>
                    <svg id="faq4-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq7" class="px-4 pb-4 hidden">
                <p>Yes, we offer comprehensive support and maintenance services post-project completion to ensure smooth operation and continuous improvement of your software solutions.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq8')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">8. What is the typical timeline for developing a custom software solution with Vasp Technologies?</span>
                    <svg id="faq4-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq8" class="px-4 pb-4 hidden">
                <p>The project's complexity and scope determine how long it will take to complete. We work closely with you to establish clear milestones and deliverables, ensuring timely delivery without compromising quality.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq9')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">9. How does Vasp Technologies approach mobile app development?</span>
                    <svg id="faq4-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq9" class="px-4 pb-4 hidden">
                <p>We follow a structured approach that includes ideation, design, development, testing, and deployment. Our goal is to create intuitive and feature-rich mobile apps that enhance user experience and achieve your business objectives.</p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-md">
            <button class="w-full text-left p-4 focus:outline-none" onclick="toggleAccordion('faq10')">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-lg">10. How can I get started with Vasp Technologies?</span>
                    <svg id="faq4-icon" class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </button>
            <div id="faq10" class="px-4 pb-4 hidden">
                <p>Getting started is easy! To schedule a consultation, just get in touch with us through our website or by reaching us personally. We'll discuss your requirements, propose tailored solutions, and guide you through the next steps to kickstart your project with us.</p>
            </div>
        </div>
    </div>
</div>





<?php include('master/footer.php') ?>

<script>
    //  faq
    function toggleAccordion(id) {
        const content = document.getElementById(id);
        const icon = document.getElementById(id + '-icon');
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }

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