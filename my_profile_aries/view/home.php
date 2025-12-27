<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $personalInfo['name']; ?> - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/my_profile_aries/assets/style.css"> 
</head>
<body>

    <canvas id="galaxyCanvas"></canvas>

    <nav class="navbar">
        <div class="logo">ARIES.DEV</div>
        <ul class="nav-links">
            <li onclick="navigateTo(0)">Intro</li>
            <li onclick="navigateTo(1)">Profile</li>
            <li onclick="navigateTo(2)">Education</li>
            <li onclick="navigateTo(3)">Training</li>
            <li onclick="navigateTo(4)">Exp</li>
            <li onclick="navigateTo(5)">Projects</li>
            <li onclick="navigateTo(6)">Orgs</li>
            <li onclick="navigateTo(7)">Certs</li>
            <li onclick="navigateTo(8)">Contact</li>
        </ul>
    </nav>

    <div class="nav-arrow prev-arrow" onclick="changeSection(-1)"><i class="fas fa-chevron-left"></i></div>
    <div class="nav-arrow next-arrow" onclick="changeSection(1)"><i class="fas fa-chevron-right"></i></div>

    <div class="main-container">

        <section class="section active">
            <div class="content-box glass">
                <div class="img-container">
                    <<img src="/my_profile_aries/assets/profile.jpg" alt="Profile" onerror="this.style.display='none'">
                </div>
                <h1><?php echo $personalInfo['name']; ?></h1>
                <h3><?php echo $personalInfo['title']; ?></h3>
                <p style="margin-top: 20px; font-style: italic;"><?php echo $personalInfo['goals']; ?></p>
            </div>
        </section>

        <section class="section">
            <div class="content-box glass">
                <h2>Profile Overview</h2>
                <div class="grid-2">
                    <div>
                        <h3>About Me</h3>
                        <p><?php echo $personalInfo['summary']; ?></p>
                        <ul style="list-style:none; margin-top:15px; line-height:2;">
                            <li><i class="fas fa-birthday-cake highlight"></i> <?php echo $personalInfo['birthdate']; ?></li>
                            <li><i class="fas fa-map-marker-alt highlight"></i> <?php echo $personalInfo['location']; ?></li>
                        </ul>
                    </div>
                    <div>
                        <h3>Skills</h3>
                        <div class="tags">
                            <?php foreach($skills as $skill): ?>
                                <span class="tag skill"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <h3 style="margin-top: 20px;">Hobbies</h3>
                        <div class="tags">
                            <?php foreach($hobbies as $hobby): ?>
                                <span class="tag hobby"><?php echo $hobby; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="content-box glass">
                <h2>Education</h2>
                <div class="grid-cards">
                    <?php foreach($education as $edu): ?>
                    <div class="card">
                        <div class="date-badge"><?php echo $edu['year']; ?></div>
                        <h3><?php echo $edu['degree']; ?></h3>
                        <h4><?php echo $edu['school']; ?></h4>
                        <p><?php echo $edu['details']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="content-box glass">
                <h2>Trainings & Seminars</h2>
                <div class="grid-cards">
                    <?php foreach($trainings as $train): ?>
                    <div class="card">
                        <i class="fas fa-chalkboard-teacher highlight" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <h3><?php echo $train['title']; ?></h3>
                        <h4><?php echo $train['organizer']; ?></h4>
                        <p class="date-badge"><?php echo $train['date']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="content-box glass">
                <h2>Work Experience</h2>
                <div class="timeline">
                    <?php foreach($experiences as $exp): ?>
                    <div class="timeline-item">
                        <span class="date-badge"><?php echo $exp['date']; ?></span>
                        <h3><?php echo $exp['title']; ?></h3>
                        <h4><?php echo $exp['place']; ?></h4>
                        <p><?php echo $exp['desc']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="content-box glass">
                <h2>My Projects</h2>
                <div class="grid-cards">
                    <?php foreach($projects as $proj): ?>
                    <div class="card">
                        <h3><?php echo $proj['name']; ?></h3>
                        <span class="tag skill" style="font-size:0.7rem;"><?php echo $proj['tech']; ?></span>
                        <h4 style="margin-top:10px;"><?php echo $proj['role']; ?></h4>
                        <p><?php echo $proj['desc']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="content-box glass">
                <h2>Organizations</h2>
                <div class="grid-cards">
                    <?php foreach($organizations as $org): ?>
                    <div class="card" style="border-left: 3px solid var(--secondary);">
                        <h3><?php echo $org['name']; ?></h3>
                        <h4><?php echo $org['role']; ?></h4>
                        <small><?php echo $org['years']; ?></small>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="content-box glass">
                <h2>Certifications</h2>
                <div class="grid-cards">
                    <?php foreach($certifications as $cert): ?>
                    <div class="card">
                        <i class="fas fa-certificate" style="color: gold; font-size: 1.5rem;"></i>
                        <h3><?php echo $cert['title']; ?></h3>
                        <p><?php echo $cert['held_at']; ?></p>
                        <small><?php echo $cert['date']; ?></small>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="content-box glass">
                <h2>Let's Connect</h2>
                <p>Feel free to reach out via email or social media.</p>
                <div class="social-links">
                    <?php foreach($socials as $social): ?>
                        <a href="<?php echo $social['url']; ?>" target="_blank" class="social-btn">
                            <i class="fab <?php echo $social['icon']; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div style="margin-top: 40px;">
                    <p style="font-family: 'Orbitron'; color: var(--primary);">
                        <?php echo $personalInfo['email']; ?>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <script src="/my_profile_aries/assets/script.js"></script>
</body>
</html>