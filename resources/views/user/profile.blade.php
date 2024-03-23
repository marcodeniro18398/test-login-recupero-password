<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Profilo di:{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <p>Profile:{{ Auth::user()->name }}</p>
                <p>Email:{{ Auth::user()->email }}</p>
                <p>Account verificato:<i
                        class="{{ Auth::user()->email_verifed_at ? 'bi bi-check-circle-fill text-danger' : 'bi bi-check-circle-fill text-success' }}"></i>
                </p>
            </div>
        </div>
        {{-- aggiornamento dati utente --}}
        <div class="row">
            <div class="col-3">
                <h2>Aggiorna il profilo!</h2>
            </div>
            <div class="col-6">
                <form action="/user/profile-information" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name!</label>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="emailHelp">
                        <div id="name" class="form-text">Modifica il tuo nome!</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email!</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                        <div id="email" class="form-text">Modifica la tua mail!</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia modifiche!</button>
                </form>
            </div>
        </div>
        {{-- aggiornamento password --}}

        <div class="row">
            <div class="col-3">
                <h2>Aggiorna la tua password!</h2>
            </div>
            <div class="col-6">
                <form action="/user/password" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="password " class="form-label">Vecchia password!</label>
                        <input type="password" name="current_password" class="form-control" id="password"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password " class="form-label">Nuova password!</label>
                        <input type="password" name="password" class="form-control" id="password"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
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
