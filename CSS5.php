<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
    <title>Some Web Page</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .menu-container {
        color: #fff;
        background-color: #5995DA; /* Blue */
        padding: 20px 0;
        display: flex;
    }

    .menu {
        border: 1px solid #fff;
        width: 600px;
        display: flex;
        justify-content: space-between;
    }
        .links

    {
        border: 1px solid #fff; /* For debugging */
        display: flex;
        justify-content: flex-end;
    }

    .login {
        margin-left: 20px;
    
    }
    .header-container {
        color: #5995DA;
        background-color: #D6E9FE;
        display: flex;
        justify-content: center;
    }

    .header {
        width: 900px;
        height: 300px;
        display: flex;
        justify-content: space-between;
        align-items: stretch; /* Add this */
    }

  
    .logo,
    .social,
    .subscribe {
        align-self: flex-end;
        margin-bottom: 20px;
    }



    .photo-grid-container {
        display: flex;
        justify-content: center;
    }

    .photo-grid {
        width: 900px;
        display: flex;
        justify-content: center; /* Change this */
        flex-wrap: wrap;
        flex-direction: row;
        align-items: center; /* Add this */
    }

    .photo-grid-item {
        border: 1px solid #fff;
        width: 300px;
        height: 300px;
   
    }
    .footer {
  display: flex;
  justify-content: space-between;
}

.footer-item {
  border: 1px solid #fff;
  background-color: #D6E9FE;
  height: 200px;
  flex: 1;
}
.signup {
  margin-left: auto;
}
</style>
</head>
<body>
<div class='menu-container'>
  <div class='menu'>
    <div class='date'>Aug 14, 2016</div>
    <div class='signup'>Sign Up</div>
    <div class='login'>Login</div>
  </div>
</div>
    <div class='header-container'>
        <div class='header'>
            <div class='subscribe'>Subscribe &#9662;</div>
            <div class='logo'>
                <img src='images/awesome-logo.svg' />
            </div>
            <div class='social'>
                <img src='images/social-icons.svg' />
            </div>
        </div>
    </div>

    <div class='photo-grid-container'>
        <div class='photo-grid'>
            <div class='photo-grid-item first-item'>
                <img src='images/one.svg' />
            </div>
            <div class='photo-grid-item'>
                <img src='images/two.svg' />
            </div>
            <div class='photo-grid-item'>
                <img src='images/three.svg' />
            </div>
            <div class='photo-grid-item'>
                <img src='images/four.svg' />
            </div>
            <div class='photo-grid-item last-item'>
                <img src='images/five.svg' />
            </div>
        </div>
    </div>
<div class='footer'>
  <div class='footer-item footer-one'></div>
  <div class='footer-item footer-two'></div>
  <div class='footer-item footer-three'></div>
</div>
</body>
</html>