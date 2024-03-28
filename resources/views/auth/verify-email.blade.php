<x-layout>
    <div class="container containerMail align-items-center d-flex justify-content-center flex-column">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-12 d-flex justify-content-center flex-column align-items-center">
                <h5 class="title-font sw-bold">
                    Controlla la mail che ti abbiamo appena inviato!
                </h5>
                <p class="title-font">Verifica il tuo indirizzo email!</p>
                @if (session('status') == 'verification-link-sent')
                    <div class="my-4 alert alert-success">
                        Link inviato con successo!
                    </div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-info">Invia una nuova mail di verrifica!</button>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <p>Stai riscontrando problemi?</p>
                    <button type="submit" class="btn btn-info">Logout!</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
