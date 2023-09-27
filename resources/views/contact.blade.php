<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <style>
        /* Gaya CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            height: 150px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #ff1493;
            color: #fff;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff69b4;
        }
    </style>
</head>
<body>
    <h1>Contact Me</h1>
    <div class="container">
        <form action="mailto:farizashieldaa@gmail.com" method="post" enctype="text/plain">
            <label for="name">Name:</label>
            <input type="text" id="name" name="Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="Email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="Phone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="Address" required>

            <label for="message">Message:</label>
            <textarea id="message" name="Message" rows="4" required></textarea>

            <input type="submit" value="Submit">

            <a href="mailto:farizashieldaa@gmail.com"></a>
        </form>
    </div>
</body>
</html>
