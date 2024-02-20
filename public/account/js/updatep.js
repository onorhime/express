init();

function init(){
    $.get('../php/dashboard.php', function(response) {
        user = JSON.parse(response)['0'];
        document.getElementById("email").setAttribute('value', user['email']);
        document.getElementById("username").setAttribute('value', user['name']);
        document.getElementById("country").setAttribute('value', user['country']);
        document.getElementById("state").setAttribute('value', user['state']);
        document.getElementById("home").setAttribute('value', user['home']);
      
    
    });
    
}
function update() {
    var email = document.getElementById("email").value;
    var name = document.getElementById("username").value;
    var country = document.getElementById("country").value;
    var state = document.getElementById("state").value;
    var home = document.getElementById("home").value;

    if (email == '' || name=='' || country=='' || state=='' || home=='') {
        document.getElementById('balanceerror').click();
        return;
    }
    $.post('../php/user.php',{
        email: email,
        name: name,
        country: country,
        state: state,
        home: home,
        request: 'update'
    },function (response) {
        if (response == 'success') {
            document.getElementById('phycardsuccess').click();
            setTimeout(() => {
                window.location.replace('index.html');
            }, 1500);
        }
    });
}