<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>play store</title>
  <link rel="stylesheet" href="/css/feed-view.css">
  <!-- <link rel="stylesheet" href="/css/feed.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <div class="container">
      <nav class="flex-justify-between">
        <div class="head-left">
          <a href="/Feed/view"><img src="/image/playstore.png" alt="logo"></a>
        </div>
        <div class="head-right">
          <a href="/Userprofile/create"><i class="fa-solid fa-user"></i></a>
        </div>
      </nav>
    </div>
  </header>
  <section class="section-first">
    <div class="view-all">
      <?php
        echo "<div class='data-fetch'><h2>". $row["app_name"]."</a></h2>";
        echo "<p><strong>Created by:</strong> " . $row["developer"] . "</p>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<img src=".$row["image"]." alt='img'></div>";
      ?>
  </div>
  <div class="link">
    <button><a href="/downloadFile/<?php echo$row["app_id"];?>.txt" download>Download File</a></button>
    <button><a href="/Review/new?id=<?php echo$rows["app_id"];?>">Review this app</a></button>
    <a href="/Feed/view">Go back to home page</a>
  </div>
  <?php
  $user=$_SESSION['username'];
  if($user=="kartik.khandelwal@innoraft.com"):
  ?>
  <div class="buttons">
    <button><a href="/Edit/new?id=<?php echo$row["app_id"];?>">Edit</a></button>
    <button><a href="/Edit/delete?id=<?php echo$row["app_id"];?>">Delete</a></button>
  </div>
  <?php
   endif;
  ?>
  </section>
</body>
</html>
