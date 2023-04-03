<?php 
include './user.php';
$user= new User();
$row=$user->feedView();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Play Store</title>
	<link rel="stylesheet" type="text/css" href="./css/feed.css">
</head>
<body>
  <section class="section-first">
		<h1>Play Store</h1>
    <div class="view-all">
      <?php
            foreach($row as $rows){
            echo "<div class='data-fetch'><h2><a href='./controller/feed-controller.php?id=" . $rows["app_id"] . "'>" . $rows["app_name"]."</a></h2>";
            echo "<p><strong>Created by:</strong> " . $rows["developer"] . "</p>";
            echo "<p>" . $rows["description"] . "</p>";
            echo "<img src=".$rows["image"]." alt='img'></div>";
            }
      ?>
  </div>
  
  </section>
</body>
</html>
