<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog Musik</title>

    <!-- Fonts & Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  </head>

  <body class="antialiased bg-gray-100 dark:bg-gray-900">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">Blog Musik</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="/tentang">Tentang</a></li>
            <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
          </ul>

          <form class="d-flex me-3" action="{{ route('search') }}" method="GET">
            <input type="search" name="q" class="form-control rounded me-2" placeholder="Search" style="max-width: 200px;" />
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>

          @auth
            <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2">Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            @endif
          @endauth
        </div>
      </div>
    </nav>

    <main class="container py-5">
      <div class="row g-4">
        <!-- Sidebar -->
        <aside class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-header bg-light fw-bold">Kategori</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="/pop" class="text-dark">Pop</a></li>
              <li class="list-group-item"><a href="/klasik" class="text-dark">Klasik</a></li>
              <li class="list-group-item"><a href="/rock" class="text-dark">Rock</a></li>
            </ul>
          </div>
        </aside>

        <!-- Main content -->
        <section class="col-md-9">
          <div class="row g-4">
            @foreach ([  
             ["title" => "Musik Klasik adalah Genre yang Berakar dari Kesenian Barat", "image" => "img2.jpg", "url" => "/artikel2"]
            ] as $artikel)
              <div class="col-md-4">
                <div class="card h-100">
                  <img src="{{ asset('Images/' . $artikel['image']) }}" alt="Image" class="card-img-top" />
                  <div class="card-body">
                    <h5 class="card-title">{{ $artikel['title'] }}</h5>
                    <p class="card-text">Temukan keindahan dan sejarah musik klasik dari zaman Barok hingga Romantik.</p>
                  </div>
                  <div class="card-footer bg-white">
                    <a href="{{ $artikel['url'] }}" class="card-link">Selengkapnya</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </section>
      </div>
    </main>

    <footer class="bg-light text-center py-3 border-top">
      <div class="container">
        &copy; {{ date('Y') }} MusikBlog. Powered by MDB.
      </div>
    </footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.js"></script>
  </body>
</html>
