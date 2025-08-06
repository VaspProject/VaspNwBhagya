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
            <span>Ednect</span>
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
        <h5 class="text-lg text-gray-800 font-bold">Education  Management Software</h5>
        <h1 class="text-blue-950 text-3xl md:text-5xl font-semibold py-2 mb-2"><span class="text-lime-500">Ednect</span></h1>
         <!-- <img src="assets/images/product/ednect.png" alt="ednect" class="w-[100px] h-auto"> -->
        <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-8">Ednect is a complete school administration program that makes life easier for teachers and administrators. Make use of its integrated HR and staff management systems to oversee your teachers and employees. Additionally, EDNECT simplifies exam results, fees, attendance, and student data. Powerful reporting tools provide valuable insights, while timetabling ensures everyone's on the same page.</p>
        <div class="my-6">
            <a href="#" target="_blank" class="border border-blue-700 px-8 py-3 inline-block text-blue-600 font-semibold text-md transition-colors duration-300 hover:bg-blue-600 hover:text-white hover:border-blue-600">Download Brochure</a>
        </div>
    </div>
    <div class=" flex flex-col md:flex-row ">

        <div class="mx-4 py-12">
            <p class="text-md md:text-xl leading-relaxed md:leading-normal mb-8">This CMS offers a comprehensive suite of features to manage all aspects of your school:</p>

            <div class="max-w-8xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">

                    <h5 class="border-b pb-1 text-white text-3xl">Staff Management:</h5>
                    <p class="text-white mt-2">Staff management is a key component of EDNECT, which aids in maintaining organisation in schools and institutions. Because you can operate all of the staff members' data at your disposal using this strong tool.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Human Resource Management:</h5>
                    <p class="text-white mt-2">Ednect's comprehensive database of employees, which includes information on compensation, performance reviews, contact details, employee promotions, and attendance, facilitates the management of human resources and capital. </p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Student Management:</h5>
                    <p class="text-white mt-2">By enabling your access to support throughout the entire process, including admission counselling, Ednect simplifies student management significantly. You will be able to swiftly deliver SMS and notifications and interact with parents from different regions in a variety of languages.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Fee Management:</h5>
                    <p class="text-white mt-2">The Ednect fee management module comes with a fee dashboard, which includes data on dues and collections, days of collection, estimated payment, and additional information. Parents can save a lot of time and work by using this integrated fee payment mechanism.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Report Management:</h5>
                    <p class="text-white mt-2">Ednect report management facilitates the provision of valuable information to managers inside an organisation, which is advantageous for their decision-making process. It provides the management with up-to-date information in a highly structured manner.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Attendance Management:</h5>
                    <p class="text-white mt-2">Ednect provides an integrated and all-inclusive solution for managing attendance. This module maintains track of students' absences and attendance in an easy-to-use and effective manner.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Time-table Management :</h5>
                    <p class="text-white mt-2">All the hassle of coming up with and managing your school's schedule goes away with Ednect's Timetable Management System. With its user-friendly layout, this useful tool assists in creating a balanced schedule that takes into account resource allocation, teacher availability, and classroom prerequisites.</p>
                </div>
                <div class="bg-gradient-to-tl from-cyan-400 to-blue-500 to-blue-700 p-6"
                    data-aos="fade-right" data-aos-duration="500">
                    <h5 class="border-b pb-1 text-white text-3xl">Exam result Management:</h5>
                    <p class="text-white mt-2">For every college and institution, exam season is the busiest period. The process of managing the exam and its aftermath is made easier with Ednect exam result management. Teachers will experience less stress while preparing exam results employing this programme.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('master/footer.php') ?>