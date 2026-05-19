<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact</title>

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

/* CONTAINER GLASS (TIDAK DIUBAH) */
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

.container:hover {
  transform: translateY(-3px) scale(1.01);

  box-shadow:
    0 15px 50px rgba(0,0,0,0.5),
    0 0 25px rgba(255,215,180,0.2),
    inset 0 1px 2px rgba(255,255,255,0.3);
}

/* Glow */
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
  align-items: center;
}

nav a {
  margin-left: 25px;
  font-weight: 500;
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

/* CONTACT LAYOUT */
.contact {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: start;
}

/* LEFT SIDE */
.contact-info h2 {
  color: #ffd7b4;
  margin-bottom: 10px;
}

.contact-info {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

/* ITEM BOX */
.contact-item {
  display: flex;
  align-items: center;
  gap: 12px;

  padding: 12px 15px;
  border-radius: 12px;

  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.15);

  transition: 0.3s;
}

.contact-item:hover {
  background: rgba(255,255,255,0.12);
}

/* FORM */
form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

input, textarea {
  padding: 14px;
  border-radius: 12px;
  border: none;
  outline: none;

  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(10px);

  color: #fff;
  font-size: 14px;
}

input::placeholder,
textarea::placeholder {
  color: rgba(255,255,255,0.6);
}

textarea {
  resize: none;
  height: 120px;
}

/* BUTTON (TIDAK DIUBAH STYLE UTAMA) */
button {
  padding: 14px;
  border-radius: 12px;
  border: none;

  background: linear-gradient(135deg, #ffd7b4, #ff4b2b);
  color: #000;
  font-weight: 600;

  cursor: pointer;
  transition: 0.3s;
}

button:hover {
  transform: scale(1.05);
}

button:active {
  transform: scale(0.97);

  box-shadow:
    0 0 10px rgba(255,215,180,0.6),
    0 0 20px rgba(255,75,43,0.6),
    inset 0 2px 5px rgba(0,0,0,0.5);
}

/* RESPONSIVE */
@media(max-width: 768px){
  .contact {
    grid-template-columns: 1fr;
  }
}

.contact-item a {
  color: #f5f5f5;        /* 🔥 warna putih */
  text-decoration: none; /* 🔥 hilangin garis bawah */
  display: block;
  width: 100%;
  transition: all 0.3s ease;
}

/* hover */
.contact-item a:hover {
  transform: scale(1.01);
  color: #ffd7b4;        /* 🔥 warna hover kamu */
}
</style>
</head>

<body>

<div class="container">

<header>
  <h1>Contact</h1>
  <nav>
    <a href="/home">Home</a>
    <a href="/about">About</a>
    <a href="/project">Project</a>
    <a href="/contact">Contact</a>
  </nav>
</header>

<section class="contact">

  <!-- LEFT -->
  <div class="contact-item">
  <a href="https://instagram.com/{{ $contact->instagram }}" target="_blank">
    📸 {{ $contact->instagram }}
  </a>
</div>

<div class="contact-item">
  <a href="https://github.com/{{ $contact->github }}" target="_blank">
    💻 {{ $contact->github }}
  </a>
</div>

<div class="contact-item">
  <a href="mailto:{{ $contact->email }}">
    📧 {{ $contact->email }}
  </a>
</div>

<div class="contact-item">
  <a href="https://wa.me/{{ $contact->whatsapp }}" target="_blank">
    💬 {{ $contact->whatsapp }}
  </a>
</div>
  <!-- RIGHT -->
  <form>
    <input type="text" placeholder="Name" required>
    <input type="email" placeholder="Email" required>
    <textarea placeholder="Message..." required></textarea>
    <button type="submit">Send</button>
  </form>

</section>

</div>

</body>
</html>