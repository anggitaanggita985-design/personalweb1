<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Me</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background: linear-gradient(135deg, #2b0a0a, #5a0f1c, #8b1e3f);
  color: #f5f5f5;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

/* CONTAINER GLASS */
.container {
    
    position: relative;
  overflow: hidden;
  width: 90%;
  max-width: 1100px;
  padding: 40px;
  border-radius: 30px;

  background: rgba(255,255,255,0.04);
  backdrop-filter: blur(30px);
  -webkit-backdrop-filter: blur(30px);

  border: 1px solid rgba(255,255,255,0.2);

  box-shadow:
    inset 0 1px 2px rgba(255,255,255,0.3),
    0 15px 60px rgba(0,0,0,0.6);

  transition: 0.3s;
}

.container::before {
  content: "";
      position: absolute;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(255, 215, 180, 0.11), transparent);
      top: -100px;
      right: -100px;
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

/* aktif saat hover */
.container:hover::after {
  opacity: 1;
}

/* HEADER */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 40px;
}

header h1 {
  color: #ffd7b4;
}
nav {
    display: flex;
      align-items: center
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

/* ABOUT SECTION */
.about {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 40px;
  align-items: center;
}

/* FOTO */
.about-img img {
  width: 100%;
  border-radius: 20px;

  border: 2px solid rgba(255,215,180,0.4);

  box-shadow:
    0 0 25px rgba(255,215,180,0.3),
    0 0 60px rgba(139,30,63,0.6);
}

/* TEXT */
.about-text h2 {
  font-size: 32px;
  margin-bottom: 15px;
}

.about-text span {
  color: #ffd7b4;
}

.about-text p {
  opacity: 0.85;
  margin-bottom: 20px;
  line-height: 1.6;
}

/* SKILLS GLASS */
.skills {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.skill {
  padding: 8px 15px;
  border-radius: 15px;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(10px);

  border: 1px solid rgba(255,255,255,0.2);
  transition: 0.3s;
}

.skill:hover {
  transform: scale(1.05);
  background: rgba(255,255,255,0.12);
}

/* HOVER */
.container:hover {
  transform: scale(1.01);
}

/* RESPONSIVE */
@media(max-width: 768px){
  .about {
    grid-template-columns: 1fr;
    text-align: center;
  }
}

.hobby {
  margin-top: 25px;
}

.hobby h3 {
  margin-bottom: 10px;
  color: #ffd7b4;
}

.hobby-list {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.hobby-item {
  padding: 8px 15px;
  border-radius: 15px;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(10px);

  border: 1px solid rgba(255,255,255,0.2);

  transition: 0.3s;
}

.hobby-item:hover {
  transform: scale(1.05);
  background: rgba(255,255,255,0.12);
}
</style>
</head>

<body>

<div class="container">

<header>
  <h1>About Me</h1>
  <nav>
    <a href="/profile">Home</a>
    <a href="/about">About</a>
    <a href="/project">Project</a>
    <a href="/contact">Contact</a>
  </nav>
</header>

<section class="about">

  <div class="about-img">
    <img src="https://i.pinimg.com/originals/3d/53/e7/3d53e71011c2792de9fd6c82e9396730.gif" alt="Foto About">
    
  </div>

  <div class="about-text">
    <h2>Hi, I'm <span>Anggy</span></h2>

    <p>
      I am a software engineering student with a passion for modern technology, particularly web development and artificial intelligence.
    I am passionate about creating elegant, interactive, and user-friendly designs.
    I believe that the combination of logic and creativity is the key to building exceptional digital experiences.
    </p>

   <div class="skills">

  @foreach($skills as $skill)

    <div class="skill">
      {{ $skill->name }} - {{ $skill->level }}%
    </div>

  @endforeach

</div>
 <!-- HOBBY -->
    <div class="hobby">
      <h3>Hobby</h3>
      <div class="hobby-list">
        <div class="hobby-item">🎮 Gaming</div>
        <div class="hobby-item">📖 Reading</div>
        <div class="hobby-item">💻 Coding</div>
        <div class="hobby-item">🎧 Music</div>
      </div>
    </div>
  </div>
<!-- EXPERIENCE -->

<div class="hobby">
  <h3>Experience</h3>

  @foreach($experiences as $experience)

  <div class="hobby-item" style="margin-bottom:10px; width:100%;">

      <h4>{{ $experience->title }}</h4>

      <p>{{ $experience->company }}</p>

      <small>{{ $experience->description }}</small>

  </div>

  @endforeach

</div>
</section>

</div>

</body>
</html>