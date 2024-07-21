<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-9/assets/css/login-9.css">
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <title>Simako UNWIR || Login</title>
</head>

<body class="bg-primary">
    <div class=" mt-5 mt-md-5">
        <div class="d-flex justify-content-center">
            <section class="bg-primary py-5 py-md-5 py-xl-8">
                <div class="container">
                    <div class="row gy-4 align-items-center">
                        <div class="col-12 col-md-6 col-xl-7">
                            <div class="d-flex justify-content-center text-bg-primary">
                                <div class="col-12 col-xl-9">
                                    <img class="img-fluid" loading="lazy"
                                        src="{{ asset('assets/judul.png') }}">
                                    <hr class="border-primary-subtle mb-4">
                                    <h2 class="h1 mb-4">SIMAKO UNWIR</h2>
                                    <p class="lead mb-5">Sistem Informasi Akademik Universitas Wiralodra, Sistem Yang Dimana Digunakan Meninjau Akademik Seluruh Mahasiswa Yang Ada Di UNWIR</p>
                                    <div class="text-endx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                            fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                            <path
                                                d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-5">
                            <div class="card border-0 rounded-4 p-1">
                                <div class="card-body p-3 p-md-4 p-xl-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <h3>Log in</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#!">
                                        <div class="row gy-3 overflow-hidden">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" name="npm"
                                                        id="npm" placeholder="masukkan npm anda" required>
                                                    <label for="email" class="form-label">NPM</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" value="" placeholder="Password" required>
                                                    <label for="password" class="form-label">Password</label>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4">
                                                <a href="#!">Lupa password?</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
