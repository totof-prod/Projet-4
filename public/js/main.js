
$(Document).ready(function(){
         if($('#alert').length > 0 ) {
             let alert = $('#alert');
             alert.hide().slideDown(500);
             alert.find('.close').click(function (e){
                 e.preventDefault();
                 alert.slideUp();
             })
         }
});


