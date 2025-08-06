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
            <span>The Rise of AI and Machine Learning in IT</span>
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
                <img src="assets/images/blogs/b6.jpg" alt="blog" class="w-full h-48 md:h-96 object-cover rounded-lg brightness-50">
                <div class="absolute inset-0  flex items-end justify-center pb-4 md:pb-24 ">
                    <h1 class="text-white text-2xl md:text-4xl font-bold text-center px-4">The Rise of AI and Machine
                        Learning in IT</h1>
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
                                    Defining AI and Machine Learning
                                </a>
                            </li>
                            <li>
                                <a href="#just-machine-learning"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="just-machine-learning">
                                    Is AI just Machine Learning?
                                </a>
                            </li>
                            <li>
                                <a href="#similarities"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="similarities">
                                    Similarities between AI and machine Learning
                                </a>
                            </li>
                            <li>
                                <a href="#advancement"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="advancement">
                                    The Advancement of AI
                                </a>
                            </li>
                            <li>
                                <a href="#understanding"
                                    class="block p-2 bg-white bg-opacity-20 rounded-lg text-lg text-white hover:text-blue-900 hover:bg-white hover:shadow-md transition duration-300"
                                    data-section="understanding">
                                    Understanding the Influence of Machine Learning on Business
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
                        <p class="text-md md:text-lg">In recent years, we have seen a sharp elevation and extensive
                            recognition of artificial intelligence (AI) and machine learning (ML) throughout a multitude
                            of industries. Organisational operations, decision-making processes, and customer
                            interactions could all be radically altered by such innovations. </p>
                        <p class="text-md md:text-lg">In this blog, we'll talk about the rise of AI and how machine
                            learning is changing the corporate scene. </p>

                        <h5 id="defining" class="text-xl font-semibold text-blue-950 pt-2">Defining AI and Machine
                            Learning</h5>
                        <p> <span class="font-semibold"> AI (Artificial Intelligence): </span> AI, or artificial
                            intelligence, is a branch of computer science that deals with building machines capable of
                            performing tasks that typically require human intelligence.

                        </p>
                        <p>It entails the following aspects such as:</p>
                        <ul class="pl-12 list-disc">
                            <li>Problem Solving</li>
                            <li>Decision Making</li>
                            <li>Learning</li>
                        </ul>
                        <p> <span class="font-semibold"> Machine Learning: </span> Machine learning, a branch of
                            artificial intelligence (AI), aims to give computers the ability to learn without explicit
                            programming.
                        </p>

                        <h5 id="just-machine-learning" class="text-xl font-semibold text-blue-950 pt-2">
                            Is AI just Machine Learning?
                        </h5>
                        <p class="text-md md:text-lg">No, machine learning (ML) is a major component of artificial
                            intelligence (AI), which is a more broad term. This is how they vary: </p>
                        <p> <span class="font-semibold"> Objective: </span> The ultimate goal of AI is to build
                            intelligent machines that have human-like thought and behaviour. This includes
                            decision-making, problem-solving, and learning tasks.
                        </p>
                        <p> On the other hand, machine learning is primarily concerned with making it possible for
                            machines to learn from data and become more proficient at a particular task.
                        </p>
                        <p> <span class="font-semibold"> Methods: </span> AI can use a variety of strategies, such as
                            expert systems, programming with logic, and machine learning algorithms, to accomplish its
                            objective. Machine Learning focuses predominantly on algorithms that examine data in order
                            to learn and improve.
                        </p>
                        <h5 id="similarities" class="text-xl font-semibold text-blue-950 pt-2">
                            Similarities between AI and Machine Learning
                        </h5>
                        <p> Listed below are the main points where AI and machine learning (ML) are identical:
                        </p>
                        <ol class="list-decimal list-inside pl-1 md:pl-4">
                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Goal of intelligent machines</span>
                                <p class="text-md pt-1">The ultimate objective of both AI and ML is the development of
                                    intelligent machines. Whereas ML concentrates on accomplishing this through the
                                    capacity to learn from data, AI takes a more comprehensive approach, striving for
                                    robots that can replicate human intelligence in a variety of ways.
                                </p>

                            </li>

                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Problem-solving and decision-making</span>
                                <p class="text-md pt-1">Both AI and ML systems are built to solve challenging issues and
                                    reach conclusions. To determine a solution or a course of action, they examine data
                                    and trends.
                                </p>
                            </li>


                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg"> Beyond basic automation</span>
                                <p class="text-md pt-1"> AI and ML are not just about programming. They are not limited
                                    to just following instructions; instead, they are able to adjust and enhance their
                                    performance in light of new knowledge.
                                </p>

                            </li>


                            <li class="my-2 md:my-4">
                                <span class="font-semibold text-lg">Field of computer science</span>
                                <p class="text-md pt-1">AI and machine learning are branches of computer science focused
                                    on intelligent systems. They share many of the same underlying principles and
                                    techniques in computing. </p>
                            </li>

                            <li>
                                <span class="font-semibold text-lg">Real-world applications</span>
                                <p class="text-md pt-1">Numerous sectors are being significantly impacted by AI and ML.
                                    You'll find applications in areas like healthcare, finance, manufacturing, and more.
                                </p>
                            </li>
                        </ol>
                        <p class="text-md pt-1">To put it simply, artificial intelligence (AI) is a larger area with
                            loftier goals, and machine learning is a potent technique that AI utilises to get there.
                        </p>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2" id="advancement">The evolution of AI</h5>
                        <p>The development of AI is a tornado of opportunity and advancement. Machine learning, the
                            primary engine of artificial intelligence, has advanced tremendously in recent years. These
                            days, algorithms are capable of sorting through enormous information to find hidden patterns
                            and produce forecasts that are ever-more accurate.
                        </p>
                        <p>Innovations in fields such as automated vehicles, healthcare diagnostics, and even original
                            content creation have resulted from this. AI has the potential to revolutionise even more as
                            it develops, upending entire industries and altering the way we work, live, and interact
                            with the outside world.
                        </p>
                        <p>Still, there are drawbacks to this quick development. Bias and data privacy are ethical
                            issues that must be addressed. Furthermore, to fully realise AI's potential for good, it
                            will be imperative to ensure its development and application responsibly.
                        </p>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2" id="understanding">Understanding the
                            influence of AI Learning in business</h5>
                        <p>The way organisations run is quickly changing due to machine learning (ML). ML algorithms are
                            automating jobs, streamlining procedures, and producing insightful data that improves
                            decision-making by utilising the power of data analysis. This impact is evident in many
                            different areas of a company.</p>
                        <p>The effects of ML on productivity and efficiency are significant. Automating repetitive
                            operations allows human workers to concentrate on more strategic work. Machine learning (ML)
                            can save costs and downtime in manufacturing by optimising production processes and
                            predicting equipment breakdowns. Another industry that gains from ML-powered chatbots that
                            respond to routine questions and expedite support procedures is customer service.</p>
                        <p>Machine learning is revolutionising the way organisations perceive and engage with their
                            customers, going beyond mere efficiency. ML can personalise product suggestions, marketing
                            campaigns, and the entire customer experience by analysing massive volumes of data on user
                            behaviour and preferences. Businesses can cultivate client loyalty and strengthen customer
                            connections by implementing a data-driven approach. To put it briefly, machine learning is
                            making companies more responsive to their customers and more nimble.</p>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2" id="conclusion">In conclusion:</h5>
                        <p>It's certain that the job market will change more as AI and machine learning gain traction in
                            the IT industry. Although some people might be afraid of losing their jobs, a collaborative
                            future holds great promise. IT workers may usher in a new era of productivity, creativity,
                            and advancement by adopting these technologies and promoting human-machine collaborations.
                            In the process, they will be able to influence the direction of technology itself.
                        </p>

                        <h5 class="text-xl font-semibold text-blue-950 pt-2">FAQs:</h5>
                        <div class="w-full text-md md:text-lg space-y-4">
                            <div class="bg-white rounded-lg shadow-md">
                                <button class="w-full text-left py-1 focus:outline-none"
                                    onclick="toggleAccordion('faq1')">
                                    <div class="flex justify-between items-center">
                                        <span class="font-semibold text-lg">1. How is AI and Machine Learning
                                            transforming IT?</span>
                                        <svg id="faq1-icon" class="w-6 h-6 transition-transform transform" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div id="faq1" class="px-4 pb-4 hidden">
                                    <p>Network administration, security threat detection, and data centre optimisation
                                        are among the jobs that AI and ML are automating. They're also making it
                                        possible for IT teams to examine enormous volumes of data in order to learn new
                                        things, anticipate issues, and come to wiser judgments.</p>
                                </div>
                            </div>
                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq2')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">2. Will AI and Machine Learning replace
                                                IT jobs?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq2" class="px-4 pb-4 hidden">
                                        <p>While some routine tasks might be automated, AI and ML are more likely to
                                            create new job opportunities requiring collaboration between humans and
                                            machines.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq3')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">3. What skills will be important for IT
                                                professionals in the age of AI and ML?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq3" class="px-4 pb-4 hidden">
                                        <p>Critical thinking, data analysis, problem-solving, and proficiency with AI
                                            and ML tools will be essential competencies. It's also critical to
                                            comprehend the ethical implications of AI.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg ">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq4')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">4. How can IT professionals prepare for the rise of AI and Machine Learning?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq4" class="px-4 pb-4 hidden">
                                        <p>It is essential to upskill in machine learning principles, cloud computing, and data analysis. Online certification programmes and courses might be advantageous.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-md md:text-lg">
                                <div class="bg-white rounded-lg shadow-md">
                                    <button class="w-full text-left py-1 focus:outline-none"
                                        onclick="toggleAccordion('faq5')">
                                        <div class="flex justify-between items-center">
                                            <span class="font-semibold text-lg">5. How can businesses ensure ethical use of AI and Machine Learning in IT?</span>
                                            <svg id="faq1-icon" class="w-6 h-6 transition-transform transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="faq5" class="px-4 pb-4 hidden">
                                        <p>Prioritising fairness in data gathering and algorithms, emphasising openness, and creating explicit ethical norms are crucial measures.</p>
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