<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Back TO School - Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <style>
        .password-toggle {
            cursor: pointer;
        }
    </style>
    @include('admin.assets.css')
</head>

<body>
    <main>
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4" style="color: #003049">
                                        Back TO School - Login
                                    </h5>
                                </div>

                                <form class="row g-3 needs-validation" novalidate>

                                    <div class="col-12">
                                        <label for="youremail" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="email" name="email" class="form-control"
                                                title="enter your email" id="youremail" placeholder="example@gmail.com"
                                                required>
                                            <div class="invalid-feedback">Please enter your email.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="password" class="form-control"
                                                title="enter your password" id="yourPassword" placeholder="********"
                                                required>
                                            <span class="input-group-text password-toggle" id="ShowPassword"><i
                                                    class="bi bi-eye-fill" id="eyeShow"></i></span>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" title="remember me"
                                                name="remember" value="true" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn w-100" type="submit"
                                            style="background-color: #003049 ; color:#f1f6f7fd">Login</button>
                                    </div>
                                </form>
                                {{-- email=keshrigopal31@gmail.com --}}
                                {{-- password=12121222212 --}}
                                {{-- remember=true --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('admin.assets.js')
    <script>
        $(document).ready(function() {
            $('#ShowPassword').click(function() {
                let passwordField = $('#yourPassword');
                let passwordFieldType = passwordField.attr('type');
                let toggleIcon = $('#eyeShow');

                if (passwordFieldType === 'password') {
                    passwordField.attr('type', 'text');
                    toggleIcon.removeClass('bi bi-eye-fill').addClass('bi bi-eye-slash-fill');
                } else {
                    passwordField.attr('type', 'password');
                    toggleIcon.removeClass('bi bi-eye-slash-fill').addClass('bi bi-eye-fill');
                }
            });
        });
    </script>
</body>

</html>
