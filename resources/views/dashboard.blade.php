<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Portofolio Dosen — UIN Cirebon</title>
	<style>
		:root{--bg:#0f172a;--card:#111827;--muted:#94a3b8;--text:#e5e7eb;--accent:#22c55e;--accent-2:#38bdf8;--border:#1f2937}
		*{box-sizing:border-box}
		body{margin:0;background:linear-gradient(180deg,#0b1220, #0f172a);color:var(--text);font-family:ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji"}
		.container{max-width:1080px;margin:0 auto;padding:28px}
		a{color:var(--accent-2);text-decoration:none}
		a:hover{text-decoration:underline}
		.header{display:flex;gap:20px;align-items:center;flex-wrap:wrap}
		.avatar{width:84px;height:84px;border-radius:50%;background:linear-gradient(135deg,#22c55e33,#38bdf833);display:flex;align-items:center;justify-content:center;border:1px solid var(--border)}
		.avatar span{font-size:30px;font-weight:700;color:var(--accent)}
		h1{margin:0;font-size:28px}
		.subtitle{color:var(--muted);margin-top:6px}
		.grid{display:grid;grid-template-columns:repeat(12,1fr);gap:16px;margin-top:24px}
		.card{background:rgba(17,24,39,.7);backdrop-filter: blur(8px);border:1px solid var(--border);border-radius:14px;padding:18px}
		.card h3{margin:0 0 10px 0;font-size:16px;color:#cbd5e1}
		.card p{margin:0;color:#e5e7eb}
		.stat{display:flex;align-items:baseline;gap:10px}
		.stat .num{font-size:28px;font-weight:800;color:#fff}
		.stat .label{color:var(--muted)}
		.badge{display:inline-block;border:1px solid var(--border);padding:6px 10px;border-radius:999px;color:#cbd5e1;margin:6px 6px 0 0}
		.list{display:grid;gap:12px}
		.list-item{display:flex;justify-content:space-between;gap:12px}
		.list-item .left{color:#e5e7eb}
		.list-item .right{color:var(--muted)}
		.footer{margin-top:28px;color:var(--muted);font-size:14px}
		@media (max-width: 900px){.grid{grid-template-columns:1fr}.list-item{flex-direction:column;align-items:flex-start}}
	</style>
</head>
<body>
	<div class="container">
		<header class="header">
			<div class="avatar"><span>DR</span></div>
			<div>
				<h1>Suhadi Parman, M.Kom.</h1>
				<div class="subtitle">Dosen | UIN Syekh Nurjati Cirebon — Fakultas Sains & Teknologi</div>
				<div class="subtitle">Fokus: Kecerdasan Buatan, Pembelajaran Mesin, Data Sains</div>
			</div>
		</header>

		<section class="grid">
			<div class="card" style="grid-column: span 4">
				<div class="stat"><div class="num">12+</div><div class="label">Tahun Mengajar</div></div>
			</div>
			<div class="card" style="grid-column: span 4">
				<div class="stat"><div class="num">38</div><div class="label">Publikasi</div></div>
			</div>
			<div class="card" style="grid-column: span 4">
				<div class="stat"><div class="num">6</div><div class="label">Riset Aktif</div></div>
			</div>

			<div class="card" style="grid-column: span 8">
				<h3>Profil Singkat</h3>
				<p>Saya adalah Dosen di UIN Syekh Nurjati Cirebon dengan minat riset pada model pembelajaran mesin terapan untuk edukasi dan kesehatan. Berpengalaman memimpin beberapa hibah riset nasional dan kolaborasi industri.</p>
				<div style="margin-top:12px">
					<span class="badge">AI</span>
					<span class="badge">Machine Learning</span>
					<span class="badge">Data Mining</span>
					<span class="badge">NLP</span>
				</div>
			</div>
			<div class="card" style="grid-column: span 4">
				<h3>Tautan</h3>
				<div class="list">
					<a href="#" target="_blank">Google Scholar</a>
					<a href="#" target="_blank">SINTA</a>
					<a href="#" target="_blank">ORCID</a>
					<a href="#" target="_blank">CV (PDF)</a>
				</div>
			</div>

			<div class="card" style="grid-column: span 6">
				<h3>Pendidikan</h3>
				<div class="list">
					<div class="list-item"><div class="left">Ph.D. Ilmu Komputer — Universitas X</div><div class="right">2018</div></div>
					<div class="list-item"><div class="left">M.Sc. Informatika — Universitas Y</div><div class="right">2013</div></div>
					<div class="list-item"><div class="left">S.Kom — Universitas Z</div><div class="right">2010</div></div>
				</div>
			</div>
			<div class="card" style="grid-column: span 6">
				<h3>Mata Kuliah Diampu</h3>
				<div class="list">
					<div class="list-item"><div class="left">Kecerdasan Buatan</div><div class="right">Ganjil</div></div>
					<div class="list-item"><div class="left">Pembelajaran Mesin</div><div class="right">Genap</div></div>
					<div class="list-item"><div class="left">Pemrosesan Bahasa Alami</div><div class="right">Ganjil</div></div>
				</div>
			</div>

			<div class="card" style="grid-column: span 7">
				<h3>Publikasi Pilihan</h3>
				<div class="list">
					<div class="list-item"><div class="left">Model Klasifikasi Teks Bahasa Indonesia untuk Edukasi</div><div class="right">2024</div></div>
					<div class="list-item"><div class="left">Deteksi Dini Penyakit Menggunakan Citra Medis</div><div class="right">2023</div></div>
					<div class="list-item"><div class="left">Analisis Sentimen Multi-Label pada Media Sosial</div><div class="right">2022</div></div>
				</div>
				<div style="margin-top:10px"><a href="#">Lihat semua publikasi →</a></div>
			</div>
			<div class="card" style="grid-column: span 5">
				<h3>Riset & Hibah</h3>
				<div class="list">
					<div class="list-item"><div class="left">Hibah Riset Nasional: NLP untuk Pendidikan</div><div class="right">2024–2026</div></div>
					<div class="list-item"><div class="left">Kolaborasi Industri: AI untuk Kesehatan</div><div class="right">2023–2025</div></div>
					<div class="list-item"><div class="left">Pengembangan Dataset Bahasa Daerah</div><div class="right">2022–2023</div></div>
				</div>
			</div>

			<div class="card" style="grid-column: span 12">
				<h3>Kontak</h3>
				<p>Email: nama.dosen@uin.ac.id · Kampus: UIN Syekh Nurjati Cirebon</p>
			</div>
		</section>

		<div class="footer">© <span id="y"></span> UIN Syekh Nurjati Cirebon · Dashboard Portofolio Dosen</div>
	</div>
	<script>document.getElementById('y').textContent=new Date().getFullYear()</script>
</body>
</html>


