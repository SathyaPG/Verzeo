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
