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
        <form method="post" action="updateauthen.php">
            <div class="input-group">
                <label>Page ID</label>
                <input type="text" name="pageID">
            </div>
            <div class="input-group">
                <button type="submit" name="check" class="btn">Look Up</button>
            </div>
        </form>
    </body>
</html>