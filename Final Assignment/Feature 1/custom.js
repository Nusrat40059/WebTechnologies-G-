$("#submit").on('click', function(){
    $.ajax({
      type: 'post',
      url: "server.php",
      data: $('#inputFormData').serialize(), 
      success: function(response) {
        $("#ajax-data").html(response);
      },
      error: function() {
        alert("error");
      }
    });
});