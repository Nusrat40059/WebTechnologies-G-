

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class="form-container">
  <h1>Form using Ajax</h1>
  <form id="inputFormData">
    <div>
      <input type="text" placeholder="Name" name="fullname" id="fullname">
      <input type="text" placeholder="UserName" name="username" id="username">
      <input type="text" placeholder="Phone" name="phone" id="phone">
      <input type="button" id="submit" value="Submit">
    </div>
  </form>
  <div id="ajax-data">
    
  </div>
</div>  
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#submit').on('click', function(){
    $.ajax({
      type: 'post',
      url: 'server.php',
      data: $('#inputFormData').serialize(),
      success: function(response){
        //alert(response)
        $('#ajax-data').html(response)
      },
      error: function(){
        alert('error found')
      }
    })
  })
</script>

</body>
</html>

