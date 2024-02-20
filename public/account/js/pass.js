function pass() {
    document.getElementById("loader2").classList.remove('hidden');
    var email = document.getElementById('pemail').value;

    $.post("php/pass.php",
    {
      email: email,
    },
    function(data,status){
     
     setTimeout(() => {
      document.getElementById("loader2").classList.add('hidden');
      Swal.fire(
        {
            icon: JSON.parse(data)['status'],
            title: JSON.parse(data)['status'],
            text: JSON.parse(data)['message'],
            background: '#000'
          }
       
      )
     }, 2000);
    }
    )
    
}