<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="One Stop Employee Cloud Registration Page" />
    <title>One Stop. Employee Cloud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favi/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favi/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/favi/favicon-16x16.png" />
    <link rel="manifest" href="img/favi/site.webmanifest" />
    <style>
    .registration-header {
        text-align: center;
        color: #333;
        font-size: 5rem;
        margin-top: 10vh;
        font-weight: 100;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/favi/favicon-32x32.png" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-md text-center mt-5" style="max-width: 400px">
        <div class="mb-4 registration-header">
            <h1>Let's Get Registered!</h1>
        </div>
        <form action="dbregister.php" method="POST">
            <div class="mb-3">
                <input type="email" class="form-control text-center fs-5 fw-light" id="Email"
                    aria-describedby="emailHelp" name="email" placeholder="Email address" required />
                <div id="emailHelp" class="form-text">
                    We'll never share your email with anyone else.
                </div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="firstName" name="firstName"
                    placeholder="First Name" required />
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="lastName" name="lastName"
                    placeholder="Last Name" required />
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control text-center fs-5 fw-light" id="phone" name="phone"
                    placeholder="Phone (e.g. +1234567890)" pattern="[+0-9]{1,10}" required />
            </div>
            <div class="mb-3">
                <input type="number" class="form-control text-center fs-5 fw-light" id="salary" name="salary"
                    placeholder="Salary" min="0" step="0.01" required />
            </div>
            <div class="mb-3">
                <input type="date" class="form-control text-center fs-5 fw-light" id="dob" name="dateOfBirth"
                    placeholder="Date Of Birth" required />
            </div>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="m" checked />
                    <label class="form-check-label fs-5 fw-light" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="f" />
                    <label class="form-check-label fs-5 fw-light" for="female">Female</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary fs-5 fw-light">
                Register
            </button>
        </form>
        <div class="alert alert-danger mt-3" role="alert">
            A simple danger alert—check it out!
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>