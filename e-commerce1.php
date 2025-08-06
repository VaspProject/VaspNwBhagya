<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Industries</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span>E-Commerce</span>
        </div>
        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60" style="background-image: url('https://c1.wallpaperflare.com/path/572/808/14/shopping-business-retail-shopping-cart-ec46c507455d91d2e8508e37fe9240be.jpg');"></div>

        <div class="relative max-w-8xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4">
            Take a digital leap into your E-Commerce operation
            </h1>
            <p class="text-md md:text-xl text-white opacity-90 mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio necessitatibus consequatur aliquid culpa.
            </p>
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


<div id="next-section" class="container mx-auto my-16 md:my-32 px-4 md:px-0 flex flex-col md:flex-row items-center">
    <div class="w-full md:w-1/2 ">
        <h2 class="text-2xl md:text-4xl text-blue-950 mb-2 mt-6 md:mt-0">Overview</h2>
        <p class="text-lg text-gray-700 mb-4">
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae illum reprehenderit consequatur blanditiis ratione voluptas quod aperiam ipsa sunt, doloremque deleniti, quos, a aut quis optio reiciendis? Quae, sequi ea?
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolores modi nam at voluptas! Totam harum at ipsa deleniti ut tenetur voluptas cumque alias, eaque voluptatibus necessitatibus! Quidem, nisi repellat.
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quis molestiae quidem nesciunt totam sapiente, placeat pariatur architecto perferendis praesentium quibusdam, ipsa eaque earum aliquid quisquam, vel quas esse at.
        </p>
        <a href="e-commerce-details.php" class="bg-blue-950 text-white font-semibold py-3 px-6 rounded-md hover:bg-blue-900 transition-colors duration-200">
            Read more ➜
        </a>
    </div>
    <div class="w-full md:w-1/2 mt-8 md:mt-0 flex justify-end">
        <img src="https://img.freepik.com/free-photo/young-man-using-discount-coupon-his-smartphone-some-online-shopping-laptop_662251-2177.jpg?t=st=1723530967~exp=1723534567~hmac=b83f5d47f3ad73be0f836cb8e07650a409c0aa70f52072937595d0abc2b955ad&w=996" alt="Business professionals looking out the window" class="shadow-lg w-full md:w-11/12 object-cover">
    </div>
</div>


<div class="container mx-auto my-16 md:my-36 px-4 md:px-0">
    <div class="pb-2 md:pb-8 md:px-0">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-5xl py-2 mb-2">Our Focus Areas</h2>
                <p class="text-gray-700 text-lg text-left">Shaping Futures, Nurturing Success</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="https://img.freepik.com/free-photo/cyber-monday-shopping-sales_23-2148688502.jpg?t=st=1723529567~exp=1723533167~hmac=b757ec7bf6eb621f393c89ecc73d343918e95233e618c5a214bbfb476a160e69&w=996" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out"></div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Product Sales and Marketing</h3>
            </div>
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <p class="text-white px-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam odit sunt totam nostrum unde nobis. Alias quas molestias ex nesciunt.</p>
            </div>
        </div>

        <div class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="https://img.freepik.com/free-photo/close-up-hands-carrying-box_23-2149035865.jpg?t=st=1723533067~exp=1723536667~hmac=ac5c5fef1c3ea2752d2f0fd65f912a11139c9a0fd5726462fdd2c08b59d182b4&w=996" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out"></div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Order Fulfillment and Shipping</h3>
            </div>
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <p class="text-white px-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam odit sunt totam nostrum unde nobis. Alias quas molestias ex nesciunt.</p>
            </div>
        </div>

        <div class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="https://img.freepik.com/free-photo/paralyzed-asian-employee-working-call-center-reception-disability-friendly-office-female-operator-wheelchair-user-with-impairment-giving-assistance-customer-service-helpline_482257-43001.jpg?t=st=1723533664~exp=1723537264~hmac=61d4842f364084fad43b925338eb31441384857a2d9b005fa0a1df4ed3002c11&w=996" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out"></div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Customer Service and Support</h3>
            </div>
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <p class="text-white px-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam odit sunt totam nostrum unde nobis. Alias quas molestias ex nesciunt.</p>
            </div>
        </div>
    </div>
</div>



