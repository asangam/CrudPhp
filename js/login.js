function validate(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if ( username == "admin" && password == "admin")
        {
          return false;
          console.log("hey");
          window.location = "dashboard.html"; // Redirecting to other page.
          
          }
        }