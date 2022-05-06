$(document).ready(function() {
    $(`#form`).validate();
    $(`#form`).submit(function(e) {
        e.preventDefault();
     
        $.ajax({
          type: `POST`,
          url: `contact.php`,
          data: `name=` + $(`#name`).val()
          + `&email=` + $(`#email`).val()
          + `&message=` + $(`#message`).val(),
          success: function(){
            $(`#successMessage`).css(`display`,`block`);
            $(`#form`).css(`display`, `none`);
            $(`#errorMessage`).css(`display`,`none`);
          },
          error: function(){
            alert(`Error`);
            $(`#errorMessage`).css(`display`,`block`);
          }
          
        });
    });
});