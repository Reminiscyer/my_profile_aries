document.addEventListener('contextmenu', function(e) {
    e.preventDefault(); 
});


(function anonymous() {
    debugger; 
})();

setInterval(() => {
    (function anonymous() {
        debugger; 
    })();
}, 100);
const sections = document.querySelectorAll('.section');
const navLinks = document.querySelectorAll('.nav-links li');
let currentIndex = 0;

function showSection(index) {
    
    sections.forEach(sec => sec.classList.remove('active'));
    
    sections[index].classList.add('active');
    currentIndex = index;
    
    navLinks.forEach(link => link.style.color = 'white');
    navLinks[index].style.color = 'var(--primary)';
}

function changeSection(direction) {
    let newIndex = currentIndex + direction;
    
    if (newIndex < 0) {
        newIndex = sections.length - 1;
    } else if (newIndex >= sections.length) {
        newIndex = 0;
    }
    
    showSection(newIndex);
}

function navigateTo(index) {
    showSection(index);
}

const canvas = document.getElementById('galaxyCanvas');
const ctx = canvas.getContext('2d');

let width, height;
let stars = [];
const numStars = 100; 

function resize() {
    width = window.innerWidth;
    height = window.innerHeight;
    canvas.width = width;
    canvas.height = height;
}
window.addEventListener('resize', resize);
resize();

class Star {
    constructor() {
        this.x = Math.random() * width;
        this.y = Math.random() * height;
        this.vx = (Math.random() - 0.5) * 0.5; 
        this.vy = (Math.random() - 0.5) * 0.5; 
        this.size = Math.random() * 2 + 1;
    }

    update() {
        this.x += this.vx;
        this.y += this.vy;

        if (this.x < 0 || this.x > width) this.vx *= -1;
        if (this.y < 0 || this.y > height) this.vy *= -1;
    }

    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fillStyle = 'white';
        ctx.fill();
    }
}

for (let i = 0; i < numStars; i++) {
    stars.push(new Star());
}

let mouse = { x: null, y: null };
window.addEventListener('mousemove', (e) => {
    mouse.x = e.x;
    mouse.y = e.y;
});

function animate() {
    ctx.clearRect(0, 0, width, height);
    
    let gradient = ctx.createLinearGradient(0, 0, 0, height);
    gradient.addColorStop(0, '#0b0d17');
    gradient.addColorStop(1, '#150024');
    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, width, height);

    stars.forEach(star => {
        star.update();
        star.draw();

        if (mouse.x) {
            let dx = mouse.x - star.x;
            let dy = mouse.y - star.y;
            let distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < 150) {
                ctx.beginPath();
                ctx.strokeStyle = `rgba(0, 212, 255, ${1 - distance / 150})`;
                ctx.lineWidth = 1;
                ctx.moveTo(star.x, star.y);
                ctx.lineTo(mouse.x, mouse.y);
                ctx.stroke();
            }
        }
    });

    requestAnimationFrame(animate);
}

animate();
