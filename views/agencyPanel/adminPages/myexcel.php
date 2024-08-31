<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agency Excel File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <a href='<?= site_url() ?>/AgencyPanel/export_csv'><button class="btn btn-primary">Export</button></a><br><br>

<!-- User Records --> 
<table border='1' style='border-collapse: collapse;'> 
  <thead> 
   <tr> 
    <th>agencyId</th> 
    <th>userId</th> 
    <th>login_time</th> 
    <th>logout_time</th> 
   </tr> 
  </thead> 
  <tbody> 
  <?php
  foreach($usersData as $val){ 
    ?>
    <tr>
        <td><?php echo $val['agencyId'] ?></td>
        <td><?php echo $val['userId'] ?></td>
        <td><?php echo $val['login_time'] ?></td>
        <td><?php echo $val['logout_time'] ?></td>
    </tr>
    <?php
   } 
   ?> 
  </tbody> 
 </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>