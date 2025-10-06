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
            <h1>Streamline Property Management with Innovative Tech Solutions</h1>
            <!-- <p>With Desalite Connect & Ednect</p> -->
        </div>
        <div class="content">
            <div class="section">
                <h2>About Our Solution</h2>
                <p>At Vasp Technologies, we deliver tailored software solutions for the real estate industry. Our property management software and digital platforms are designed to simplify administrative tasks, optimize property performance, and enhance operational efficiency.</p>
            </div>
            <div class="section">
                <h2>Key Features</h2>
                <ul>
                    <li>Comprehensive Property Management –  Manage listings, tenants, leases, and payments seamlessly.</li>
                    <li>Real-Time Analytics & Reporting –  Gain insights into property performance and revenue.</li>
                    <li>Automation of Administrative Tasks –  Reduce manual work and errors.</li>
                    <li>Customizable Platforms – Solutions built to match your business needs.</li>
                    <li>Secure & Scalable –   Technology designed to grow with your portfolio.</li>
                </ul>
            </div>
            <div class="section">
                <h2>Why Real Estate Businesses Choose Us</h2>
                <ul>
                    <li>Trusted software company in Guwahati for real estate and property management solutions.</li>
                    <li>Designed to enhance operational efficiency and maximize returns.</li>
                    <li>Developed by a leading tech company in Guwahati, combining innovation with local expertise.</li>
                </ul>
            </div>
        </div>
        <div class="cta">
            <h2>Optimize Your Real Estate Operations</h2>
            <p>With Vasp Technologies’ real estate solutions, property businesses can streamline management, improve performance, and leverage technology to stay ahead in a competitive market.</p>
        </div>
    </div>





<?php include('master/footer.php') ?>