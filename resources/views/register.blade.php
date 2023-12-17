<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-16/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-16/css/style.css">
    <link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-16/vendor/nouislider/nouislider.min.css">

    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="https://colorlib.com/etc/regform/colorlib-regform-16/images/form-img.jpg" alt>
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" action="{{ route('daftar') }}" class="register-form" id="register-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="name" class="required">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" />
                                </div>
                                <div class="form-input">
                                    <label for="alamat" class="required">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" />
                                </div>
                                <div class="form-input">
                                    <label for="sim" class="required">Nomor SIM</label>
                                    <input type="text" name="sim" id="sim" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Nomor HP</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>

                                {{--
                                    <div class="form-input">
                                        <label for="email" class="required">Alamat Email</label>
                                        <input type="text" name="email" id="email" />
                                    </div>
                                    <div class="form-input">
                                        <label for="password" class="required">Password</label>
                                        <input type="password" name="password" id="password" />
                                    </div> 
                                --}}
                                
                                <div class="form-submit">
                                    <input type="submit" value="Daftar" class="submit" id="submit" name="submit" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://colorlib.com/etc/regform/colorlib-regform-16/js/main.js"></script>
</body>

</html>
