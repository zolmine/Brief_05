<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<main>
    <div class="d-flex justify-content-center ">
        <div class="row w-50 p-3 d-flex justify-content-center ">
            <div class="col-sm-6 login-section-wrapper">

                <div class="login-wrapper my-auto">
                    <h1 class="login-title">sign up</h1>
                    <form method="post" action="../Controllers/insert_new_customer.con.php">
                        <div class="form-group">
                            <label for="email">Full Name</label>
                            <input type="text" name="full_name" id="name" class="form-control" placeholder="enter your Full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">confirm Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="renter your passsword" required>
                        </div>
                        <button name="submit" id="login" class="btn btn-block login-btn" type="submit" value="submit">Submit</button>
                    </form>

                    <p class="login-wrapper-footer-text">You have an account? <a href="login.php" class="text-reset">Login here</a></p>
                </div>
            </div>

        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
