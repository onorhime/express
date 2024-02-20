var urlParams;
(window.onpopstate = function () {
   // document.getElementById("loader2").classList.remove('hidden');
    var match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);
  
    urlParams = {};
    while (match = search.exec(query))
       urlParams[decode(match[1])] = decode(match[2]);
       if (urlParams['id'] == null || urlParams['id'] == '') {
        window.location.href = 'app-login.html';
       }
})();


function resetp() {
    document.getElementById("loader2").classList.remove('hidden')
    var pass = document.getElementById('pass').value;
    var pass1 = document.getElementById('pass1').value;

    if(pass.match(pass1)){
        $.post('php/reset.php', {
            id : urlParams['id'],
            pass: pass
        }, function(data) {
           setTimeout(() => {
            document.getElementById("loader2").classList.add('hidden')
            Swal.fire(
                {
                    icon: JSON.parse(data)['status'],
                    title: JSON.parse(data)['status'],
                    text: JSON.parse(data)['message'],
                    background: '#000'
                  }
               
              )
           }, 2000);
        })
    }else{
        setTimeout(() => {
            document.getElementById("loader2").classList.add('hidden');
            Swal.fire(
                {
                    icon: 'error',
                    title: 'paswords',
                    text: 'Passwords do not match',
                    background: '#000'
                  }
               
              )
        }, 1500);
       
    }
}