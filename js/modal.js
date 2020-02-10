$(".modal-open").click(function() {
   $(".modal").addClass("is-active");  
 });
 
 $(".modal-close, .close").click(function() {
    $(".modal").removeClass("is-active");
       $('.submit-button').attr('disabled', 'disabled');  
 });