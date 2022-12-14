<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
    <title>Social Login Form Flat Responsive widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Social Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- font files  -->
    <link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <!-- /font files  -->
    <!-- css files -->
    <link href="{{asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' media="all"/>
    <!-- /css files -->
</head>
<body>
<h1>Social Login Form</h1>
<div class="log">
    <div class="social w3ls">
        <li class="f"><a onclick="FacebookLogin()"><img src="{{asset('assets/images/fb.png')}}" alt=""></a>
        </li>
        <li class="g"><a onclick="GoogleLogin()"><img src="{{asset('assets/images/google.png')}}" alt=""></a>
        </li>
        <li class="t"><a onclick="InstagramLogin()"><img src="{{asset('assets/images/insta.png')}}" alt=""></a>
        </li>
        <li class="p"><a onclick="GitHubLogin()"><img src="{{asset('assets/images/github.png')}}" alt=""></a></li>
        <li class="i"><a onclick="LinkedInLogin()"><img src="{{asset('assets/images/ins.png')}}" alt=""></a></li>
        <div class="clear"></div>
    </div>
    <div class="content1 agileits">
        <h2>Sign In</h2>
        <form action="#" method="post">
            <input type="email" name="email" value="Email Address" onfocus="this.value = '';"
                   onblur="if (this.value == '') {this.value = 'Email Address';}">
            <input type="password" name="psw" value="Password" onfocus="this.value = '';"
                   onblur="if (this.value == '') {this.value = 'Password';}">
            <div class="button-row">
                <input type="submit" class="sign-in" value="Sign In">
                <div class="clear"></div>
            </div>
        </form>
        <h3>New Here? <a href="signup.html">Sign Up</a></h3>
    </div>
</div>
<div class="footer">
    <p>?? 2016 Social Login Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a>
    </p>
</div>
</body>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    const success = 0;
    function FacebookLogin() {
        $.ajax({
            type: "GET",
            url: '{{route('facebook_login')}}',
            success: function (res) {
                console.log(res);
                if (res.result === success) {
                    window.location.href = res.data;
                } else {
                    alert('Something wrong!')
                }
            },
        })
    }

    function GoogleLogin() {
        $.ajax({
            type: "GET",
            url: '{{route('login.google')}}',
            success: function (res) {
                if (res.result === success) {
                    window.location.href = res.data;
                } else {
                    alert('Something wrong!')
                }
            },
        })
    }
    function InstagramLogin() {
        $.ajax({
            type: "GET",
            url: '{{route('login.insta')}}',
            success: function (res) {
                if (res.result === success) {
                    window.location.href = res.data;
                } else {
                    alert('Something wrong!')
                }
            },
        })
    }
    function GitHubLogin() {
        $.ajax({
            type: "GET",
            url: '{{route('login.github')}}',
            success: function (res) {
                if (res.result === success) {
                    window.location.href = res.data;
                } else {
                    alert('Something wrong!')
                }
            },
        })
    }
    function LinkedInLogin() {
        $.ajax({
            type: "GET",
            url: '{{route('login.linkedin')}}',
            success: function (res) {
                if (res.result === success) {
                    window.location.href = res.data;
                } else {
                    alert('Something wrong!')
                }
            },
        })
    }

</script>
</html>
