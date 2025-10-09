<?php include('master/header.php') ?>

<style>
       
        .container1 {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background: linear-gradient(135deg, #ffffff, #e8ecef);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .title {
            text-align: center;
            padding: 20px 0;
            background: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
            margin-bottom: 20px;
        }
        .title h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .title p {
            margin: 10px 0 0;
            font-size: 1.2em;
            opacity: 0.9;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }
        .section {
            flex: 1;
            min-width: 300px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        .section:hover {
            transform: translateY(-5px);
        }
        .section h2 {
            color: #007bff;
            font-size: 1.8em;
            margin-bottom: 15px;
        }
        .section p, .section ul {
            color: #333;
            font-size: 1.1em;
        }
        .section ul {
            list-style: none;
            padding: 0;
        }
        .section ul li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
        }
        .section ul li::before {
            content: '✔';
            position: absolute;
            left: 0;
            color: #28a745;
            font-size: 1.2em;
        }
        .cta {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background: #28a745;
            color: white;
            border-radius: 10px;
        }
        .cta h2 {
            margin: 0;
            font-size: 2em;
        }
        .cta p {
            margin: 10px 0 0;
            font-size: 1.1em;
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
            .content {
                flex-direction: column;
            }
            .header h1 {
                font-size: 2em;
            }
        }
    </style>



<div class="container1">
        <div class="title">
            <h1>Build & Manage Your Online Marketplace with Confidence</h1>
            <!-- <p>With Desalite Connect & Ednect</p> -->
        </div>
        <div class="content">
            <div class="section">
                <h2>About Our Solution</h2>
                <p>At Vasp Technologies, we provide robust IT solutions to help businesses launch, scale, and manage large-scale online marketplaces. Specializing in e-commerce website design and development, we deliver platforms that are powerful, secure, and built for growth.</p>
            </div>
            <div class="section">
                <h2>Key Features</h2>
                <ul>
                    <li>Custom E-Commerce Development – Tailored solutions to fit your business model.</li>
                    <li>Responsive & Mobile-Friendly Design – Seamless shopping experience on all devices.</li>
                    <li>Secure Payment Integration  – Safe and smooth transactions for your customers.</li>
                    <li>Inventory & Order Management – Simplify product listings, stock, and shipping.</li>
                    <li>Analytics & Insights – Data-driven tools to track sales and customer behavior.</li>
                </ul>
            </div>
            <div class="section">
                <h2>Why Businesses Choose U</h2>
                <ul>
                    <li>Trusted e-commerce development company in Guwahati and across Assam.</li>
                    <li>Platforms designed for scalability, performance, and high traffic.</li>
                    <li>Expertise in creating intuitive, user-focused online marketplaces.</li>
                </ul>
            </div>
        </div>
        <div class="cta">
            <h2>Power Your Online Business</h2>
            <p>With Vasp Technologies, your e-commerce website is more than just a store — it’s a digital growth engine that drives sales, engages customers, and boosts your brand’s presence online.</p>
            <a href="contact.php">Get in Touch</a>
        </div>
    </div>





<?php include('master/footer.php') ?>