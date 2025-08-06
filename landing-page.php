<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        .hero-section {
            background-color: #ffffff;
            position: relative;
            padding: 100px 0;
        }

        .hero-section h1 {
            font-size: 3rem;
            line-height: 1.2;
            color: #333;
        }

        .hero-section h1 span {
            color: #007bff;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: #666;
        }

        .hero-section .btn {
            background-color: #00b894;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .custom-shape-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .custom-shape-divider .shape-fill {
            fill: #007bff;
        }

        footer {
            font-size: 0.9rem;
            color: #666;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-3">Bootstrap powered <br><span>Best Ever</span> <br>Dashboard template</h1>
                    <p class="mb-4">Build a beautiful, modern website with flexible Bootstrap components built from scratch.</p>
                    <a href="#" class="btn btn-primary">ABOUT US</a>
                </div>
                <div class="col-md-6">
                    <img src="https://img.freepik.com/free-photo/wide-angle-shot-schonbrunn-palace-vienna-austria-with-cloudy-blue-sky_181624-9096.jpg?ga=GA1.1.145863486.1695107417&semt=ais_hybrid" alt="">
                </div>
            </div>
        </div>
        
    </section>

   
</body>

</html>