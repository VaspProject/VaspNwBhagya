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
            <h1>Optimize Your Transport Operations with TransTrack</h1>
            <!-- <p>With Desalite Connect & Ednect</p> -->
        </div>
        <div class="content">
            <div class="section">
                <h2>About Our Solution</h2>
                <p>At Vasp Technologies, we offer TransTrack, a comprehensive Transport Management Software (TMS) and ERP solution designed to help logistics businesses standardize operations, improve efficiency, and gain a competitive edge. Our expert software development in Guwahati ensures your transport workflows are streamlined and future-ready.</p>
            </div>
            <div class="section">
                <h2>Key Features</h2>
                <ul>
                    <li>Complete Transport Management – Manage fleet, routes, and schedules seamlessly.</li>
                    <li>Real-Time Tracking & Reporting – Monitor shipments, deliveries, and driver performance.</li>
                    <li>Operational Automation  – Reduce manual processes and increase productivity.</li>
                    <li>Analytics & Insights – Data-driven decisions for optimized logistics operations</li>
                    <li>Scalable & Secure –  Flexible software designed to grow with your business.</li>
                </ul>
            </div>
            <div class="section">
                <h2>Why Choose TransTrack</h2>
                <ul>
                    <li>Trusted transport management software in Guwahati and across Assam.</li>
                    <li>Designed to enhance operational efficiency and reduce costs.</li>
                    <li>Built with expertise from a leading software company in Guwahati.</li>
                </ul>
            </div>
        </div>
        <div class="cta">
            <h2>Drive Logistics Success</h2>
            <p>With TransTrack by Vasp Technologies, your transport business gains a powerful, integrated platform that simplifies operations, improves efficiency, and empowers smarter decision-making.</p>
        </div>
    </div>





<?php include('master/footer.php') ?>