<div class="container mx-auto my-16 md:my-36 px-4 md:px-0 hidden md:block">
    <div class="pb-2 md:pb-8 md:px-0">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-5xl py-2 mb-2">Heading</h2>
            </div>
        </div>
    </div>
    <div class="flex flex-row space-x-4">
        <!-- Accordion Item 1 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer expanded" style="background-image: url('https://img.freepik.com/free-photo/discount-shopping-season-with-sale_23-2150165882.jpg?t=st=1723542140~exp=1723545740~hmac=4f51a3cd1dc715cdc040b79478975d0b18c2ccdcc63b876ab60286ec964fa520&w=996');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-100 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Transportation Planning</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of thSome quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-semibold text-white text-left">Transportation Planning</h2>
            </div>
        </div>
        <!-- Accordion Item 2 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer collapsed" style="background-image: url('https://img.freepik.com/free-photo/online-shopping-shopping-cart-placed-alongside-notebook-blue_1150-19158.jpg?t=st=1723542343~exp=1723545943~hmac=f51c408aeced59a7d2d8e71261f8d2415cc40bb4fe1973fb5e82214d1d116e79&w=996');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Real-Time Tracking</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-bold text-white">Real-Time Tracking</h2>
            </div>
        </div>
        <!-- Accordion Item 3 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer collapsed" style="background-image: url('https://img.freepik.com/free-photo/person-adding-clothes-cart-closeup-online-shopping-campaign_53876-98449.jpg?t=st=1723542373~exp=1723545973~hmac=7011d31a723433da4f777652620cd08de58875d0ef14d2df221b66a0d154c51f&w=996');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Route Optimization</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-bold text-white">Route Optimization</h2>
            </div>
        </div>
        <!-- Accordion Item 4 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer collapsed" style="background-image: url('https://img.freepik.com/free-photo/box-market-electronic-ordering-shop-basket_1421-567.jpg?t=st=1723547508~exp=1723551108~hmac=2cf15947900992992b407eccfe8fb3481305f74e6c09f80b179bf93a3037111f&w=996');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Load Consolidation</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-bold text-white">Load Consolidation</h2>
            </div>
        </div>
        <!-- Accordion Item 5 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer collapsed" style="background-image: url('https://img.freepik.com/free-photo/e-commerce-shop-online-homepage-sale-concept_53876-120965.jpg?t=st=1723547675~exp=1723551275~hmac=37aea07c92f852c4e0053f4be32d5a91aac739580065b19869ee6cbd110cc4c9&w=826');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Supply Chain Analytics</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-bold text-white">Supply Chain Analytics</h2>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto my-16 md:my-32">
    <div class="pb-2 md:pb-8 md:px-0">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-5xl py-2 mb-2">Case Studies</h2>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
            <div class="relative overflow-hidden">
                <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
                    <img src="https://img.freepik.com/free-photo/man-playing-tablet-with-shopping-cart_1134-193.jpg?t=st=1723542864~exp=1723546464~hmac=96ed51dbf2b85977f1f19ae065dca5bccd72859bf6263da13dd5389ee04a1527&w=996" alt="blog" class="w-full h-64 mt-6 md:mt-0">
                </div>
            </div>
            <div class="py-6 md:p-8">
                <a href="blog-details.php" class="text-2xl font-semibold hover:text-blue-950">Case Study 1</a>
                <p class="mt-2 text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius quae natus sapiente repudiandae fuga eos repellendus obcaecati. Animi, molestiae natus.</p>

            </div>
        </div>

        <div class="bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
            <div class="relative overflow-hidden">
                <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
                    <img src="https://img.freepik.com/free-photo/portrait-beautiful-young-asian-woman-with-shopping-bag-credit-card_74190-10468.jpg?t=st=1723542925~exp=1723546525~hmac=6de7888f5332ed9312edcb675672d2e8a2090d3edee88df97b70f7f3c25d5de3&w=996" alt="blog" class="w-full h-64 mt-6 md:mt-0">
                </div>
            </div>
            <div class="py-6 md:p-8">
                <a href="blog-details.php" class="text-2xl font-semibold hover:text-blue-950">Case Study 2</a>
                <p class="mt-2 text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius quae natus sapiente repudiandae fuga eos repellendus obcaecati. Animi, molestiae natus.</p>

            </div>
        </div>


        <div class="bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
            <div class="relative overflow-hidden">
                <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
                    <img src="https://img.freepik.com/free-photo/add-cart-buy-now-online-commerce-graphic-concept_53876-124865.jpg?t=st=1723542988~exp=1723546588~hmac=7455fc895ab9900f2ae89c5da4d53822ac203d2399dea02b9ed1b5447530ab20&w=996" alt="blog" class="w-full h-64 mt-6 md:mt-0">
                </div>
            </div>
            <div class="py-6 md:p-8">
                <a href="blog-details.php" class="text-2xl font-semibold hover:text-blue-950">Case Study 3</a>
                <p class="mt-2 text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius quae natus sapiente repudiandae fuga eos repellendus obcaecati. Animi, molestiae natus.</p>
            </div>
        </div>

    </div>
</div>




<!-- testi -->
<div class="container mx-auto my-16 md:my-36 md:px-0">
    <div class="testi-carousel owl-carousel">
        <div class="flex flex-col md:flex-row items-start p-4 md:p-0 shadow-lg">
            <div class="w-full md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
                <div class="relative">
                    <img src="assets/images/img/principal.jpg" alt="Alan Davidson Testimonial" class="shadow-lg w-full md:w-10/12 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button class="bg-white bg-opacity-75 rounded-full p-3 shadow-lg hover:bg-opacity-100 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-950" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.197-3.756a1 1 0 00-1.555.832v7.512a1 1 0 001.555.832l6.197-3.756a1 1 0 000-1.664z" />
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
                            “Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error eum minima quaerat cum modi necessitatibus itaque ratione velit, consectetur perspiciatis repudiandae aspernatur culpa eius totam earum eos ad.”
                        </blockquote>
                    </div>
                    <p class="text-gray-800 font-bold mb-1">Alan Davidson</p>
                    <p class="text-gray-600 mb-6">Principal | Guwahati Demo School</p>
                    <button class="bg-blue-950 text-white font-semibold py-3 px-6 rounded-md hover:bg-blue-900 transition-colors duration-200">
                        Watch video ➜
                    </button>
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