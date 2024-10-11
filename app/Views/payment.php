<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WeThrift</title>
    <!-- Font & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Jost', sans-serif;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            flex-direction: column;
        }

        /* Header di atas halaman */
        header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background-color: white;
            padding: 15px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            max-width: 110px;
            height: auto;
        }

        .navmenu {
            display: flex;
            gap: 20px;
        }

        .navmenu a {
            color: black;
            font-size: 16px;
            text-transform: capitalize;
            padding: 10px;
            transition: color 0.42s ease;
        }

        .navmenu a:hover {
            color: #ee1c47;
        }

        .nav-icon {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-icon i {
            font-size: 25px;
            color: black;
            transition: color 0.42s ease;
        }

        .nav-icon i:hover {
            color: #ee1c47;
        }

        /* Container Box di tengah */
        .container {
        background-color: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        width: 350px; /* Ukuran box lebih kecil */
        max-width: 100%;
        margin-top: 120px; /* Jarak dari header */
        margin-bottom: 80px; /* Jarak ke footer */
        text-align: center;
        }


        /* Payment Methods */
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .payment-methods h2 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .payment-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #E5E5E5;
            padding: 10px;
            border-radius: 8px;
        }

        .payment-item img {
            max-height: 30px;
        }

        .payment-button {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        /* Updated Button Style */
        .payment-button button {
            background-color: #d11a3b; /* Background tombol */
            color: white; /* Warna font */
            padding: 12px 30px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .payment-button button:hover {
            background-color: #b31935; /* Warna background saat hover */
        }

        /* Footer */
        footer {
            background-color: #d3d3d3;
            padding: 40px 10%;
            margin-top: auto;
            font-size: 14px;
            width: 100%;
            text-align: center;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-item {
            flex: 1;
            min-width: 220px;
        }

        .footer-item h2, .footer-item h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .footer-item p, .footer-item ul, .footer-item li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .footer-item ul li a {
            text-decoration: none;
            color: black;
        }

        .footer-item ul li a:hover {
            color: #ee1c47;
        }

        .social-icons a {
            margin-right: 10px;
            font-size: 24px;
            color: #000;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #ee1c47;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #ccc;
        }

        .footer-bottom p {
            margin: 0;
        }

        @media (max-width: 768px) {
            header {
                padding: 15px 5%;
            }
            .container {
                padding: 30px 20px;
            }
            .footer-container {
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <a href="home" class="logo"><img src="fotohome/logo.png" alt="logo WeThrift"></a>

        <ul class="navmenu">
            <li><a href="market">Market</a></li>
            <li><a href="event">Event</a></li>
        </ul>

        <div class="nav-icon">
            <a href="profile"><i class='bx bx-user'></i></a>
            <a href="cartada"><i class='bx bx-cart'></i></a>

            <div id="menu-icon"></div>
        </div>
    </header>

    <!-- Main Content in Centered Box -->
    <div class="container">
        <div class="payment-methods">
            <h2>Payment Methods</h2>
            <div class="payment-item">
                <img src="fotohome/mandiri.png" alt="Mandiri">
                <span>1234567891011</span>
            </div>
            <div class="payment-item">
                <img src="fotohome/bni.png" alt="BNI">
                <span>1234567891011</span>
            </div>
            <div class="payment-item">
                <img src="fotohome/bri.png" alt="BRI">
                <span>1234567891011</span>
            </div>
            <div class="payment-item">
                <img src="fotohome/bca.png" alt="BCA">
                <span>1234567891011</span>
            </div>
        </div>

        <div class="payment-button">
            <!-- Pay Button with Link -->
            <button onclick="window.location.href='doneorder'">Pay Now</button>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <h2>WeThrift</h2>
                <p>Use and utilize existing used items. #SAVEGLOBAL</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-item">
                <h3>Platform</h3>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="market">Market</a></li>
                    <li><a href="event">Event</a></li>
                </ul>
            </div>
            <div class="footer-item">
                <h3>Help</h3>
                <ul>
                    <li><a href="#">How do I update my account information?</a></li>
                    <li><a href="#">How do I track my order?</a></li>
                    <li><a href="#">What are the shipping options?</a></li>
                </ul>
            </div>
            <div class="footer-item">
                <h3>Contact</h3>
                <p><a href="mailto:support@wethrift.com">support@wethrift.com</a></p>
                <p>Phone: +1 234 567 890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 WeThrift. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
