<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Thư thông báo mật khẩu CiTi Shop
    </h1>
    <p>
        CiTi Shop cảm ơn bạn đã đăng ký tài khoản trên nền tảng thương mại điện tử CiTi.
    </p>
    <p>
        Dưới đây là tài khoản và mật khẩu bạn đã đăng ký.
    </p>
    <p>
        Username: {{$data['user']['name']}}
    </p>
    <p>
        Email: {{$data['user']['email']}}
    </p>
    <p>
        Password: {{$data['password']}}
    </p>
</body>
</html>