<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffcccb; /* Warna pink muda sebagai latar belakang */
            color: #333; /* Warna teks hitam */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff; /* Latar belakang kontainer putih */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #ff69b4; /* Warna pink */
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            -webkit-text-stroke: 1px black; /* Garis tepi hitam */
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        /* Gaya khusus untuk informasi personal */
        .info {
            text-align: left;
        }

        .info h2 {
            font-size: 24px;
            color: #ff69b4;
            margin-top: 20px;
            text-transform: uppercase;
        }

        .info p {
            margin: 10px 0;
            line-height: 1.4;
        }

        /* Membuat teks "Name," "Phone," dan "Place" menjadi teks yang tebal */
        .info strong {
            font-weight: bold;
        }

        /* Gaya untuk foto profil */
        .profile-image {
            border: 5px solid #ff69b4; /* Border pink pada foto profil */
            border-radius: 50%;
            max-width: 150px;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="{{asset('mypic.jpg')}}" height="180px" width="150px" class="profile-image">
        <h1>About Me</h1>
        <p>I have a strong interest in the field of Data Science and enjoy learning about data analysis, machine learning, and various other techniques. Additionally, I like to develop small data-driven projects.</p>

        <div class="info">
            <h2>Personal Information</h2>
            <p><strong>Name:</strong> Fariza Shielda Akzatria</p>
            <p><strong>Phone Number:</strong> +62 85854817908</p>
            <p><strong>Place of Residence:</strong> Surabaya</p>
            <p><strong>Email Address:</strong> farizashieldaa@gmail.com</p>
            <p><strong>Age:</strong> 20 years old</p>
            <p><strong>Occupation:</strong> Undergraduate Data Science Student</p>
            <p><strong>Address:</strong> Taman Puspa Anggaswangi F1/15</p>
        </div>

        <p>If you would like to get in touch with me, you can send an email to farizashieldaa@gmail.com or contact me at +62 85854817908. Thank you for visiting my "About Me" page!</p>
    </div>
</body>
</html>
