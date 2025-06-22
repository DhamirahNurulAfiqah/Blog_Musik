<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Musik Klasik adalah Genre yang Berakar dari Kesenian Barat</title>
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
      <h1 class="mb-3">Musik Klasik adalah Genre yang Berakar dari Kesenian Barat</h1>
      <img src="Images/img2.jpg" class="img-fluid rounded mb-4" alt="Musik Klasik">
      <p>
        Musik klasik merupakan salah satu genre musik yang memiliki sejarah panjang dan pengaruh besar terhadap perkembangan musik modern. Genre ini berkembang di Eropa pada periode klasik (1750–1820), namun akar-akar musik klasik dapat ditelusuri sejak era Barok dan bahkan Renaissance.
      </p>
      <p>
        Musik klasik dicirikan oleh komposisi yang kompleks, struktur musik yang formal, dan penggunaan alat musik orkestra seperti biola, cello, klarinet, dan piano. Banyak karya musik klasik bersifat instrumental dan menekankan harmoni serta dinamika emosi yang mendalam.
      </p>
      <p>
        Komposer ternama seperti Johann Sebastian Bach, Wolfgang Amadeus Mozart, Ludwig van Beethoven, dan Franz Schubert adalah tokoh sentral dalam sejarah musik klasik. Karya-karya mereka tidak hanya menjadi landasan pendidikan musik formal, tetapi juga terus dipentaskan dan dikaji hingga hari ini.
      </p>
      <p>
        Musik klasik juga dianggap sebagai bentuk seni yang tinggi karena nilai estetikanya dan kemampuannya menyampaikan ekspresi emosional tanpa kata-kata. Meski tidak sepopuler musik pop di media massa, musik klasik tetap memiliki komunitas penggemar yang setia dan institusi pendidikan musik yang terus melestarikannya.
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
