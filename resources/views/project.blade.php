<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project</title>

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

/* CONTAINER */
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

/* EFFECT HALUS */
.container:hover {
  transform: translateY(-3px) scale(1.01);

  box-shadow:
    0 15px 50px rgba(0,0,0,0.5),
    0 0 25px rgba(255,215,180,0.2);
}

.container:hover::after {
  opacity: 1;
}

.container:active {
  transform: scale(0.99);

  box-shadow:
    0 8px 25px rgba(0,0,0,0.5),
    inset 0 2px 6px rgba(0,0,0,0.6);
}

/* HEADER */
header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 30px;
}

header h1 {
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

/* PROJECT LIST */
.project-list {
  display: grid;
  grid-template-columns: repeat(3, 280px); /* 🔥 fix lebar card */
  justify-content: center;                 /* 🔥 biar ke tengah */
  gap: 25px;                               /* 🔥 jarak lebih pas */
}

/* CARD PROJECT */
.project-card {
   display: block;        /* 🔥 jadi vertikal */
  width: 280px;          /* 🔥 biar kecil & sejajar */
  flex: 0 0 auto;        /* 🔥 WAJIB biar tidak turun */

  padding: 20px;
  border-radius: 20px;

  background: rgba(255,255,255,0.06);
  backdrop-filter: blur(20px);

  border: 1px solid rgba(255,255,255,0.2);

  transition: all 0.3s ease;
}

/* EFFECT CARD */
.project-card:hover {
  transform: translateY(-3px) scale(1.01);

  box-shadow:
    0 10px 30px rgba(0,0,0,0.5),
    0 0 20px rgba(255,215,180,0.2);
}

.project-card:active {
  transform: scale(0.98);
}

/* IMAGE */
.project-img img {
  width: 100%;
  height: 140px;
  object-fit: cover;
  border-radius: 15px;
}

/* TEXT */
.project-text h3 {
  color: #ffd7b4;
  margin-bottom: 5px;
}

.project-text p {
  opacity: 0.85;
}

/* TAG */
.tags {
  margin-top: 10px;
}

.tag {
  display: inline-block;
  padding: 5px 10px;
  border-radius: 10px;

  background: rgba(255,255,255,0.1);
  margin-right: 5px;
  font-size: 12px;
}
</style>
</head>

<body>

<div class="container">

<header>
  <h1>My Project</h1>
  <nav>
    <a href="/home">Home</a>
    <a href="/about">About</a>
    <a href="/project">Project</a>
    <a href="/contact">Contact</a>
  </nav>
</header>

<section class="project-list">

@foreach($projects as $project)

<div class="project-card">

    <div class="project-img">
        <img src="{{ $project->image }}">
    </div>

    <div class="project-text">

        <h3>{{ $project->title }}</h3>

        <p>{{ $project->description }}</p>

        <div class="tags">
            <span class="tag">{{ $project->technology }}</span>
        </div>

    </div>

</div>

@endforeach

</section>

</section>

</div>

</body>
</html>