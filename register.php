<?php 
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: dashboard.php');
    }

    if (isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $con = mysqli_connect('localhost', 'root', '', 'login');

        $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
        mysqli_query($con, $sql);
        mysqli_close($con);
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة تسجيل بالموقع</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body dir="rtl" style="font-family: 'Baloo Bhaijaan 2';">

    <div class="d-flex align-items-center min-vh-100 bg-dark">
        <div class="container d-flex justify-content-center">
            <form method="post" class="bg-light px-5 py-4 rounded-3 col-md-6 col-lg-5 col-xl-4">
                <h1 class="text-center mb-4">تسجيل عضوية </h1>
                <div class="mb-3">
                    <label for="user" class="form-label">إسم المستخدم او البريد الإلكتروني :</label>
                    <input type="text" name="user" id="user" class="form-control" require>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">كلمة المرور :</label>
                    <input type="password" name="pass" id="user" class="form-control" require>
                </div>
                <div class="mb-3">
                    <a href="index.php" class="text-decoration-none" style="font-size: 12px;">هل لديك حساب (تسجيل دخول) ؟</a>
                </div>
                <button type="submit" name="submit" class="btn btn-success w-75 d-block m-auto">تسجيل الحساب</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</body>
</html>