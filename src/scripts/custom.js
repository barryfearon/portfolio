//add simple support for background images:
document.addEventListener('lazybeforeunveil', function(e){
    var bg = e.target.getAttribute('data-bg');
    if(bg){
        e.target.style.backgroundImage = 'url(' + bg + ')';
    }
  });

  $(function () { // When page finished loading
    if ( $('.no-backgroundblendmode').length ) { // if there is an DOM that has class no-backgroundblendmode
      $('.browserNotSupported').addClass('active'); // Show Modal
    }
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });