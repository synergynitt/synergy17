$("#synergy-register").on("click",function(){
  $("#register-modal")
  .modal({
    blurring: false,
    onApprove : function(){
      console.log("Submit Clicked");
      $('#register-form').form('validate form');
      return false;
    }
  })
  .modal('show');
});

$('#register-form')
.form({
  on: 'blur',
  inline:true,
  fields: {
    firstname: {
      identifier: 'first-name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your Name'
        }
      ]
    },
    lastname: {
      identifier: 'last-name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your Name'
        }
      ]
    },
    email: {
      identifier: 'email',
      rules: [
        {
          type   : 'email',
          prompt : 'Please enter your Email'
        }
      ]
    },
    password: {
      identifier: 'password',
      rules: [
        {
          type   : 'minLength[1]',
          prompt : 'Please enter a password with atleast 8 characters'
        }
      ]
    },
    confirmPassword : {
      identifier: 'confirm-password',
      rules: [
        {
          type   : 'match[password]',
          prompt : 'Passwords do not match'
        }
      ]
    },
    college: {
      identifier: 'college',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your college name'
        }
      ]
    },
    department: {
      identifier: 'department',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your department'
        }
      ]
    },
    year: {
      identifier: 'year',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter what year you are studying'
        }
      ]
    },
    city: {
      identifier: 'city',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your city'
        }
      ]
    },
    phone: {
      identifier: 'phone',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your mobile number'
        }
      ]
    },
    rollno: {
      identifier: 'rollno',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your roll number'
        }
      ]
    }
  },
  onSuccess:function(event,fields){
    $("#registerSuccessLabel").hide();
    console.log(fields);
    $.ajax({
      type: 'post',
      url: 'register.php',
      data: fields,
      success: function (data) {
        data = JSON.parse(data);
        if (data.status == "success"){
          $('#registerSuccessLabel').show();
          $('#registerFailedLabel').hide();
          $("#registerSuccessLabel p").text(data.description);
          showloggedInUser();
          setTimeout(function(){
            $("#register-modal").modal("hide");
            $('#registerSuccessLabel').hide();
          },1000);
        }else if (data.status == "fail"){
          $('#registerSuccessLabel').hide();
          $('#registerFailedLabel').show();
          $("#registerFailedLabel p").text(data.description);

        }
      }
    });

  },
  onFailure:function(){
    console.log("Failure");
  }
});
