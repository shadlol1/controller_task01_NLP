function saveValue(buttonValue) {

  var connection = new XMLHttpRequest();
    connection.open("POST", "http://localhost/php.php");
    connection.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    connection.send("buttonValue=" + buttonValue);
  }
 