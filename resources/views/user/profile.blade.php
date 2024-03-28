<x-layout>
    <div class="container container-custom my-5">
        {{-- dati utente con verifica del profilo --}}
        <div class="row justify-content-center mt-3">
            <div class="col-6 col-md-6 ">
                <div class="text-center">
                    <h4 class="title-font fw-bold">Profilo di: {{ Auth::user()->name }}</h4>
                </div>
                <ul class="list-unstyled d-flex align-items-center justify-content-evenly py-3">
                    <li class="title-font">
                        <p class="">Email : {{ Auth::user()->email }}</p>
                    </li>
                    <li class="title-font">
                        <p>Account verificato : <i
                                class="{{ Auth::user()->email_verified_at ? 'bi bi-check-circle-fill text-success' : 'bi bi-check-circle-fill text-danger' }}"></i>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        {{-- aggiornamento dati utente --}}
        <div class="row justify-content-center align-items-center">
            {{-- messaggio --}}
            @if (session('status') === 'profile-information-updated')
                <div class="alert alert-success">
                    <p>Hai modificato il tuo profilo correttamente!</p>
                </div>
            @endif

            <div class="col-12 col-md-6 mt-1 title-font">
                <form action="/user/profile-information" method="POST">
                    @csrf
                    {{-- titolo --}}
                    <h2>Aggiorna il profilo!</h2>
                    @method('put')
                    <div class=" col-10">
                        <label for="name" class="form-label">Name!</label>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="emailHelp">
                        <div id="name" class="form-text">Modifica il tuo nome!</div>
                    </div>
                    <div class="col-10 ">
                        <label for="email" class="form-label">Email!</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                        <div id="email" class="form-text">Modifica la tua mail!</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia modifiche!</button>
                </form>
            </div>
            {{-- aggiornamento password --}}

            @if (session('status') === 'password-updated')
                <div class="alert alert-success">
                    <p>Hai modificato la tua password correttamente!</p>
                </div>
            @endif
            <div class="col-12 col-md-6 title-font">
                <form action="/user/password" method="POST">
                    @csrf
                    {{-- titolo --}}
                    <h2>Aggiorna la tua password!</h2>
                    @method('put')
                    <div class=" col-10">
                        <label for="password " class="form-label">Vecchia password!</label>
                        <input type="password" name="current_password" class=" w-100 form-control" id="password"
                            aria-describedby="emailHelp">
                    </div>
                    <div class=" col-10">
                        <label for="password " class="form-label">Nuova password!</label>
                        <input type="password" name="password" class="form-control" id="password"
                            aria-describedby="emailHelp">
                    </div>
                    <div class=" col-10">
                        <label for="password " class="form-label">Nuova password!</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password"
                            aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Invia modifiche!</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
