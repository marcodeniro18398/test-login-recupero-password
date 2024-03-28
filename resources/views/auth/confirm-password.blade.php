<x-layout>
    <div class="text-center">
        <form method="POST" action="/user/confirm-password">
            @csrf
            <div class="mb-3">
                <label class="title-font pb-3" for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn-custom ">Submit</button>
            <p><a class="text-decoration-none title-font clr-custom1" href="{{ 'login' }}">Hai già un account?</a></p>
        </form>
    </div>

</x-layout>
