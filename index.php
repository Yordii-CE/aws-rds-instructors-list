<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instructors list</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php require_once 'get_instructors.php';?>
 
    <div class="container my-3">
      <h3 class="alert-secondary alert text-center text-secondary">Instructors list</h3>
      <?php foreach ($instructors  as $instructor) :?>
        
        <div class="card my-3">
          <div class="card-header">
            <b>Code</b>: <?php echo $instructor["instructorCode"]?>
          </div>
          <div class="card-body">
            <p class="card-title"><?php echo $instructor["instructorFirstName"]?></p>
            <p class="card-text"><?php echo $instructor["instructorName"]?></p>           
          </div>
        </div>    
      <?php endforeach?>
    </div>
  </body>
</html>
