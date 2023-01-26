
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
<h1 class=>Velox Policies</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col border">
      <h3>IT Department</h3>
      <?php
        $destination = 'departments/IT';
        $files = scandir($destination);
        $dir = array_diff($files, array('.', '..'))
      ?>

      <ul style="list-style-type: none;">
        <?php foreach($dir as $file) : ?>
          <li><a target="_blank" href="<?php echo $destination.'/'.$file?>"><?php echo $file; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="col border">
      <h3>HR Department</h3>
      <?php
        $destination = 'departments/HR';
        $files = scandir($destination);
        $dir = array_diff($files, array('.', '..'))
      ?>

      <ul style="list-style-type: none;">
        <?php foreach($dir as $file) : ?>
          <li><a target="_blank" href="<?php echo $destination.'/'.$file?>"><?php echo $file; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="col border">
      <h3>Accounting Department</h3>
      <?php
        $destination = 'departments/Accounting';
        $files = scandir($destination);
        $dir = array_diff($files, array('.', '..'))
      ?>

      <ul style="list-style-type: none;">
        <?php foreach($dir as $file) : ?>
          <li><a target="_blank" href="<?php echo $destination.'/'.$file?>"><?php echo $file; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

</body>
</html>         