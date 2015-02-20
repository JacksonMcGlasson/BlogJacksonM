<?php
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
//if the user is not authentic they are sent back to the index
if (!authenticateUser()) {
    header("Location:" . $path . "index.php");
    die();
}
?> 


<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>

    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
  <!--  <div>
        <label for="post">Photo: </label>
        <input type="file" name="filep" size="35"/>
    </div>-->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>