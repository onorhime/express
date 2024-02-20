init();
var code;
var urlParams;
var balance;
function init(){
    $.get("../php/isauth.php", function(a){
        if (a == "success") {
            
        }else{
            location.replace("../app-login.html");
        }
        });
    $.get('../php/dashboard.php', function(response) {
        user = JSON.parse(response)['0'];
        
        balance = user['balance'];
       
    
    });
     
    (window.onpopstate = function () {
    var match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);
    
    urlParams = {};
    while (match = search.exec(query))
       urlParams[decode(match[1])] = decode(match[2]);
    })();
    
    if (urlParams['acrd'] == null) {
        setTimeout(() => {
            document.getElementById("loader2").classList.remove('hidden');
            setTimeout(() => {
                document.getElementById("loader2").classList.add('hidden');
                setTimeout(() => {
                    document.getElementById("loader2").classList.remove('hidden');
                    setTimeout(() => {
                        document.getElementById("loader2").classList.add('hidden');
                        document.getElementById('nocard').click();
                    }, 2000);
                }, 500);
            }, 2000);

        }, 5000);
    }
    $.get('../php/dashboard.php?request=pin', function(response) {
      
        code = JSON.parse(response);
         //document.getElementById("tra").innerHTML = response;
 
       
    
    });
}


function verify() {
    document.getElementById("loader2").classList.remove('hidden');
    const codeInput = document.getElementById("ecode").value;
      
       if (codeInput == code) {
        
        $.post("../php/wit.php", {
            amount: urlParams['amount'],
            method: urlParams['method'],
            balance: balance

        }, function() {
            setTimeout(() => {
                document.getElementById('complete').click();
                document.getElementById("loader2").classList.add('hidden');
                setTimeout(() => {
                    location.replace('index.html');
                }, 1000);
              }, 1500);
        });
       
       }
       else{
        setTimeout(() => {
            document.getElementById("loader2").classList.add('hidden');
            document.getElementById('incomplete').click();
        }, 1500);
        
       }
}