<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ciri-Ciri Musik Rock dan Contohnya</title>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css"
    rel="stylesheet"
  />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2 sticky-top">
  <div class="container">
    <a class="navbar-brand" href="/">Blog Musik</a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="/tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
      </ul>
      <div class="d-flex align-items-center gap-3">
        <form class="d-flex align-items-center" action="{{ route('search') }}" method="GET">
          <input type="search" name="q" class="form-control rounded me-2" placeholder="Search" style="max-width: 200px;" />
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
      </div>
    </div>
  </div>
</nav>

<!-- ARTIKEL -->
<main class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h1 class="mb-3">Ciri-Ciri Musik Rock dan Contohnya</h1>
      <img src="images/img3.jpg" class="img-fluid rounded mb-4" alt="Musik Rock">
      <p>
        Musik rock dikenal dengan karakteristiknya yang energik, ekspresif, dan penuh semangat. Genre ini berkembang sejak pertengahan abad ke-20 dan menjadi salah satu bentuk ekspresi budaya yang paling kuat dalam sejarah musik populer.
      </p>
      <h4 class="mt-4">Ciri-Ciri Musik Rock:</h4>
      <ul>
        <li><strong>Gitar Listrik Dominan:</strong> Biasanya dipadukan dengan efek distorsi untuk menciptakan suara yang kuat dan kasar.</li>
        <li><strong>Irama yang Dinamis:</strong> Beat drum yang kuat dan ritme cepat menjadi ciri khas utama.</li>
        <li><strong>Vokal Emosional:</strong> Vokal sering kali ekspresif dan penuh perasaan, kadang melibatkan teriakan atau falsetto.</li>
        <li><strong>Struktur Lagu Bebas:</strong> Lagu rock tidak selalu mengikuti pola verse-chorus standar.</li>
        <li><strong>Lirik Tematik:</strong> Banyak lagu rock mengangkat tema pemberontakan, kritik sosial, cinta, atau kehidupan jalanan.</li>
      </ul>
      <h4 class="mt-4">Contoh Musik Rock Terkenal:</h4>
      <ul>
        <li><strong>“Bohemian Rhapsody”</strong> – Queen</li>
        <li><strong>“Smells Like Teen Spirit”</strong> – Nirvana</li>
        <li><strong>“Hotel California”</strong> – Eagles</li>
        <li><strong>“Sweet Child O’ Mine”</strong> – Guns N’ Roses</li>
        <li><strong>“Enter Sandman”</strong> – Metallica</li>
      </ul>
      <p>
        Musik rock terus berkembang dalam berbagai bentuk dan tetap menjadi bagian penting dalam dunia musik global. Meskipun berbagai genre lain kini mendominasi tangga lagu, semangat dan pengaruh rock tetap hidup melalui musisi baru dan komunitas yang loyal.
      </p>
      <a href="/" class="btn btn-outline-secondary mt-4">← Kembali ke Beranda</a>
    </div>
  </div>
</main>

<!-- FOOTER -->
<footer class="text-center text-white bg-dark py-4">
  <div class="container">
    <p class="mb-0">&copy; 2025 MusikBlog. Powered by MDB.</p>
  </div>
</footer>

<!-- JS MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.js"
></script>
</body>
</html>
