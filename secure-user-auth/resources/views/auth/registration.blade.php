<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secure user authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/reg.css') }}">
</head>

<body class="reg-body container pt-0 mt-0">

    <div class="content">
        <section>
            <div class="register-wrapper align-text">
                <h1 class=" align-text">Registration Form</h1>
                <div class="register-block">
                    <h3 class="register-title">Create an account</h3>
                    <hr>
                    <form action="{{ route('register-user') }}" method="post">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger" role="alert">{{ Session::get('fail') }}</div>
                        @endif

                        @csrf
                        <div class="form-group">
                            <label for="name" class="">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Full Name" name="name"
                                id="name" value="{{ old('name') }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email"
                                id="email" value="{{ old('email') }}">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password"
                                name="password" id="password" value="{{ old('password') }}">
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password_2" class="">Password</label>
                            <input type="password" class="form-control" placeholder="Re-enter Your Password"
                                name="password_2" id="password" value="{{ old('password_2') }}">
                            <span class="text-danger">
                                @error('password_2')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group align-text">
                            <button class="btn btn-block btn-primary" type="submit"> Register</button>
                        </div>
                        <br>
                        {{-- <button <a href = "login" type="button" class="btn btn-primary btn-md round"><a/>
                            Already Registered !! Login Here</button> --}}
                        <a href="login" target="_blank" class="bg-primary fs-10 align-text">Already Registered !!
                            Login Here</a>



                    </form>

                </div>
                <a href="/" target="_blank" class="bg-secondary fs-10 align-text">Go Home</a>
                <footer>
                    <a href="#" target="_blank" class="align-text">Asaaju Olalekan | Prodigy Project</a>
                </footer>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
