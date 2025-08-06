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
            <span>5 Sustainable Technologies To
                Look Out For In 2024</span>
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
                <img src="assets/images/blogs/b3.jpg" alt="blog" class="w-full h-48 md:h-96 object-cover rounded-lg brightness-50">
                <div class="absolute inset-0  flex items-end justify-center pb-4 md:pb-24 ">
                    <h1 class="text-white text-2xl md:text-4xl font-bold text-center px-4">5 Sustainable Technologies To
                        Look Out For In 2024</h1>
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
                                <a href="#sustainable-technology"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="sustainable-technology">
                                    What is Sustainable Technology?
                                </a>
                            </li>
                            <li>
                                <a href="#leveraging-technology"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="leveraging-technology">
                                    Leveraging Technology to Promote Sustainable Development
                                </a>
                            </li>
                            <li>
                                <a href="#trending"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="trending">
                                    Trending Sustainable Technologies of 2024
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
                        <p class="text-md md:text-lg">With the concept of sustainability becoming the
                            talk of the town and modern
                            citizens placing
                            paramount importance on integrating green technology practices, it has become vital. In the
                            realm of business it applies innovation and the commitment to bring about transformation.
                            And
                            this piece of content delves into 5 best sustainable technologies that’s going to gain
                            immense
                            attention in 2024.</p>
                        <p class="text-md md:text-lg">But before tapping into the trending green technologies, it’s
                            imperative to know what sustainable
                            technology is.</p>

                        <h5 id="sustainable-technology" class="text-xl font-semibold text-blue-950 pt-2">What is
                            sustainable
                            technology?</h5>
                        <p>Sustainable technology can be defined as the development and application of technologies that
                            meet our present needs for resources, products, and services without jeopardising the
                            ability of
                            future generations to meet our own needs.</p>
                        <p>It's a three-pronged approach that considers:</p>
                        <ol class="list-decimal list-inside pl-1 md:pl-4">
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-md">Environmental Impact: </span>Minimising negative
                                effects
                                on the environment. This entails cutting back on pollution, preserving resources, and
                                lowering greenhouse gas emissions. Consider renewable energy sources, such as wind and
                                solar
                                energy.
                            </li>

                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-md">Social Responsibility: </span>Considering the impact
                                on
                                people and society, it involves creating jobs in sustainable industries, promoting fair
                                labour practices, and ensuring technology accessible to all.
                            </li>


                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-md">Economic Viability: </span>Being financially sound
                                and
                                creating economic benefits requires green innovations to be cost-effective to develop,
                                implement, and for use in the long run.
                            </li>

                        </ol>

                        <h5 id="leveraging-technology" class="text-xl font-semibold text-blue-950 pt-2">
                            Leveraging technology to promote sustainable development</h5>
                        <p>By utilising creative solutions from a range of industries, technology may be used to address
                            social, economic, and environmental issues and advance sustainable development. The use of
                            renewable energy technologies, such as hydroelectric, solar, and wind power, is essential
                            for
                            lowering reliance on fossil fuels and slowing down global warming.</p>
                        <p>Smart city projects combine digital technologies with cutting-edge infrastructure to maximise
                            energy use, effectively manage resources, and enhance urban mobility. Through accurate
                            irrigation and fertiliser delivery, precision farming techniques in agriculture maximise
                            crop
                            output while minimising environmental impact, made possible by sensors and data analytics.
                        </p>
                        <p>Innovations in waste management technologies also make recycling and waste-to-energy
                            conversion
                            easier, supporting the ideas of the circular economy.</p>
                        <p>Technologies like satellite images and AI-driven analytics are useful for monitoring and
                            conservation initiatives, helping to preserve biodiversity and natural ecosystems. In the
                            end,
                            technology is a major force behind sustainable development because it provides scalable,
                            economical, and efficient solutions that strike a balance between the requirements of
                            society
                            and environmental stewardship for a future that is more resilient.</p>


                        <h5 id="trending" class="text-xl font-semibold text-blue-950 pt-2">
                            Below are the 5
                            trending types of sustainable technologies that
                            are set to gain importance in 2024.</h5>
                        <ol class="list-decimal list-inside pl-1 md:pl-4">
                            <li>
                                <span class="font-semibold text-lg">Energy storage solutions</span>
                                <p class="text-md pt-1">Solar and wind power are on the rise, but their intermittent
                                    nature
                                    demands efficient energy storage. Look out for advancements in flexible batteries
                                    that
                                    can adapt to various applications, from electric vehicles to household devices.
                                    These
                                    batteries will be key to integrating renewables into the energy grid seamlessly.</p>
                            </li>

                            <li>
                                <span class="font-semibold text-lg">Carbon capture storage and utilisations</span>
                                <p class="text-md pt-1">In the battle against climate change, carbon capture,
                                    utilisation,
                                    and storage (CCUS) is one possible strategy. CCUS captures carbon dioxide emissions
                                    from
                                    power plants and factories, preventing them from entering the atmosphere. This
                                    captured
                                    carbon can then be either safely stored underground or even reused in various
                                    industrial
                                    processes, for example, to create building materials or synthetic fuels. As we
                                    strive
                                    for a sustainable future, CCUS offers a crucial tool for reducing emissions and
                                    transitioning towards cleaner energy sources. </p>
                            </li>


                            <li>
                                <span class="font-semibold text-lg">Treatment of wastewater</span>
                                <p class="text-md pt-1">Wastewater treatment is a hidden hero in sustainability. By
                                    using a
                                    combination of physical, chemical, and biological processes, it cleans dirty water
                                    from
                                    our homes and industries, preventing pollution of rivers and oceans. Treated
                                    wastewater
                                    can even be reused for irrigation or industrial purposes, reducing freshwater
                                    withdrawal. As water becomes a more scarce resource, efficient wastewater treatment
                                    will
                                    be crucial for a sustainable future.</p>
                            </li>


                            <li>
                                <span class="font-semibold text-lg">Supercharged solar cells</span>
                                <p class="text-md pt-1">The creation of "supercharged" solar cells is one of the newest
                                    developments in sustainable technology. These cells aim to boost the efficiency of
                                    capturing sunlight and converting it into usable electricity. Researchers are
                                    exploring
                                    several avenues, like using materials that can utilise a wider range of sunlight
                                    wavelengths or incorporating systems that concentrate sunlight onto smaller,
                                    high-performance cells. These advancements have the potential to significantly
                                    increase
                                    solar power output, making solar energy an even more attractive and viable renewable
                                    energy source.</p>
                            </li>

                            <li >
                                <span class="font-semibold text-lg">Boundless clean energy</span>
                                <p class="text-md pt-1">Boundless clean energy isn't a specific technology, but rather a
                                    concept that encompasses achieving near-unlimited energy production through
                                    sustainable
                                    sources. This trend focuses on dramatically increasing renewable energy like solar,
                                    wind, and geothermal power, while also tackling challenges of storing excess energy
                                    and
                                    efficiently transmitting it across vast distances. By making clean energy truly
                                    boundless, we can combat climate change and create a more secure and sustainable
                                    future.
                                </p>
                            </li>

                        </ol>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2" id="conclusion">In conclusion:</h5>
                        <p>It's evident that 2024 is going to be a huge year for sustainable technologies. These
                            developments provide a window into a more environmentally friendly future by improving solar
                            energy harvesting, sequestering carbon, and creating clean fusion energy. We can guarantee a
                            healthy Earth for future generations by adopting and putting these technologies into
                            practice.
                            Let's closely monitor these advancements and provide our support to the projects that are
                            opening the door to a more sustainable global community.</p>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2">FAQs:</h5>
                        <div class="w-full text-md md:text-lg space-y-4">
                            <div class="bg-white rounded-lg shadow-md">
                                <button class="w-full text-left py-1 focus:outline-none"
                                    onclick="toggleAccordion('faq1')">
                                    <div class="flex justify-between items-center">
                                        <span class="font-semibold text-lg">1. In what way does sustainable technology
                                            contribute to
                                            the good of the environment?</span>
                                        <svg id="faq1-icon" class="w-6 h-6 transition-transform transform" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div id="faq1" class="px-4 pb-4 hidden">
                                    <p>Sustainable technology uses resources more sensibly,
                                        contributing to a healthier planet. It encourages the use of clean energy
                                        sources
                                        and
                                        improved waste management techniques to cut pollution, supports renewable energy
                                        sources
                                        like solar power, and even aids in the preservation of ecosystems through
                                        techniques
                                        like precision agriculture. Sustainable technology helps to create a more
                                        sustainable
                                        future by reducing our impact on the environment.</p>
                                </div>
                            </div>
                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq2')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">2. How can we achieve sustainable
                                                development
                                                along with
                                                technology?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq2" class="px-4 pb-4 hidden">
                                        <p>The key to achieving sustainable development with
                                            technology is to focus on eco-friendly solutions. We need advancements in
                                            renewable
                                            energy, resource efficiency, and pollution reduction. By strategically using
                                            technology,
                                            we can meet our needs without compromising the ability of future generations
                                            to meet
                                            theirs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq3')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">3. Is there a relationship between
                                                sustainability and
                                                technology?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq3" class="px-4 pb-4 hidden">
                                        <p>Of course. Technology has two sides to its story. Although
                                            it can deplete resources and cause pollution, it also provides effective
                                            remedies.
                                            We
                                            can employ sustainable technologies to reduce our energy use, rely more on
                                            renewable
                                            energy sources like solar power, and even better manage agricultural
                                            resources. It
                                            is
                                            essential for creating a future that is more sustainable.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg ">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq4')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">4. In terms of sustainability, is
                                                technology
                                                good or
                                                bad?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq4" class="px-4 pb-4 hidden">
                                        <p>Technology has two benefits and drawbacks for
                                            sustainability. In a good way resource efficiency and renewable energy are
                                            among the
                                            options it provides. Yet, producing technology and e-waste might have
                                            unfavourable
                                            effects. In the end, how we create and apply technology will determine how
                                            little of
                                            an
                                            impact it has on the environment.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq5')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">5. Does technology affect global warming
                                                in any
                                                way?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq5" class="px-4 pb-4 hidden">
                                        <p>Without a doubt, technology contributes to global warming
                                            in two ways. For instance, greenhouse gas emissions result from our reliance
                                            on
                                            fossil
                                            fuels to power infrastructure and electronics. However, technology is also a
                                            tool we
                                            have against global warming. To anticipate and address environmental
                                            concerns, we
                                            are
                                            creating sustainable materials, renewable energy sources, and even
                                            artificial
                                            intelligence.</p>
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
                        <div class="w-2/4"><a href="the-5-cornerstones-of-a-strong-supply-chain.php" class="block text-xl text-blue-600 hover:text-blue-800 ">The 5 Cornerstones of a Strong Supply Chain</a>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-1/4 pr-4"><img src="assets/images/blogs/b6.jpg" alt="blog"
                                class="rounded-lg w-full object-cover"></div>
                        <div class="w-2/4"><a href="the-rise-of-ai-and-machine-learning-in-it.php" class="block text-xl text-blue-600 hover:text-blue-800 ">The Rise of AI and Machine Learning in IT</a>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-1/4 pr-4"><img src="assets/images/blogs/b5.png" alt="blog"
                                class="rounded-lg w-full object-cover"></div>
                        <div class="w-2/4"><a href="the-future-of-iot.php" class="block text-xl text-blue-600 hover:text-blue-800 ">The Future of the IoT (Internet of Things)</a>
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