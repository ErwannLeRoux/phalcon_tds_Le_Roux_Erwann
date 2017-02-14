$(function(){

   $("#tout").click(function(){

       if ($('#tout:checked').val() !== undefined)
       {
            $('.autreCheck').attr('checked',true)
       }
       else
       {
            $(".autreCheck").attr("checked",false);
       }
   })



});
