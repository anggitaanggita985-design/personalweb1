<!DOCTYPE html>
<html>
<head>
    <title>Education History</title>

    <style>
   /* BACKGROUND UTAMA */
body {
    font-family: 'Segoe UI', sans-serif;
    background: url('https://i.pinimg.com/originals/91/09/54/910954754ae2d705cb5123764ac547e3.gif') no-repeat center center fixed;
    background-size: cover;
    padding: 40px;
    color: #f3e6ff;
}

/* JUDUL */
h1 {
    text-align: center;
    margin-bottom: 25px;
    letter-spacing: 1px;
    color: #e0c3ff;
}

/* TABLE GLASS (LEBIH GELAP) */
table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 15px;
    overflow: hidden;

    background: rgba(30, 0, 50, 0.5); /* ungu gelap transparan */
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);

    border: 1px solid rgba(200, 150, 255, 0.2);

    box-shadow: 
        0 8px 32px rgba(0, 0, 0, 0.6),
        inset 0 0 20px rgba(160, 32, 240, 0.15);

    transition: 0.4s ease;
}

/* HEADER */
th {
    background: rgba(120, 0, 200, 0.35);
    padding: 14px;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 1px;
    color: #f5eaff;
}

/* CELL */
td {
    padding: 12px;
    text-align: center;
    color: #e9d6ff;
}

/* ROW */
tr {
    border-bottom: 1px solid rgba(180, 120, 255, 0.2);
    transition: all 0.3s ease;
}

/* HOVER ROW */
tr:hover {
    background: rgba(140, 0, 255, 0.25);
    transform: scale(1.02);
    box-shadow: 0 0 15px rgba(160, 32, 240, 0.4);
}

/* TABLE HOVER */
table:hover {
    transform: translateY(-6px) scale(1.01);
    box-shadow: 
        0 15px 45px rgba(0,0,0,0.7),
        inset 0 0 25px rgba(160,32,240,0.2);
}

    /* HAPUS BORDER DEFAULT */
    table, th, td {
        border: none !important;
    }

    /* CONTAINER BUNGA */
.flower-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    overflow: hidden;
    z-index: 0;
}

/* 🌸 BUNGA NEON */
.flower {
    position: absolute;
    font-size: 20px;
    animation: fall linear infinite;
    opacity: 0.9;

    /* WARNA UNGU + GLOW */
    filter: hue-rotate(260deg) saturate(2);

    text-shadow:
        0 0 5px #d580ff,
        0 0 10px #c94cff,
        0 0 20px #a020f0,
        0 0 40px #8000ff;
}

/* ✨ SPARKLE */
.sparkle {
    position: absolute;
    width: 6px;
    height: 6px;
    border-radius: 50%;

    background: radial-gradient(circle, #e6ccff, #a020f0);
    box-shadow:
        0 0 6px #d580ff,
        0 0 12px #a020f0;

    animation: sparkleAnim 1s ease-out forwards;
}

/* ANIMASI JATUH */
@keyframes fall {
    0% {
        transform: translateY(-10vh) translateX(0) rotate(0deg);
        opacity: 0;
    }
    20% { opacity: 1; }
    100% {
        transform: translateY(110vh) translateX(30px) rotate(360deg);
        opacity: 0;
    }
}

/* ANIMASI SPARKLE */
@keyframes sparkleAnim {
    0% {
        transform: scale(0.5);
        opacity: 1;
    }
    100% {
        transform: scale(2);
        opacity: 0;
    }
}

/* BUNGA */
.flower {
    .flower 
    position: absolute;
    font-size: 20px;
    animation: fall linear infinite;
    opacity: 0.8;

    /* BIKIN WARNA JADI UNGU */
    filter: hue-rotate(260deg) saturate(2);

}

/* ANIMASI JATUH */
@keyframes fall {
    0% {
        transform: translateY(-10vh) rotate(0deg);
        opacity: 0;
    }
    20% {
        opacity: 1;
    }
    100% {
        transform: translateY(110vh) rotate(360deg);
        opacity: 0;
    }
}

/* WRAPPER ATAS */
.action-top {
    width: 80%;
    margin: 0 auto 20px auto;
    text-align: right;
}

/* BASE BUTTON */
.btn {
    padding: 8px 16px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 13px;
    margin: 2px;
    display: inline-block;
    transition: 0.3s ease;
}

/* GLASS STYLE */
.glass-btn {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(200,150,255,0.3);
    color: #f3e6ff;

    box-shadow:
        0 0 10px rgba(160,32,240,0.3),
        inset 0 0 5px rgba(255,255,255,0.1);

    position: relative;
    overflow: hidden;
}

/* LIGHT SWEEP */
.glass-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 200%;
    height: 100%;
    background: linear-gradient(
        120deg,
        transparent,
        rgba(255,255,255,0.3),
        transparent
    );
    transition: 0.6s;
}

