<?php include('master/header.php') ?>


<div
    style="font-family: 'Poppins', sans-serif; background-color: #f4f7fc; color: #333; line-height: 1.6; padding: 2rem 1rem;">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
            text-align: center;
            padding: 3rem 1rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/random/1920x1080/?technology') no-repeat center center/cover;
            opacity: 0.2;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .section-title {
            font-size: 2rem;
            color: #1e3a8a;
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 80px;
            height: 4px;
            background: #3b82f6;
            display: block;
            margin: 0.5rem auto;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .feature-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            color: #1e3a8a;
            margin-bottom: 1rem;
        }

        .feature-card p {
            font-size: 1rem;
            color: #666;
        }

        .cta {
            text-align: center;
            padding: 3rem 1rem;
            background: linear-gradient(135deg, #3b82f6, #1e3a8a);
            color: white;
            border-radius: 10px;
            margin-top: 2rem;
        }

        .cta h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .cta p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .cta a {
            background: #fff;
            color: #1e3a8a;
            padding: 0.75rem 2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .cta a:hover {
            background: #e0e7ff;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 1.5rem;
            }

            .cta h2 {
                font-size: 1.5rem;
            }

            .cta p {
                font-size: 1rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <div class="container">
        <div class="hero">
            <h1>Custom Software Development</h1>
            <p>At Vasp Technologies, we specialize in building custom software solutions that align with your business goals. Our strategic software development and IT solutions are designed to digitize your operations, redefine workflows, and give you a competitive edge.</p>
        </div>

        <h2 class="section-title">Why Choose Our Custom Software Development?</h2>
        <div class="features">
            <div class="feature-card">
                <h3>Tailored Solutions</h3>
                <p>Software built to match your exact business requirements.</p>
            </div>
            <div class="feature-card">
                <h3>Scalable & Future-Ready</h3>
                <p> Adaptable systems that grow with your business.</p>
            </div>
            <div class="feature-card">
                <h3>Integration-Friendly</h3>
                <p>Seamlessly connect with your existing tools and platforms.</p>
            </div>
            <div class="feature-card">
                <h3>Enhanced Efficiency</h3>
                <p>Automate processes and reduce manual work.</p>
            </div>
            <div class="feature-card">
                <h3>Secure & Reliable </h3>
                <p>Strong, tested systems for peace of mind.</p>
            </div> 
        </div>

        <h2 class="section-title"> Local Expertise, Global Standards</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto;">As a leading software company in Guwahati, we deliver custom software development in Guwahati for schools, enterprises, startups, and industries across Assam. From ERP solutions to mobile app development, our team creates powerful, user-friendly platforms.</p>

        <div class="cta">
            <h2>Driving Digital Growth</h2>
            <p>Our approach goes beyond coding — we craft strategic IT solutions that empower organizations to innovate, transform, and succeed in the digital era.</p>
            <a href="#contact">Get in Touch</a>
        </div>
    </div>
</div>







<?php include('master/footer.php') ?>