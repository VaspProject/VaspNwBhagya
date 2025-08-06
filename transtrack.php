<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Products</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd" d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span>TransTrack</span>
        </div>

        <div class="absolute inset-0 bg-cover bg-center bg-blue-950 opacity-60"
            style="background-image: url('assets/images/bg/office.jpg');"></div>

        <div class="relative max-w-7xl px-6 pb-12 text-left z-10 md:bottom-48 md:left-24">
            <h1 class="text-3xl md:text-6xl text-white leading-tight animate-blink mb-4 hero-h1">
                Your business success powered by our innovation
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


<div id="next-section" class="container mx-auto my-16 md:my-24 items-center">
    <div class="mx-4">
        <h5 class="text-lg text-gray-800 font-bold">Transport Management Software</h5>
        <h1 class="text-blue-950 text-3xl md:text-5xl font-semibold py-2 mb-2"><span class="text-yellow-500">TransTrack</span></h1>
         <!-- <img src="assets/images/product/ednect.png" alt="ednect" class="w-[100px] h-auto"> -->
        <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-2">Gain a competitive edge with Transtrack's intelligent transport management. Our software automates planning, optimises routes and loads, provides real-time tracking, and delivers powerful supply chain analytics for smarter decision-making.</p>
        <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-8">Revolutionising the way businesses oversee transportation management for goods and services while maintaining an unwavering focus on dependability, economy, and efficiency.</p>
        <div class="my-6">
            <a href="#" target="_blank" class="border border-blue-700 px-8 py-3 inline-block text-blue-600 font-semibold text-md transition-colors duration-300 hover:bg-blue-600 hover:text-white hover:border-blue-600">Download Brochure</a>
        </div>
    </div>
    <div class=" flex flex-col md:flex-row ">

        <div class="mx-4 py-12">
            <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-8">Transtrack offers the following features:</p>

            <div class="max-w-8xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">

                    <h5 class="border-b pb-1 text-white text-3xl">Real-time Vehicle Tracking:</h5>
                    <p class="text-white mt-2">With GPS technology, you can keep an eye on the whereabouts and upkeep of your transport vehicles in real time, which guarantees effective fleet management and ideal route planning.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Route Optimization:</h5>
                    <p class="text-white mt-2">Cut fuel expenses and accelerate deliveries by using sophisticated algorithms to optimise routes based on variables including traffic patterns, and delivery schedules.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Carrier Selection & Management:</h5>
                    <p class="text-white mt-2">Our extensive network of reliable carriers guarantees that your shipment is handled by qualified experts. Safe and dependable transport services are ensured by our stringent screening procedure.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Inventory Management:</h5>
                    <p class="text-white mt-2">You can manage inventory stored on vehicles, warehouses, or distribution centres. Also it helps track stock levels, manage orders, and optimise inventory distribution to streamline operations and reduce storage costs.</p>
                </div>
                
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Customer Portal:</h5>
                    <p class="text-white mt-2">Customers can track their shipments, receive notifications, and provide feedback with this powerful tool. Enhance customer satisfaction by offering transparency and real-time updates on delivery statuses.</p>
                </div>
                
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Consignment Handling:</h5>
                    <p class="text-white mt-2">We can minimise your expenditures on shipping, reduce storage consumption, and mitigate the adverse ecological effects of your transportation operations by leveraging our understanding of load consolidation.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('master/footer.php') ?>