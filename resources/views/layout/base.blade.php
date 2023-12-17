<!doctype html>
<html lang="en">

<head>
    <title>Rental Mobil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="jumbotron pt-4 pb-4">
        <div class="row">
            <div class="col-sm-8">
                <h2><b style="text-transform:uppercase;">{{ config('app.name'); }}</b></h2>
            </div>
            <div class="col-sm-4">
                <form class="form-inline" method="get" action="blog.php">
                    <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari Nama Mobil"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div style="margin-top:-2pc"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="blog.php">Daftar Mobil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kontak.php">Kontak Kami</a>
                </li>
                @auth
                    <li class="nav-item active">
                        <a class="nav-link" href="history.php">History</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                @endauth
            </ul>
            @auth
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-user"> </i> Hallo, <?php echo $_SESSION['USER']['nama_pengguna']; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="return confirm('Apakah anda ingin logout ?');"
                        href="{{ route('logout'); }}">Logout</a>
                </li>
            </ul>
            @endauth
        </div>
    </nav>

    @yield('content')

    <div class="footer mt-4 bg-dark text-white pt-3 pb-2">
        <div class="container">
            Copyright <?= date('Y') ?> Free Template All Reserved
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
