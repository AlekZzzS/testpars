
<?php
$conn = mysqli_connect("localhost", "root", "", "news");

if (isset($_POST['desired_date'])) {
  $desired_date = $_POST['desired_date'];
  $query = "SELECT * FROM news_table WHERE publication_date = '{$desired_date}'";

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<h3>" . $row["title"] . "</h3>";
      echo "<p>" . $row["content"] . "</p>";
     echo "<p>Published on: " . $row["publication_date"] . "</p>";
    }
  } else {
    echo "No news found for the selected date.";
  }
}

?>