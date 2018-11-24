<!DOCTYPE html>
<html>
    <head>
        <title>Create Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>New Page</h1>
        </div>
        <form method="post" action="pageauthen.php">
            <div class="input-group">
                <label>Page Name</label>
                <input type="text" name="PageName">
            </div>
            <div class="input-group">
                <label>Page Category</label>
                <input type="text" name="PageCategory">
            </div>
            <div class="input-group">
                <label>Page Description</label>
                <textarea name="PageDescription" rows="7" cols="81"></textarea>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Submit</button>
            </div>
        </form>
    </body>
</html>