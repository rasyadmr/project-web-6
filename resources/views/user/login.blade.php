<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dev | {{ $title }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <style>
            html, body {
                height: 100vh;
            }

            .form-signin {
                max-width: 330px;
                padding: 1rem;
            }

            .form-signin .form-floating:focus-within {
                z-index: 2;
            }

        </style>
        <div class="container d-flex align-item-center h-100">
            <main class="w-100 m-auto" style="max-width: 400px;">
                <form class="d-flex flex-column">
                    <img class="mb-4 mx-auto" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiPL4h_BLG8D3mwx34bIUWrGV7_Xau6_ltCjqkLzOV13hWasAYdCGT-2MRjXxhy-Vpnh8_p3BTVzhQ9bgfSvNqr0yBWecYlyuqPS4Jihbyg6_l4Z7pxMEhzcnNMY-gGbS05icNC0uFUkB7-d807XVg2eSQEuxZKm3pD2YA6ulJ1LcWZBL8wT_4bGA/w400-h400/PDI%20Perjuangan.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-2 fw-normal">Log In Page</h1>
                    <div class="mb-4">
                        <a href="/dev"><span class="fa fa-arrow-circle-o-left"></span> Back to home page</a>
                    </div>
                
                    <div class="form-floating my-2">
                        <input type="email" class="form-control rounded" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" class="form-control rounded" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                
                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2 my-1" type="submit">Sign in</button>
                    <p class="mt-2">Don't have any account, <a href="register">create a new account</a></p>
                    
                    <span class="my-3 text-body-secondary">Copyright © 2024 Rasyad Muhammad Ramdhanazuri. All Rights Reserved.</span>
                </form>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>