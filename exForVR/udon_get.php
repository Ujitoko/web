<table border="1">
<tr><th>name</th><th>price</th></tr>
<?php
  $pdo = new PDO("mysql:dbname=ujitoko", "ujitoko", "Jj53r854k4");
  $st = $pdo->query("SELECT * FROM udon");
  while ($row = $st->fetch()) {
    $name = htmlspecialchars($row['name']);
    $price = htmlspecialchars($row['price']);
    echo "<tr><td>$name</td><td>$price yen</td></tr>";
  }

    $st = $pdo->prepare("INSERT INTO udon VALUES(?,?)");
    $st->execute(array($_GET['name'], $_GET['price']));
?>
</table>