<x-layout>
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h2>Contattaci</h2>
                    <p>Per prenotare un appuntamento o per ulteriori informazioni, non esitate a contattarci.</p>
                    <ul class="list-unstyled">
                        <li><strong>Indirizzo:</strong> Route dei dentisti</li>
                        <li><strong>Telefono:</strong> +39 33333333</li>
                        <li><strong>Email:</strong> info@studiodentisticogiammy.it</li>
                    </ul>
                </div>
                <div class="col-lg-6 mb-4">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('send')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            @error('name')
                            <span class="text-danger">errore</span>
                            @enderror
                            <input name="name" value="{{old('name')}}" type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="mail" value="{{old('mail')}}" type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Messaggio</label>
                            <textarea name="message" class="form-control" id="message" rows="3">{{old('message')}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>