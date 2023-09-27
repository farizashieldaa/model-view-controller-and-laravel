<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('patternpink.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgba(0, 0, 0, 0.5); /* Tambahkan lapisan transparan ke latar belakang header */
            color: #fff;
            text-align: center;
            padding: 20px 0;
            -webkit-text-stroke: 2px black; /* Garis tepi hitam */
        }

        h1 {
            font-size: 36px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8); /* Tambahkan lapisan transparan ke latar belakang kontainer */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .project {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8); /* Tambahkan lapisan transparan ke latar belakang proyek */
        }

        .project img {
            max-width: 20%;
            height: auto;
            border-radius: 10px;
        }

        .github-button {
            text-align: center;
        }

        .github-button a {
            display: inline-block;
            background-color: #DB7093;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .github-button a:hover {
         background-color: #FF1493; /* Warna latar belakang saat hover */
        }

        footer {
            background-color: rgba(0, 0, 0, 0.5); /* Tambahkan lapisan transparan ke latar belakang footer */
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
    </header>

    <div class="container">
        <p>This is a minimalist portfolio page to showcase my work and skills.</p>
    </div>

    <div class="container">
        <h2>Projects</h2>
        <div class="project">
            <h3>Web Technology and DBMS</h3>
            <img src="webdbms.jpg" alt=>
            <p>Use of databases in web-based applications, combining HTML with PHP, and implementing CRUD (Create Read Update Delete) in PHP and MySQL.</p>
        </div>
        <div class="project">
            <h3>Data Acquisition, Representation, and Storage</h3>
            <img src="datarepresentation.jpg" alt=>
            <p>Data representation in the form of images, audio and text using the Python programming language. Material covers data acquisition and data representation in the context of digital images, audio, and text. For digital images, students learn sampling and quantization, as well as how to separate RGB channels. In audio, the explanation involves sound waves, frequency, amplitude, and the conversion process from analog to digital. Text representation covers topics such as One-Hot Encoding, CountVectorizer, and TF-IDF.</p>
        </div>
        <div class="project">
            <h3>Text Mining</h3>
            <img src="textmining.jpg" alt=>
            <p>Text Mining uses Python and the ability to extract knowledge and insights from semi-structured text data (such as HTML, JSON, newspaper advertisements) or free text (such as essays, news, books). Python provides several toolkits such as NLTK, TextBlob, and Sastrawi for performing Text Mining, with installation guides included for each toolkit.</p>
        </div>
        <div class="project">
            <h3>Visualization Based on Data Type</h3>
            <img src="visualizationdata.jpg" alt=>
            <p>Explains the types of univariate and bivariate graphs that can be created based on data types, including how to install and use the ggplot package in the R programming language, as well as an understanding of data visualization for numeric and categorical attributes.</p>
        </div>
    </div>

    <div class="github-button">
        <a href="https://github.com/farizashieldaa" target="_blank">Visit My GitHub</a>
    </div>

    <footer>
        &copy; 2023 My Portfolio
    </footer>
</body>
</html>
