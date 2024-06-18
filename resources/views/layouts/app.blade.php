<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Laravel 11 CRUD Application Tutorial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <h4 class=" my-3 px-5 py-3 border-bottom">USJR Application</h4>
    <div class="container p-3 d-flex flex-column justify-content-end gap-5">
        <div class=" px-4 py-2 rounded-top"style="box-shadow:0px 3px 8px rgba(0,0,0,.12);">
        @yield('content')
        </div>
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-12">
                <p>
                    Return to Website: <a href="https://www.usjr.edu.ph/"><strong>University of San Jose -Recoletos</strong></a>
                </p>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bu
ndle.min.js"></script>
</body>

</html>