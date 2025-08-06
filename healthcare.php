<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Industries</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span>Healthcare</span>
        </div>
        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60" style="background-image: url('assets/images/bg/healthcare.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
                Take a digital leap into your medical operation
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


<div id="next-section" class="container mx-auto my-16 md:my-32 px-4 md:px-0 flex flex-col md:flex-row items-center">
    <div class="w-full md:w-1/2 ">
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold mb-2 mt-6 md:mt-0">Overview</h2>
        <p class="text-lg text-gray-700 mb-4">
            In an era where patient-centric care is paramount, our robust solutions enable healthcare providers to deliver personalised and efficient care. Our EHR systems ensure seamless access to patient records, facilitating accurate diagnoses and informed treatment decisions. Additionally, our patient engagement tools foster better communication between patients and providers, promoting adherence to treatment plans and improving overall health outcomes. By integrating these technologies, Vasp Technologies helps healthcare organisations enhance the patient experience and achieve better clinical results.
            We also understand the critical importance of data security and regulatory compliance in the healthcare industry. 
        </p>
        <a href="healthcare-details.php" class="bg-blue-950 text-white font-semibold py-3 px-6 rounded-md hover:bg-blue-900 transition-colors duration-200">
            Read more ➜
        </a>
    </div>
    <div class="w-full md:w-1/2 mt-8 md:mt-0 flex justify-end">
        <img src="assets/images/img/healthcare.jpg" alt="Business professionals looking out the window" class="shadow-lg w-full md:w-11/12 object-cover">
    </div>
</div>


<div class="container mx-auto my-16 md:my-36 px-4 md:px-0">
    <div class="pb-2 md:pb-8 md:px-0">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2">Our Key Arena</h2>
                <p class="text-gray-700 text-lg text-left">Redefining healthcare operation.</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="assets/images/img/healthcare1.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out"></div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Health Insurance Exchange</h3>
            </div>
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <p class="text-white px-4 pt-8">Provides a centralised marketplace where users can compare and purchase health insurance plans simplifying the process at affordable coverage.</p>
            </div>
        </div>

        <div class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="assets/images/img/healthcare2.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out"></div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Hospital Information System</h3>
            </div>
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out ">
                <p class="text-white px-4 pt-12">With every aspect of hospital operations including patient records, billing, scheduling and inventory in HIS helps streamline the overall workflow.</p>
            </div>
        </div>

        <div class="relative group h-60 w-auto transform transition-transform duration-300 ease-in-out hover:translate-y-[-5px]">
            <img src="assets/images/img/healthcare3.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-60 transition-opacity duration-300 ease-in-out"></div>
            <div class="absolute inset-0 flex items-start justify-start p-4">
                <h3 class="text-white text-2xl font-semibold pt-6">Advanced Healthcare Data Analytics</h3>
            </div>
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <p class="text-white px-4 pt-12">Advanced healthcare data analytics involves the use of sophisticated tools and techniques  enabling healthcare providers to identify trends and improve patient outcomes.</p>
            </div>
        </div>
    </div>
</div>



<div class="container mx-auto my-16 md:my-36 px-4 md:px-0 hidden md:block">
    <div class="pb-2 md:pb-8 md:px-0">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2">Functionalities</h2>
            </div>
        </div>
    </div>
    <div class="flex flex-row space-x-4">
        <!-- Accordion Item 1 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer expanded" style="background-image: url('https://img.freepik.com/free-photo/nurse-talking-with-senior-woman-with-walking-disabilities-sitting-wheelchair-into-private-modern-recovery-clinic-hospital-handicapped-old-retired-patient-medical-consultation-advice_482257-4290.jpg?t=st=1723539258~exp=1723542858~hmac=01207dd912c0457b59a73e0f735882d86832f2241f09a6109c53ef5214b182ea&w=1060');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-100 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Digital Reports</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of thSome quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-semibold text-white text-left">Digital Reports</h2>
            </div>
        </div>
        <!-- Accordion Item 2 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer collapsed" style="background-image: url('assets/images/img/healthcare4.jpg');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Appointment Schedule</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-bold text-white">Appointment Schedule</h2>
            </div>
        </div>
        <!-- Accordion Item 3 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer collapsed" style="background-image: url('assets/images/img/healthcare5.jpg');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Claims Management</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-bold text-white">Claims Management</h2>
            </div>
        </div>
        <!-- Accordion Item 4 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer collapsed" style="background-image: url('https://img.freepik.com/free-photo/confident-female-doctor-hospital-room_9975-22979.jpg?t=st=1723547882~exp=1723551482~hmac=ea6fb192ee062a53b404db78ff86c109aae3a994e293f5aa78fbdf602cf159d8&w=1060');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Health Resource</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-bold text-white">Health Resource</h2>
            </div>
        </div>
        <!-- Accordion Item 5 -->
        <div class="accordion-item flex-1 bg-cover bg-center relative h-96 transition-all duration-300 cursor-pointer collapsed" style="background-image: url('assets/images/img/healthcare6.jpg');">
            <div class="absolute inset-0 overlay"></div>
            <div class="absolute bottom-0 left-0 right-0 p-6 opacity-0 transition-opacity duration-300">
                <h2 class="text-2xl font-bold mb-4 text-white">Facility Management</h2>
                <p class="text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-left pt-8 transform origin-center hover-hide transition-opacity duration-300 vertical-text">
                <h2 class="text-2xl font-bold text-white">Facility Management</h2>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto my-16 md:my-32">
    <div class="pb-2 px-4 md:px-0">
        <div class="flex flex-wrap items-center justify-between py-4">
            <div class="w-full">
                <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold py-2 mb-2">Case Studies</h2>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
            <div class="relative overflow-hidden">
                <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
                    <img src="assets/images/img/healthcare7.jpg" alt="blog" class="w-full h-64 mt-6 md:mt-0">
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
                    <img src="assets/images/img/healthcare8.jpg" alt="blog" class="w-full h-64 mt-6 md:mt-0">
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
                    <img src="assets/images/img/healthcare9.jpg" alt="blog" class="w-full h-64 mt-6 md:mt-0">
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 mt-4 md:mt-0">
                        Hear From Our Clients
                    </h2>
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