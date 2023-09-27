<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
        /* Gaya CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #FFE4E1, #FFC0CB, #DB7093);
        }

        header {
            background-image: url('goldpink.jpg');
            text-align: center;
            padding: 20px;
            /* Menambahkan bayangan pada header */
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
        }

        header h1 {
            font-size: 40px;
            color: #fff; /* Warna putih */
            text-transform: uppercase; /* Mengubah teks menjadi huruf besar semua */
            letter-spacing: 3px; /* Jarak antar huruf */
            -webkit-text-stroke: 2px black; /* Garis tepi hitam */
        }

        /* Tambahkan gaya untuk ikon LinkedIn, WhatsApp, dan Instagram */
        .social-icons {
            margin-top: 20px;
            font-size: 36px;
        }

        .social-icons a {
            color: #DB7093;
            margin: 0 10px;
            text-decoration: none;
            -webkit-text-stroke: 1px black; /* Garis tepi hitam */
        }

        .social-icons a:hover {
            color: #fff;
        }

        nav {
            background-color: #DB7093;
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            display: inline-block;
            text-decoration: none;
            color: #FFE4E1;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav a:hover {
            background-color: #A9A9A9;
            color: #fff;
        }

        .content {
            text-align: center;
            padding: 40px;
        }

        .content h2 {
            font-size: 28px;
            color: #333;
        }

        .content p {
            font-size: 18px;
            color: #000000;
            line-height: 1.6;
        }

        /* Tambahkan gaya untuk ikon menggunakan Font Awesome */
        .icon {
            font-size: 48px;
            margin-bottom: 10px;
            color: #FFB6C1; /* Warna pink untuk ikon */
            -webkit-text-stroke: 1px black; /* Garis tepi hitam */
        }
    </style>
</head>
<body>
    <header>
        <h1><i class="icon fas fa-home"></i> Welcome to My Home Page <i class="icon fas fa-home"></i></h1>
        
        <!-- Tambahkan foto profil, ikon LinkedIn, WhatsApp, dan Instagram --> 
        <img src="{{asset('me.jpg')}}" height="150px" width="150px" class="profile-image" style="border: 4px solid #DB7093;">
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/fariza-shielda-akzatria-690663217/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://wa.me/6285854817908" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/farizashieldaa/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </header>

    <nav>
        <a href="/profile">
            <i class="icon fas fa-user"></i> Profile
        </a>
        <a href="/about">
            <i class="icon fas fa-info-circle"></i> About Me
        </a>
        <a href="/portfolio">
            <i class="icon fas fa-briefcase"></i> Portfolio
        </a>
        <a href="/contact">
            <i class="icon fas fa-envelope"></i> Contact Me
        </a>
    </nav>

    <div class="content" id="profil">
        <h2>Profile</h2>
        <p>This is my Profile section. You can view information about my experience, education, and qualifications here.</p>
    </div>

    <div class="content" id="about">
        <h2>About Me</h2>
        <p>This page contains brief information about myself.</p>
    </div>

    <div class="content" id="portflio">
        <h2>Portfolio</h2>
        <p>This is my Portflio section. Here, you can explore some examples of projects and work I've been involved in.</p>
    </div>

    <div class="content" id="contact">
        <h2>Contact Me</h2>
        <p>If you would like to contact me, please use the contact information below.</p>
        <p>Email: farizashieldaa@gmail.com</p>
        <p>Phone: +62 85854817908</p>
    </div>
</body>
</html>
