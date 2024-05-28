<div>
    <!DOCTYPE html>
    <html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studio Dentistico Giammy</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/homepage') }}">Studio Dentistico Giammy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}" aria-current="page" href="{{ url('/homepage') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'services' ? 'active' : '' }}" href="{{ url('/services') }}">Servizi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Chi Siamo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ url('/contact') }}">Contattaci</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        {{ $slot }}

        <!-- About Section -->
    <section id="about" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h2>Chi Siamo</h2>
                    <p>Lo studio dentistico di Giammy offre una vasta gamma di servizi per soddisfare tutte le vostre esigenze dentali. Che sia per un "undefined variable", un "unexpected qualcosa" o un "404", direte addio al bruxismo e all'usura dentale da morsi sul computer!</p>
                </div>
                <div class="col-lg-4 mb-4 mx-auto">
                    <img src="{{ asset('img/dentist.webp') }}" class="img-fluid" alt="Studio Dentistico Giammy">
                </div>
            </div>
        </div>
    </section>
        
        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3">
            <div class="container">
                <p class="mb-0">&copy; 2024 Studio Dentistico Giammy. Tutti i diritti riservati.</p>
            </div>
        </footer>
        
        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</div>