<x-layout>
    <form method="POST" action="/user/confirm-password">
        @csrf
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <p><a class="text-decoration-none" href="{{ 'login' }}">Hai già un account?</a></p>
    </form>
</x-layout>
