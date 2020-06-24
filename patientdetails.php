<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM patient");
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
  <table  class="table">
    <style type="text/css">
      {
        margin: 25px;
        padding-top: 40px;
      }
    </style>
  
  <tr class="table-active">
    <td>First Name</td>
    <td>Last Name</td>
    <td>City</td>
    <td>age</td>
    <td>Phone</td>
    <td>Email id</td>
    <td>Date</td>
    <td>Doctor</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td scope="col">

      <?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["city_name"]; ?></td>
    <td><?php echo $row["age"]; ?></td><td><?php echo $row["num"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["list"]; ?></td>
 
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