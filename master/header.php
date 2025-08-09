<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vasp Technologies</title>
  <!--<meta name="description" content="Looking for the best software company? Vasp Technologies specialises in smart ERP solutions and web development dedicated to driving your business success.">-->
  <!--<meta name="keywords" content="Software Comapny, Best software company, IT company, software companies in guwahati, software companies in India, software development company, Best ERP, Payroll Service Software, Best CRM software for small business, Custom software development, Best accounting software for multiple businesses, Top IT software companies, List of top software companies, ERP solutions company, Smart ERP solutions, ERP service provider, web development company, ERP solutions, Technology Solutions, IT service and solutions, IT service offerings, IT operations">-->

  <link rel="shortcut icon" href="assets/images/favicon.ico">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="assets/css/own.css?v=1.0.1" />

  <script src="assets/js/custom.js"></script>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


  <style>
    body {
      font-family: 'Roboto Condensed', sans-serif;
     
    }
  </style>
</head>

<body class="font-roboto bg-gray-100 relative">
<nav id="navbar" class="bg-blue-950 p-4 w-full">
  <div class="container mx-auto flex items-center justify-between">
    <a href="index.php" class="logo w-40 md:w-48 h-auto mr-12">
      <img src="assets/images/vtlogo.png" alt="logo" id="navbar-logo" style="max-width: 133%;">
    </a>

    <ul class="flex space-x-6 ml-[7.5rem] hidden md:flex">
      <li>
        <a href="about-us.php" class="text-white text-lg hover:text-gray-300" style="font-weight:400;">COMPANY</a>
      </li>
      <li>
        <a href="solutions.php" class="text-white text-lg hover:text-gray-300" style="font-weight:400;">SOLUTIONS</a>
      </li>
      <li>
        <a href="industries.php" class="text-white text-lg hover:text-gray-300" style="font-weight:400;">INDUSTRIES</a>
      </li>
      <li>
        <a href="products.php" class="text-white text-lg hover:text-gray-300" style="font-weight:400;">PRODUCTS</a>
      </li>
      <li>
        <a href="career.php" class="text-white text-lg hover:text-gray-300" style="font-weight:400;">CAREER</a>
      </li>
      <li>
        <a href="contact.php" class="text-white text-lg hover:text-gray-300" style="font-weight:400;">CONTACT</a>
      </li>
    </ul>

    <div class="hidden md:flex ml-auto">
      <a href="demo-form.php" class="border bg-gray-800 rounded-full hover:bg-blue-950 text-white hover:bg-white hover:text-blue-950 px-6 py-2 ml-auto transition-all duration-300 ease-in-out transform hover:scale-105 shadow-md">REQUEST DEMO</a>
    </div>

    <!-- Mobile Menu Toggle -->
    <div class="md:hidden">
      <button id="menu-btn" class="text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  </div>
</nav>

  <script>
    document.getElementById('menu-btn').addEventListener('click', function() {
      var menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });

    function toggleSubmenu(event) {
      event.preventDefault();
      var allSubmenus = document.querySelectorAll('#mobile-menu ul ul');
      allSubmenus.forEach(function(submenu) {
        submenu.classList.add('hidden');
      });

      var currentSubmenu = event.currentTarget.nextElementSibling;
      currentSubmenu.classList.toggle('hidden');
    }

    document.addEventListener('click', function(event) {
      var menu = document.getElementById('mobile-menu');
      var menuBtn = document.getElementById('menu-btn');
      var isClickInside = menu.contains(event.target) || menuBtn.contains(event.target);

      if (!isClickInside) {
        menu.classList.add('hidden');
      }
    });
  </script>


<script>
document.addEventListener("mousemove", function(e) {
  const star = document.createElement("span");
  star.className = "falling-star";
  star.style.left = e.pageX + "px";
  star.style.top = e.pageY + "px";
  document.body.appendChild(star);

  setTimeout(() => {
    star.remove();
  }, 800); // remove after animation
});
</script>

<style>
  .falling-star {
  position: absolute;
  width: 4px;
  height: 4px;
  background: white;
  border-radius: 50%;
  box-shadow: 0 0 8px 4px rgba(170, 61, 61, 0.5);
  pointer-events: none;
  animation: trail 0.8s linear forwards;
  z-index: 9999;
}

@keyframes trail {
  0% {
    transform: translate(0, 0) scale(1);
    opacity: 1;
  }
  100% {
    transform: translate(-30px, 60px) scale(0.2); /* moves diagonally like falling star */
    opacity: 0;
  }
}

/* Force navbar to keep its dark background */
#navbar {
    background-color: rgb(23 37 84) !important; /* Tailwind bg-slate-700 */
    /* position: fixed; Make it stick on top */
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999; /* Ensure it stays above dropdowns */
  }

  /* Keep dropdowns below navbar */
  #navbar .absolute {
    z-index: 999; /* Slightly less than navbar so navbar stays above */
  }

</style>