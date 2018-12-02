/*
   Created by Mohamed Essam 11/27/18
*/
document.getElementById("submit").addEventListener("click",validation);
document.getElementById("error").style.display="none";
  function validation(){
      var check = 0;
      //input
      var fname=document.getElementById("fname").value;
      var lname=document.getElementById("lname").value;
      var uname=document.getElementById("uname").value;
      var email=document.getElementById("email").value;
      var pass=document.getElementById("pass").value;
      var pass1=document.getElementById("pass1").value;
       
      //check validation of input
      const name = /^[a-zA-Z]+[a-zA-Z]*$/;
      const user_name = /^[a-zA-Z]+[a-zA-Z0-9]*$/;
      const email_check=/^[a-zA-Z0-9]+(@hotmail.com)$|^[a-zA-Z0-9]+(@gmail.com)$|^[a-zA-Z0-9]+(@yahoo.com)$/;
      const pass_check=/^[\w]{8,}/;

      if(!name.test(fname)){
          console.log(fname);
          document.getElementById("fn").innerHTML="-Invalid First name";
           check++;
      }else document.getElementById("fn").innerHTML="";

      if(!name.test(lname)){
          document.getElementById("ln").innerHTML="-Invalid Last name";
          check++;
     }else document.getElementById("ln").innerHTML="";
     if (! user_name.test(uname)){
      document.getElementById("un").innerHTML="-Invalid User name";
      check++;
     }else document.getElementById("un").innerHTML="";

     if(!email_check.test(email)){
      document.getElementById("em").innerHTML="-Invalid Email";
      check++;
     }else document.getElementById("em").innerHTML="";
      if(!pass_check.test(pass)){
       document.getElementById("pa").innerHTML="-Invalid Password";
       check++;
      }else document.getElementById("pa").innerHTML="";
      if(pass!=pass1){
      document.getElementById("pa1").innerHTML="-Password doesn't match";
       check++;
      }else document.getElementById("pa1").innerHTML="";
     if(check>0){
        document.getElementById("error").style.display="block";
     console.log("false"+check);
      return false;
     }
     else return true;
}
