<x-layout>
    <div class="container d-flex align-items-center justify-content-center text-center">
        <div class="row">
            <div class="col-12 col-md-12">
                <form method="POST" action="/forgot-password">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success mb-4">
                            <p>{{ session('status') }}Abbiamo preso in carico la tua richiesta!</p>
                        </div>
                    @endif

                    <label for="email" class="form-label">Email!</label>
                    <input type="email" name="email" class="form-control w-100" id="email"
                        placeholder="Inserisci la tua mail!">

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <p><a class="text-decoration-none" href="{{ 'login' }}">Hai già un account?</a></p>
                </form>
            </div>
        </div>
    </div>
</x-layout>
