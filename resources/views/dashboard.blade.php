<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-4">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <p class="mb-4 h5 text-success">{{ __("You're logged in!") }}</p>

                        <div class="row g-4">
                            <div class="col-sm-4">
                                <a href="{{ route('penulis.index') }}" class="card h-100 shadow-sm border-0 text-decoration-none hover-shadow">
                                    <div class="card-body">
                                        <h5 class="card-title">Penulis</h5>
                                        <p class="card-text text-muted">Kelola data penulis</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="{{ route('kategori.index') }}" class="card h-100 shadow-sm border-0 text-decoration-none hover-shadow">
                                    <div class="card-body">
                                        <h5 class="card-title">Kategori</h5>
                                        <p class="card-text text-muted">Kelola kategori artikel</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="{{ route('artikel.index') }}" class="card h-100 shadow-sm border-0 text-decoration-none hover-shadow">
                                    <div class="card-body">
                                        <h5 class="card-title">Artikel</h5>
                                        <p class="card-text text-muted">Lihat & edit artikel</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
