<html>
    <head>
        <title>Sign up form</title>
        <script type="text/javascript" src="abt-js.js"></script>
        <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="sign-up-js.js"></script>
    </head>
    <link rel="stylesheet" href="styles.css">
<body class="sign-up-body">
    <div class="sign-up-div">
        <p class="sign-up-div-p">SIGN UP HERE!!</p>
        <div class="container">

            <form onsubmit="return validate()" action="overviewtry.html">
            <label style="color: rgb(201, 206, 212);">Username</label>
            <input type="text" id="un" placeholder="Enter Username">
            <br>
            <label><b style="color: rgb(201, 206, 212);">Email</b></label>
            <input type="email" id="em" placeholder="Email ID">
            <label><b style="color: rgb(201, 206, 212);">Set Password</b></label>
            <input type="password" id="sp" placeholder="Enter Password">
            <br>
            <label><b style="color: rgb(201, 206, 212);">Confirm Password</b></label>
            <input type="password" id="cp" placeholder="Enter Password">
            <br>
            <br>
            <button class="clrbtn" onclick="signupclear()" type="button">clear</button>
            <button type="submit">Sign Up</button>
            </form>

        </div>
    </div>
</body>
</html>
<script>
    function signupclear()
{
     document.getElementById("un").value='';
     document.getElementById("em").value='';
     document.getElementById("sp").value='';
     document.getElementById("cp").value='';
     document.getElementById("em").style = '';
     document.getElementById("sp").style = '';
     document.getElementById("cp").style = '';
     document.getElementById("un").style = '';
}
function validate()
{
     var uname = document.getElementById("un");
     var mail = document.getElementById("em");
     var setp = document.getElementById("sp");
     var conp = document.getElementById("cp");
     if(uname.value.trim()=='')
     {
          document.getElementById("un").style.border = "3px solid red";
          return false;
     }
     else if(mail.value.trim()=='')
     {
          document.getElementById("em").style.border = "3px solid red";
          return false;
     }
     else if(setp.value.trim()=='')
     {
          document.getElementById("sp").style.border = "3px solid red";
          return false;
     }
     else if(conp.value.trim()=='')
     {
          document.getElementById("cp").style.border = "3px solid red";
          return false;
     }
     else if(setp.value != conp.value)
     {
         alert('Passwords did not match');
          return false;
     }
     else{
          return true;
     }
}

</script>