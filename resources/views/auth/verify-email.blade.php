<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h5>
                    Controlla la mail che ti abbiamo appena inviato!
                </h5>
            </div>
            <div class="col-6">
                <p>Verifica il tuo indirizzo email!</p>
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
