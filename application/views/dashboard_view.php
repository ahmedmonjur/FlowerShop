<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Dashboard Area</h2>

  <p>Welcome <?php echo $this->session->userdata('firstname'); ?></p>

  <a href="auth/logout">Logout</a>

  
</div>

</body>
</html>
