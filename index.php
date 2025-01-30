<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MADJIADOUM Yannick - Portfolio</title>
    <meta name="description" content="Portfolio professionnel de Yannick Madjiadoum - Ingénieur en Informatique">
    <meta name="keywords" content="développement web, ingénierie informatique, portfolio">
    <meta name="author" content="Yannick Madjiadoum">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        
        /* :root {
            --primary-color: #2ecc71;
            --dark-color: #2c3e50;
            --light-color: #ecf0f1;
            --background: #ffffff;
            --text-color: #333333;
            --transition-speed: 0.3s;
        }

        [data-theme="dark"] {
            --background: #1a1a1a;
            --text-color: #ffffff;
            --dark-color: #ecf0f1;
            --light-color: #2c3e50;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease;
        } */


         /* Variables */
         :root {
            --primary-color: #2ecc71;
            --dark-color: #2c3e50;
            --light-color: #ecf0f1;
            --background: #ffffff;
            --text-color: #333333;
            --transition-speed: 0.3s;
        }

        [data-theme="dark"] {
            --background: #1a1a1a;
            --text-color: #ffffff;
            --dark-color: #ecf0f1;
            --light-color: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: var(--background);
            color: var(--text-color);
            transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease;
        }

        .theme-toggle-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--primary-color);
            color: var(--light-color);
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color var(--transition-speed) ease;
        }

        .theme-toggle-btn:hover {
            background: var(--dark-color);
        }
        html {
    scroll-behavior: smooth;
}


        body {
            font-family: 'Segoe UI', sans-serif;
            line-height: 1.6;
            background: var(--background);
            color: var(--text-color);
        }

        /* Navigation */
        .nav-container {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(44, 62, 80, 0.95);
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        .nav-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--light-color);
            text-decoration: none;
            font-weight: 500;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width var(--transition-speed) ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--light-color);
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--dark-color);
                flex-direction: column;
                padding: 1rem;
                text-align: center;
            }

            .nav-links.active {
                display: flex;
            }

            .menu-toggle {
                display: block;
            }
          #formation p {
            margin-left: -200px;

            }
        }

        /* En-tête */
        .header {
            padding: 8rem 2rem 4rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)),
                        url('assets/images/background.jpg') center/cover;
            color: white;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid var(--primary-color);
            margin-bottom: 1rem;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .contact-info {
            margin-top: 1rem;
        }

        .contact-info p {
            margin: 0.5rem 0;
        }

        .btn-download {
            display: inline-block;
            margin-top: 2rem;
            padding: 1rem 2rem;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: transform 0.3s ease;
        }

        .btn-download:hover {
            transform: translateY(-3px);
        }

        /* Sections */
        .section {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
            
        }

        .section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 3rem;
            margin: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 10px;
            top: 0;
            width: 2px;
            height: 100%;
            background: var(--primary-color);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: rgba(var(--primary-color), 0.05);
            border-radius: 8px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -33px;
            top: 20px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: var(--primary-color);
        }

        .timeline-item:hover {
            transform: translateX(80px);
        }

        /* Compétences */
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            border-bottom: solid black 5px;
        }

        .skill-item {
            background: rgba(var(--primary-color), 0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .skill-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* Carousel */
        .carousel-container {
            max-width: 800px;
            margin: 2rem auto;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2)
            ;
            border-bottom: solid black 5px;
        }

        .carousel-slide {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
            min-width: 100%;
            padding: 2rem;
            background: rgba(var(--primary-color), 0.05);
            text-align: center;
        }

        .carousel-item img {
            width: 70%;
            height: 60%;
            object-fit: cover;
            border-radius: 10px;
            padding-right: 100px;
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(var(--dark-color), 0.7);
            color: white;
            padding: 1rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-button:hover {
            background: var(--primary-color);
        }

        .prev-button { left: 0; }
        .next-button { right: 0; }

        /* Formulaire de contact */
        .contact-form {
            max-width: 650px;
            margin: 0 auto;
            background-color: #dcd8d8;
            padding: 10px;
            border-radius: 10px;
        }

        .form-group {
            position: relative;
            margin-bottom: 2rem;
        }

        .form-group input,
        .form-group textarea {
            width: 95%;
            padding: 1rem;
            border: 2px solid rgba(var(--dark-color), 0.1);
            border-radius: 8px;
            background: whitesmoke;
            color: var(--text-color);
        }

        .form-group label {
            position: absolute;
            left: 1rem;
            top: 1rem;
            padding: 0 0.5rem;
            background: var(--background);
            transition: all 0.3s ease;
        }

        .form-group input:focus ~ label,
        .form-group textarea:focus ~ label,
        .form-group input:valid ~ label,
        .form-group textarea:valid ~ label {
            top: -0.8rem;
            left: 1rem;
            font-size: 0.9rem;
            color: var(--primary-color);
        }

        .btn-submit {
            display: inline-flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 2rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-3px) scale(1.05);
        }

        /* Footer */
        .footer {
            /* background: rgba(var(--dark-color), 0.95);
            color: var(--light-color); */
            background: #2c3e50; /* Couleur sombre fixe */
            color: #ecf0f1; /* Texte clair */
            padding: 3rem 2rem;
            text-align: center;
            margin-top: 4rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem 0;
        }

        .social-link {
            font-size: 1.5rem;
            color: var(--light-color);
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-link:hover {
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        .copyright {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Bouton thème */
        .theme-toggle {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--primary-color);
            border: none;
            padding: 1rem;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
    </style>
    
</head>
<body>
    <!-- Navigation -->
    <nav class="nav-container">
        <div class="nav-menu">
            <h1 class="logo" style="color: #ecf0f1;">YM</h1>
            <button class="menu-toggle"><i class="fas fa-bars"></i></button>
            <div class="nav-links">
                <a href="pages/profile.html">Profil</a>
                <a href="pages/formation.html">Formation</a>
                <a href="pages/experience.html">Expériences</a>
                <a href="pages/competences.html">Compétences</a>
                <a href="pages/projets.html">Projets</a>
                <a href="pages/contact.html">Contact</a>
            </div>
        </div>
    </nav>

    <!-- En-tête -->
    <header class="header">
        <img src="assets/images/profile.jpg" alt="Yannick Madjiadoum" class="profile-img">
        <h1>MADJIADOUM YANNICK</h1>
        <p style="font-size: large;"><b>Ingénieur en Informatique</b></p>
        <div class="contact-info">
            <p><i class="fas fa-phone"></i> +235 65 23 44 80 / 91 31 78 59</p>
            <p><i class="fas fa-envelope"></i> yannickmadjiadoum@gmail.com</p>
        </div>
        <a href="CV_MADJIADOUM_YANNICK.pdf" download class="btn-download">Télécharger CV PDF</a>
    </header>

    <!-- Section Profil -->
    <section id="about" class="section">
        <h2 class="section-title">Profil Professionnel</h2>
        <p>Ingénieur en informatique passionné par le développement d'applications web, la gestion de bases de données et la maintenance des infrastructures informatiques. Compétent en résolution de problèmes techniques et conception de solutions IT.</p>
    </section>

    <!-- Section Profil -->
    <section id="formation" class="section" style="transform: translateY(-10px); 
      box-shadow: 0 0px 20px rgba(0,0,0,0.1);">
        <h2 class="section-title">Formations</h2>
        <p style="text-align: center; justify-content:flex-start "> <b>
             ➢ Licence en <i>Génie Informatique </i>
            CEFOD BUSINESS SCHOOL – 2021 - 2024 <br>
             ➢ Brevet de Technicien Supérieur (IAG)
            Informatique Appliquée à la Gestion – Décembre 2023 <br>
           ➢ Baccalauréat Série D
            Lycée Collège Évangélique Walter Ganz, Doba – 2019 - 2020 <br>
        </b>
           </p>
    </section>

    <!-- Section Expériences -->
    <section id="experience" class="section">
        <h2 class="section-title">Expériences Professionnelles</h2>
        <div class="timeline">
            <div class="timeline-item">
                <h3>Stage - FALE TECH</h3>
                <p class="date">Depuis Octobre 2024</p>
                <ul>
                    <li>Développement full-stack d'applications</li>
                    <li>Formation en infogérance</li>
                </ul>
            </div>
            <div class="timeline-item">
                <h3>Stage - Public Interest Law Center (PILC)</h3>
                <p class="date">Août - Octobre 2024</p>
                <ul>
                    <li>Développement et optimisation d'un système de gestion des dossiers juridiques</li>
                    <li>Gestion et maintenance de bases de données</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="skills" class="section">
        <h2 class="section-title">Compétences Techniques</h2>
        <div class="skills-container">
            <div class="skill-item">
                <h3>Développement Web</h3>
                <p>PHP, Java, HTML/CSS, JavaScript, React</p>
            </div>
            <div class="skill-item">
                <h3>Framework</h3>
                <p>Laravel, Django, Symphonie</p>
            </div>
            <div class="skill-item">
                <h3>Bases de Données</h3>
                <p>MySQL, ACCESS</p>
            </div>
            <div class="skill-item">
                <h3>Maintenance Informatique</h3>
                <p>Diagnostic matériel et logiciel, dépannage</p>
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section id="projects" class="section">
        <h2 class="section-title">Projets Réalisés</h2>
        <div class="carousel-container">
            <div class="carousel-slide">
                <div class="carousel-item">
                    <img src="assets/images/logo.jpg" alt="Application Exercices et Corrections">
                    <h3>Exercices et Corrections</h3>
                    <p>Application d'archivage de ressources éducatives</p>
                    <a href="https://exercicesetcorrectionscbs.com" target="_blank" class="btn-demo">Voir le projet</a>
                </div>
                <!-- Ajouter d'autres projets ici -->
                <div class="carousel-item">
                    <img src="assets/images/etudd.PNG" alt="Application Exercices et Corrections">
                    <h3>Exercices et Corrections</h3>
                    <p>Application d'archivage de ressources éducatives</p>
                    <a href="https://exercicesetcorrectionscbs.com" target="_blank" class="btn-demo">Voir le projet</a>
                </div>

            </div>
            <button style="background-color: #2ecc71;" class="carousel-button prev-button"><i class="fas fa-chevron-left"></i></button>
            <button style="background-color: #2ecc71;" class="carousel-button next-button"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="section">
        <h2 class="section-title">Contact</h2>
        <form id="contactForm" class="contact-form">
            <div class="form-group">
                <input type="text" id="name" name="name" required>
                <label for="name">Nom Complet</label>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" required>
                <label for="email">Adresse Email</label>
            </div>
            <div class="form-group">
                <textarea id="message" name="message" rows="5" required></textarea>
                <label for="message">Message</label>
            </div>
            <button type="submit" class="btn-submit">
                <span>Envoyer</span>
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </section>


    
    <button class="theme-toggle" onclick="toggleTheme()">
        <i class="fas fa-moon"></i> 
    </button>

    
    <!-- Bouton pour changer le thème -->
    <button class="theme-toggle-btn" id="themeToggle">Changer le thème</button>

    <script>
        // Sélectionnez le bouton et l'élément <html>
        const themeToggleBtn = document.getElementById('themeToggle');
        const htmlElement = document.documentElement;

        // Fonction pour basculer le thème
        themeToggleBtn.addEventListener('click', () => {
            // Vérifie le thème actuel
            if (htmlElement.getAttribute('data-theme') === 'dark') {
                htmlElement.setAttribute('data-theme', 'light');
                themeToggleBtn.textContent = 'Mode Sombre';
            } else {
                htmlElement.setAttribute('data-theme', 'dark');
                themeToggleBtn.textContent = 'Mode Clair';
            }
        });

        // Initialisation : Définir le thème selon le stockage local
        window.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                htmlElement.setAttribute('data-theme', savedTheme);
                themeToggleBtn.textContent = savedTheme === 'dark' ? 'Mode Clair' : 'Mode Sombre';
            }
        });

        // Sauvegarder le thème choisi dans le stockage local
        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-theme');
            localStorage.setItem('theme', currentTheme);
        });
    </script>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
</body>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-links">
            <a href="https://linkedin.com/in/votreprofil" class="social-link" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/votreprofil" class="social-link" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a href="mailto:yannickmadjiadoum@gmail.com" class="social-link">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
        <p class="copyright">&copy; 2024 MADJIADOUM Yannick - Tous droits réservés</p>
    </footer>
    <script>
        const toggle = document.getElementById('theme-toggle');
toggle.addEventListener('click', () => {
    document.body.dataset.theme =
        document.body.dataset.theme === 'dark' ? '' : 'dark';
});

    </script>
</html> 