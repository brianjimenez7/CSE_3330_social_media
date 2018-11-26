<!DOCTYPE html>
<html>
    <head>
        <title>Update Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Update Page</h1>
        </div>
        <form method="post" action="updateauthen2.php">
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
                <button type="submit" name="check" class="btn">Submit</button>
            </div>
        </form>
    </body>
</html>