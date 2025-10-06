<?php include('master/header.php') ?>

<style>
    @keyframes anticlockwise-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(-360deg);
        }
    }

    .rotate-anticlockwise {
        animation: anticlockwise-spin 10s linear infinite;
    }

    /* Prevent horizontal scroll everywhere */
    html,
    body {
        overflow-x: hidden;
    }

    /* Ensure parent containers don’t let rotated items break out */
    /* .mx-auto,
    .relative {
        overflow: hidden;
    } */
</style>

<div id="content">
    <div class="mx-auto md:my-22 bg-[#000000] h-auto">
        <div
            class="pt-24 md:pt-40 pb-24 px-4 md:px-16 flex md:flex-row flex-col justify-center items-center space-y-6 md:space-y-0">
            <div class="block md:hidden w-full flex items-center justify-center">
                <img src="assets/images/clientele/1.png" alt="" class="w-auto h-[200px] rotate-anticlockwise"
                    loading="eager">
            </div>

            <div class="w-full md:w-3/5 space-y-8 flex flex-col justify-center items-center md:items-start">
                <h2 class="hidden md:block text-6xl font-extralight text-white leading-[75px]">
                    Trusted by Leading <br> Businesses: Our <br> Valued Clientele
                </h2>
                <h2 class="block md:hidden text-2xl text-center  text-white leading-[40px]">
                    Trusted by Leading Businesses: Our Valued Clientele</h2>
                <p class="text-white text-xl md:text-2xl text-center md:text-left font-light">Our esteemed clientele drives our
                    commitment to excellence</p>
                <button
                    class="bg-gradient-to-r from-[#f458d1] to-[#7dd0f1] text-md md:text-lg text-white px-16 md:px-32 py-2 md:py-3 shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105"
                    id="our-clientele">
                    Our Clientele
                </button>
            </div>

            <div class="hidden md:block w-2/5 flex items-center justify-center">
                <img src="assets/images/clientele/1.png" alt="" class="w-auto h-[500px] rotate-anticlockwise"
                    loading="eager">
            </div>
        </div>
    </div>

    <div class="mx-auto md:my-22 bg-gradient-to-r from-[#aba2a9] to-[#ebf1f4]" id="whom-we-serve">
        <div class="py-16 px-4 md:px-16 ">
            <div class=" text-center space-y-12">
                <h2 class="text-3xl md:text-5xl font-light text-gray-900">WHOM WE SERVE</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="flex flex-col items-center h-full">
                        <img src="assets/images/clientele/3.png" alt="Educational Industry"
                            class="h-36 w-36 md:w-48 md:h-48 mb-4 md:mb-6" loading="eager">
                        <h2 class="text-xl  text-gray-900 mb-2 md:mb-4">Educational Industry</h2>
                        <p class="text-gray-950 mb-4 md:mb-6 flex-grow md:text-md text-lg md:px-8">
                            Empowering clients in the educational industry with customized solutions for efficient
                            management and improved student outcomes.
                        </p>
                        <button
                            class="bg-gradient-to-r from-[#f458d1] to-[#7dd0f1] text-white px-8 md:px-12 py-2 rounded-full"
                            id="educational-industry">
                            Clientele List
                        </button>
                    </div>
                    <div class="flex flex-col items-center h-full">
                        <img src="assets/images/clientele/4.png" alt="Engineering Industry"
                            class="h-36 w-36 md:w-48 md:h-48 mb-4 md:mb-6" loading="eager">
                        <h2 class="text-xl text-gray-900 mb-2 md:mb-4">Engineering Industry</h2>
                        <p class="text-gray-950 mb-4 md:mb-6 flex-grow md:text-md text-lg md:px-8">
                            Delivering innovative solutions to clients in the engineering industry for enhanced
                            project
                            efficiency and collaboration.
                        </p>
                        <button
                            class="bg-gradient-to-r from-[#f458d1] to-[#7dd0f1] text-white px-8 md:px-12 py-2 rounded-full"
                            id="engineering-industry">
                            Clientele List
                        </button>
                    </div>
                    <div class="flex flex-col items-center h-full">
                        <img src="assets/images/clientele/5.png" alt="Commercial Services Industry"
                            class="h-36 w-36 md:w-48 md:h-48 mb-4 md:mb-6" loading="eager">
                        <h2 class="text-xl text-gray-900 mb-2 md:mb-4">Commercial Services Industry</h2>
                        <p class="text-gray-950 mb-4 md:mb-6 flex-grow md:text-md text-lg md:px-8">
                            Driving success in the Commercial Services Industry through innovative solutions tailored
                            for
                            real estate, event management, logistics, and more.
                        </p>
                        <button
                            class="bg-gradient-to-r from-[#f458d1] to-[#7dd0f1] text-white px-8 md:px-12 py-2 rounded-full"
                            id="commercial-industry">
                            Clientele List
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

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