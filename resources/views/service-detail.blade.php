<x-layout>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h1 class="card-title">{{ $service['name'] }}</h1>
                                    <p class="card-text">{{ $service['description'] }}</p>
                                    <p class="card-text"><strong>Prezzo: {{ $service['costo'] }}€</strong></p>
                                    <a href="{{ route('services') }}" class="btn btn-primary">Torna ai servizi</a>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($service['img']) }}" class="img-fluid" alt="{{ $service['name'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
