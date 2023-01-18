<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div class="container">
        <div class="container-fluid">
            <form action="" method="post">
            <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
        
  <div class="mb-3">
    <label for="emailcontact" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="emailcontact" aria-describedby="emailHelp" required>
    <div id="emailHelp"  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="number" class="form-label">Telephone Number</label>
    <input type="number" name="number" class="form-control" id="number">
  </div>
  <div class="mb-3">
    <label for="comment" class="form-label">Comment</label>
    <textarea type="text" name="comment" class="form-control" id="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
    
</body>
</html>