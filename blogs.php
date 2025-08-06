<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Company</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span>Blogs</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60" style="background-image: url('assets/images/bg/office.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
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



<!-- blog -->
<div id="next-section" class="container mx-auto my-16 md:my-32">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
      <div class="relative overflow-hidden">
        <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
          <img src="assets/images/blogs/b4.png" alt="blog" class="w-full h-72 mt-6 md:mt-0">
        </div>
      </div>
      <div class="py-6 md:p-8">
        <a href="the-5-cornerstones-of-a-strong-supply-chain.php" class="text-2xl text-red-600 hover:text-blue-950">The 5 Cornerstones of a Strong Supply Chain</a>
        <p class="mt-2 text-md md:text-lg text-gray-700">In today's competitive business landscape, a strong supply chain is no longer a luxury, it's a necessity. An efficient flow of goods from raw materials to customer doorstep is critical for business success.</p>
        <div class="flex items-center mt-2">
          <a href="the-5-cornerstones-of-a-strong-supply-chain.php" class="text-md text-blue-950 font-light hover:text-blue-900 hover:underline inline-block">Read more</a>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-3 text-blue-950 hover:text-blue-900">
            <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>
    </div>

    <div class="bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
      <div class="relative overflow-hidden">
        <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
          <img src="assets/images/blogs/b3.jpg" alt="blog" class="w-full h-72 mt-6 md:mt-0">
        </div>
      </div>
      <div class="py-6 md:p-8">
        <a href="5-sustainable-technologies-to-look-out-for-in-2024.php" class="text-2xl text-red-600 hover:text-blue-950">5 Sustainable Technologies To Look Out For In 2024</a>
        <p class="mt-2 text-md md:text-lg text-gray-700">With the concept of sustainability becoming the talk of the town and modern citizens placing paramount importance on integrating green technology practices, it has become vital.</p>
        <div class="flex items-center mt-2">
          <a href="5-sustainable-technologies-to-look-out-for-in-2024.php" class="text-md text-blue-950 font-light hover:text-blue-900 hover:underline inline-block">Read more</a>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-3 text-blue-950 hover:text-blue-900">
            <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>
    </div>

    <div class="bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
      <div class="relative overflow-hidden">
        <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
          <img src="assets/images/blogs/b6.jpg" alt="blog" class="w-full h-72 mt-6 md:mt-0">
        </div>
      </div>
      <div class="py-6 md:p-8">
        <a href="the-rise-of-ai-and-machine-learning-in-it.php" class="text-2xl text-red-600 hover:text-blue-950">The Rise of AI and Machine Learning in IT</a>
        <p class="mt-2 text-md md:text-lg text-gray-700">The landscape of healthcare in 2024 is being radically transformed by the integration of artificial intelligence (AI). For diagnosis and treatment to patient care and administrative tasks.</p>
        <div class="flex items-center mt-2">
          <a href="the-rise-of-ai-and-machine-learning-in-it.php" class="text-md text-blue-950 font-light hover:text-blue-900 hover:underline inline-block">Read more</a>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-3 text-blue-950 hover:text-blue-900">
            <path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd" />
          </svg>
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

    // blogs
    // $(".blog-carousel").owlCarousel({
    //   items: 3,
    //   loop: true,
    //   margin: 20,
    //   dots: false,
    //   stagePadding: 0,
    //   autoplay: true,
    //   autoplayTimeout: 3000,
    //   autoplayHoverPause: true,
    //   responsive: {
    //     0: {
    //       items: 1,
    //       stagePadding: 0
    //     },
    //     768: {
    //       items: 2,
    //       stagePadding: 0
    //     },
    //     1024: {
    //       items: 3,
    //       stagePadding: 0
    //     }
    //   },
    //   onTranslated: function(event) {
    //     var elements = $(".owl-item");
    //     elements.removeClass('right-partial');
    //     if (elements.length > 0) {
    //       elements.last().addClass('right-partial');
    //     }
    //   }
    // });
  });
</script>