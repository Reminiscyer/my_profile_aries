<?php

class PortfolioModel {
    
    public function getPersonalData() {
        return [
            'name' => 'Alexis Aries D. Rebucas',
            'title' => 'Programmer & Author',
            'goals' => 'To bridge the gap between complex backend logic and immersive frontend storytelling.',
            'summary' => 'Passionate developer with experience in frontend and backend environments, specializing in Java and interactive web design using CSS and JavaScript.',
            'birthdate' => 'December 8, 2004',
            'age' => 21,
            'location' => 'Dipolog City, Philippines',
            'email' => 'alexisariesrebucas@gmail.com'
        ];
    }

    public function getSkills() {
        return ['Java', 'HTML5', 'MySQL', 'PHP', 'JavaScript', 'CodeIgniter 3', 'Bootstrap', 'CSS3'];
    }

    public function getHobbies() {
        return ['Writing Novels', 'Translating Fanfictions', 'Gaming', 'Reading'];
    }

    public function getEducation() {
        return [
            [
                'degree' => 'BS Computer Science',
                'school' => 'Andres Bonifacio College',
                'year' => '2023 - Present',
                'details' => 'Dipolog City Scholar<br>
                              <b>1st Year:</b> 1.68 GPA<br>
                              <b>2nd Year:</b> 1.56 GPA (Category 3)<br>
                              <b>3rd Year:</b> 1.35 GPA (Potential Category 2)'
            ],
            [
                'degree' => 'Senior High School (HUMSS)',
                'school' => 'Zamboanga Del Norte National High School - Turno Campus',
                'year' => '2021 - 2023',
                'details' => 'ZNNHS Band Member<br>
                            <b>Consistent with Honors</b>
                              <b>and Graduated with Honors (94% Average)</b>'
            ]
        ];
    }

    public function getTrainings() {
        return [
            [
                'title' => 'Arduino Robotics Workshop',
                'organizer' => 'TechMinds',
                'date' => 'Nov 2025'
            ],
            [
                'title' => 'DESO Technical Support Staff Training',
                'organizer' => 'COMELEC',
                'date' => 'Feb 2025'
            ]
        ];
    }

    public function getExperiences() {
        return [
            [
                'title' => 'Web Developer Intern',
                'place' => 'Rebucas Technical and Industrial Company',
                'date' => '2023 - Present',
                'desc' => 'Full-stack development using HTML/Bootstrap for frontend and CodeIgniter for backend logic.'
            ],
            [
                'title' => 'DESO Technical Support',
                'place' => 'Gulayon Integrated School',
                'date' => 'May 2025',
                'desc' => 'Provided technical support during FTS (May 8-9) and Election Day (May 12).'
            ]
        ];
    }

    public function getProjects() {
        return [
            [
                'name' => 'Portfolio Galaxy <br>',
                'role' => 'Main Programmer',
                'tech' => 'PHP, JS, CSS, HTML',
                'desc' => 'An interactive resume for upcoming intership.'
            ],
            [
                'name' => 'Starfall Library System <br>',
                'role' => 'Main Programmer',
                'tech' => 'PHP, HTML, JS, CSS MySQL',
                'desc' => 'Book manager system for school libraries.'
            ],

             [
                'name' => 'AB Assist: Andres Bonifacio College Chatbot and Revamp Queueing System <br>',
                'role' => 'Frontend Developer',
                'tech' => 'PHP, JS, MySQL, API',
                'desc' => 'Book manager system for school libraries.'
            ],
            
            [
                'name' => 'Elementary School Portal <br>',
                'role' => '1 of the 3 Programmers',
                'tech' => 'Java, JavaFXML, CSS',
                'desc' => 'A portal for Elementary School which had features like:<br>Admin who controls and view everything except private data. <br>Teacher for giving grades and announcements. And Student who view grades and more.'
            ],
             [
                'name' => 'Authors Fantasy <br>',
                'role' => 'Leader',
                'tech' => 'Java, CSS',
                'desc' => 'A software for novel authors. '
             ],
            [
                'name' => 'Tower of Mazi <br>',
                'role' => 'Main Programmer',
                'tech' => 'Java',
                'desc' => 'A text-based RPG game which has 100 floors for players to clear.'
            ]
        ];
    }

    // NEW: Organizations Section
    public function getOrganizations() {
        return [
            [
                'name' => 'ABC Computer Science Society (CS Society)',
                'role' => 'Vice President',
                'years' => '2025 - 2026'
            ],
            [
                'name' => 'TechMinds School Club',
                'role' => 'Member',
                'years' => '2025 - Present'
            ]
        ];
    }

    public function getCertifications() {
        return [
            ['title' => 'Arduino Robotics Workshop - <b>TechMinds</b>', 'held_at' => 'ABC', 'date' => 'Dec 2025'],
            ['title' => 'DESO Technical Support Staff Training - <b>COMELEC</b>', 'held_at' => ' Mibang Hotel, Sta. Filomena, Dipolog City', 'date' => 'Feb 2025']      
        ];
    }

    public function getSocials() {
        return [
            ['name' => 'Facebook', 'url' => 'https://www.facebook.com/share/1DCQ2Km5E3/', 'icon' => 'fa-facebook-f'],
            ['name' => 'Instagram', 'url' => 'https://www.instagram.com/akitsujiza.8?igsh=MWdhemtwZ2N2dmts', 'icon' => 'fa-instagram'],
            ['name' => 'TikTok', 'url' => 'https://www.tiktok.com/@akitzu5?_r=1&_t=ZS-92Z3YW4MBDk', 'icon' => 'fa-tiktok'],
            ['name' => 'YouTube', 'url' => 'https://youtube.com/@akitsujiza8?si=NGQwYeky-RtvsbOY', 'icon' => 'fa-youtube']
        ];
    }
}
?>