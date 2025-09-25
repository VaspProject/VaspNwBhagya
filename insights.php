<?php include('master/header.php') ?>
<style>
  /* body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    } */

  .blog-section {
    /* padding: 60px 20px; */
    text-align: center;
  }

  .blog-title {
    font-size: 2.5rem;
    margin-bottom: 30px;
    font-weight: bold;
    color: #333;
  }

  .blog-row {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    padding-bottom: 10px;
    scroll-snap-type: x mandatory;
    padding: 20px 44px;
  }

  .blog-card {
    /* flex: 0 0 300px; */
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
    scroll-snap-align: start;
  }

  .blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  }

  .blog-card img {
    height: 200px;
    object-fit: cover;
  }

  .blog-card .card-body {
    padding: 20px;
  }

  .blog-card h5 {
    font-weight: bold;
    color: #222;
  }

  .blog-card p {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.5;
  }

  /* Hide scrollbar but keep scroll functionality */
  .blog-row::-webkit-scrollbar {
    display: none;
  }

  .blog-row {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

<style>
  .category-container {
    background: #fff;
    border-bottom: 1px solid #eee;
    padding: 20px 0;
  }

  .category-bar {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    /* center horizontally */
    gap: 8px;
    /* spacing between items */
  }

  .category-item {
    font-size: 19px;
    font-weight: 400;
    padding: 6px 14px;
    border-radius: 3px;
    color: black;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
  }

  .category-item.active {
    background: #003d5c;
    color: #fff !important;
  }

  .category-item:hover {
    color: #003d5c;
  }

  .search-box {
    max-width: 350px;
    margin: 0 auto;
    /* center horizontally */
  }

  .search-box input {
    height: 48px;
    width: 94%;
    border-radius: 8px 0 0 8px;
    border: 1px solid #ddd;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.08);
  }

  .search-box button {
    height: 48px;
    width: 17px;
    border-radius: 0 8px 8px 0;
    background: #2cb3d0;
    border: none;
    color: #fff;
  }

  .search-box button:hover {
    background: #1f96b3;
  }



  .search-box .form-control {
    border-radius: 30px;

  }

  .search-box i {
    pointer-events: none;

  }
</style>


<div id="hero" class="h-[70vh]">
  <div
    class="relative h-[70vh] w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
    <div
      class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
      <a href="about-us.php"><span>Company</span></a>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
        <path fill-rule="evenodd"
          d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
          clip-rule="evenodd" />
        <path fill-rule="evenodd"
          d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
          clip-rule="evenodd" />
      </svg>
      <a href="about-us.php"><span>Insights</span></a>
    </div>

    <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
      style="background-image: url('assets/images/blogs-new/insights1.jpg');"></div>

    <!-- style="background-image: url('assets/images/bg/about.jpg');" -->

    <!-- <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white mb-4" style="font-weight: 100;">
                For more than 12 years, we’ve been creating <br>digital solutions - ERP software, Websites <br>and
                Mobile apps that drive success.
            </h1>
        </div> -->
    <div class="absolute inset-0 flex items-center justify-center z-10">
      <h1 class="text-6xl md:text-8xl text-white">Insights</h1>
    </div>
    <div class="absolute bottom-8 w-full flex justify-center z-10">

      <button onclick="scrollToNextSection()" class="relative group mt-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="bg-slate-50 pt-1 text-blue-950 rounded-full w-10 h-10 transition-all duration-300 transform group-hover:scale-110 group-hover:bg-white">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
      </button>
    </div>
  </div>
</div>
<div class="py-12 px-4 md:px-16">
  <div class="container category-container">

    <div class="d-flex flex-wrap align-items-center justify-content-center mb-3" id="categoryBar">
      <div class="category-item active"><i class="fa-solid fa-tag"></i> All Categories</div>
      <div class="category-item">ERP</div>
      <div class="category-item"> Website Development</div>
      <div class="category-item"> Software Development</div>
      <div class="category-item"> Mobile apps Development</div>
      <div class="category-item">Digital Marketing</div>
      <div class="category-item"> Case Studies</div>
      <div class="category-item"> FAQs</div>
      <!-- <div class="category-item"><i class="fa-solid fa-mobile-screen"></i> MOBILE APPS</div>
    <div class="category-item"><i class="fa-solid fa-globe"></i> OUTSOURCING</div>
    <div class="category-item"><i class="fa-solid fa-laptop-code"></i> WEB APPLICATION DEVELOPMENT</div>
    <i class="fa-solid fa-chart-line"></i>
    <i class="fa-solid fa-paintbrush"></i>
    <i class="fa-solid fa-cart-shopping"></i>
    <i class="fa-solid fa-briefcase"></i>
     -->
    </div>

    <div class="d-flex justify-content-center">
      <form class="search-box">
        <div class="position-relative w-50"> <!-- adjust width -->
          <!-- Icon inside the input -->
          <i class="fa fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted" style="position: relative; top: 37px;"></i>

          <!-- Input box -->
          <input class="form-control ps-5 rounded-pill" type="search" placeholder="  Search..." aria-label="Search">
        </div>
      </form>
    </div>




  </div>
</div>



<div id="blogs">
  <!-- class="bg-gradient-to-br from-[#290a33] via-[#4a0f3c] to-[#931c50]" -->
  <div class="py-12 px-4 md:px-16" style="padding-top: 0rem;">
    <div>
      <h1 class="text-black text-center text-3xl md:text-6xl mb-6">Blogs</h1>
      <p class="text-black text-md md:text-lg mt-4">
        Read our blogs for insights on ERP solutions, web development, mobile app trends, and SEO strategies
        that help businesses in Guwahati and Northeast India grow online.
      </p>
    </div>
    <!--
                <div class="max-w-5xl mx-auto md:w-2/3">

                <div class="md:max-h-[32rem] md:overflow-y-auto scrollbar-hidden">
                    <div class="flex gap-6 lg:m-6 overflow-x-auto md:overflow-visible md:flex-col snap-x snap-mandatory [ -webkit-overflow-scrolling:touch ]">
                -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-16">
      <article
        class="bg-white shadow-md border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition flex flex-col">
        <img src="assets/images/blogs-new/1.jpg" alt="Custom Software" class="w-full h-56 object-cover" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col justify-between flex-1">
          <div>
            <p class="text-gray-500 text-xs md:text-sm text-right">25 Aug 2025</p>
            <h2 class="text-gray-900 text-lg md:text-2xl mt-2">
              Important of ERP for Enterprises in Guwahati and Beyond
            </h2>
            <p class="text-gray-700 mt-2 md:mt-3 line-clamp-3 text-sm md:text-base">
              Discover how ERP software helps schools, colleges, and businesses in
              Guwahati streamline operations, reduce costs, and achieve smarter growth.
            </p>
          </div>
          <div class="mt-3 md:mt-4">
            <a href="erp-software-guwahati" target="_blank">
              <button
                class="bg-gradient-to-r from-[#121212] to-[#636363] text-white py-2 px-4 md:px-6 rounded-full hover:opacity-90 transition text-sm md:text-base">
                Read More
              </button>
            </a>
          </div>
        </div>
      </article>

      <article
        class="bg-white shadow-md border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition flex flex-col">
        <img src="assets/images/blogs-new/2.jpg" alt="Custom Software" class="w-full h-56 object-cover" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col justify-between flex-1">
          <div>
            <p class="text-gray-500 text-xs md:text-sm text-right">22 Oct 2024</p>
            <h2 class=" text-gray-900 text-lg md:text-2xl mt-2">
              Empowering Businesses with Custom Software
            </h2>
            <p class="text-gray-700 mt-2 md:mt-3 line-clamp-3 text-sm md:text-base">
              Businesses today need solutions as unique as their operations.
              VASP Technologies in Guwahati drives growth with scalable, tailored software.
            </p>
          </div>
          <div class="mt-3 md:mt-4">
            <a href="empowering-businesses-through-custom-software-development" target="_blank">
              <button
                class="bg-gradient-to-r from-[#121212] to-[#636363] text-white py-2 px-4 md:px-6 rounded-full hover:opacity-90 transition text-sm md:text-base">
                Read More
              </button>
            </a>
          </div>
        </div>
      </article>

      <article
        class="bg-white shadow-md border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition flex flex-col">
        <img src="assets/images/blogs-new/3.jpg" alt="Web & Mobile Solutions" class="w-full h-56 object-cover"
          loading="lazy">
        <div class="p-4 md:p-6 flex flex-col justify-between flex-1">
          <div>
            <p class="text-gray-500 text-xs md:text-sm text-right">15 Oct 2024</p>
            <h2 class="text-gray-900 text-lg md:text-2xl mt-2">
              Driving Growth with Web & Mobile Solutions
            </h2>
            <p class="text-gray-700 mt-2 md:mt-3 line-clamp-3 text-sm md:text-base">
              From corporate websites to advanced e-commerce platforms, our team builds digital
              experiences that inspire and deliver results.
            </p>
          </div>
          <div class="mt-3 md:mt-4">
            <a href="web-and-mobile-solutions.php" target="_blank">
              <button
                class="bg-gradient-to-r from-[#121212] to-[#636363] text-white py-2 px-4 md:px-6 rounded-full hover:opacity-90 transition text-sm md:text-base">
                Read More
              </button>
            </a>
          </div>
        </div>
      </article>

      <article
        class="bg-white shadow-md border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition flex flex-col">
        <img src="assets/images/blogs-new/4.jpg" alt="Smart ERP" class="w-full h-56 object-cover" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col justify-between flex-1">
          <div>
            <p class="text-gray-500 text-xs md:text-sm text-right">10 Oct 2024</p>
            <h2 class="text-gray-900 text-lg md:text-2xl mt-2">
              Shaping Education with Smart ERP
            </h2>
            <p class="text-gray-700 mt-2 md:mt-3 line-clamp-3 text-sm md:text-base">
              Our school management system streamlines administration and enhances learning for
              schools across the Northeast.
            </p>
          </div>
          <div class="mt-3 md:mt-4">
            <a href="smart-erp-for-schools-northeast.php" target="_blank">
              <button
                class="bg-gradient-to-r from-[#121212] to-[#636363] text-white py-2 px-4 md:px-6 rounded-full hover:opacity-90 transition text-sm md:text-base">
                Read More
              </button>
            </a>
          </div>
        </div>
      </article>
    </div>
    <div class="carousel-dots flex justify-center space-x-2 mt-4"></div>
  </div>
</div>

<section class="blog-section py-12 px-4 md:px-16">
  <h2 class="blog-title text-black text-center text-3xl md:text-6xl mb-6"> Case Studies</h2>
  <div class="container-fluid">
    <div class="blog-row">

      <!-- Blog 1 -->
      <div class="card blog-card">
        <img src="https://source.unsplash.com/600x400/?technology" class="card-img-top" alt="Blog 1">
        <div class="card-body">
          <h5 class="card-title">The Future of Technology</h5>
          <p class="card-text">Discover how AI, robotics, and emerging tech trends are shaping the future of innovation
            across industries.</p>
        </div>
      </div>

      <!-- Blog 2 -->
      <div class="card blog-card">
        <img src="https://source.unsplash.com/600x400/?business" class="card-img-top" alt="Blog 2">
        <div class="card-body">
          <h5 class="card-title">Business Growth Hacks</h5>
          <p class="card-text">Learn the strategies top entrepreneurs use to scale businesses quickly and sustainably in
            a competitive market.</p>
        </div>
      </div>

      <!-- Blog 3 -->
      <div class="card blog-card">
        <img src="https://source.unsplash.com/600x400/?travel" class="card-img-top" alt="Blog 3">
        <div class="card-body">
          <h5 class="card-title">Travel Beyond Borders</h5>
          <p class="card-text">Explore hidden gems around the world and get inspired for your next unforgettable travel
            adventure.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="blog-section py-12 px-4 md:px-16">
  <h2 class="blog-title text-black text-center text-3xl md:text-6xl mb-6">FAQ</h2>
  <div class="container-fluid">
    <div class="blog-row">

      <!-- Blog 1 -->
      <div class="card blog-card">
        <img src="https://source.unsplash.com/600x400/?technology" class="card-img-top" alt="Blog 1">
        <div class="card-body">
          <h5 class="card-title">The Future of Technology</h5>
          <p class="card-text">Discover how AI, robotics, and emerging tech trends are shaping the future of innovation
            across industries.</p>
        </div>
      </div>

      <!-- Blog 2 -->
      <div class="card blog-card">
        <img src="https://source.unsplash.com/600x400/?business" class="card-img-top" alt="Blog 2">
        <div class="card-body">
          <h5 class="card-title">Business Growth Hacks</h5>
          <p class="card-text">Learn the strategies top entrepreneurs use to scale businesses quickly and sustainably in
            a competitive market.</p>
        </div>
      </div>

      <!-- Blog 3 -->
      <div class="card blog-card">
        <img src="https://source.unsplash.com/600x400/?travel" class="card-img-top" alt="Blog 3">
        <div class="card-body">
          <h5 class="card-title">Travel Beyond Borders</h5>
          <p class="card-text">Explore hidden gems around the world and get inspired for your next unforgettable travel
            adventure.</p>
        </div>
      </div>

    </div>
  </div>
</section>


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

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const categoryItems = document.querySelectorAll('.category-item');

  categoryItems.forEach(item => {
    item.addEventListener('click', () => {
      // Remove active class from all
      categoryItems.forEach(i => i.classList.remove('active'));
      // Add active class to clicked one
      item.classList.add('active');
    });
  });
</script>

<?php include('master/footer.php') ?>