<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        body{
            box-sizing: border-box;
            width: 100vw;
        }
    </style>
</head>
<body>
<div >
    <div class="row">
        <div class="col-12 container">
            <header class="p-3 bg-dark">
            <div>
                <div class="d-flex flex-wrap align-items-center justify-content-end ">
                    <form class="col-12 col-lg-auto mb-lg-0 me-lg-3" role="search" action="{{ route('search') }}" method="GET">
                        <input type="search" class="form-control form-control-dark " placeholder="Search..." aria-label="Search" name="query">
                    </form>
                </div>
            </div>

        </header>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 300px; height:100vh">
                <a href="{{ route('employes.index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Groupe OCP</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item my-3">
                        <a href="{{ route('employes.index') }}" class="nav-link active text-center">
                        Les Employes
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('stagiaires.index') }}"  class="nav-link active text-center">
                        Les Stagiaires
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col-8">
            <section>
                @yield('content')
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-3 d-flex flex-column p-3 flex-shrink-0 text-bg-dark" style="width: 312px;"></div>
        <div class="col-8">
        <footer class="footer mt-auto py-3 bg-body-tertiary">
            <div class="container text-center">
                <span class="text-body-secondary">&copy;2023 - 2024 </span>
            </div>
        </footer>
        </div>
    </div>

</div>








</body>
</html>


