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
            <h1>Empowering Government & Public Services with Digital Solutions</h1>
            <!-- <p>With Desalite Connect & Ednect</p> -->
        </div>
        <div class="content">
            <div class="section">
                <h2>About Our Solution</h2>
                <p>At Vasp Technologies, we help public sector organizations leverage technology for efficient operations, transparency, and improved service delivery. From e-governance platforms to customized software solutions, we enable government, healthcare, and educational institutions to modernize workflows and better serve the community.</p>
            </div>
            <div class="section">
                <h2>Key Features</h2>
                <ul>
                    <li>Digital Governance Solutions – Streamline administrative processes and citizen services.</li>
                    <li>Transparency & Reporting –  Tools for monitoring, auditing, and accountability.</li>
                    <li>Operational Efficiency  – Automate routine tasks to optimize resource allocation.</li>
                    <li>Secure & Scalable Systems –  Protect sensitive data while supporting growth</li>
                    <li>Custom Software Development –  Tailored solutions to meet unique public sector needs.</li>
                </ul>
            </div>
            <div class="section">
                <h2>Why Public Sector Organizations Choose Us</h2>
                <ul>
                    <li>Trusted software company in Guwahati for government and institutional projects.</li>
                    <li>Expertise in ERP, e-governance, and digital platforms for schools, healthcare, and municipal services.</li>
                    <li>Designed to enhance efficiency, transparency, and citizen satisfaction.</li>
                </ul>
            </div>
        </div>
        <div class="cta">
            <h2>Drive Digital Transformation in the Public Sector</h2>
            <p>With Vasp Technologies’ public sector solutions, institutions can modernize workflows, improve service delivery, and leverage technology for meaningful impact.</p>
            <a href="contact.php">Get in Touch</a>
        </div>
    </div>





<?php include('master/footer.php') ?>