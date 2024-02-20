init();

function init() {
    $.get('../php/noti.php', function(response) {
       // console.log(response);   
        document.getElementById("noti").innerHTML = response;
   
     
   
   });
}

function read(id) {
   
    $.post('../php/noti.php', {
        request: 'read',
        id: id
    }, function() {
        
        init();
    })
    
}