<?php include('master/sub-header.php') ?>

<div id="hero" class="h-full">
    <div
        class="relative h-screen w-full bg-blue-950 flex flex-col items-center justify-center md:justify-end md:items-start overflow-hidden transition duration-300 ease-in-out">
        <div
            class="absolute top-[80px] left-6 md:left-[80px] z-10 flex items-center text-white text-sm md:text-md bg-slate-400 opaicty-50 hover:opacity-100 px-4 py-2 rounded-full">
            <span>Products</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mx-2">
                <path fill-rule="evenodd"
                    d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
            <span>Desalite Connect</span>
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
        <h5 class="text-lg text-gray-800 font-bold"> School Management ERP Software</h5>
        <h1 class="text-blue-950 text-3xl md:text-5xl font-semibold py-2 mb-2"><span class="text-sky-500">Desalite
            </span><span class="text-red-600">Connect</span></h1>
        <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-2">Desalite Connect is a user-friendly and
            cost-effective school management ERP system designed to empower your institution. We help schools transform
            by streamlining administrative tasks, fostering better communication, and boosting overall efficiency.</p>
        <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-8">With user-friendly interface dedicated
            support and secure data protection, you can be confident that your school is in good hands.</p>
        <div class="my-6">
            <a href="#" target="_blank"
                class="border border-blue-700 px-8 py-3 inline-block text-blue-600 font-semibold text-md transition-colors duration-300 hover:bg-blue-600 hover:text-white hover:border-blue-600">Download
                Brochure</a>
        </div>
    </div>
    <div class=" flex flex-col md:flex-row ">

        <div class="mx-4 py-12">
            <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-8">This CMS offers a comprehensive suite
                of features to manage all aspects of your school:</p>

            <div class="max-w-8xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6" data-aos="fade-right"
                    data-aos-duration="500">

                    <h5 class="border-b pb-1 text-white text-3xl">Staff & HR Management:</h5>
                    <p class="text-white mt-2">Simplify staff onboarding, manage payroll, track leave requests, and
                        ensure effective HR practices.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6" data-aos="fade-right"
                    data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Student Management:</h5>
                    <p class="text-white mt-2">Maintain a centralised database for student information, including
                        attendance, grades, performance records, and communication with parents.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6" data-aos="fade-right"
                    data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Fee Management:</h5>
                    <p class="text-white mt-2">Automate fee collection, generate invoices, track payments, and offer
                        parents convenient online payment options.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6" data-aos="fade-right"
                    data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Report Management:</h5>
                    <p class="text-white mt-2">Gain valuable insights with comprehensive reports on student performance,
                        attendance, fees, and other key metrics.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6" data-aos="fade-right"
                    data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Time Table Management:</h5>
                    <p class="text-white mt-2">Create and manage flexible class schedules, accommodating teacher
                        availability and student needs.
                    </p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6" data-aos="fade-right"
                    data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Exam Result Management:</h5>
                    <p class="text-white mt-2">Effortlessly conduct exams, record results, generate reports, and share
                        them securely with students and parents.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=" flex flex-col md:flex-row ">

        <div class="mx-4 py-12">
            <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-8">This CMS offers a comprehensive suite
                of features to manage all aspects of your school:</p>

            <div class="max-w-8xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-500 to-green-400 shadow-lg hover:scale-105 transition-transform duration-300   p-6"
                    data-aos="fade-right" data-aos-duration="500">

                    <h5 class="border-b pb-1 text-white text-3xl">Staff & HR Management:</h5>
                    <p class="text-white mt-2">Simplify staff onboarding, manage payroll, track leave requests, and
                        ensure effective HR practices.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 shadow-lg hover:scale-105 transition-transform duration-300  p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Student Management:</h5>
                    <p class="text-white mt-2">Maintain a centralised database for student information, including
                        attendance, grades, performance records, and communication with parents.</p>
                </div>
                <div class="bg-gradient-to-br from-blue-500 to-green-400 shadow-lg hover:scale-105 transition-transform duration-300  p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Fee Management:</h5>
                    <p class="text-white mt-2">Automate fee collection, generate invoices, track payments, and offer
                        parents convenient online payment options.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 shadow-lg hover:scale-105 transition-transform duration-300  p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Report Management:</h5>
                    <p class="text-white mt-2">Gain valuable insights with comprehensive reports on student performance,
                        attendance, fees, and other key metrics.</p>
                </div>
                <div class="bg-gradient-to-br from-blue-500 to-green-400 shadow-lg hover:scale-105 transition-transform duration-300  p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Time Table Management:</h5>
                    <p class="text-white mt-2">Create and manage flexible class schedules, accommodating teacher
                        availability and student needs.
                    </p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 shadow-lg hover:scale-105 transition-transform duration-300 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Exam Result Management:</h5>
                    <p class="text-white mt-2">Effortlessly conduct exams, record results, generate reports, and share
                        them securely with students and parents.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row">

        <div class="mx-4 py-12">
            <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-8">
                This CMS offers a comprehensive suite of features to manage all aspects of your school:
            </p>

            <div class="max-w-8xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative h-48 shadow-lg hover:scale-105 transition-transform duration-300 p-6 bg-cover bg-center"
                    style="background-image: url('assets/images/services/1.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-50 "></div>
                    <div class="relative flex flex-col  justify-center h-full text-left text-white z-10">
                        <h5 class="border-b border-white pb-1 text-3xl font-semibold">Staff & HR Management:</h5>
                        <p class="mt-2">Simplify staff onboarding, manage payroll, track leave requests, and ensure
                            effective HR practices.</p>
                    </div>
                </div>


                <!-- Box 2 -->
                <div class="relative h-48 shadow-lg hover:scale-105 transition-transform duration-300 p-6 bg-cover bg-center"
                    style="background-image: url('assets/images/services/2.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-50 "></div>
                    <div class="relative flex flex-col  justify-center h-full text-left text-white z-10">
                        <h5 class="border-b border-white pb-1 text-3xl font-semibold">Student Management:</h5>
                        <p class="mt-2">Maintain a centralised database for student information, including
                            attendance, grades, performance records, and communication with parents.</p>
                    </div>
                </div>
                <div class="relative h-48 shadow-lg hover:scale-105 transition-transform duration-300  p-6 bg-cover bg-center"
                    style="background-image: url('assets/images/services/3.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-50 "></div>
                    <div class="relative flex flex-col  justify-center h-full text-left text-white z-10">
                        <h5 class="border-b border-white pb-1 text-3xl font-semibold">Fee Management:</h5>
                        <p class="mt-2">Automate fee collection, generate invoices, track payments, and offer
                            parents convenient online payment options.</p>
                    </div>
                </div>
                <div class="relative h-48 shadow-lg hover:scale-105 transition-transform duration-300  p-6 bg-cover bg-center"
                    style="background-image: url('assets/images/services/4.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-50 "></div>
                    <div class="relative flex flex-col  justify-center h-full text-left text-white z-10">
                        <h5 class="border-b border-white pb-1 text-3xl font-semibold">Report Management:</h5>
                        <p class="mt-2">Gain valuable insights with comprehensive reports on student performance,
                            attendance, fees, and other key metrics.</p>
                    </div>
                </div>
                <div class="relative h-48 shadow-lg hover:scale-105 transition-transform duration-300  p-6 bg-cover bg-center"
                    style="background-image: url('assets/images/services/5.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                    <div class="relative flex flex-col  justify-center h-full text-left text-white z-10">
                        <h5 class="border-b border-white pb-1 text-3xl font-semibold">Time Table Management:</h5>
                        <p class="mt-2">Create and manage flexible class schedules, accommodating teacher
                            availability and student needs.</p>
                    </div>
                </div>
                <div class="relative h-48 shadow-lg hover:scale-105 transition-transform duration-300  p-6 bg-cover bg-center"
                    style="background-image: url('assets/images/services/6.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-50 "></div>
                    <div class="relative flex flex-col  justify-center h-full text-left text-white z-10">
                        <h5 class="border-b border-white pb-1 text-3xl font-semibold">Exam Result Management:</h5>
                        <p class="mt-2">Effortlessly conduct exams, record results, generate reports, and share
                            them securely with students and parents.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="">

        <div class="mx-4 pt-12">
            <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-2">
                This CMS offers a comprehensive suite of features to manage all aspects of your school:
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-6">
            <div class="shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300 ">
                <div class="bg-red-500 h-12 flex items-center justify-center">
                    <h3 class="text-white text-xl font-semibold">Staff & HR Management</h3>
                </div>

                <div class="flex items-center justify-between p-6 bg-white">
                    <i class="fas fa-user-tie text-blue-500 text-5xl"></i>
                    <p class="text-gray-700 pl-8">
                        Simplify staff onboarding, manage payroll, track leave requests, and ensure
                        effective HR practices.
                </div>
            </div>
            <div class="shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300 ">
                <div class="bg-blue-500 h-12 flex items-center justify-center">
                    <h3 class="text-white text-xl font-semibold">Staff & HR Management</h3>
                </div>

                <div class="flex items-center justify-between p-6 bg-white">
                    <i class="fas fa-user-tie text-blue-500 text-5xl"></i>
                    <p class="text-gray-700 pl-8">
                        Simplify staff onboarding, manage payroll, track leave requests, and ensure
                        effective HR practices.
                </div>
            </div>
            <div class="shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300 ">
                <div class="bg-green-500 h-12 flex items-center justify-center">
                    <h3 class="text-white text-xl font-semibold">Staff & HR Management</h3>
                </div>

                <div class="flex items-center justify-between p-6 bg-white">
                    <i class="fas fa-user-tie text-blue-500 text-5xl"></i>
                    <p class="text-gray-700 pl-8">
                        Simplify staff onboarding, manage payroll, track leave requests, and ensure
                        effective HR practices.
                </div>
            </div>



        </div>

    </div>

</div>
</div>
<?php include('master/footer.php') ?>