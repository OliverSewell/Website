<!DOCTYPE html>
<html>
<head>
<title> include </title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <div class="wrapper">
    <?php
    $page_title = "about";
    include('includes/header.html');
    ?>
    <section class="about">
    <h2> Hello One and All. Welcome. </h2>
    <p> this is a website showing how you can display the header and footer on each page using php </p>
    </section>
  </div>
  <?php include('includes/footer.html')?>
</body>


</html>
