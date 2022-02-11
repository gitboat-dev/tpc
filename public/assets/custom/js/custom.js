

jQuery(document).ready(function($){


// carousel bs-----------------------------


    $('#carousel-example-generic').on('slide.bs.carousel', function (e) {
        
        var slideFrom = $(this).find('.active').index();
        var slideTo = $(e.relatedTarget).index();

        if (slideTo==1) {
        }
        // console.log('silde '+' => '+slideTo);
    });



    $('video').on('play', function (e) {
        $("#carousel-example-generic").carousel('pause');
    });
    $('video').on('stop pause ended', function (e) {
        $("#carousel-example-generic").carousel();
    });

   


// end carousel bs--------------------------

    


  $('.single-image-select').first().addClass('head_zoom');
    $('.single-image-select img').first().addClass('check_zoom');
    $('.single-image-select').click(function(event) {
         $('.single-image-select').removeClass('head_zoom');
         $(this).addClass('head_zoom');
    });

    function gettoken(){
      return $('meta[name="csrf-token"]').attr('content');
    }
    function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!regex.test(email)) {
               return false;
            }else{
               return true;
            }
    }    


// end ajax modal send email (contact)

    
});

// end ajax modal send email (contact)
