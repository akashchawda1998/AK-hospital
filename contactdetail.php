<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM contact");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
 </head>
<body>
  <style type="text/css">
  body{
    background-color: white
    font-style: font-family: 'Oswald', sans-serif;
    margin: 20px;
  }
  </style>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="table-responsive-sm">
  <table  class="table">
    <style type="text/css">
      {
        margin: 25px;
        padding-top: 40px;
      }
    </style>
  
  <tr class="table-active">
    <td>Name</td>
    <td>Message</td>
    <td>subject</td>
    <td>Email</td>
    
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td scope="col"><?php echo $row["name"]; ?></td>
    <td><?php echo $row["message"]; ?></td>
    <td><?php echo $row["subject"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
 
</div>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
 <style type="text/css">
   table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}

 </style>
</html>