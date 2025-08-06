<?php include('master/sub-header.php') ?>


<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Career</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
            style="background-image: url('assets/images/bg/career.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
                Start Your Journey with Our Team
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

<div class="container mx-auto py-16 md:py-24 px-6">

    <div class="bg-white shadow-lg rounded-lg p-8 mb-4">
        <div class="flex items-center mb-6">
            <img src="assets/images/icons/job-description.png" alt="Job Description Icon" class="w-8 h-8 mr-4">
            <h2 class="text-2xl font-bold text-gray-800">Job Description</h2>
        </div>
        <p class="text-gray-600 text-lg leading-relaxed">
            Join our dynamic team as an Android Developer. The ideal candidate should be passionate about mobile technologies, have at least 2 years of experience, and possess a strong understanding of the mobile development lifecycle.
        </p>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-8 mb-4">
        <div class="flex items-center mb-6">
            <img src="assets/images/icons/job-roles.png" alt="Roles Icon" class="w-8 h-8 mr-4">
            <h2 class="text-2xl font-bold text-gray-800">Roles and Responsibilities</h2>
        </div>
        <ul class="list-disc pl-8 text-lg text-gray-600 leading-relaxed">
            <li>Design and build advanced applications for the Android platform.</li>
            <li>Collaborate with cross-functional teams to define, design, and ship new features.</li>
            <li>Work with external data sources and APIs.</li>
            <li>Conduct unit testing for robustness, usability, and reliability.</li>
            <li>Identify and fix bugs to enhance application performance.</li>
            <li>Continuously discover, evaluate, and implement new technologies for optimized development.</li>
        </ul>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-8 mb-12">
        <div class="flex items-center mb-6">
            <img src="assets/images/icons/experience-timer.png" alt="Experience Icon" class="w-8 h-8 mr-4">
            <h2 class="text-2xl font-bold text-gray-800">Experience</h2>
        </div>
        <p class="text-gray-600 text-lg leading-relaxed">2-5 years of experience in Android development.</p>
    </div>

    <!-- <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
        <div class="bg-white shadow-lg rounded-lg p-8">
            <div class="flex items-center mb-6">
                <img src="assets/images/icons/job-position.png" alt="Position Icon" class="w-8 h-8 mr-4">
                <h2 class="text-2xl font-bold text-gray-800">Position</h2>
            </div>
            <p class="text-gray-600 text-lg leading-relaxed">Android Developer</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-8">
            <div class="flex items-center mb-6">
                <img src="assets/images/icons/money.png" alt="CTC Icon" class="w-8 h-8 mr-4">
                <h2 class="text-2xl font-bold text-gray-800">CTC</h2>
            </div>
            <p class="text-gray-600 text-lg leading-relaxed">As per industry standards</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-8">
            <div class="flex items-center mb-6">
                <img src="assets/images/icons/location.png" alt="Location Icon" class="w-8 h-8 mr-4">
                <h2 class="text-2xl font-bold text-gray-800">Location</h2>
            </div>
            <p class="text-gray-600 text-lg leading-relaxed">Guwahati, India</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-8">
            <div class="flex items-center mb-6">
                <img src="assets/images/icons/people.png" alt="Positions Icon" class="w-8 h-8 mr-4">
                <h2 class="text-2xl font-bold text-gray-800">Number of Positions</h2>
            </div>
            <p class="text-gray-600 text-lg leading-relaxed">3</p>
        </div>
    </div> -->

    <div class="text-center">
        <a href="career-application.php" class="px-4 py-3 mt-4 md:px-6 md:py-4 bg-blue-950 text-white hover:bg-blue-900 transition duration-300">
            Apply Now
        </a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        if (navbar) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-blue-700');
        }
    });
</script>

<?php include('master/footer.php') ?>