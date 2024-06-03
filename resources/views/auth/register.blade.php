<x-layout>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form class=" d-flex justify-content-center p-md-5 col-md-12 " method="POST" action="{{ route('login') }}">
                @csrf
                <h3 class="title-font  text-uppercase fw-bold">Accedi!</h3>
                <label for="email" class="form-label title-font">Email</label>
                <input type="email" name="email" id="email" placeholder="Inserisci la tua email!">

                <label class="title-font" for="password">Password</label>
                <input type="password" name="password" class="" id="password"
                    placeholder="Inserisci la tua password!">

                <button type="submit" class="">Submit</button>

                {{-- <p><a class="mt-2 text-decoration-none" href="{{ 'register' }}"> Non hai un account?</a></p> --}}
                <p><a class="title-font py-2" href="{{ 'forgot-password' }}">Hai dimenticato la tua
                        password?</a>
                </p>
            </form>
        </div>

z

        <div class="form-container sign-up">
            <form class="" method="POST" action="{{ route('register') }}">
                @csrf
                <h3 class="title-font  text-uppercase fw-bold">Registrati!</h3>
                <label for="name" class="form-label title-font">Name</label>
                <input type="text" name="name" class="" id="" placeholder="Inserisci il tuo nome!">

                <label for="email" class="form-label title-font">Email!</label>
                <input type="email" name="email" class="" id="email" placeholder="Inserisci la tua mail!">

                <label for="password" class="form-label title-font">Password</label>
                <input type="password" name="password" class="" id="password"
                    placeholder="Inserisci una password!">

                <label for="Password" class="form-label title-font">Conferma la tua Password</label>
                <input type="password" name="password_confirmation" class="" id="password_confirmation"
                    placeholder="Reinserisci la tua password!">

                <button type="submit" class="">Submit</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left ">
                    <h2 class="title-font  text-uppercase fw-bold">Bentornato!</h2>
                    <p class="title-font">accedi per utilizzare il sito!</p>
                    <button class="hidden  text-uppercase " id="accedi">Accedi!</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <h2 class="title-font text-uppercase fw-bold">Benvenuto!</h2>
                    <p class="title-font">Registrati per utilizzare il sito!</p>
                    <button class="hidden  text-" id="registrati">Registrati!</button>
                </div>
            </div>
        </div>

</x-layout>
