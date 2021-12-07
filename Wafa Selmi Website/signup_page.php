
<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/signupPage_style.css">
<html>
<head>
    <title>Apprendice : Sign up</title>
</head>
<script type="text/javascript">
    function verif() {
        var username = document.form1.username.value;
        var firstname = document.form1.firstname.value;
        var familyname = document.form1.familyname.value;
        var email = document.form1.email.value;
        var password = document.form1.password.value;
        var confpassword = document.form1.confpassword.value;
        if (username=="") { alert("- Username required!"); return false; }
        if (firstname=="") { alert("- Firstname required!"); return false; }
        if (familyname=="") { alert("- Familyname required!"); return false; } 
        if (email=="") { alert("- E-mail required!"); return false; }
        if (password=="") { alert("- Password required!"); return false; }
        if (confpassword!=password) { alert("- Passwords not matched!"); return false; }
        if (email.indexOf("@")==-1 || email.indexOf(".")==-1) { alert("Invalid E-mail! (E-mail form : 'example@example.com')"); return false;}
        if (§document.form1.check.checked) {alert("- You need to check the box!"); return false;}
    }
</script>
<header>
    <a href="homepage.html"><img src="img/logo.jpg" class="logo"></a>
    <nav>
        <ul class="navLinks">
            <li><b><a href="homepage.html">Home</a></b></li>
            <li><b><a href="aboutUs_page.html">About Us</a></b></li>
        </ul>
    </nav>
    <a href="login_page.html" ><button class="login">Log in</button></a>
</header>
<body><br><br>
    <form class="signup-form" id="form1">
        <div class="signup-form__logo-container">
            <h1>Apprendice</h1>
        </div>
        <div class="signup-form__content">
            <div class="signup-form__header">Make an account</div>
            <input class="signup-form__input" type="text" name="username" placeholder="Username *">
            <input class="signup-form__input" type="text" name="firstname" placeholder="First name *">
            <input class="signup-form__input" type="text" name="familyname" placeholder="Family name *">
            <input class="signup-form__input" type="text" name="email" placeholder="E-mail *">
            <input class="signup-form__input" type="password" name="password" placeholder="Password *">
            <input class="signup-form__input" type="password" name="confpassword" placeholder="Confirm password *">
            <h5>Age (for statistics)</h5>
            <select class="signup-form__input" id="age">
                <option selected>--Select you age range--</option>
                <option>Under 18</option>
                <option>Between 18 and 20</option>
                <option>Between 20 and 30</option>
                <option>Between 30 and 50</option>
                <option>Over 50</option>
            </select>
            <div>
                <input type="checkbox" name="check">
                <label for="check">I trust this website with my data.</label>
            </div>
            <p>(*) Required field</p>
            <button class="signup-form__button" type="submit" name="signup-button" id="signup-button" onclick="return verif()">Create account</button>
            <div class="signup-form__links">
                <a class="signup-form__link" href="login_page.html">Already have an account? Log in here.</a>
            </div>
        </div>
    </form>
</body>

</html>
