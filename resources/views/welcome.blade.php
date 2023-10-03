<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('welcome')}}">
                                Service - Now
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Tickets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.department.index') }}">
                                Departments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.status.index') }}">
                                Status
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-3 col-md-6 col-lg-4">
                        <h1>Service Now Support</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ea, amet earum, corporis voluptate tempora molestias facere ut modi explicabo ab adipisci inventore quia magnam illum asperiores eligendi architecto a.</p>
                        <button class="btn btn-primary">Learn More</button>
                      </div>
                      <div class="col-sm-9 col-md-6 col-lg-8">
                        <img src="{{ asset('/images/helpdesk.png') }}" alt="">
                      </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>