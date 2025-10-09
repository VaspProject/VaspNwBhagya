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
            <h1>Enhance Guest Experiences with Innovative Software Solutions</h1>
            <!-- <p>With Desalite Connect & Ednect</p> -->
        </div>
        <div class="content">
            <div class="section">
                <h2>About Our Solution</h2>
                <p>At Vasp Technologies, we deliver custom software solutions for the travel and hospitality sector. Our tools, featuring real-time inventory management, booking platforms, and seamless integrations, are designed to streamline operations and elevate the visitor experience.</p>
            </div>
            <div class="section">
                <h2>Key Features</h2>
                <ul>
                    <li>Real-Time Booking & Inventory Management – Efficiently manage rooms, seats, and resources</li>
                    <li>User-Friendly Booking Platforms –  Simplified interfaces for customers and staff.</li>
                    <li>Integrated Payment Solutions  – Secure, fast, and convenient transactions.</li>
                    <li>Analytics & Reporting –  Insights for improving services and operational decisions.</li>
                    <li>Scalable & Flexible Systems –  Solutions that grow with your business needs.</li>
                </ul>
            </div>
            <div class="section">
                <h2>Why Travel & Hospitality Businesses Choose Us</h2>
                <ul>
                    <li>Trusted software development in Guwahati for hotels, resorts, travel agencies, and tour operators.</li>
                    <li>Designed to enhance operational efficiency and guest satisfaction</li>
                    <li>Developed by a leading software company in Guwahati, combining local knowledge with modern technology.</li>
                </ul>
            </div>
        </div>
        <div class="cta">
            <h2>Transform Operations & Delight Visitors</h2>
            <p>With Vasp Technologies’ travel and hospitality solutions, businesses can automate workflows, optimize resources, and provide memorable experiences to every guest.</p>
            <a href="contact.php">Get in Touch</a>
        </div>
    </div>





<?php include('master/footer.php') ?>