function accomodationRegister(){
  $("#accomodation-modal")
  .modal({
    blurring: false,
    onApprove : function(){
      if (user.userid===""){
        alert("You need to login first");
        synergyLogin();
      }else{
        $("#accomodationRegisterSuccessLabel").hide();
        var fields = { register:1};
        $.ajax({
          type: 'post',
          url: 'accomodationregister.php',
          data: fields,
          success: function (data) {
            data = JSON.parse(data);
            console.log(data);
            if (data.status == "success"){
              $('#accomodationRegisterSuccessLabel').show();
              $('#accomodationRegisterFailedLabel').hide();
              $("#accomodationRegisterSuccessLabel p").text(data.description);
              setTimeout(function(){
                $("#accomodation-modal").modal("hide");
                $('#accomodationRegisterSuccessLabel').hide();
              },1000);
            }else if (data.status == "fail"){
              $('#accomodationRegisterSuccessLabel').hide();
              $('#accomodationRegisterFailedLabel').show();
              $("#accomodationRegisterFailedLabel p").text(data.description);

            }
          }
        });
        return false;
      }
    }
  })
  .modal('show');

}
$("#accomodation-register").on("click", function(){
  accomodationRegister();
});
$("#hospitality-verticalmenu").on("click", function(){
  accomodationRegister();
});
