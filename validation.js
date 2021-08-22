 // login validation 
   
   function toggle()
   {
       var x= document.getElementById("pwd");
       if(x.type ==="password")
       {
        x.type = "text";
     }
       else
       {
        x.type = "password";
     }
   }
   function validateForm()
   {
       var y= document.getElementById("gmail").value;
       var v= /^[A-Za-z0-9.!#$%&`*+-_?^/]+@[A-Za-z0-9-]+.[a-z]{2,4}$/;
       
       
       var userResult= v.test(y);
       if(userResult == false)
       {
        alert("This type of syntax is not supported by our website, try using a different email id or check the syntax");
        return false;
     }

       var z= document.getElementById("pwd").value;
       var v2= /^[A-Za-z0-9]{8,15}$/;

       var passResult=v2.test(z);
       if(passResult == false)
       {
         alert("Password must be atleast 8 characters long");
     }
       return true;
   }
    
   // sign up validation
   
    function toggle2()
   {
       var a= document.getElementById("pwd1");
       var b= document.getElementById("pwd2");
       if(a.type ==="password" && b.type ==="password")
       {
        a.type = "text";
        b.type = "text";
     }
       else
       {
        a.type = "password";
        b.type = "password";
     }
   }

   function validateSignUp()
   {
     var fname= document.getElementById("name").value;
     var r1= /^[a-z ]{1,30}$/i;

     var result1= r1.test(fname);
     if (result1 === false)
     {
      alert("Name must contain alphabets only");
      return false;
     }
     
     var emailad= document.getElementById("email").value;
     var r2= /^[A-Za-z0-9.!#$%&`*+-_?^/]+@[A-Za-z0-9-]+.[a-z]{2,4}$/;

     var result2= r2.test(emailad);
     if(result2 === false)
     {
      alert("This type of syntax is not supported by our website, try using a different email id or check the syntax");
      return false;
     }

     var mno= document.getElementById("Mnumber").value;
     var r3= /^[0-9]{10}$/;

     var result3= r3.test(mno);
     if(result3 === false)
     {
      alert("Please enter 10-digit mobile number");
      return false;
     }

     var pass1= document.getElementById("pwd1").value;
     var pass2= document.getElementById("pwd2").value;

     if(pass1 === pass2)
     {
       return true;
     }
     else
     {
      alert("confirm password incorrect");
      return false;
     }
    
    return true;
   }

