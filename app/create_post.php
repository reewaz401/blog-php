<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../create.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post" action ="create_post_controller.php">
  <div class="container">
    <label for="uname"><b>Header</b></label>
    <input type="text" placeholder="Header" name="header" required>
    <label for="psw"><b>Content</b></label>
    <textarea type="text" placeholder="Content" name="text" required ></textarea>  
    <button type="submit" name="but_submit">Post</button>
  </div>
</form>
</body>

</html>