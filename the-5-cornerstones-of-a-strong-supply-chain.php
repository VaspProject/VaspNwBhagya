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
            <span>The 5 Cornerstones of a Strong Supply Chain</span>
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
                <img src="assets/images/blogs/b4.png" alt="blog" class="w-full h-48 md:h-96 object-cover rounded-lg brightness-50">
                <div class="absolute inset-0  flex items-end justify-center pb-4 md:pb-24 ">
                    <h1 class="text-white text-2xl md:text-4xl font-bold text-center px-4">The 5 Cornerstones of a
                        Strong Supply Chain</h1>
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
                                <a href="#supply-chain"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="supply-chain">
                                    What is supply chain?
                                </a>
                            </li>
                            <li>
                                <a href="#pillars"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="pillars">
                                    Pillars of a strong supply chain
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
                        <p class="text-md md:text-lg">In today's competitive business landscape, a strong supply chain
                            is no longer a luxury, it's a necessity. An efficient flow of goods from raw materials to
                            customer doorstep is critical for business success. </p>

                        <h5 id="supply-chain" class="text-xl font-semibold text-blue-950 pt-2">What is Supply
                            Chain?</h5>
                        <p>A supply chain is the network of people, companies, resources, and activities involved in
                            getting a product or service from its very beginning (raw materials) to the final customer.
                            Consider it as a lengthy chain with numerous links, each of which stands for a different
                            stage of the procedure. Businesses cannot operate well or deliver goods to customers without
                            an effective supply chain.
                        </p>
                        <p>But what exactly makes a supply chain strong? </p>
                        <p>This blog post dives into the 5 cornerstones that underpin a reliable and adaptable supply
                            chain process, giving you the tools to ensure your business can weather any storm and
                            deliver exceptional customer service.


                        <h5 id="pillars" class="text-xl font-semibold text-blue-950 pt-2">
                            The 5 pillars of a strong supply chain are:
                        </h5>
                        <ol class="list-decimal list-inside pl-1 md:pl-4">
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Demand Forecasting</span>
                                <p class="text-md pt-1">The foundation of any strong supply chain is accurate demand
                                    forecasting. This involves predicting future customer needs for your products.
                                    Effective forecasting helps you avoid stockouts, which can lead to lost sales and
                                    frustrated customers. It also helps you steer clear of excess inventory, which ties
                                    up valuable capital and can become obsolete.

                                </p>
                                <p class=" text-md pt-1"> <span class="font-semibold"> Techniques for Demand Forecasting:</span> There are various
                                    forecasting techniques, from simple moving averages to more sophisticated
                                    statistical methods. The best approach depends on the nature of your business,
                                    historical sales data, and industry trends.
                                </p>
                                <p class=" text-md pt-1"> <span class="font-semibold">Collaboration is Key:</span> Incorporate insights from your sales
                                    team, marketing department, and even customer feedback into your forecasting
                                    process. This collaborative approach helps paint a more complete picture of future
                                    demand.

                                </p>
                            </li>

                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Strategic Vendor Management</span>
                                <p class="text-md pt-1">Your suppliers are an extension of your supply chain. Building
                                    strong relationships with reliable vendors ensures a steady flow of high-quality
                                    materials and components. Here's how to cultivate strategic vendor partnerships:
                                </p>
                                <p class=" text-md pt-1"> <span class="font-semibold">Supplier Selection:</span>  Carefully evaluate potential vendors based
                                    on factors like quality, price, production capacity, and geographic location. Look
                                    for vendors who share your commitment to ethical sourcing and sustainability
                                    practices.

                                </p>
                                <p class=" text-md pt-1"><span class="font-semibold"> Communication and Collaboration:</span>  Maintain open communication
                                    channels with your vendors. Regularly discuss production schedules, lead times, and
                                    any potential disruptions.
                                    Contract Negotiation: Negotiate contracts that are fair and beneficial to both
                                    parties. This includes clear terms around pricing, delivery timelines, quality
                                    control procedures, and dispute resolution.

                            </li>


                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Efficient Order Management</span>
                                <p class="text-md pt-1">Once you have a grasp on demand and a network of reliable
                                    suppliers, you need a system to manage orders efficiently. An optimized order
                                    management system streamlines the process from receiving customer orders to
                                    fulfilling them. Here's what it entails:

                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Streamlined Order Processing:</span> Invest in technology that
                                    automates order entry, reduces errors, and expedites processing times.


                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Inventory Management:</span> Maintain optimal inventory levels to
                                    fulfill orders promptly without incurring unnecessary storage costs. Implement
                                    inventory control systems like just-in-time (JIT) inventory to minimize waste.


                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Order Tracking and Visibility: </span> Provide real-time order tracking
                                    information to both your customers and internal teams. This transparency fosters
                                    trust and allows for proactive issue resolution.

                                </p>
                            </li>


                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Optimized Logistics and Warehousing</span>
                                <p class="text-md pt-1">Moving products from your suppliers to your customers requires a
                                    well-coordinated logistics network. This includes warehousing, transportation, and
                                    distribution. Here's how to optimize this aspect of your supply chain:
                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Warehouse Management:</span>  Utilize efficient warehouse layout and
                                    inventory management practices to ensure smooth product movement and picking
                                    accuracy. Consider implementing warehouse automation solutions for increased
                                    efficiency.

                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Transportation Management: </span>  Choose the most cost-effective and
                                    reliable transportation methods based on factors like lead times, shipment size, and
                                    product type. Explore options like intermodal transportation, which combines
                                    different modes of transport for optimal efficiency.
                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Distribution Network Design: </span> Strategically locate warehouses and
                                    distribution centers to minimize transportation costs and ensure timely delivery to
                                    your customers.
                                </p>
                            </li>

                            <li >
                                <span class="font-semibold text-lg">Technology and Data Analytics</span>
                                <p class="text-md pt-1">In today's digital age, leveraging technology and data analytics
                                    is crucial for a robust supply chain. Here's how:
                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Supply Chain Management (SCM) Software:</span> 
                                    Invest in SCM software that integrates various aspects of your supply chain, from
                                    demand forecasting to inventory management. This provides a holistic view and
                                    facilitates data-driven decision making.

                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Data Analytics: </span> 
                                    Utilize data analytics tools to gain insights from your supply chain data. Identify
                                    trends, predict potential disruptions, and optimize processes for greater efficiency
                                    and cost savings.

                                </p>
                                <p class="text-md pt-1"><span class="font-semibold">Automation:</span> 
                                    Implement automation solutions wherever possible to streamline manual tasks, reduce
                                    errors, and improve overall efficiency.

                                </p>
                            </li>

                        </ol>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2" id="conclusion">In conclusion:</h5>
                        <p>By focusing on these five cornerstones, you can build a strong and resilient supply chain
                            that can adapt to changing market conditions and customer demands. Remember, a strong supply
                            chain is not a static entity; it requires continuous monitoring, improvement, and investment
                            in technology and talent. By consistently refining your practices, you can ensure a smooth
                            flow of goods, satisfied customers, and a competitive edge in the marketplace.</p>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2">FAQs:</h5>
                        <div class="w-full text-md md:text-lg space-y-4">
                            <div class="bg-white rounded-lg shadow-md">
                                <button class="w-full text-left py-1 focus:outline-none"
                                    onclick="toggleAccordion('faq1')">
                                    <div class="flex justify-between items-center">
                                        <span class="font-semibold text-lg">1. What is supply chain management?</span>
                                        <svg id="faq1-icon" class="w-6 h-6 transition-transform transform" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div id="faq1" class="px-4 pb-4 hidden">
                                    <p>The process of managing the overall distribution of products and services, from
                                        raw materials to the ultimate consumer, is known as supply chain management.
                                        It's similar to overseeing a difficult relay race in which each competitor must
                                        skillfully pass the baton to the next.</p>
                                </div>
                            </div>
                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq2')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">2. What are the key stages of a
                                                supply chain?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq2" class="px-4 pb-4 hidden">
                                        <p>Purchasing raw ingredients, producing, storing, distributing, and ultimately
                                            delivering the product to the client are the common procedures.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq3')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">3. What are some common challenges in supply chain management?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq3" class="px-4 pb-4 hidden">
                                        <p>Major problems might arise from disruptions like pandemics, natural disasters, or unstable political environments. In addition, there are constant hurdles in controlling expenses, preserving quality, and meeting evolving client demands.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg ">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq4')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">4. What role does technology play in supply chain management?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq4" class="px-4 pb-4 hidden">
                                        <p>Tools like inventory management systems, data analytics, and automation software help streamline processes, improve visibility, and make better decisions.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq5')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">5. What advantages does a robust supply chain offer?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq5" class="px-4 pb-4 hidden">
                                        <p>Better product quality, higher customer happiness, enhanced profitability, and increased flexibility in adapting to market changes can all be attributed to a robust supply chain..</p>
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

                    <div class="flex">
                        <div class="w-1/4 pr-4"><img src="assets/images/blogs/b5.png" alt="blog"
                                class="rounded-lg w-full object-cover"></div>
                        <div class="w-2/4"><a href="the-future-of-iot.php" class="block text-xl text-blue-600 hover:text-blue-800 ">The
                                Future of the IoT (Internet of Things)</a>
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