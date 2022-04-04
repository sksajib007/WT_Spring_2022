<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    
    <form action="" method="post">
        <?php
            include("../Control/ViewDataControl.php");
        ?>
        <br/>
        <button type="submit" name="seedata">See all user info</button>
    </form>
    <br />
    
    <form action="" method="post">
        <input type="text" name="searchtext" id="searchtextid">
        <button type="submit" name="search">Search and Edit</button>
    </form>
</body>

</html>