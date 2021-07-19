
$(document.body).ready(function(){

         if($('#alert').length > 0 ) {
             console.log('jersuis ')
             let alert = $('#alert');
             alert.hide().slideDown(500);
             alert.find('.close').click(function (e){
                 e.preventDefault();
                 alert.slideUp();
             })
         }

});
