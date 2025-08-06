<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Company</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span>Portfolio</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60" style="background-image: url('assets/images/bg/solutions.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
            Future-Focused Solutions; Built for Your Business Needs
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


<div id="next-section" class="container mx-auto my-16 md:my-32 flex flex-col items-left space-y-4 px-2 md:px-0">
  <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold text-left mb-12">Our Solutions in a nutshell</h2>

  <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-blue-950">
      <div class="text-white text-left p-4 md:p-8">
        <h3 class="text-2xl font-semibold">Software Products and Solutions</h3>
        <p class="mt-2 text-lg">Among our offerings are robust ERP systems, in-built CRM platforms, and scalable cloud applications. Each of our products is designed to improve operational efficiency, streamline processes, and enable organisations to thrive in today's digital arena.</p>
      </div>
    </div>
    <div class="bg-sky-600">
      <div class="text-white text-left p-4 md:p-8">
        <h3 class="text-2xl font-semibold">Consulting and Advisory Services</h3>
        <p class="mt-2 text-lg">Manoeuvring complex technological challenges requires expert guidance. Our consulting services are designed to provide key insights and practical solutions. With an eye on digital transformation strategies and roadmap planning, we work closely with clients to align their business goals.</p>
      </div>
    </div>
    <div class="bg-blue-950 md:bg-sky-600">
      <div class="text-white text-left p-4 md:p-8">
        <h3 class="text-2xl font-semibold">Support and Maintenance</h3>
        <p class="mt-2 text-lg">We provide thorough maintenance and support services to guarantee that our systems keep working at their best over time. With proactive monitoring, regular updates, and responsive help desk support, we keep businesses running smoothly, minimising downtime and maximising productivity.</p>
      </div>
    </div>
    <div class="bg-sky-600 md:bg-blue-950">
      <div class="text-white text-left p-4 md:p-8">
        <h3 class="text-2xl font-semibold">Training and Onboarding Programs</h3>
        <p class="mt-2 text-lg">We arrange specialised training programs to equip users with the knowledge and skills needed to maximise efficiency and proficiency with our software products. Our training courses, whether in-person or online, guarantee a smooth shift and continued proficiency.</p>
      </div>
    </div>
  </div>
</div>


<div class="container mx-auto my-16 md:my-32 flex flex-col items-left space-y-4 px-2 md:px-0">
  <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold text-left mb-12">Problem-Solution Approach</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-emerald-600 text-white flex flex-col h-full">
      <div class="flex-grow p-8">
        <h2 class="text-2xl font-semibold mb-4">Emphasis on User Needs</h2>
        <p class="">Vasp Technologies places a high priority on understanding the unique needs of each of its clients. We create specialised software solutions to meet the specific needs and objectives of each client.</p>
      </div>
      <img src="assets/images/img/b1.png" alt="Infosys Knowledge Institute" class="w-full h-auto mt-auto">
    </div>
    <div class="bg-sky-600 text-white flex flex-col h-full">
      <div class="flex-grow p-8">
        <h2 class="text-2xl font-semibold mb-4">Adaptable Solutions</h2>
        <p class="">Our mission is to develop software products that are specifically tailored to the changing needs of our clients. This makes sure our solution evolves with the growth of the business.</p>
      </div>
      <img src="assets/images/img/b2.png" alt="Innovation Fund" class="w-full h-auto mt-auto">
    </div>
    <div class="bg-yellow-700 text-white flex flex-col h-full">
      <div class="flex-grow p-8">
        <h2 class="text-2xl font-semibold mb-4">Nurturing Long-Term Associations</h2>
        <p class="">We place a high priority on establishing enduring client connections by providing top-notch software and continuing assistance. This guarantees customer happiness and potentially recurring business.</p>
      </div>
      <img src="assets/images/img/b3.png" alt="Infosys Innovation Network" class="w-full h-auto rounded-b-lg mt-auto">
    </div>
  </div>
</div>


<div class="container mx-auto my-16 md:my-32 flex flex-col items-left space-y-4 px-2 md:px-0">
  <h2 class="text-blue-950 text-3xl md:text-4xl font-semibold text-left mb-12">Our Clients Speak</h2>
  <!-- <h2 class="text-4xl font-bold text-center mb-12">Know about our <span class="bg-yellow-300 text-black px-2">success</span> stories</h2> -->
  <div class="owl-carousel client-speak owl-theme">

    <div class="bg-gradient-to-tl from-gray-800 via-gray-700 to-blue-900 text-white shadow-lg p-6 flex flex-col justify-between">
      <p class="mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium mollitia quas repellendus non ducimus sunt voluptatibus? Doloribus molestiae ipsam, at, possimus soluta pariatur voluptatem repudiandae, eligendi natus officiis quibusdam!
      </p>
      <div class="flex items-center mt-4">
        <img src="assets/images/client/c1.png" style="width: 70px;" alt="Supratik Pramanik" class="rounded-full mr-4 object-cover">
        <div>
          <p class="font-semibold">Supratik Pramanik</p>
          <p class="text-sm">Guwahati Demo School</p>
        </div>
      </div>
    </div>


    <div class="bg-gradient-to-tl from-purple-300 via-purple-500 to-indigo-600 text-white shadow-lg p-6 flex flex-col justify-between">
      <p class="mb-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore iste illo, saepe expedita nulla, laborum optio, eveniet nihil enim sequi est adipisicing elit. Dolore iste illo, inventore corrupti quo neque consectetur dolores eligendi eaque.
      </p>
      <div class="flex items-center mt-4">
        <img src="assets/images/client/c1.png" style="width: 70px;" alt="Supratik Pramanik" class="rounded-full mr-4 object-cover">
        <div>
          <p class="font-semibold">Supratik Pramanik</p>
          <p class="text-sm">Guwahati Demo School</p>
        </div>
      </div>
    </div>

    <div class="bg-gradient-to-tl from-teal-400 via-cyan-500 to-blue-600 text-white shadow-lg p-6 flex flex-col justify-between">
      <p class="mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque saepe qui debitis ratione libero, velit eveniet maiores voluptatibus labore! Sint tenetur molestiae voluptate autem odit suscipit cupiditate corrupti sapiente? Cupiditate, eligendi!
      </p>
      <div class="flex items-center mt-4">
        <img src="assets/images/client/c1.png" style="width: 70px;" alt="Supratik Pramanik" class="rounded-full mr-4 object-cover">
        <div>
          <p class="font-semibold">Supratik Pramanik</p>
          <p class="text-sm">Guwahati Demo School</p>
        </div>
      </div>
    </div>

  </div>
</div>




<!-- <div class="container mx-auto my-16 md:my-32">
  <div class="pb-2 md:px-0">
    <div class="flex flex-wrap items-left justify-between py-4">
      <div class="w-full px-2">
        <h2 class="text-3xl md:text-5xl font-bold text-left mb-12">Case Study</h2>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-white shadow-lg hover:bg-blue-100 px-4 md:px-0">
      <div class="relative overflow-hidden">
        <div class="transition-transform duration-700 ease-in-out transform-gpu hover:scale-125">
          <img src="assets/images/img/3.jpg" alt="blog" class="w-full h-64 mt-6 md:mt-0">
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
          <img src="assets/images/img/3.jpg" alt="blog" class="w-full h-64 mt-6 md:mt-0">
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
          <img src="assets/images/img/3.jpg" alt="blog" class="w-full h-64 mt-6 md:mt-0">
        </div>
      </div>
      <div class="py-6 md:p-8">
        <a href="blog-details.php" class="text-2xl font-semibold hover:text-blue-950">Case Study 3</a>
        <p class="mt-2 text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius quae natus sapiente repudiandae fuga eos repellendus obcaecati. Animi, molestiae natus.</p>

      </div>
    </div>

  </div>
</div> -->



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
    $(".owl-carousel.client-speak").owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      margin: 10,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  });
</script>