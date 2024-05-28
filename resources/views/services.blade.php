<x-layout>
  <!-- Hero Section -->
  <section class="hero bg-primary text-white text-center py-5">
      <div class="container">
          <h1 class="display-4">Curiamo il bruxismo degli sviluppatori frustrati</h1>
          <p class="lead">Cura dentale dei problemi derivanti dai continui errori di Laravel</p>
          <a href="#services" class="btn btn-light btn-lg mt-3">I nostri servizi</a>
      </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5">
      <div class="container">
          <div class="row text-center">
              @foreach ($services as $service)
                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                          <img src="{{ asset($service['img']) }}" class="card-img-top" alt="{{ $service['name'] }}">
                          <div class="card-body">
                              <h5 class="card-title">{{ $service['name'] }}</h5>
                              <p class="card-text">Prezzo base: {{ $service['costo'] }}€</p>
                              <a href="{{ route('services.show', $service['id']) }}" class="btn btn-primary">Dettagli</a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>

</x-layout>

