
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Login</title>
    <link rel="stylesheet" type="text/css" href="story.css">
</head>
<body>

<h1>Write a Blog</h1>
    <form name="blogForm" action="submit_blog.php" method="POST">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" required></br></br>
        <label for="content">Content: </label>
        <textarea id="content" name="content" rows="10" cols="30" required></textarea></br></br>
        <label for="author">Author: </label>
        <input type="text" id="author" name="author" required></br></br>
        <input type="submit" value="Submit">
    </form>
  
    </body>

</html>