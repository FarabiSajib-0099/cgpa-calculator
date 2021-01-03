<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>CGPA Calculate</title>
  </head>
  <body>

  <?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
      $first =$_POST['first'];
      $second =$_POST['second'];
      $third =$_POST['third'];
      $four =$_POST['four'];
      $five =$_POST['five'];
      $six =$_POST['six'];
      $seven =$_POST['seven'];
      $eight =$_POST['eight'];
      if(empty($first) ==true || empty($second)  || empty($third) || empty($four) || empty($five) || empty($six) || empty($seven) 
      || empty($eight)){
          $msg = "<div class='alert alert-danger'>Filed must needed fillup.</div>";

    
      }
      else{
          $first_semester=($first/100)*5;
          $second_semester=($second/100)*5;
          $third_semester=($third/100)*5;
          $four_semester=($four/100)*10;
          $five_semester=($five/100)*15;
          $six_semester=($six/100)*20;
          $seven_semester=($seven/100)*25;
          $eight_semester=($eight/100)*15;

          $result=($first_semester + $second_semester + $third_semester + $four_semester + 
          $six_semester + $seven_semester + $eight_semester);

      }

  }
  
  
  
  ?>
  <div class="container">
  <div class="card">
  <h2 class="text-center text-primary">CGPA Calculator</h2>
  </div>
  <div class="card">
  <div class="card-body">
  <form action="index.php" method="post" class="w-50 m-auto">
  <table class="table border">
  <tr>
  
  <td><label for="text">Fist Semester</label></td>
  <td><input type="text" class="form-control" name="first"></td>
  
  </tr>
  <tr>
  
  <td><label for="text">Second Semester</label></td>
  <td><input type="text" class="form-control" name="second"></td>
  
  </tr>
  <tr>
  
  <td><label for="text">Third Semester</label></td>
  <td><input type="text" class="form-control" name="third"></td>
  
  </tr>
  <tr>
  
  <td><label for="text">Fouth Semester</label></td>
  <td><input type="text" class="form-control" name="four"></td>
  
  </tr>
  <tr>
  
  <td><label for="text">Fifth Semester</label></td>
  <td><input type="text" class="form-control" name="five"></td>
  
  </tr>
  <tr>
  
  <td><label for="text">Sixith Semester</label></td>
  <td><input type="text" class="form-control" name="six"></td>
  
  </tr>
  <tr>
  
  <td><label for="text">Seventh Semester</label></td>
  <td><input type="text" class="form-control" name="seven"></td>
  
  </tr>
  <tr>
  
  <td><label for="text">Eighth Semester</label></td>
  <td><input type="text" class="form-control" name="eight"></td>
  
  </tr>
  
  
  </table>
  
  <input type="submit" class="btn btn-primary" value="Calculate">
   <?php
   
if(isset($result)){?>
<p class="text-center text-primary">Your Result is <strong><?php echo $result;?></strong></p>


   
   <?php }?>
  
  </form>
  
  
  </div>
  
  
  </div>
  
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>