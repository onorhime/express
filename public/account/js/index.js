var balance;
var errormessage;
var method;
var card;
var kyc;
var loanamount;
init();
setTimeout(() => {
    init();
}, 2000);
function init(){
    
    $.get('../php/dashboard.php', function(response) {
        user = JSON.parse(response)['0'];
        document.getElementById("avatar").setAttribute('src','../php/'+user['image']);
        document.getElementById('name').innerHTML = user['name'];
        document.getElementById('uid').innerHTML = user['accountid'];
        document.getElementById('balance').innerHTML = '$ '+numberWithCommas(user['balance']);
        document.getElementById("avatar1").setAttribute('src','../php/'+user['image']);
        document.getElementById('balance1').innerHTML = '$ '+user['balance'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        document.getElementById('income').innerHTML = '$ '+numberWithCommas(user['income']);
        document.getElementById('expense').innerHTML = '$ '+numberWithCommas(user['expense']);
        balance = parseInt(user['balance']);
        errormessage = user['errormessage'];
        loanamount = user['expense'];
        kyc = user['kyc'];
    
    });
    $.get('../php/dashboard.php?request=trans', function(response) {
        
         document.getElementById("tra").innerHTML = response;

       
    
    });
    $.get('../php/dashboard.php?request=card', function(response) {
      
       card = JSON.parse(response);
        //document.getElementById("tra").innerHTML = response;

      
   
   });
   $.get('../php/dashboard.php?request=count', function(response) {
       
    document.getElementById("notification").innerHTML = response;

  

});
}

function add(){
    document.getElementById("loader2").classList.remove('hidden');
    var amount = document.getElementById('depamm').value;
    
    document.getElementById('amount').innerHTML = "Amount: $"+amount;
    
    setTimeout(() => {
        document.getElementById('opendep').click();
        document.getElementById("loader2").classList.add('hidden');
    }, 1000);

    $('#close1').click(function () {
        document.getElementById("loader2").classList.remove('hidden');
        $.post("../php/pay.php",
        {
        amount: amount,
        type: 'deposit'
        
        }, function(s) {
            
           setTimeout(function() {
            document.getElementById("loader2").classList.add('hidden');
            document.getElementById('depsuccess').click();
            setTimeout(() => {
                window.location.reload();
            }, 1000);
           },2000);
           

            return;

        })
    })
}

function wit() {
    document.getElementById("loader2").classList.remove('hidden');
    var amount = document.getElementById('amountwit').value;
    document.getElementById('textwit').innerHTML = "You're about to withdraw $"+amount;
     if (amount > balance) {
        setTimeout(() => {
            document.getElementById("loader2").classList.add('hidden');
            Swal.fire(
                {
                    icon: 'error',
                    title: 'Low Balance',
                    text: 'proceed to add balance',
                    background: '#161129'
                  }
               
              )
        }, 1000);
         return;
     }

    setTimeout(() => {
        document.getElementById("loader2").classList.add('hidden');
         document.getElementById('confirmwit').click();
    }, 1000);
    
     
     $('#proceedwit').click(function() {
        document.getElementById("loader2").classList.remove('hidden');
        if (card == 'error') {
            //document.getElementById('errortext').innerHTML = "You must have our mastercard in order to process withdrawal";
            setTimeout(() => {
                document.getElementById("loader2").classList.add('hidden');
                //document.getElementById('witsuccess').click();
               // document.getElementById("loader2").classList.add('hidden');
                window.location.replace('confirm.html?amount='+amount+'&&method='+method);
            }, 1000);
            return;
        }

        setTimeout(() => {
            document.getElementById("loader2").classList.add('hidden');
            window.location.replace('confirm.html?amount='+amount+'&&method='+method+'&&acrd=true');
        }, 1000);
       
     });
}
function changeform(value) {
    method = value;
    document.getElementById('sme').style.display = 'none';

    switch (value) {
        case 'paypal':
            document.getElementById('pp').style.display = 'block';
            document.getElementById('wu').style.display = 'none';
            document.getElementById('bank').style.display = 'none';
            document.getElementById('btc').style.display = 'none';
            break;
        case 'bank':
            document.getElementById('bank').style.display = 'block';
            document.getElementById('wu').style.display = 'none';
            document.getElementById('pp').style.display = 'none';
            document.getElementById('btc').style.display = 'none';
            break;
        case 'wu':
        document.getElementById('wu').style.display = 'block';
        document.getElementById('pp').style.display = 'none';
        document.getElementById('bank').style.display = 'none';
        document.getElementById('btc').style.display = 'none';
        break;
        case 'btc':
            document.getElementById('btc').style.display = 'block';
            document.getElementById('wu').style.display = 'none';
            document.getElementById('bank').style.display = 'none';
            document.getElementById('pp').style.display = 'none';
            break;
    
        
    
        
                    
    
        default:
            break;
    }
}
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }


  function copy() {
    
    navigator.clipboard.writeText("bc1q5auka88fvcg0zhnp8ae5tj30v8gg7wuypk62pcv");
    document.getElementById('appe').style.display = 'block';
}
function loan(id) {
    lam = document.getElementById('lam').value;
    document.getElementById("loader2").classList.remove('hidden');
    setTimeout(() => {
        if (kyc == 0) {
            setTimeout(() => {
                document.getElementById("loader2").classList.add('hidden');
                Swal.fire(
                    {
                        icon: 'info',
                        title: 'Incomplete KYC',
                        text: 'Complete your KYC verification to apply for a loan',
                        background: '#000'
                      }
                   
                  )
               
            }, 1000);
            return;
        }
        if (lam < loanamount) {
            document.getElementById("loader2").classList.add('hidden');
            setTimeout(() => {
                Swal.fire(
                    {
                        icon: 'info',
                        title: 'Not Eligible',
                        text: 'Your Eligible Loan Amount is $'+numberWithCommas(loanamount)+ ' Please Try Again Later',
                        background: '#000'
                      }
                   
                  )
                 
            }, 1000);

            return;
        }
        document.getElementById("loader2").classList.add('hidden');
        setTimeout(() => {
            document.getElementById("loader2").classList.remove('hidden');
            setTimeout(() => {
                document.getElementById("loader2").classList.add('hidden');
                Swal.fire(
                    {
                        icon: 'success',
                        title: 'Success',
                        text: 'You loan application is now pending and awaiting approval',
                        background: '#000'
                      }
                   
                  )
            }, 2000);
        }, 700);
    }, 2000);
}
function logout(){
    document.getElementById('confirmlog').click();

    $('#proceedlog').click(function() {
        $.get('../php/logout.php');
    window.location.replace('../index.html');
    });
    
  } 