.glass-btn:hover::before {
    left: 100%;
}

/* HOVER */
.glass-btn:hover {
    transform: translateY(-2px) scale(1.05);
    box-shadow:
        0 0 15px rgba(160,32,240,0.6),
        0 0 25px rgba(160,32,240,0.4);
}

/* VARIASI WARNA */
.add {
    border-color: rgba(180, 120, 255, 0.5);
}

.edit {
    border-color: rgba(120, 180, 255, 0.5);
}

.delete {
    border-color: rgba(255, 100, 150, 0.5);
}

/* DELETE HOVER (lebih nyala dikit) */
.delete:hover {
    box-shadow:
        0 0 15px rgba(255, 80, 120, 0.7),
        0 0 25px rgba(255, 80, 120, 0.4);
}
    </style>

</head>
<body>
<div class="flower-container"></div>
<h1>Education History</h1>
<div class="action-top">
  <a href="#" class="btn glass-btn add">+ Tambah</a>
</div>
<div class="table-wrapper">
    <table cellpadding="10">
        <tr>
            <th>School</th>
            <th>Degree</th>
            <th>Start Year</th>
            <th>End Year</th>
            <th>Action</th>
        </tr>

        @foreach ($educations as $edu)
        <tr>
    <td>{{ $edu->school_name }}</td>
    <td>{{ $edu->degree }}</td>
    <td>{{ $edu->start_year }}</td>
    <td>{{ $edu->end_year ?? '-' }}</td>
    <td>
        <a href="#" class="btn glass-btn edit">Edit</a>
        <a href="#" class="btn glass-btn delete">Delete</a>
    </td>
</tr>
        @endforeach

    </table>
</div>
<script>
const container = document.querySelector('.flower-container');

function createFlower() {
    const flower = document.createElement('div');
    flower.classList.add('flower');

    const flowers = ['🌸','🌺','💮'];
    flower.innerHTML = flowers[Math.floor(Math.random() * flowers.length)];

    flower.style.left = Math.random() * 100 + 'vw';

    const size = Math.random() * 20 + 18;
    flower.style.fontSize = size + 'px';

    const duration = Math.random() * 5 + 6;
    flower.style.animationDuration = duration + 's';

    // Variasi ungu
    const hue = 240 + Math.random() * 40;
    flower.style.filter = `hue-rotate(${hue}deg) saturate(2)`;

    container.appendChild(flower);

    // ✨ SPARKLE EFFECT
    const sparkleInterval = setInterval(() => {
        createSparkle(flower);
    }, 300);

    setTimeout(() => {
        flower.remove();
        clearInterval(sparkleInterval);
    }, duration * 1000);
}

function createSparkle(parent) {
    const sparkle = document.createElement('div');
    sparkle.classList.add('sparkle');

    const rect = parent.getBoundingClientRect();

    sparkle.style.left = rect.left + Math.random() * 30 + 'px';
    sparkle.style.top = rect.top + Math.random() * 30 + 'px';

    document.body.appendChild(sparkle);

    setTimeout(() => {
        sparkle.remove();
    }, 1000);
}

// spawn bunga
setInterval(createFlower, 600);
</script>
</body>
</html>