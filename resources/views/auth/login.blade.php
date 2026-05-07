<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <b>Login</b>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input type="text" name="dni" placeholder="DNI" class="form-control mb-2" required>
                <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>

                <button type="submit" class="btn btn-primary w-100">
                    Ingresar
                </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
