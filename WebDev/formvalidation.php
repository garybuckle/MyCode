<?php
  print_r ($_POST);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form Validation</title>
  </head>
  <body>
    <div class="container">
      <h1>Contact Us!</h1>
      <div id="error"></div>

      <form method="post">
    <div class="form-group">
      <label for="InputEmail">Email address</label>
      <input type="email" class="form-control" id="InputEmail" aria-describedby="email">
      <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" id="subject" name="subject">
    </div>

    <div class="form-group">
        <label for=Feedback">Feedback</label>
        <textarea class="form-control" id="feedback" name="feedback" rows="3"></textarea>
      </div>

    <button type="submit" id = "submit" class="btn btn-primary">Submit</button>
  </form>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script type="text/javascript">
$("form").submit(function (e) {
       e.preventDefault(); //prevent default form submit
       var error = "";

       if ($('#email').val() == "") {
        error+= "<p>Please enter an E-Mail address!<p>";
        console.log("Subject missing");
      }


       if ($('#subject').val() == "") {
        error+= "<p>Please enter a subject!<p>";
        console.log("Subject missing");
      }

       if ($('#feedback').val() == "") {
        error+= "<p>Please enter some feedback!<p>";
        console.log("feedback missing");
      }  
        
        if (error != "") {
          $('#error').addClass('alert alert-danger');
          $("#error").html(error);
        } else {
          $('#error').removeClass('alert alert-danger');
          $('form').unbind('submit').submit();
        }
        
      

     });

</script>


  </body>
</html>
