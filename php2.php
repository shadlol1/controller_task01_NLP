<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Last Record</title>
</head>

<body>
  <?php
  // Connect to the database
  $db = new PDO("mysql:host=localhost;dbname=smartmethods", "root", "");

  // Get the last record
  $statement = $db->prepare("SELECT * FROM controller ORDER BY directions DESC LIMIT 1");
  $statement->execute();
  $row = $statement->fetch();

  // Print the last record
  if ($row) {
    echo $row["directions"];
  } else {
    echo "No records found";
  }

  // Close the connection
  $db = null;
  ?>
</body>

</html>