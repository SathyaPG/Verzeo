function signinclear()
{
     document.getElementById("signinuame").value='';
     document.getElementById("signinpwd").value='';
     document.getElementById("signinuame").style = '';
     document.getElementById("signinpwd").style = '';
}
function validate()
{
     var uname = document.getElementById("signinuame");
     var pwd = document.getElementById("signinpwd");

     if(uname.value.trim()=='')
     {
          document.getElementById("signinuame").style.border = "3px solid red";
          return false;
     }
     else if(pwd.value.trim()=='')
     {
          document.getElementById("signinpwd").style.border = "3px solid red";
          return false;
     }
}