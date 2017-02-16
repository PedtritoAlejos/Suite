// Add your javascript here
$(function(){
  $("h1").animate({
    "margin-left": "100px"
  }, "slow");
  
  
   $('#hora_h').inputmask("integer", { min: 0, max: 23, allowMinus: true });
  $('#minuto_h').inputmask("integer", { min: 0, max: 59, allowMinus: true });
});