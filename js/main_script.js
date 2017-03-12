var user ={
  userid :"",
  name:"User",
  email:""
};

function logout(){
  user.userid="";
  user.name="User";
  $.ajax({
    type: 'get',
    url: 'logout.php',
    success: function(){
      $(".logout").hide();
      $(".login-data").hide();
      $(".registrations").hide();
      $(".synergy-login").show();
      console.log("Logged out");
      showloggedInUser();
    }
  });
}
$(".logout")
.hide()
.on("click",function(){
  logout();
});
$(".login-data").hide();
$(".registrations").hide();


function showloggedInUser(){
  console.log("Showing logged in user");
  $.ajax({
    type: 'get',
    url: 'checkloginstatus.php',
    success: function(data){
      data=JSON.parse(data);
      console.log(data);
      if (data.status=="success"){
        user.name = data.name;
        user.userid = data.userid;
        user.email = data.email;
        $("#welcome-text").text("Hi, " + user.name);
        $(".login-data").html("Hi " + user.name + ",<br>Your Synergy ID is : " + user.userid+  "");

        $(".synergy-login").hide();
        $(".logout").show();
        $(".login-data").show();
        $(".registrations").show();
      }else {
        $("#welcome-text").text("Hi, " + user.name);
      }
    }
  });
}
showloggedInUser();

function synergyLogin(){
  $("#login-modal")
  .modal({
    blurring: false,
    onApprove : function(){
      console.log("Login Submit Clicked");
      $('#login-form').form('validate form');
      return false;
    }
  })
  .modal('show');
}

$(".synergy-login").on("click",function(){
  synergyLogin();
});

$('#login-form')
.form({
  on: 'blur',
  inline:true,
  fields: {
    email: {
      identifier: 'email',
      rules: [
        {
          type   : 'email',
          prompt : 'Please enter your Email'
        }
      ]
    },
    loginpassword: {
      identifier: 'login-password',
      rules: [
        {
          type   : 'minLength[1]',
          prompt : 'Please enter a password with atleast 8 characters'
        }
      ]
    }
  },
  onSuccess: function(event,fields){
    $("#loginSuccessLabel").hide();
    console.log(fields);
    $.ajax({
      type: 'post',
      url: 'login.php',
      data: fields,
      success: function (data) {
        data = JSON.parse(data);
        console.log(data);
        if (data.status == "success"){
          $('#loginSuccessLabel').show();
          $('#loginFailedLabel').hide();
          user.userid = data.userid;
          user.name = data.name;
          showloggedInUser();
          $("#loginSuccessLabel p").text(data.description);
          setTimeout(function(){
            $("#login-modal").modal("hide");
            $('#loginSuccessLabel').hide();
          },500);
        }else if (data.status == "fail"){
          $('#loginSuccessLabel').hide();
          $('#loginFailedLabel').show();
          $("#loginFailedLabel p").text(data.description);

        }
      }
    });

  },
  onFailure:function(){
    $('#loginFailedLabel').show();
    $("#loginFailedLabel p").text("Enter valid Email and password");
  }
});
$("#login-register").on("click", function(){
  $("#login-modal").modal("hide");
  $("#register-modal").modal("show");

});
$(".view-ui").on("click",function(){

  $('.ui.sidebar').sidebar('toggle')  ;
});
