<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

	<style>
		body {
			background: #fffaf7;
			font-family: 'Inter', sans-serif;
			color: #5f5a66;
		}

		.navbar {
			background: rgba(255, 248, 244, 0.96) !important;
			border-bottom: 1px solid #f1e6e8;
			box-shadow: 0 4px 18px rgba(166, 140, 148, 0.08);
		}

		.navbar .navbar-brand {
			color: #7a6572 !important;
			font-weight: 700;
			font-size: 1.7rem;
			font-family: 'Playfair Display', serif;
		}

		.navbar .nav-link {
			color: #8a7a84 !important;
			font-weight: 500;
		}

		.hero-section {
			background: linear-gradient(135deg, #f8dfe7, #e7e0f7, #edf5e8);
			padding: 90px 0;
			margin-bottom: 50px;
			border-bottom-left-radius: 32px;
			border-bottom-right-radius: 32px;
		}

		.hero-section h1 {
			font-family: 'Playfair Display', serif;
			font-size: 3rem;
			font-weight: 800;
			color: #6e5d68;
		}

		.hero-section p {
			color: #7c7380;
			font-size: 1.08rem;
			max-width: 700px;
		}

		.section-title {
			font-family: 'Playfair Display', serif;
			font-size: 2rem;
			font-weight: 700;
			color: #6e5d68;
			margin-bottom: 25px;
		}

		.custom-card {
			background: #fffdfc;
			border: 1px solid #f1e8ea;
			border-radius: 22px;
			box-shadow: 0 10px 28px rgba(190, 166, 174, 0.08);
			transition: 0.3s;
			height: 100%;
		}

		.custom-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 14px 30px rgba(199, 141, 163, 0.12);
		}

		.custom-card .card-body {
			padding: 28px;
		}

		.custom-card h5 {
			font-weight: 700;
			color: #6e5d68;
			margin-bottom: 12px;
		}

		.custom-card p {
			color: #8b7f87;
			line-height: 1.8;
			margin-bottom: 0;
		}

		.info-icon {
			width: 52px;
			height: 52px;
			border-radius: 16px;
			background: linear-gradient(135deg, #f3cfd9, #ddd4f6);
			color: #6e5d68;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			font-size: 0.95rem;
			font-weight: 700;
			margin-bottom: 16px;
		}

		.btn-main {
			background: #d8b4c2;
			color: #5f5a66;
			padding: 12px 24px;
			border-radius: 14px;
			font-weight: 600;
			display: inline-block;
			text-decoration: none;
			box-shadow: 0 6px 18px rgba(216, 180, 194, 0.22);
		}

		.btn-main:hover {
			background: #cfacba;
			color: #5f5a66;
		}

		footer {
			margin-top: 60px;
			padding: 25px 0;
			color: #9a8e95;
			border-top: 1px solid #efe3e7;
		}
	</style>
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<section class="hero-section">
		<div class="container">
			<h1>Temukan Cerita, Ide, dan Inspirasi</h1>
			<p>
				Selamat datang di ruang kecil yang berisi tulisan seputar belajar coding, berbagi pengalaman,
				dan hal-hal sederhana yang menarik untuk dibaca pelan-pelan.
			</p>
			<div class="mt-4">
				<a href="<?= base_url('/post') ?>" class="btn-main">Jelajahi Artikel</a>
			</div>
		</div>
	</section>

	<div class="container">
		<h2 class="section-title">Yang Bisa Kamu Temukan</h2>

		<div class="row g-4">
			<div class="col-md-4">
				<div class="card custom-card">
					<div class="card-body">
						<div class="info-icon">01</div>
						<h5>Catatan Belajar yang Ringan</h5>
						<p>
							Tulisan sederhana tentang proses belajar dunia web development, mulai dari hal dasar
							sampai pengalaman kecil yang bisa jadi pelajaran.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card custom-card">
					<div class="card-body">
						<div class="info-icon">02</div>
						<h5>Tips Biar Lebih Paham</h5>
						<p>
							Beberapa pembahasan dibuat dengan gaya santai supaya lebih mudah dipahami, terutama
							kalau kamu masih tahap awal belajar coding.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card custom-card">
					<div class="card-body">
						<div class="info-icon">03</div>
						<h5>Perjalanan Membangun Website</h5>
						<p>
							Isi blog ini juga membagikan proses membuat tampilan website yang lebih rapi,
							lebih nyaman dilihat, dan terasa lebih hidup.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-4">
		<footer class="text-center">
			&copy; <?= Date('Y') ?> MyBlog - dibuat dengan rasa, ide, dan proses belajar.
		</footer>
	</div>

	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>