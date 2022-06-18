<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('css/signup/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signup/vendor/jquery-ui/jquery-ui.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/signup/css/style.css') }}">
</head>
<body style="background-color:gray;">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <div class="form-row">
                            <form>
                            <div class="form-group">
                                <label for="first_name"> name</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" name="name"/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">email</label>
                                <input type="email" class="form-input" name="last_name" id="last_name" name="email" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">Birth date</label>
                                <input type="text" class="form-input" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
                            </div>
                            <div class="form-radio">
                                <label for="gender">Gender</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="number" class="form-input" name="phone_number" id="phone_number" />
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="password" id="password" name="pass"/>
                            </div>
                            <div class="form-group">
                                <label for="re_password">Repeat your password</label>
                                <input type="password" class="form-input" name="re_password" id="re_password"/>
                            </div>
                        </div>
                        <div class="form-text">
                            <a href="#" class="add-info-link"><i class="zmdi zmdi-chevron-right"></i>Additional info</a>
                            <div class="add_info">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-input" name="email" id="email"/>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <div class="select-list">
                                        <select name="country" id="country" required>
                                            <option value="US">United State</option>
                                            <option value="UK">English</option>
                                            <option value="VN">Viet Nam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <div class="select-list">
                                        <select name="city" id="city" required>
                                            <option value="NY">NewYork</option>
                                            <option value="IC">IceLand</option>
                                            <option value="canada">Canada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <a href="{{ route('login') }}">login</a>

                        </div>
                        <div class="form-group">
                            <a href="{{ route('filesignup') }}">Sign up as doctor</a>
                        </div>


                   <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('css/signup/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('css/signup/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('css/signup/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('css/signup/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('css/signup/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
