<x-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name!</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="name" class="form-text">Scrivi il uto nome!.</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email!</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="email" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Conferma la tua Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <p><a class="text-decoration-none" href="{{ 'login' }}">hai già un account?</a></p>
    </form>
</x-layout>
