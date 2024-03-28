<x-layout>
    <div class="container d-flex justify-content-center align-items-center flex-column title-font">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-12">
                <form method="POST" action="/reset-password">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">

                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $request->email }}" type="email" name="email" class="form-control"
                        id="email" aria-describedby="emailHelp">


                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">


                    <label for="Password" class="form-label">Conferma la tua Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <p><a class="text-decoration-none" href="{{ 'login' }}">Hai già un account?</a></p>
                </form>

            </div>
        </div>
    </div>
</x-layout>
