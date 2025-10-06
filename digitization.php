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
            <h1>Digitisation of Businesses</h1>
            <p>At Vasp Technologies, we specialize in driving digital transformation with strategic IT solutions and advanced software development in Guwahati. As a leading software company in Guwahati, our mission is to digitize businesses, redefine workflows, and provide the tools you need to stay ahead in a competitive market.</p>
        </div>

        <h2 class="section-title">Why Choose Us?</h2>
        <div class="features">
            <div class="feature-card">
                <h3>Custom Software Development Guwahati</h3>
                <p>Tailored solutions that streamline operations.</p>
            </div>
            <div class="feature-card">
                <h3>Mobile App Development in Guwahati</h3>
                <p> Innovative apps to connect with customers anytime, anywhere.</p>
            </div>
            <div class="feature-card">
                <h3>Website Design & Development in Guwahati</h3>
                <p>Engaging, responsive, and SEO-optimized websites for your brand.</p>
            </div>
            <div class="feature-card">
                <h3>School & ERP Management Software Guwahati</h3>
                <p>Smart digital platforms to modernize education and enterprise operations.</p>
            </div>
            <!-- <div class="feature-card">
                <h3>E-commerce Development in Guwahati</h3>
                <p>Secure, feature-rich platforms for online growth.</p>
            </div>  -->
        </div>

        <h2 class="section-title">Your Local IT Partner in Assam</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto;">As one of the top IT companies in Guwahati, Assam, we deliver solutions that combine local expertise with global standards. From transport management software in Guwahati to enterprise ERP systems, we help businesses of all sizes go digital with confidence.</p>

        <div class="cta">
            <h2>Future-Ready Digitisation</h2>
            <p>Our approach to software development in Guwahati goes beyond technology — it’s about empowering organizations to achieve measurable impact through smarter workflows, automation, and digital-first strategies.</p>
            <a href="#contact">Get in Touch</a>
        </div>
    </div>
</div>







<?php include('master/footer.php') ?>