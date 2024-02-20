var code; 
$.get("php/verification.php", function(a){
    
    if (a == "success") {
        document.getElementById('complete').click();
        setTimeout(() => {
            location.replace('dashboard');
        }, 1500);
    }
    else if (a == "error") {
        
        location.replace("app-login.html");
    
    }
    else{
        code = a;
    }


    });
function verify() {
    var codeInput = document.getElementById("ecode").value;
      
       if (codeInput == code) {
        document.getElementById('complete').click();
        $.get("php/verification.php?request=verify");
        setTimeout(() => {
          location.replace('dashboard');
        }, 1500);
       }
       else{
        document.getElementById('incomplete').click();
       }
}