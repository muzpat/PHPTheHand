<!doctype html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
    <form id="loginform" method="post">
        <div>
            Username:
            <input type="text" name="username" id="username" />
            Password:
            <input type="password" name="password" id="password" />
            <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
        </div>
    </form>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#loginform').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'login2.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        alert("successful!");
                    },
                    error: function (xhr) {
                        alert("error!");
                    }
                }
       });
        });
    </script>
</body>
</html>