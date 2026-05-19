<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Web Anggy</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #2b0a0a, #5a0f1c, #8b1e3f);
      display: flex;
      justify-content: center;
      align-items: center;
      color: #f5f5f5;
    }

    .container {
      transition: all 0.3s ease;
      cursor: pointer;
      width: 90%;
      max-width: 1000px;
      padding: 35px;
      border-radius: 30px;

      background: rgba(255,255,255,0.04);
      backdrop-filter: blur(35px);
      -webkit-backdrop-filter: blur(35px);

      border: 1px solid rgba(255,255,255,0.25);

      box-shadow:
      inset 0 1px 2px rgba(255, 255, 255, 0.15),
      0 15px 60px rgba(0,0,0,0.7);

      position: relative;
      overflow: hidden;
    }
/* aktif saat hover */
.container:hover::after {
  opacity: 1;
}
    /* Glow efek */
.container::before {
      content: "";
      position: absolute;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(255, 215, 180, 0.11), transparent);
      top: -100px;
      right: -100px;
    }

.container:hover {
    transform: translateY(-5px) scale(1.01);

     box-shadow:
    inset 0 1px 3px rgba(255,255,255,0.4),
    0 20px 60px rgba(0,0,0,0.7),
    0 0 25px rgba(255, 215, 180, 0.3);
}

.container::after {
  content: "";
  position: absolute;
  inset: 0;

  background: url('https://i.pinimg.com/originals/60/e4/1c/60e41c2c3dd3163083a75e39a3a413e5.gif');
  background-size: cover;
  background-position: center;

  opacity: 0.25; /* 🔥 atur transparansi */
  z-index: -1;
}
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 50px;
    }

    header h1 {
      font-weight: 700;
      letter-spacing: 2px;
      color: #ffd7b4;
    }

    nav {
      display: flex;
      align-items: center;
    }

    nav a {
      margin-left: 25px;
      font-weight: 500;
      position: relative;
      padding: 8px 16px;
      border-radius: 12px;

      color: #f5f5f5;
      text-decoration: none;

      transition: 0.3s;
    }
    nav a:hover {
  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(10px);

  border: 1px solid rgba(255,255,255,0.2);

  box-shadow:
    0 0 10px rgba(255,215,180,0.2);
}

    /* FOTO PROFILE */
    .profile-img {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .profile-img img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;

      border: 3px solid rgba(255, 215, 180, 0.6);

      box-shadow: 
        0 0 20px rgba(255, 215, 180, 0.3),
        0 0 40px rgba(139, 30, 63, 0.5);

      transition: 0.4s;
    }

    .profile-img img:hover {
      transform: scale(1.05);
      box-shadow: 
        0 0 30px rgba(255, 215, 180, 0.5),
        0 0 60px rgba(139, 30, 63, 0.7);
    }

    .hero {
      text-align: center;
      margin-bottom: 50px;
    }

    .hero h2 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .hero span {
      color: #ffd7b4;
    }

    .hero p {
      opacity: 0.85;
    }

    footer {
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      opacity: 0.7;
    }

    #typing-text {
  color: #ffd7b4;

  text-shadow:
    0 0 5px rgba(255, 215, 180, 0.6),
    0 0 10px rgba(255, 215, 180, 0.5),
    0 0 20px rgba(139, 30, 63, 0.6),
    0 0 40px rgba(139, 30, 63, 0.4);
}

@keyframes glowPulse {
  0% {
    text-shadow:
      0 0 5px rgba(255, 215, 180, 0.5),
      0 0 10px rgba(255, 215, 180, 0.4),
      0 0 20px rgba(139, 30, 63, 0.5);
  }

  50% {
    text-shadow:
      0 0 10px rgba(255, 215, 180, 0.8),
      0 0 20px rgba(255, 215, 180, 0.7),
      0 0 40px rgba(139, 30, 63, 0.8);
  }

  100% {
    text-shadow:
      0 0 5px rgba(255, 215, 180, 0.5),
      0 0 10px rgba(255, 215, 180, 0.4),
      0 0 20px rgba(139, 30, 63, 0.5);
  }
}

#typing-text {
  animation: glowPulse 2s infinite;
background: linear-gradient(90deg, #ffd7b4, #ff4b2b, #ffd7b4);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
  </style>
</head>

<body>
  <div class="container">
    <header>
      <h1>{{ $title }}</h1>
      <nav>
        <a href="/home" class="{{ request()->is('home') ? 'active' : '' }}">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
       <a href="/project" class="{{ request()->is('project') ? 'active' : '' }}">Project</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
      </nav>
    </header>

    <section class="hero">

      <div class="profile-img">
        <img src="https://i.pinimg.com/originals/8e/9c/f9/8e9cf93f371a8aeb411e540afa7ee4e8.gif" alt="Foto Profile">
      </div>

      <h2>Hi!, I Am <span>{{ $profile->fullname }}</span></h2>
      <p><span id="typing-text"></span></p>
    </section>
    
    <footer>
      <p>© 2026 • Personal Website</p>
    </footer>
    </div>
<script>
const texts = [
    "{{ $profile->bio }}",
    "Cyber Security",
    "UI/UX Designer"
];

let index = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
    const currentText = texts[index];
    const display = document.getElementById("typing-text");

    if (isDeleting) {
        charIndex--;
    } else {
        charIndex++;
    }

    display.textContent = currentText.substring(0, charIndex);

    let speed = isDeleting ? 60 : 120;

    if (!isDeleting && charIndex === currentText.length) {
        isDeleting = true;
        speed = 1200;
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        index = (index + 1) % texts.length;
        speed = 500;
    }

    setTimeout(typeEffect, speed);
}

typeEffect();
</script>
</body>
</html>