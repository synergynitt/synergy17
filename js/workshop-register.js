function findGetParameter(parameterName) {
var result = null,
    tmp = [];
var items = location.search.substr(1).split("&");
for (var index = 0; index < items.length; index++) {
    tmp = items[index].split("=");
    if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
}
return result;
}
var workshop = findGetParameter('workshop');
var register = findGetParameter('register');

$("#workshop-register").on("click", function(){
  if (user.userid===""){
    alert("You need to login first");
    synergyLogin();
  }else{
    $('#workshop-register-form')
    .form('set values', {
      member1name     : user.name,
      member1email   : user.email,
    });
    console.log(user);
      $("#workshop-register-modal")
      .modal({
        blurring: false,
        onApprove : function(){
          $('#workshop-register-form').form('validate form');
          return false;
        }
      })
      .modal('show');
    }
});
$("#workshop-register-form").form({
  on: 'blur',
  inline:true,
  fields:{
    member1name:'empty',
    member1email:'email',
  },
  onSuccess: function(event,fields){
    $("#workshopRegisterSuccessLabel").hide();
    fields.workshop = workshop;
    console.log(workshop);
    console.log(fields);
    $.ajax({
      type: 'post',
      url: 'workshopregister.php',
      data: fields,
      success: function (data) {
        data = JSON.parse(data);
        console.log(data);
        if (data.status == "success"){
          $('#workshopRegisterSuccessLabel').show();
          $('#workshopRegisterFailedLabel').hide();
          $("#workshopRegisterSuccessLabel p").text(data.description);
          // setTimeout(function(){
          //   $("#workshop-register-modal").modal("hide");
          //   $('#workshopRegisterSuccessLabel').hide();
          // },1000);
        }else if (data.status == "fail"){
          $('#workshopRegisterSuccessLabel').hide();
          $('#workshopRegisterFailedLabel').show();
          $("#workshopRegisterFailedLabel p").text(data.description);

        }
      }
    });

  },

});
