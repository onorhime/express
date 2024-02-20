init();
function init(){
    $.get('../php/dashboard.php', function(response) {
        user = JSON.parse(response)['0'];
        document.getElementById("avatar").setAttribute('src','../php/'+user['image']);
        
        if(user['verification'] == true){
            document.getElementById('emv').innerHTML = 'Verified';
        }else{
            document.getElementById('emv').innerHTML = 'Unverified';
        }
        if(user['kyc'] == true){
            document.getElementById('kyc').innerHTML = 'Verified';
        }else{
            document.getElementById('kyc').innerHTML = 'Unverified';
        }
    });
    
}
function logout(){
    document.getElementById('confirmlog').click();

    $('#proceedlog').click(function() {
        $.get('../php/logout.php');
    window.location.replace('../index.html');
    });
    
  }
