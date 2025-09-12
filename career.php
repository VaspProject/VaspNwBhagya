<?php include('master/header.php') ?>

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


<div id="next-section" class="container mx-auto my-12 px-4">
  <div class="pb-2 md:pb-8  md:px-0">
    <div class="flex flex-wrap items-center justify-between py-4">
      <div class="w-full">
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold px-0 py-2 mb-2">A Look Inside Our Recruitment Process</h2>
        <!-- <p class="text-lg mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque quidem incidunt eaque autem odio iusto facilis! Provident, consectetur! Nesciunt, sunt.</p> -->
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

    <div class="flex flex-col md:flex-row items-left md:items-center text-left bg-white shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 ease-in-out">
      <div class="w-full md:w-1/2 overflow-hidden">
        <img src="assets/images/img/11.jpg" alt="Vacant position listings" class="w-full h-auto transform transition-transform duration-400 ease-in-out transform-gpu hover:scale-105">
      </div>
      <div class="m-6">
        <a href="#" class="text-lg text-sky-700 font-semibold mb-2 block">Defining the requirements</a>
        <ul class="list-disc pl-5 space-y-2 text-md">
          <li>Specifying the roles</li>
          <li>Desirable skills and experience</li>
        </ul>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-left md:items-center text-left bg-white shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 ease-in-out">
      <div class="w-full md:w-1/2 overflow-hidden">
        <img src="assets/images/img/14.jpg" alt="Vacant position listings" class="w-full h-auto transform transition-transform duration-400 ease-in-out transform-gpu hover:scale-105">
      </div>
      <div class="m-6">
        <a href="#" class="text-lg text-sky-700 font-semibold mb-2 block">Sorting out the applicants</a>
        <ul class="list-disc pl-5 space-y-2 text-md">
          <li>Assessing the applications</li>
          <li>Filtering out the candidates</li>
        </ul>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-left md:items-center text-left bg-white shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 ease-in-out">
      <div class="w-full md:w-1/2 overflow-hidden">
        <img src="assets/images/img/13.jpg" alt="Vacant position listings" class="w-full h-auto transform transition-transform duration-400 ease-in-out transform-gpu hover:scale-105">
      </div>
      <div class="m-6">
        <a href="#" class="text-lg text-sky-700 font-semibold mb-2 block">Interviewing and evaluation</a>
        <ul class="list-disc pl-5 space-y-2 text-md">
          <li>Pre-screening round</li>
          <li>Technical Round</li>
        </ul>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-left md:items-center text-left bg-white shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 ease-in-out">
      <div class="w-full md:w-1/2 overflow-hidden">
        <img src="assets/images/img/12.png" alt="Vacant position listings" class="w-full h-auto transform transition-transform duration-400 ease-in-out hover:scale-105">
      </div>
      <div class="m-6">
        <a href="#" class="text-lg text-sky-700 font-semibold mb-2 block">Welcome to the team</a>
        <ul class="list-disc pl-5 space-y-2 text-md">
          <li>Offer and negotiation</li>
          <li>Onboarding</li>
        </ul>
      </div>
    </div>

  </div>
</div>


