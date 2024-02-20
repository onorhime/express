init();

function init(){
    $.get('../php/dashboard.php', function(response) {
        user = JSON.parse(response)['0'];
       
        if(user['kyc'] == true){
            document.getElementById('phycardsuccess').click();
            setTimeout(() => {
                window.location.replace('index.html');
            }, 1500);
        }
    
    });
    
}
function update() {
    var image = document.getElementById('fileuploadInput');
    var id = document.getElementById('idn').value;
    var name = document.getElementById('name').value;
    var mimage;

    if (image == '' || id =='' || name =='') {
        document.getElementById('balanceerror').click();
        return;
    }
    var fReader = new FileReader();
    fReader.readAsDataURL(image.files[0]);
    fReader.onloadend = function(event){
    mimage =  event.target.result;

    $.post('../php/kyc.php',{
        image: event.target.result,
        name: name,
        id: id
    }, function (response) {
        if (response == 'success') {
            document.getElementById('phycardsuccess').click();
            setTimeout(() => {
                window.location.replace('index.html');
            }, 1500);
        }
    });
    }
    
    
}