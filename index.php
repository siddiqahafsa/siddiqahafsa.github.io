<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafsa Siddiqa-Portfolio</title>
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Poppins Font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Dancing Script Font from Google Fonts for cursive style -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Custom CSS Variables for Colors */
        :root {
           
            --primary-color: #8b5cf6; 
            --secondary-color: #a78bfa; 
            --bg-light: #f8fafc;
            --text-dark: #1e293b; 
            --card-bg: #fefefe; 
            --border-light: #e2e8f0; 
        }

        html {
            scroll-behavior: smooth; 
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light); 
            color: var(--text-dark); 
        }

        
        .section-heading {
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem; 
            margin-bottom: 3rem;
            font-size: 2.5rem; 
            font-weight: 700;
            color: var(--text-dark); 
            text-align: center;
            width: fit-content;
        }

        .section-heading::after {
            content: '';
            position: absolute;
            left: 50%; 
            transform: translateX(-50%); 
            bottom: 0;
            width: 70px; 
            height: 4px; 
            background-color: var(--primary-color); 
            border-radius: 9999px;
        }

        .project-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            height: 100%; /* Ensure cards fill height in grid */
            padding: 2.5rem;
            border-radius: 0.75rem; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .project-card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2); 
        }

        .project-card .project-icon {
            font-size: 3.5rem;
            margin-bottom: 0.75rem; 
            text-align: center; 
            width: 100%; 
        }

        .project-card h3 {
            font-size: 1.875rem;
            font-weight: 700; 
            margin-bottom: 0.5rem; 
            color: #333; 
            text-align: center; 
        }

        .project-card p {
            font-size: 1.125rem;
            line-height: 1.6; 
            color: #555; 
            margin-bottom: 1.5rem; 
            flex-grow: 1; 
        }

        .project-card .project-button {
            display: inline-block;
            background-color: #6c5ce7; 
            color: white;
            font-weight: 600; 
            padding: 0.75rem 2rem; 
            border-radius: 9999px; 
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
            margin-top: auto; 
            align-self: center;
        }

        .project-card .project-button:hover {
            background-color: #8b66e8; /* Lighter purple on hover */
            transform: scale(1.05);
        }

        /* Specific card colors */
        .project-card.color-pink {
            background-color: #f7d2d9; /* Light Pink */
            color: #444; /* Darker text for readability */
        }
        .project-card.color-pink .project-icon {
            color: #e91e63; /* Darker pink for icon */
        }

        .project-card.color-purple {
            background-color: #e0d0f7; /* Light Purple */
            color: #444;
        }
        .project-card.color-purple .project-icon {
            color: #9c27b0; /* Darker purple for icon */
        }

        .project-card.color-blue {
            background-color: #d0e0f7; /* Light Blue/Violet */
            color: #444;
        }
        .project-card.color-blue .project-icon {
            color: #673ab7; /* Darker blue/violet for icon */
        }

        /* For 'Coming Soon' state */
        .project-card.disabled-card {
            opacity: 0.7;
            pointer-events: none;
        }
        .project-card.disabled-card .project-button {
            background-color: #ccc;
            cursor: not-allowed;
            pointer-events: none;
        }
        .project-card.disabled-card .project-button:hover {
            background-color: #ccc;
            transform: none;
        }

        /* Adjustments for default project section padding if needed */
        #projects {
            /* padding-top: 4rem; */ /* py-16 */
            /* padding-bottom: 6rem; */ /* md:py-24 */
        }
        /* Active Navigation Link Style */
        .nav-link.active {
            position: relative; /* Crucial for positioning the underline */
            color: var(--primary-color) !important; /* Ensure active link text is purple, !important to override hover */
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%); 
            bottom: -5px;
            width: 40px; 
            height: 2px;
            background-color: var(--primary-color); 
            border-radius: 9999px; 
            transition: width 0.3s ease-in-out, background-color 0.3s ease-in-out; 
        }

       
        #home {
            padding-top: 6rem; 
        }

        .social-icons a {
            display: inline-flex; 
            justify-content: center;
            align-items: center;
            width: 64px; 
            height: 64px;
            margin: 0 10px; /* Spacing between icons */
            border-radius: 50%; 
            background-color: #555; 
            color: #fff; 
            font-size: 32px;  
            transition: all 0.3s ease; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }

        /* Specific colors for each social icon on hover */
        .social-icons a:nth-child(1):hover { /* Discord */
            background-color: #7289DA;
            transform: translateY(-5px); /* Lift effect on hover */
        }
        .social-icons a:nth-child(2):hover { /* Viber */
            background-color: #665CAC;
            transform: translateY(-5px);
        }
        .social-icons a:nth-child(3):hover { /* Email (Envelope) */
            background-color: #D44638; /* Google Mail red */
            transform: translateY(-5px);
        }
        .social-icons a:nth-child(4):hover { /* Github */
            background-color: #333;
            transform: translateY(-5px);
        }
        .social-icons a:nth-child(5):hover { /* LinkedIn */
            background-color: #0077B5;
            transform: translateY(-5px);
        }

        
        @media (max-width: 768px) {
            .social-icons a {
                width: 50px;
                height: 50px;
                font-size: 24px;
                margin: 0 8px;
            }
        }

        @media (max-width: 480px) {
            .social-icons {
                flex-wrap: wrap; /* Allow icons to wrap on smaller screens */
                justify-content: center;
            }
            .social-icons a {
                width: 40px;
                height: 40px;
                font-size: 20px;
                margin: 5px; 
            }
        }

        /* cursive font */
        .font-cursive {
            font-family: 'Dancing Script', cursive;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Header & Navigation -->
    <header class="bg-white shadow-lg sticky top-0 z-50 bg-opacity-95 backdrop-blur-sm">
        <nav class="container mx-auto px-4 md:px-8 py-4 flex items-center justify-between">
            <a href="#home" class="text-4xl font-bold text-[var(--primary-color)] tracking-wide rounded-md p-2 hover:text-[var(--secondary-color)] transition-colors duration-300 font-cursive">Hafsa</a>

            <div class="hidden md:flex space-x-8">
                <a href="#home" class="nav-link text-gray-700 hover:text-[var(--primary-color)] transition-colors text-xl font-medium rounded-md p-2 hover:bg-gray-100">Home</a>
                <a href="#about" class="nav-link text-gray-700 hover:text-[var(--primary-color)] transition-colors text-xl font-medium rounded-md p-2 hover:bg-gray-100">About</a>
                <a href="#skills" class="nav-link text-gray-700 hover:text-[var(--primary-color)] transition-colors text-xl font-medium rounded-md p-2 hover:bg-gray-100">Skills</a>
                <a href="#projects" class="nav-link text-gray-700 hover:text-[var(--primary-color)] transition-colors text-xl font-medium rounded-md p-2 hover:bg-gray-100">Projects</a>
                <a href="#cv" class="nav-link text-gray-700 hover:text-[var(--primary-color)] transition-colors text-xl font-medium rounded-md p-2 hover:bg-gray-100">CV</a>
                <a href="#contact" class="nav-link text-gray-700 hover:text-[var(--primary-color)] transition-colors text-xl font-medium rounded-md p-2 hover:bg-gray-100">Contact</a>
            </div>


            <button id="mobile-menu-button" class="md:hidden p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)]">
                <svg class="w-8 h-8 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-4 6h4"></path>
                </svg>
            </button>
        </nav>

        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <div class="px-2 pt-2 pb-3 space-y-2 sm:px-3">
                <a href="#home" class="nav-link block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-[var(--primary-color)] rounded-md">Home</a>
                <a href="#about" class="nav-link block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-[var(--primary-color)] rounded-md">About</a>
                <a href="#skills" class="nav-link block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-[var(--primary-color)] rounded-md">Skills</a>
                <a href="#projects" class="nav-link block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-[var(--primary-color)] rounded-md">Projects</a>
                <a href="#cv" class="nav-link block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-[var(--primary-color)] rounded-md">CV</a>
                <a href="#contact" class="nav-link block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-[var(--primary-color)] rounded-md">Contact</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Home/Hero Section -->
        <section id="home" class="bg-gradient-to-r from-[#8E83A1] to-[#5B4E7A] text-white py-24 md:py-32 flex items-center justify-center min-h-screen">
            <div class="container mx-auto px-4 md:px-8 text-center md:flex md:items-center md:space-x-12">
                <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
                    
                    <img src="IMG_3410.jpg" alt="Hafsa Siddiqa" class="w-64 h-64 md:w-80 md:h-80 rounded-full object-cover shadow-lg border-4 border-white transition-transform duration-300 hover:scale-105">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                   
                    <h1 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight">Hi, I'm <span class="font-cursive text-[#E0BBE4]">Hafsa Siddiqa</span></h1>
                    <h3 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-200">Information Technology Student</h3>
                    <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 opacity-90">
                        Majoring in software engineering with a focus on creating innovative solutions and building meaningful projects. Welcome to my Portfolio!
                    </p>
                    <div class="flex justify-center md:justify-start space-x-6 mb-8">

                        <!-- Social Icons -->
                        <div class="social-icons">
                        <a href="https://discord.com/users/hafsa_s" target="_blank" aria-label="Discord Profile"><i class="fab fa-discord"></i></a>
                        <a href="viber://add?number=+6798779814" target="_blank" title="Open in Viber" aria-label="Viber Contact">
                                <i class="fab fa-viber"></i>
                        </a>

                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=siddiqahafsa367@gmail.com&su=Portfolio%20Inquiry&body=Hello,%20I%20am%20interested%20in%20your%20portfolio." target="_blank" aria-label="Send an Email"><i class="fas fa-envelope"></i></a>
                        <a href="https://github.com/siddiqahafsa" target="_blank" aria-label="GitHub Profile"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/hafsa-siddiqa-b366a9353" target="_blank" aria-label="LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                        <!-- Download CV Button now scrolls to CV section -->
                    <a href="#cv" class="inline-block bg-white text-[var(--primary-color)] font-bold py-3 px-8 rounded-full shadow-lg hover:bg-gray-100 hover:scale-105 transform transition-all duration-300 ease-in-out">
                        View My CV
                    </a>
                </div>
            </div>
        </section>


        <!-- About Section -->
        <section id="about" class="py-16 md:py-24 bg-[var(--bg-light)]">
            <div class="container mx-auto px-4 md:px-8 max-w-5xl">
                <h2 class="section-heading mx-auto">About Me</h2>
                <div class="bg-[var(--card-bg)] p-8 md:p-12 rounded-xl shadow-lg border border-[var(--border-light)]">
                    <p class="text-[var(--text-dark)] leading-relaxed text-lg mb-6">
                        Hi, I’m <span class="font-semibold text-[var(--primary-color)]">Hafsa Siddiqa</span>, a tech enthusiast from the beautiful Pacific Island of Fiji. Currently, I’m in my third year at the University of Fiji, pursuing a Bachelor of Information Technology (BIT) with a focus on development.
                    </p>
                    <p class="text-[var(--text-dark)] leading-relaxed text-lg mb-6">
                        Technology is exciting to me how we can shape solutions that serve people's needs. My goal is straightforward: to grow in this field, learn continuously, and eventually establish myself as a solopreneur, embracing the concept of virtual offices.
                    </p>
                    <p class="text-[var(--text-dark)] leading-relaxed text-lg mb-6">
                        I’ve gained proficiency in programming languages like <span class="font-semibold text-[var(--primary-color)]">Java, C#, Python</span>, and also delved into <span class="font-semibold text-[var(--primary-color)]">databases and data warehousing (SQL)</span>. In my free time, I enjoy working on side projects, like building this website, as I love experimenting with and applying my skills.
                    </p>
                    <p class="text-[var(--text-dark)] leading-relaxed text-lg">
                        Based in Nadi, Fiji, I’m always looking to explore new opportunities, connect with like-minded individuals, and create solutions that make an impact. Feel free to explore my portfolio and reach out for collaborations! 
                    </p>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-16 md:py-24 bg-gray-100">
            <div class="container mx-auto px-4 md:px-8 max-w-5xl text-center">
                <h2 class="section-heading mx-auto">My Skills</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                   
                    <div class="bg-[var(--card-bg)] p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 border border-[var(--border-light)]">
                        <img src="https://placehold.co/64x64/8e44ad/ffffff?text=Java" alt="Java Icon" class="w-16 h-16 mx-auto mb-4 object-contain">
                        <h3 class="text-xl font-semibold text-[var(--text-dark)]">Java</h3>
                    </div>
                    <div class="bg-[var(--card-bg)] p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 border border-[var(--border-light)]">
                        <img src="https://placehold.co/64x64/8e44ad/ffffff?text=C%23" alt="C# Icon" class="w-16 h-16 mx-auto mb-4 object-contain">
                        <h3 class="text-xl font-semibold text-[var(--text-dark)]">C#</h3>
                    </div>
                    <div class="bg-[var(--card-bg)] p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 border border-[var(--border-light)]">
                        <img src="https://placehold.co/64x64/8e44ad/ffffff?text=Python" alt="Python Icon" class="w-16 h-16 mx-auto mb-4 object-contain">
                        <h3 class="text-xl font-semibold text-[var(--text-dark)]">Python</h3>
                    </div>
                    <div class="bg-[var(--card-bg)] p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 border border-[var(--border-light)]">
                        <img src="https://placehold.co/64x64/8e44ad/ffffff?text=SQL" alt="SQL Icon" class="w-16 h-16 mx-auto mb-4 object-contain">
                        <h3 class="text-xl font-semibold text-[var(--text-dark)]">SQL</h3>
                    </div>
                    <div class="bg-[var(--card-bg)] p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 border border-[var(--border-light)]">
                        <img src="https://placehold.co/64x64/8e44ad/ffffff?text=HTML" alt="HTML Icon" class="w-16 h-16 mx-auto mb-4 object-contain">
                        <h3 class="text-xl font-semibold text-[var(--text-dark)]">HTML</h3>
                    </div>
                    <div class="bg-[var(--card-bg)] p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 border border-[var(--border-light)]">
                        <img src="https://placehold.co/64x64/8e44ad/ffffff?text=CSS" alt="CSS Icon" class="w-16 h-16 mx-auto mb-4 object-contain">
                        <h3 class="text-xl font-semibold text-[var(--text-dark)]">CSS</h3>
                    </div>
                    <div class="bg-[var(--card-bg)] p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 border border-[var(--border-light)]">
                        <img src="https://placehold.co/64x64/8e44ad/ffffff?text=JS" alt="JavaScript Icon" class="w-16 h-16 mx-auto mb-4 object-contain">
                        <h3 class="text-xl font-semibold text-[var(--text-dark)]">JavaScript</h3>
                    </div>
                     <div class="bg-[var(--card-bg)] p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 border border-[var(--border-light)]">
                        <img src="https://placehold.co/64x64/8e44ad/ffffff?text=Git" alt="Git Icon" class="w-16 h-16 mx-auto mb-4 object-contain">
                        <h3 class="text-xl font-semibold text-[var(--text-dark)]">Git</h3>
                    </div>
                    <!-- Add more skill cards as needed -->
                </div>
            </div>
        </section>

        <section id="projects" class="py-16 md:py-24 bg-gray-100">
            <div class="container mx-auto px-4 md:px-8 max-w-6xl text-center">
                <h2 class="section-heading mx-auto">My Projects</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="project-card color-pink">
                        <div class="project-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <h3>Hotel Reservation System</h3>
                        <p>Developed a desktop application using Visual Basic .NET and Windows Forms to streamline hotel room bookings. This system allows users to manage guest personal details, view available rooms, make new reservations, and track existing bookings, demonstrating fundamental UI design and in-memory data management skills.</p>
                        <a href="https://drive.google.com/drive/folders/1_XEl3bDUKXjhhMTigQT3LjSO3l18SqWL?usp=sharing" target="_blank" class="project-button">
                            Drive Link
                        </a> </br>
                        <a href="Hotel Reservation System Project Documentation.pdf" target="_blank" class="project-button">Explore More</a>
                    </div>

                    <div class="project-card color-blue">
                        <div class="project-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Business Intelligence Analysis for Labbayk Rentals</h3>
                        <p>A comprehensive data-driven project that analyzed Labbayk Rentals' car rental dataset using descriptive, predictive, and prescriptive analytics. This involved identifying key trends in customer behavior, forecasting future demand and revenue, and providing actionable recommendations to optimize fleet management, pricing strategies, and accident risk mitigation for enhanced operational efficiency and growth.</p>
                        <a href="ITC 355 Assignment - 20230435 - Hafsa Siddiqa.pdf" target="_blank" class="project-button">
                            Explore
                        </a>
                    </div>
        
                    <div class="project-card color-purple disabled-card">
                        <div class="project-icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h3>Coming Soon</h3>
                        <p>More exciting projects are on the way! Stay tuned for updates on new developments and additions to my portfolio.</p>
                        <a href="#" class="project-button">
                            Learn More
                        </a>
                    </div>
        
                    
        
                </div>
                <div class="mt-12">
                    <a href="#contact" class="inline-block bg-[var(--primary-color)] text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-[var(--secondary-color)] hover:scale-105 transform transition-all duration-300 ease-in-out">
                        Get In Touch for Collaborations
                    </a>
                </div>
            </div>
        </section>

        <!-- CV Section -->
        <section id="cv" class="py-16 md:py-24 bg-gray-100">
            <div class="container mx-auto px-4 md:px-8 max-w-4xl text-center">
                <h2 class="section-heading mx-auto">My Curriculum Vitae</h2>
                <div class="bg-[var(--card-bg)] p-4 md:p-8 rounded-xl shadow-lg border border-[var(--border-light)] overflow-hidden">
                    <p class="text-[var(--text-dark)] leading-relaxed text-lg mb-6">
                        You can view my full Curriculum Vitae (CV) directly below.
                    </p>
                    
                    <div class="relative w-full" style="padding-top: 141.4%;"> <iframe 
                         src="resume.pdf#toolbar=0"
                            class="absolute top-0 left-0 w-full h-full border-none rounded-md shadow-inner" 
                            title="Hafsa Siddiqa's CV"
                            frameborder="0"
                            allowfullscreen
                            webkitallowfullscreen
                            mozallowfullscreen
                        >
                            
                        </iframe>
                    </div>
        
                    <p class="text-sm text-gray-600 mt-6">

                        (Note: For best viewing experience, please ensure your browser supports PDF embedding. You can also download it if needed.)
                    </p>
                    <p>You can <a href="resume.pdf" target="_blank" class="text-[var(--primary-color)] hover:underline">download the CV here</a>.</p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16 md:py-24 bg-[var(--bg-light)]">
            <div class="container mx-auto px-4 md:px-8 max-w-2xl text-center">
                <h2 class="section-heading mx-auto">Get In Touch</h2>
                <p class="text-[var(--text-dark)] leading-relaxed text-lg mb-8">
                    Have a question or want to work together? Feel free to reach out!
                </p>
                <form action="send-mail.php" method="POST" class="bg-[var(--card-bg)] p-8 rounded-xl shadow-lg border border-[var(--border-light)]">
                    <div class="mb-6">
                        <label for="name" class="block text-[var(--text-dark)] text-lg font-semibold mb-2 text-left">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] bg-gray-50 text-[var(--text-dark)] transition-all duration-200" placeholder="Your Name" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-[var(--text-dark)] text-lg font-semibold mb-2 text-left">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] bg-gray-50 text-[var(--text-dark)] transition-all duration-200" placeholder="your.email@example.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-[var(--text-dark)] text-lg font-semibold mb-2 text-left">Message</label>
                        <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] bg-gray-50 text-[var(--text-dark)] transition-all duration-200" placeholder="Your message..." required></textarea>
                    </div>
                    
                        <button type="submit" class="w-full bg-[var(--primary-color)] text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-[var(--secondary-color)] hover:scale-105 transform transition-all duration-300 ease-in-out">
                             Send Message
                        </button>

                </form>
                <div class="mt-8 text-center">
                    <p class="text-gray-600 mb-4">You can also find me on:</p>
                    <div class="flex justify-center space-x-6">
                        <!-- Social Icons -->
                        <div class="social-icons">
                        <a href="https://discord.com/users/hafsa_s" target="_blank">
                            <i class="fab fa-discord"></i>
                        </a>
                        <a href="viber://add?number=+6798779814" target="_blank" title="Open in Viber"><i class="fab fa-viber"></i>
                        </a>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=siddiqahafsa367@gmail.com&su=Portfolio%20Inquiry&body=Hello,%20I%20am%20interested%20in%20your%20portfolio." target="_blank">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://github.com/siddiqahafsa" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="www.linkedin.com/in/hafsa-siddiqa-b366a9353" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                       
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-8 border-t border-gray-700">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <p>&copy; 2025 Hafsa Siddiqa. All rights reserved.</p>
            <p>siddiqahafsa367@gmail.com</p>
            <p>hafsiddiqa@icloud.com</p>
            
            
            
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Navigation Active State Logic ---
            const sections = document.querySelectorAll('section[id]'); 
            const navLinks = document.querySelectorAll('.nav-link'); 

            
            const header = document.querySelector('header');
            let headerHeight = header ? header.offsetHeight : 0; 
            
            const observerOptions = {
                root: null, 
                rootMargin: `${-headerHeight}px 0px -50% 0px`,
                threshold: 0 
            };

            const observer = new IntersectionObserver((entries) => {
                let currentActiveSectionId = null;

                
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        
                        if (!currentActiveSectionId ||
                            document.querySelector(`[href="#${entry.target.id}"]`).offsetTop <
                            document.querySelector(`[href="#${currentActiveSectionId}"]`).offsetTop) {
                            currentActiveSectionId = entry.target.id;
                        }
                    }
                });

                
                if (!currentActiveSectionId && window.scrollY < headerHeight + 100) { // +100 as a buffer
                    currentActiveSectionId = 'home';
                }

                
                navLinks.forEach(link => link.classList.remove('active'));

                
                if (currentActiveSectionId) {
                    
                    const desktopNavLink = document.querySelector(`.hidden.md\\:flex .nav-link[href="#${currentActiveSectionId}"]`);
                    if (desktopNavLink) {
                        desktopNavLink.classList.add('active');
                    }
                    
                    const mobileNavLink = document.querySelector(`#mobile-menu .nav-link[href="#${currentActiveSectionId}"]`);
                    if (mobileNavLink) {
                        mobileNavLink.classList.add('active');
                    }
                }
            }, observerOptions);

          
            sections.forEach(section => {
                observer.observe(section);
            });

           
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden'); 
                });

                
                mobileMenu.querySelectorAll('.nav-link').forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden'); 
                    });
                });
            }
        });
    </script>
</body>
</html>
