<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        /* Gaya CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FDF2F8; 
            color: #555; 
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            border-radius: 10px; /* Bulatkan sudut container */
        }

        header {
            background-color: #FF69B4; 
            color: #FFFFFF; /* Warna teks header putih */
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            color: #fff; 
            -webkit-text-stroke: 1.5px black; /* Garis tepi hitam */
        }

        h2 {
            color: #FF69B4; 
            font-size: 24px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        /* Gaya khusus untuk bagian pendidikan */
        .education {
            border-left: 4px solid #FF69B4; /* Garis vertikal di sebelah kiri */
            padding-left: 10px;
        }

        /* Gaya khusus untuk bagian pengalaman kerja */
        .experience {
            border-left: 4px solid #FF69B4; /* Garis vertikal di sebelah kiri */
            padding-left: 10px;
        }

        /* Gaya untuk tombol tautan sosial media */
        .social-link {
            display: inline-block;
            margin-right: 10px;
        }

        .social-link a {
            display: block;
            width: 30px;
            height: 30px;
            background-color: #FF69B4; /* Latar belakang ikon */
            color: #FFFFFF; /* Warna teks ikon putih */
            text-align: center;
            line-height: 30px;
            border-radius: 50%;
            text-decoration: none;
        }

        /* Gaya untuk dot point bulan dan tahun */
        .date {
            color: #FF69B4; /* Warna teks dot point */
            font-weight: bold;
        }

        /* Gaya untuk garis pink */
        .pink-line {
            border-top: 2px solid #FF69B4; /* Garis horizontal */
            margin-top: 20px;
            margin-bottom: 20px;
            border-color: #FF69B4; /* Warna garis pink */
        }

        /* Gaya untuk garis vertikal pink */
        .pink-line-vertical {
            border-left: 2px solid #FF69B4; /* Garis vertikal */
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Curriculum Vitae</h1>
        </header>
        <section class="pink-line-horizontal">
            <h2>Personal Information</h2>
            <ul>
                <li>
                    <label>Name:</label> Fariza Shielda Akzatria
                </li>
                <li>
                    <label>Email:</label> farizashieldaa@gmail.com
                </li>
                <li>
                    <label>Phone:</label> +62 85854817908
                </li>
                <li>
                    <label>Location:</label> Surabaya, East Java
                </li>
                <li>
                    <label>LinkedIn:</label> <a href="https://www.linkedin.com/in/fariza-shielda-akzatria-690663217/" target="_blank">LinkedIn Profile</a>
                </li>
            </ul>
        </section>
        <hr class="pink-line"> <!-- Garis pembatas horizontal dengan warna pink -->
        <section class="pink-line-horizontal">
            <h2>Summary</h2>
            <p>
                An undergraduate student of Data Science Technology at Airlangga University that has perfectionism and responsibility in doing projects effectively and efficiently to reach the target. Has skills in data administration, cooperative, and an exceptional problem solving skill.
            </p>
        </section>
        <hr class="pink-line"> <!-- Garis pembatas horizontal dengan warna pink -->
        <section>
            <h2>Education</h2>
            <ul>
            <div class="pink-line-vertical">
                <li>
                    <label>Airlangga University</label>
                    <p>Bachelor of Data Science</p>
                    <p>GPA: 3.44/4.00</p>
                    <p>Relevant topics: Statistics, Programming, and Mathematics.</p>
                    <li class="date">2021 – Now</li>
                </li>
                <li>
                    <label>Senior High School 9 Surabaya</label>
                    <p>Science and Mathematics</p>
                    <li class="date">2018 - 2021</li>
                </li>
            </div>
            </ul>
        </section>
        <hr class="pink-line"> <!-- Garis pembatas horizontal dengan warna pink -->
        <section>
            <h2>Experience</h2>
            <ul>
            <div class="pink-line-vertical">
                <li>
                    <label>Project Officer Event Division of Hallo-Dekanat</label>
                    <p>An event where students of FTMM can distribute their aspirations to the dean of FTMM.</p>
                    <ul>
                        <li>• Responsible for creating general concepts of the event.</li>
                        <li class="date">September 2023 – Now</li>
                    </ul>
                </li>
                <li>
                    <label>Project Officer Public Relation Division of Scholarship Preparation</label>
                    <p>Seminar for students of FTMM to understand better on how to apply for a scholarship, and increase their chance to get scholarships.</p>
                    <ul>
                        <li>• Responsible for contacting speakers, and creating concepts for poster, broadcast, photos, and also video to promote the event.</li>
                        <li class="date">August 2023 – Now</li>
                    </ul>
                </li>
                <li>
                    <label>Project Officer Event Division of Health Buddies</label>
                    <p>Seminar with a topic "Knowing the Danger of Depression and Anxiety," where a medical staff is invited to become the guest speaker.</p>
                    <ul>
                        <li>• Responsible for making MC text, making questions for MC, coordinating MC, organizing rundown, and making general concepts of the event.</li>
                        <li class="date">July 2023 – Now</li>
                    </ul>
                </li>
                <li>
                    <label>Staff Student Advocacy and Welfare of BEM FTMM UNAIR</label>
                    <p>Ministry that is responsible for the prosperity and advocation of students of FTMM UNAIR.</p>
                    <ul>
                        <li>• PIC for the work program "Student Prosperity Post" where students are helped to ease their issue with the reduction of their tuition fees. Responsible for data administration, making recommendation letters, and socializing the issue to the students of FTMM UNAIR.</li>
                        <li>• Responsible for searching information about scholarship and internship opportunities for students of FTMM UNAIR.</li>
                        <li class="date">January 2023 – Now</li>
                    </ul>
                </li>
                <li>
                    <label>Project Officer Secretary Division of Dekan Cup FTMM UNAIR</label>
                    <p>Competition that was held by BEM FTMM UNAIR as a medium to show the talent and interest of the students of FTMM UNAIR competitively.</p>
                    <ul>
                        <li>• Responsible for the document administration of the participant of the Short Movie branch.</li>
                        <li>• Responsible for administering the economy and ticketing throughout the competition.</li>
                        <li class="date">October – December 2022</li>
                    </ul>
                </li>
                <li>
                    <label>Project Officer Event Division of KARSA FTMM UNAIR</label>
                    <p>Campus orientation event for the new students of FTMM UNAIR.</p>
                    <ul>
                        <li>• Successfully creating concepts for several sub-events of KARSA, which are campus tour route planning for campus orientation video, becoming the room operator, and also managing the rundown of the event.</li>
                        <li class="date">June – August 2022</li>
                    </ul>
                </li>
            </div>
            </ul>
        </section>
        <hr class="pink-line"> <!-- Garis pembatas horizontal dengan warna pink -->
        <section class="pink-line-horizontal">
            <h2>Volunteer</h2>
            <div class="pink-line-vertical">
            <p>
                <label>European Higher Education Fair (EHEF)</label>
                National event which was an education fair which was held in Jakarta and Surabaya. Volunteered in attendance administration of the participation and helped the registration process for the attendees throughout the event. EHEF was held on 8th November 2021, where it was held in Surabaya.
            </div>
            </p>
        </section>
        <hr class="pink-line"> <!-- Garis pembatas horizontal dengan warna pink -->
        <section class="pink-line-horizontal">
            <h2>Training</h2>
            <div class="pink-line-vertical">
                <p>
                    <label>REVOU MINI COURSE INTRO TO DATA ANALYTICS 2023</label>
                    Training event that was held by RevoU to understand data analytic better, and improving programming language skills, such as SQL and Python.
                </p>
                <p>
                    <label>LKMM-TD FTMM 2022</label>
                    Basic level management training that was held by BEM FTMM UNAIR serves the purpose to improve the managerial skills of FTMM students.
                </p>
                <p>
                    <label>PENDEKAR 2021</label>
                    Management training that was held by BEM FKM UNAIR, in collaboration with UKMKI UNAIR, has a purpose to improve the managerial skills and the leadership ability of UNAIR students.
                </p>
            </div>
        </section>
        <hr class="pink-line"> <!-- Garis pembatas horizontal dengan warna pink -->
        <section class="pink-line-horizontal">
            <h2>Skills</h2>
            <div class="pink-line-vertical">
            <ul>
                <li>
                    <label>Language:</label> Indonesia, English.
                </li>
                <li>
                    <label>Technical Skill:</label> Programming Language (Python, R), Database Management (SQL Database: MySQL), Statistical Modeling (Regression, Clustering), Machine Learning, Data Mining, Data Cleaning and Manipulation, Data Visualization.
                </li>
                <li>
                    <label>Computational Skill:</label> Python, Jupyter Notebook, VSCode, Minitab, SPSS, R-Studio, Microsoft Office (Excel, Word, Power Point).
                </li>
                <li>
                    <label>Professional Skill:</label> Analytical Thinking, Problem Solving, Cooperative, Leadership.
                </li>
            </div>
            </ul>
        </section>
        <hr class="pink-line"> <!-- Garis pembatas horizontal dengan warna pink -->
        <section class="pink-line-horizontal">
            <h2>Certification</h2>
            <div class="pink-line-vertical">
            <ul>
                <li>
                    <label>Introduction to Data Science with Python</label>
                    <p>DQLab</p>
                    <p>2023</p>
                </li>
                <li>
                    <label>Introduction to Data Science with R</label>
                    <p>DQLab</p>
                    <p>2023</p>
                </li>
                <li>
                    <label>Guide to Learn Python with AI at DQLab</label>
                    <p>DQLab</p>
                    <p>2023</p>
                </li>
                <li>
                    <label>Guide to Learn R with AI at DQLab</label>
                    <p>DQLab</p>
                    <p>2023</p>
                </li>
                <li>
                    <label>Guide to Learn SQL with AI at DQLab</label>
                    <p>DQLab</p>
                    <p>2023</p>
                </li>
            </div>
            </ul>
        </section>
    </div>
</body>
</html>
