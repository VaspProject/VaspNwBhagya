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
            <h1>Management Information System (MIS)</h1>
            <p>At Vasp Technologies, we design advanced Management Information Systems (MIS) that help businesses gain a powerful competitive edge. Our MIS solutions deliver real-time data, analytics, and insights to support smarter, faster, and more informed decision-making.</p>
        </div>

        <h2 class="section-title">Why Choose Our MIS?</h2>
        <div class="features">
            <div class="feature-card">
                <h3>Real-Time Data Access</h3>
                <p>Stay updated with accurate, live information.</p>
            </div>
            <div class="feature-card">
                <h3>Customizable Dashboards</h3>
                <p> Tailored to match your workflow and business needs.</p>
            </div>
            <div class="feature-card">
                <h3>Improved Efficiency</h3>
                <p>Automate reporting and reduce manual effort.</p>
            </div>
            <div class="feature-card">
                <h3>Scalable Solutions</h3>
                <p>Designed to grow with your business.</p>
            </div>
            <div class="feature-card">
                <h3>Secure & Reliable</h3>
                <p> Ensure data accuracy and protection at all levels.</p>
            </div> 
        </div>

        <h2 class="section-title">Empowering Businesses in Guwahati & Beyond</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto;">As a trusted software development company in Guwahati, we build MIS platforms for schools, enterprises, and organizations across Assam. From school ERP systems in Guwahati to enterprise management solutions, our MIS helps you simplify complexity and focus on growth.</p>

        <div class="cta">
            <h2>Data-Driven Success</h2>
            <p>With our MIS software in Guwahati, you don’t just manage information — you unlock the potential of data to drive performance, productivity, and profitability.</p>
            <a href="#contact">Get in Touch</a>
        </div>
    </div>
</div>







<?php include('master/footer.php') ?>