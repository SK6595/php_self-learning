<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample20</title>
</head>
<body>
    <p>お名前: <?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p>
</body>
</html>