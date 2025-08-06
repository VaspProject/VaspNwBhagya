<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Sitemap</span>
            
        </div>
        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60" style="background-image: url('assets/images/bg/office.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
               This is the Sitemap
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

<div class="container mx-auto px-6 pt-10 pb-6">
    <div class="flex flex-wrap  py-4">
        <div class="w-full md:w-1/4  px-6 pb-4 md:text-left ">
            <h5 class="text-blue-950 text-4xl py-2">Pages</h5>
            <ul class="mb-4">
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="index.php" class="text-xl">Home</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="about-us.php" class="text-xl">About Us</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="solutions.php" class="text-xl">Solutions</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="products.php" class="text-xl">Products</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="career.php" class="text-xl">Career</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="contact.php" class="text-xl">Contact Us</a>
                </li>
            </ul>
        </div>

        <div class="w-full md:w-1/4 px-6 pb-4 md:text-left">
            <h5 class="text-blue-950 text-4xl py-2">Company</h5>
            <ul class="mb-4">
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="about-us.php" class="text-xl">Our Profile</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="about-us.php" class="text-xl">About Us</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="portfolio.php" class="text-xl">Our Portfolio</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="blogs.php" class="text-xl">News</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="faq.php" class="text-xl">FAQ</a>
                </li>
            </ul>
        </div>

        <div class="w-full md:w-1/4 px-6 pb-4 md:text-left">
            <h5 class="text-blue-950 text-4xl py-2">Solutions</h5>
            <ul class="mb-4">
                <li class="mt-2 flex  md:flex md:justify-start ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="solutions.php" class="text-xl">Enterprise Resource Planning</a>
                </li>
                <li class="mt-2 flex  md:flex md:justify-start ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="solutions.php" class="text-xl">Transport Management Software</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="solutions.php" class="text-xl">Retail Management Software</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="solutions.php" class="text-xl">Supply Chain Management</a>
                </li>
            </ul>
        </div>

        <div class="w-full md:w-1/4 px-6 pb-4 md:text-left">
            <h5 class="text-blue-950 text-4xl py-2">Industries</h5>
            <ul class="mb-4">
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="education.php" class="text-xl">Education</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="logistics.php" class="text-xl">Logistics</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="e-commerce.php" class="text-xl">E-Commerce</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="healthcare.php" class="text-xl">Healthcare</a>
                </li>

                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="banking.php" class="text-xl">Banking</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="travel&hospitality.php" class="text-xl">Travel & Hospitality</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="public-sector.php" class="text-xl">Public Sector</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="real-estate.php" class="text-xl">Real Estate</a>
                </li>
            </ul>
        </div>

        <div class="w-full md:w-1/4 px-6 pb-4 md:text-left">
            <h5 class="text-blue-950 text-4xl py-2">Products</h5>
            <ul class="mb-4">
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="products.php" class="text-xl">Desalite Connect</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="products.php" class="text-xl">Ednect</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="products.php" class="text-xl">TransTrack</a>
                </li>
                <li class="mt-2 flex md:flex md:justify-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-md ">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="products.php" class="text-xl">Icebox</a>
                </li>
            </ul>
        </div>

        <div class="w-full md:w-1/4 px-6 pb-4 md:text-left">
            <h5 class="text-blue-950 text-4xl py-2">Careers</h5>
        </div>
        <div class="w-full md:w-1/4 px-6 pb-4 md:text-left">
            <h5 class="text-blue-950 text-4xl py-2">Contact</h5>
        </div>


    </div>
</div>










<?php include('master/footer.php') ?>