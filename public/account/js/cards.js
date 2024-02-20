var balance;
var errormessage;
init();
getCards();
function init(){
    $.get('../php/dashboard.php', function(response) {
         user = JSON.parse(response)['0'];
        // document.getElementById("avatar").setAttribute('src','../php/'+user['image']);
        // document.getElementById('name').innerHTML = user['name'];
        // document.getElementById('uid').innerHTML = user['accountid'];
        // document.getElementById('balance').innerHTML = '$ '+user['balance'];
        // document.getElementById("avatar1").setAttribute('src','../php/'+user['image']);
        // document.getElementById('balance1').innerHTML = '$ '+user['balance'];
        // document.getElementById('income').innerHTML = '$ '+user['income'];
        // document.getElementById('expense').innerHTML = '$ '+user['expense'];
        balance = user['balance'];
        errormessage = user['errormessage'];
    
    });
    $.get('../php/dashboard.php?request=trans', function(response) {
        
        // document.getElementById("tra").innerHTML = response;

       
    
    });
}

function getCards() {
$.get('../php/card.php?request=getcards',function(response) {
    //console.log(response);
    document.getElementById('mycards').innerHTML = response;
});
}
function addCard() {
    document.getElementById("loader2").classList.remove('hidden');
    var num = document.getElementById('cardnumber').value;
    var expYear = document.getElementById('exp-year').value;
    var expMonth = document.getElementById('exp-month').value;
    var cvv = document.getElementById('cardcvv').value;
    var pin = document.getElementById('pin').value;

    if (num == "" || expYear == "" || expMonth == "" || cvv == "") {
        setTimeout(() => {
         document.getElementById("carderror").click();
         document.getElementById("loader2").classList.add('hidden');
        }, 1000);
        return;
    }
    $.post("../php/card.php",
    {
      number: num,
      expy: expYear,
      expm: expMonth,
      cvv: cvv,
      pin: pin
    },function(response) {
        setTimeout(() => {
            document.getElementById("loader2").classList.add('hidden');
            document.getElementById('cardsuccess').click();
            setTimeout(() => {
                
                window.location.reload();
            }, 1500);
        }, 1000);
    })
} 
function addPhyCard() {
    document.getElementById("loader2").classList.remove('hidden');
    var country = document.getElementById('country').value;
    var city = document.getElementById('city').value;
    var address = document.getElementById('address').value;
    var zip = document.getElementById('zip').value;
    var type = document.getElementById('plan').value;
    var method = document.getElementById('payment').value;
    var message;
    var bg;

    if (method == 'bank') {
        
        setTimeout(() => {
            document.getElementById("loader2").classList.add('hidden');
            Swal.fire(

                {
                    icon: 'info',
                    title: 'Payment Method',
                    text: 'This payment method is not avaliable at the moment, please choose a different payment method or try again later , Thank you',
                    background: '#161129'
                  }
               
              );
        }, 2000);
        return;
    }
    $('#close2').click(function () {
        document.getElementById("loader2").classList.remove('hidden');

        $.get('../php/cards.php', function(response) {
            if (response == 'error') {
                setTimeout(() => {
                    document.getElementById("loader2").classList.add('hidden');
                    document.getElementById('opendep').click();
                }, 2000);

                return;

            }

            $.post("../php/card.php",
            {
              country: country,
              city: city,
              address: address,
              request: "addphycard",
              zip: zip,
              bg: bg,
              type: type
            },function(response) {
                //console.log(response)
    
                if (response == 'error') {
                    setTimeout(() => {
                        document.getElementById("loader2").classList.add('hidden');
                        Swal.fire(
                            {
                                icon: 'error',
                                title: 'Active Card',
                                text: 'Your MasterCard is still active',
                                background: '#161129'
                              }
                           
                          );
                    }, 1500);
    
                      return;
                }
                setTimeout(() => {
                    document.getElementById("loader2").classList.add('hidden');
                    document.getElementById('phycardsuccess').click();
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }, 1500);
            });
            
        });

   
        })
    switch (type) {
        case "silver":
            message = "You are about to purchase our Silver Mastercard "
            document.getElementById('message').innerHTML = message;
            document.getElementById('amount').innerHTML = 'Amount: $ 10,000';
            setTimeout(() => {
                document.getElementById("loader2").classList.add('hidden');
                document.getElementById('opendep').click();
            }, 1500);
            
            bg = 'bg-secondary'
            return;
        case "gold":
            message = "You are about to purchase our Gold Mastercard"
            document.getElementById('message').innerHTML = message;
            document.getElementById('amount').innerHTML = 'Amount: $ 25,000';
            setTimeout(() => {
                document.getElementById("loader2").classList.add('hidden');
                document.getElementById('opendep').click();
            }, 1500);
            bg = 'bg-warning'
            return;
        case "platnum":
            
            document.getElementById('amount').innerHTML = 'Amount: $ 20,000';
            setTimeout(() => {
                document.getElementById("loader2").classList.add('hidden');
                document.getElementById('opendep').click();
            }, 1500);
            bg = 'bg-dark'
            return;
    
        default:
            break;
    }
   
   
    
  
} 

function copy() {
    
    navigator.clipboard.writeText("bc1q5auka88fvcg0zhnp8ae5tj30v8gg7wuypk62pcv");
    document.getElementById('appe').style.display = 'block';
}