<x-layout>
    <form method="POST" action="/forgot-password">
        @csrf

        @if (session('status'))
            <div class="alert alert-success mb-4">
                <p>{{ session('status') }}Abbiamo preso in carico la tua richiesta!</p>
            </div>
        @endif

        <div class="mb-3">
            <label for="email" class="form-label">Email!</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="email" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <p><a class="text-decoration-none" href="{{ 'login' }}">Hai già un account?</a></p>
    </form>
</x-layout>
