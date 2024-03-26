<x-layout>
    <div class="container my-5 py-5 containAll" id="container">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6 mb-3 registrati">
                
                <form class="form-container" method="POST" action="{{ route('login') }}">
                    <h3>Accedi!</h3>
                    @csrf
                    <label for="email" class="form-label">Email!</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Inserisci la tua email!">

                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Inserisci la tua password!">

                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>

                    {{-- <p><a class="mt-2 text-decoration-none" href="{{ 'register' }}"> Non hai un account?</a></p> --}}
                    <p><a class="mt-2 text-decoration-none" href="{{ 'forgot-password' }}">Hai dimenticato la tua
                            password?</a>
                    </p>
                </form>
            </div>
        </div>



        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mb-3">
                <form class="form-container" method="POST" action="{{ route('register') }}">
                    @csrf
                    <label for="name" class="form-label">Name!</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Inserisci il tuo nome!">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email!</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Inserisci la tua mail!">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Inserisci una password!">
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Conferma la tua Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation" placeholder="Reinserisci la tua password!">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <p><a class="text-decoration-none" href="{{ 'login' }}">Hai già un account?</a></p> --}}
                </form>
            </div>
        </div>
        <div class="toggle-container container-fluid">
            <div class="toggle row justify-content-center">
                <div class="toggle-panel toggle-left col-12 col-md-6">
                    <h2>Bentornato!</h2>
                    <p>accedi per utilizzare il sito!</p>
                    <button class="hidden" id="accedi">Accedi!</button>
                </div>
            </div>
            <div class="toggle row justify-content-center">
                <div class="toggle-panel toggle-right col-12 col-md-6">
                    <h2>Benvenuto!</h2>
                    <p>Registrati per utilizzare il sito!</p>
                    <button class="hidden" id="registrati">Registrati!!</button>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>
