<x-layout>
    <form method="POST" action="/reset-password">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <div class="mb-3">
            <label for="email" class="form-label">Email!</label>
            <input value="{{ $request->email }}" type="email" name="email" class="form-control" id="email"
                aria-describedby="emailHelp">
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
        <p><a class="text-decoration-none" href="{{ 'login' }}">Hai già un account?</a></p>
    </form>
</x-layout>