<div class="container mx-auto my-12 md:my-22 px-4">
  <div class="pb-2 md:pb-8  md:px-0">
    <div class="flex flex-wrap items-center justify-between py-4">
      <div class="w-full">
        <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold md:px-0 py-2 mb-2">Current Job Openings</h2>
        <!-- <p class="text-lg mt-4">To join Vasp Technologies is an undeniably lucrative decision to make. You can code better and learn useful coding tricks. You can also try your career as a Developer, Technical writer, SEO expert, etc. We also welcome fresher, as fresher can surprise us with their skill. We focus on Employee recognition so, join us today to grow more.</p> -->
      </div>
    </div>
  </div>


  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Job Card 1 -->
    <div class="bg-white shadow-lg rounded-lg p-6 transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
      <div class="flex items-center mb-4">
        <div class="bg-blue-500 text-white p-3 rounded-full">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0c0 3.31 2.69 6 6 6s6-2.69 6-6-2.69-6-6-6-6 2.69-6 6zm0 0H4m8-3.16l-1.59 1.59a1 1 0 01-1.42 0L8 10.16"></path>
          </svg>
        </div>
        <a href="career-application.php" class="text-2xl font-semibold text-gray-800 ml-4">Android Developer</a>
      </div>
      <p class="text-gray-600 mb-4">We are in search of a skilled Android App Developer to join our team. The ideal candidate should have a passion for mobile technologies, a minimum of 2 years of experience in Android app development, and a strong understanding of the full mobile development lifecycle.</p>
      <ul class="text-gray-600 mb-4 space-y-2">
        <li class="flex items-center">
          <svg class="w-6 h-6 text-blue-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M6 2a1 1 0 011 1v1h6V3a1 1 0 112 0v1h1a2 2 0 012 2v11a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2h1V3a1 1 0 011-1zM4 7v11h12V7H4zm2 5h8v2H6v-2z" />
          </svg>
          Full-time
        </li>
        <li class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
          </svg>
          Location: Guwahati
        </li>
        <li class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          Experience: 2+ years
        </li>
      </ul>
      <a href="career-application.php" class="text-blue-500 hover:underline">Read more</a>
    </div>
    
    <!-- Job Card 2 -->
    <div class="bg-white shadow-lg rounded-lg p-6 transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
      <div class="flex items-center mb-4">
        <div class="bg-red-500 text-white p-3 rounded-full">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0c0 3.31 2.69 6 6 6s6-2.69 6-6-2.69-6-6-6-6 2.69-6 6zm0 0H4m8-3.16l-1.59 1.59a1 1 0 01-1.42 0L8 10.16"></path>
          </svg>
        </div>
        <a href="career-application.php" class="text-2xl font-semibold text-gray-800 ml-4">PHP Developer</a>
      </div>
      <p class="text-gray-600 mb-4">The ideal candidate should have a strong understanding of PHP programming languages, web development, and database management. You will collaborate with our team to design and develop high-quality, scalable web applications while ensuring optimal functionality and performance.</p>
      <ul class="text-gray-600 mb-4 space-y-2">
        <li class="flex items-center">
          <svg class="w-6 h-6 text-blue-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M6 2a1 1 0 011 1v1h6V3a1 1 0 112 0v1h1a2 2 0 012 2v11a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2h1V3a1 1 0 011-1zM4 7v11h12V7H4zm2 5h8v2H6v-2z" />
          </svg>
          Full-time
        </li>
        <li class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
          </svg>
          Location: Guwahati
        </li>
        <li class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          Experience: 3+ years
        </li>
      </ul>
      <a href="career-application.php" class="text-blue-500 hover:underline">Read more</a>
    </div>

    <!-- Job Card 3 -->
    <div class="bg-white shadow-lg rounded-lg p-6 transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
      <div class="flex items-center mb-4">
        <div class="bg-green-500 text-white p-3 rounded-full">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0c0 3.31 2.69 6 6 6s6-2.69 6-6-2.69-6-6-6-6 2.69-6 6zm0 0H4m8-3.16l-1.59 1.59a1 1 0 01-1.42 0L8 10.16"></path>
          </svg>
        </div>
        <a href="career-application.php" class="text-2xl font-semibold text-gray-800 ml-4">IT Support Executive</a>
      </div>
      <p class="text-gray-600 mb-4">As an IT Support Executive, you will be responsible for providing on-site technical support and troubleshooting for our client. You will work closely with the school's staff and administration to ensure the proper functioning of IT systems and resolve any issues that may arise promptly.</p>
      <ul class="text-gray-600 mb-4 space-y-2">
        <li class="flex items-center">
          <svg class="w-6 h-6 text-blue-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M6 2a1 1 0 011 1v1h6V3a1 1 0 112 0v1h1a2 2 0 012 2v11a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2h1V3a1 1 0 011-1zM4 7v11h12V7H4zm2 5h8v2H6v-2z" />
          </svg>
          Full-time
        </li>
        <li class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
          </svg>
          Location: Guwahati
        </li>
        <li class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          Experience: 1+ years
        </li>
      </ul>
      <a href="career-application.php" class="text-blue-500 hover:underline">Read more</a>
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
      offset = 100;
    }
    const elementPosition = nextSection.offset().top;
    const offsetPosition = elementPosition - offset;

    $('html, body').animate({
      scrollTop: offsetPosition
    }, 800);
  }
  
</script>