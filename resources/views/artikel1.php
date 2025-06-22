<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mengenal Lebih Jauh Tentang Genre Musik Pop</title>
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
      <h1 class="mb-3">Mengenal Lebih Jauh Tentang Genre Musik Pop</h1>
        <img src="Images/img1.jpg" class="img-fluid rounded mb-4" alt="Musik Pop">

      <p>
        Musik Pop, atau "popular music", merupakan salah satu genre musik yang paling luas dan mudah dikenali di seluruh dunia. Genre ini mulai berkembang sejak awal abad ke-20 dan terus bertransformasi mengikuti perkembangan teknologi, budaya, dan selera masyarakat.
      </p>
      <p>
        Ciri khas musik pop antara lain melodi yang mudah diingat, struktur lagu sederhana (verse-chorus-verse), dan produksi yang sangat memperhatikan kualitas suara. Musik pop juga sering dipengaruhi oleh genre lain seperti R&B, hip-hop, elektronik, dan bahkan rock.
      </p>
      <p>
        Penyanyi pop terkenal seperti Michael Jackson, Madonna, Britney Spears, dan Taylor Swift merupakan ikon global yang telah mempengaruhi jutaan pendengar. Selain itu, media sosial dan platform streaming turut mempercepat penyebaran musik pop ke berbagai penjuru dunia.
      </p>
      <p>
        Saat ini, musik pop tidak hanya menjadi hiburan, tetapi juga bagian penting dari industri budaya yang mencerminkan tren sosial, gaya hidup, bahkan politik.
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
