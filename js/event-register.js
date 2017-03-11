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
var eventcode = findGetParameter('event');
console.log(eventcode);
var register = findGetParameter('register');

$("#event-register").on("click", function(){
  if (user.userid===""){
    alert("You need to login first");
    synergyLogin();
  }else{
    $('#event-register-form')
    .form('set values', {
      member1name     : user.name,
      member1email   : user.email,
    });
    console.log(user);
      $("#event-register-modal")
      .modal({
        blurring: false,
        onApprove : function(){
          $('#event-register-form').form('validate form');
          return false;
        }
      })
      .modal('show');
    }
});
$("#event-register-form").form({
  on: 'blur',
  inline:true,
  fields:{
    member1name:'empty',
    member1email:'email',
  },
  onSuccess: function(event,fields){
    $("#eventRegisterSuccessLabel").hide();
    fields.event = eventcode;
    console.log(eventcode);
    console.log(fields);
    $.ajax({
      type: 'post',
      url: 'eventregister.php',
      data: fields,
      success: function (data) {
        data = JSON.parse(data);
        console.log(data);
        if (data.status == "success"){
          $('#eventRegisterSuccessLabel').show();
          $('#eventRegisterFailedLabel').hide();
          $("#eventRegisterSuccessLabel p").text(data.description);
          setTimeout(function(){
            $("#event-register-modal").modal("hide");
            $('#eventRegisterSuccessLabel').hide();
          },1000);
        }else if (data.status == "fail"){
          $('#eventRegisterSuccessLabel').hide();
          $('#eventRegisterFailedLabel').show();
          $("#eventRegisterFailedLabel p").text(data.description);

        }
      }
    });

  },

});
