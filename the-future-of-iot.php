<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Blogs</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd"
                    d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
            <span>The Future of the IoT</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
            style="background-image: url('assets/images/bg/office.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
                We Craft Softwares That Empower Your Business
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



<!-- blog -->
<div id="next-section" class="container mx-auto my-16 md:my-32 px-4">
    <div class="md:flex justify-between items-start space-x-8">
        <div class="w-full md:w-2/3 bg-white  rounded-lg overflow-hidden mb-8 md:mb-0 md:mr-4">
            <div class="relative p-4 md:p-12 ">
                <img src="assets/images/blogs/b5.png" alt="blog" class="w-full h-48 md:h-96 object-cover rounded-lg brightness-50">
                <div class="absolute inset-0  flex items-end justify-center pb-4 md:pb-24 ">
                    <h1 class="text-white text-2xl md:text-4xl font-bold text-center px-4">The Future of the IoT
                        (Internet of Things)</h1>
                </div>
            </div>

            <div class="p-4 md:p-12">
                <!-- <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 pr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <div>
                        <h2 class="text-gray-800 font-semibold">18th July, 2024</h2>
                    </div>
                </div> -->
                <div class="text-md text-gray-700 leading-relaxed space-y-4 ">
                    <div class="p-6 bg-gradient-to-tl from-cyan-400 to-blue-500 rounded-lg shadow-lg">
                        <h2 class="text-3xl font-bold text-white mb-4">Table of Contents</h2>
                        <ul class="space-y-2" id="sidebar">
                            <li>
                                <a href="#introduction"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="introduction">
                                    Introduction
                                </a>
                            </li>
                            <li>
                                <a href="#defining"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="defining">
                                    Defining IoT (Internet of Things)
                                </a>
                            </li>
                            <li>
                                <a href="#applications"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="applications">
                                    Applications of IoT
                                </a>
                            </li>
                            <li>
                                <a href="#history"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="history">
                                    History of IoT
                                </a>
                            </li>
                            <li>
                                <a href="#working"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="working">
                                    How does the Internet of Things (IoT) work?
                                </a>
                            </li>
                            <li>
                                <a href="#future"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="future">
                                    The Future of the IoT
                                </a>
                            </li>
                            <li>
                                <a href="#leading"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="leading">
                                    Leading IoT Trends of 2024
                                </a>
                            </li>
                            <li>
                                <a href="#conclusion"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="conclusion">
                                    Conclusion
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="text-md md:text-lg space-y-4">
                        <h5 id="introduction" class="text-xl font-semibold text-blue-950 pt-2">Introduction</h5>
                        <p class="text-md md:text-lg">The IoT or Internet of Things as we all know continues to
                            transform our world, promising a future where everyday objects are interconnected,
                            communicating seamlessly to enhance efficiency, convenience, and productivity. Without a
                            doubt, IoT technologies are poised to revolutionise endlessly covering various realms. Right
                            from smart houses that optimise manufacturing processes by adjusting lighting and
                            temperature based on occupancy to industrial sensors that optimise temperature and lighting,
                            it has had a big impact on all of these. </p>


                        <h5 id="defining" class="text-xl font-semibold text-blue-950 pt-2">
                        Defining IoT
                        </h5>
                        <p class="text-md md:text-lg">To put it plainly, the terminology "Internet of Things" refers to a chain of linked devices that exchange data with one another over the internet. </p>
                        <p class="text-md md:text-lg">IoT is not limited to just PCs, laptops, and mobile devices. </p>
                        <p class="text-md md:text-lg">This refers to a broad spectrum of internet-capable intelligent gadgets, including wearables, automobiles, toys, and household appliances, that gather and share data through a network. </p>

                        <h5 id="applications" class="text-xl font-semibold text-blue-950 pt-2">
                        Applications of IoT
                        </h5>
                        <p> Applications of IoT are quite beneficial to our life. Through the use of unique identifiers, the Internet of Things allows people and objects to send data over a network not necessitating direct human-to-human or human-to-computer involvement. 
                        </p>
                        <p> The top 10 IoT applications that will have a lasting impact on organisations and how we live are outlined below:
                        </p>
                        
                        <ol class="list-decimal list-inside pl-1 md:pl-4">
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Implementing IoT to create automated homes</span>

                            </li>

                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Execution of innovative technology for better agricultural output</span>
                            </li>


                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg"> Setting up interlinked manufacturing plants</span>

                            </li>


                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Innovative wearable tech</span>
                            </li>

                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Redefining Life Science and Wellness Department</span>
                            </li>
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Setting up smart cities</span>
                            </li>
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Implementation of smart classes in the field of education</span>
                            </li>
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">IoT Uses in Transportation</span>
                            </li>
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">IoT Uses in Retail</span>
                            </li>
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">IoT Applications in Industry </span>
                            </li>
                        </ol>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2" id="history">History of IoT</h5>
                        <p>The idea of things talking to each other isn't exactly new. In the 1800s, one could consider telegraph systems to be an archaic means of machine-to-machine communication.
                        </p>
                        <p>However, the development of radio frequency identification (RFID) in the 1970s provided the Internet of Things (IoT) with its true impetus. These are tiny tags that can be attached to objects and scanned to track their location and gather data. 

                        </p>
                        <p>The 90s saw the rise of the internet, which became the superhighway for all this data to travel on. This opened the door for remote monitoring and control. 
                        </p>
                        <p>The 21st century is the era where IoT has truly exploded. The miniaturisation of electronics and the decreasing cost of sensors have made it possible to embed internet connectivity in almost anything.
                        </p>
                        <p>From smartwatches that track your fitness to refrigerators that order groceries when you're running low, the possibilities never seem to end. As we move forward, expect the lines between the physical world and the digital world to blur even further, creating a more interconnected and  convenient future. 
                        </p>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2" id="future">The Future of IoT</h5>
                        <p>Driven by breakthroughs in different industries, the Internet of Things (IoT) has a bright future ahead of it. The incorporation of AI (Artificial Intelligence) is one major factor in this realm. </p>
                        <p>Artificial Intelligence has the capability to evaluate enormous volumes of data from the Internet of Things devices, improving automation, predictive  maintenance, and overall industrial efficiency.</p>
                        <p>Added to this in the coming times, the 5G network is going to gain wide popularity.  And the end result being it’s going to  offer better speed and bandwidth required to analyse data in real time and manage the constantly expanding number of connected devices. </p>
                        <p>Thus, it’s going to open up a whole new range of  applications that depend on real-time  communication.</p>
                        <p>In addition, edge computing—a technique for locally processing data on devices or at network endpoints—will be extremely important to the Internet of Things in the future.Without a doubt,  edge computing will lessen the need for centralised cloud computing.</p>

                        <h5 id="leading" class="text-xl font-semibold text-blue-950 pt-2">The Leading IoT Trends of 2024
                        </h5>
                        <p>The top IoT trends trends of 2024 are as mentioned below:</p>
                        <ul class="pl-12 list-disc">
                            <li>Metaverse</li>
                            <li>Blockchain</li>
                            <li>5G Technology</li>
                            <li>IoT gadgets with voice commands</li>
                            <li>IoT security</li>
                        </ul>
                        <h5 class="text-xl font-semibold text-blue-950 pt-2" id="conclusion">In conclusion:</h5>
                        <p>As discussed above, we can see that the Internet of Things is already on its way to becoming
                            a thing of reality. Interconnected devices will proliferate as their prices come down in the
                            market and technology advances. By understanding these obstacles and trying to find these
                            answers, we may envision a future where the Internet of Things enables us to build a more
                            sustainable and smarter world.
                        </p>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2">FAQs:</h5>
                        <div class="w-full text-md md:text-lg space-y-4">
                            <div class="bg-white rounded-lg shadow-md">
                                <button class="w-full text-left py-1 focus:outline-none"
                                    onclick="toggleAccordion('faq1')">
                                    <div class="flex justify-between items-center">
                                        <span class="font-semibold text-lg">1. What is the future of IoT in smart cities?</span>
                                        <svg id="faq1-icon" class="w-6 h-6 transition-transform transform" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div id="faq1" class="px-4 pb-4 hidden">
                                    <p>We may anticipate much more ingenuity and inclusion in smart cities as IoT technologies evolve. More energy-efficient transit systems, improved security measures, and ongoing advancements in waste management and public services are all promising developments for the future.</p>
                                </div>
                            </div>
                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq2')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">2. What is the next big thing in IoT?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq2" class="px-4 pb-4 hidden">
                                        <p>The next big thing in IoT will be services that are exactly customised to the demands of customers and apps that are governed by 5G networks. With its robust connectivity, 5G technology will undoubtedly be the most popular IoT gadget in 2024.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq3')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">3. How will IoT affect our everyday lives in the future?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq3" class="px-4 pb-4 hidden">
                                        <p> The influence of IoT is seen in the creation of smart cities, the transformation of healthcare, energy management, precision farming, and enhanced manufacturing procedures.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg ">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq4')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">4. What is the ultimate goal of IoT?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq4" class="px-4 pb-4 hidden">
                                        <p>The idea underpinning the Internet of things is to have self-reporting devices that can identify critical information more promptly and efficiently than a system that relies on human interaction..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <ol class="list-decimal list-inside">
                        <li>
                            <span class="font-semibold text-md">In what way does sustainable technology contribute to
                                the good of the environment?</span>
                            <p class="text-md mt-1 mb-2">Ans: Sustainable technology uses resources more sensibly,
                                contributing to a healthier planet. It encourages the use of clean energy sources and
                                improved waste management techniques to cut pollution, supports renewable energy sources
                                like solar power, and even aids in the preservation of ecosystems through techniques
                                like precision agriculture. Sustainable technology helps to create a more sustainable
                                future by reducing our impact on the environment.</p>
                        </li>

                        <li>
                            <span class="font-semibold text-md">How can we achieve sustainable development along with
                                technology?</span>
                            <p class="text-md mt-1 mb-2">Ans: The key to achieving sustainable development with
                                technology is to focus on eco-friendly solutions. We need advancements in renewable
                                energy, resource efficiency, and pollution reduction. By strategically using technology,
                                we can meet our needs without compromising the ability of future generations to meet
                                theirs.</p>
                        </li>

                        <li>
                            <span class="font-semibold text-md">Is there a relationship between sustainability and
                                technology?</span>
                            <p class="text-md mt-1 mb-2">Ans: Of course. Technology has two sides to its story. Although
                                it can deplete resources and cause pollution, it also provides effective remedies. We
                                can employ sustainable technologies to reduce our energy use, rely more on renewable
                                energy sources like solar power, and even better manage agricultural resources. It is
                                essential for creating a future that is more sustainable.</p>
                        </li>

                        <li>
                            <span class="font-semibold text-md">In terms of sustainability, is technology good or
                                bad?</span>
                            <p class="text-md mt-1 mb-2">Ans: Technology has two benefits and drawbacks for
                                sustainability. In a good way resource efficiency and renewable energy are among the
                                options it provides. Yet, producing technology and e-waste might have unfavourable
                                effects. In the end, how we create and apply technology will determine how little of an
                                impact it has on the environment. </p>
                        </li>

                        <li>
                            <span class="font-semibold text-md">Does technology affect global warming in any way?</span>
                            <p class="text-md mt-1 mb-2">Ans: Without a doubt, technology contributes to global warming
                                in two ways. For instance, greenhouse gas emissions result from our reliance on fossil
                                fuels to power infrastructure and electronics. However, technology is also a tool we
                                have against global warming. To anticipate and address environmental concerns, we are
                                creating sustainable materials, renewable energy sources, and even artificial
                                intelligence.</p>
                        </li>

                    </ol> -->
                </div>
            </div>
        </div>
        <aside class="w-full md:w-1/3 md:sticky top-40 hidden md:block">
            <div class="bg-white  md:sticky  rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">Tags</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Mobile App</span>
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Business</span>
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Technology</span>
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Marketing</span>
                    <span class="bg-blue-950 text-white px-3 py-1 rounded-full text-sm">Development</span>
                </div>
            </div>

            <!-- Social Share Section -->
            <!-- <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">Share this post</h2>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-400 hover:text-blue-400 w-20 h-20"><i class="fab fa-facebook"></i></a>

                </div>
            </div> -->

            <!-- Related Blogs Section -->
            <div class="bg-white  md:sticky  rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">Related Blogs</h2>
                <div class="space-y-4">
                    <div class="flex">
                        <div class="w-1/4 pr-4"><img src="assets/images/blogs/b4.png" alt="blog"
                                class="rounded-lg w-full object-cover "></div>
                        <div class="w-2/4"><a href="the-5-cornerstones-of-a-strong-supply-chain.php"
                                class="block text-xl text-blue-600 hover:text-blue-800 ">The 5
                                Cornerstones of a Strong Supply Chain</a>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-1/4 pr-4"><img src="assets/images/blogs/b3.jpg" alt="blog"
                                class="rounded-lg w-full object-cover "></div>
                        <div class="w-2/4"><a href="5-sustainable-technologies-to-look-out-for-in-2024.php" class="block text-xl text-blue-600 hover:text-blue-800 ">5
                                Sustainable
                                Technologies To Look Out For In 2024</a>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-1/4 pr-4"><img src="assets/images/blogs/b6.jpg" alt="blog"
                                class="rounded-lg w-full object-cover"></div>
                        <div class="w-2/4"><a href="the-rise-of-ai-and-machine-learning-in-it.php" class="block text-xl text-blue-600 hover:text-blue-800 ">The Rise
                                of AI and Machine Learning in IT</a>
                        </div>
                    </div>
                    <!-- <div>
                        <a href="#" class="block text-xl text-blue-600 hover:text-blue-800 font-semibold">5 Sustainable
                            Technologies To Look Out For In 2024</a>
                        <p class="text-gray-600 text-md">With the concept of sustainability becoming the talk of the
                            town and modern citizens placing paramount importance on integrating green technology
                            practices.</p>
                    </div>
                    <div>
                        <a href="#" class="block text-xl text-blue-600 hover:text-blue-800 font-semibold">The Future of
                            Blockchain Technology and Its Impact on Business</a>
                        <p class="text-gray-600 text-md">Blockchain technology is set to revolutionize various
                            industries by providing secure and transparent solutions for data management and
                            transactions.</p>
                    </div> -->
                </div>
            </div>
        </aside>
    </div>
</div>

<?php include('master/footer.php') ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('div[id]');
    const sidebarLinks = document.querySelectorAll('#sidebar a');

    let offset;

    if ($(window).width() >= 768) {
        offset = 120;
    } else {
        offset = 50;
    }

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const elementPosition = section.offsetTop;
            const offsetPosition = elementPosition - offset;
            if (window.scrollY >= offsetPosition) {
                current = section.getAttribute('id');
            }
        });

        sidebarLinks.forEach(link => {
            link.classList.remove('font-semibold');
            if (link.getAttribute('data-section') === current) {
                link.classList.add('font-semibold');
            }
        });
    });

    sidebarLinks.forEach(link => {
        link.addEventListener('click', () => {
            const sectionId = link.getAttribute('data-section');
            const section = document.getElementById(sectionId);
            const sectionTop = section.offsetTop - 70; // set offset to 100px from top
            $('html, body').animate({
                scrollTop: sectionTop
            }, 1000);
        });
    });
});

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
});
</script>