<!DOCTYPE html>
<html lang="en">
    <head>
        <Meta name="viewport" content="width=device-width", initial-scale=1>
        <Meta name="description" content="A form used to contact Cantor College">
        <link rel="Stylesheet" href="StyleSheets/MobileStyle.css">
        <link rel="Stylesheet" href="StyleSheets/DesktopStyle.css" media="only screen and (min-width: 800px)">
        <meta name="Viewport" content="width=device-width, initial-scale=1">
        <title>Welcome!</title>
        <link rel="icon" href="Images/Ball panda.jpg">
    </head>
    <body>
        <?php
            include("Included/NavigationBar.php");
        ?>
        <div id="MainPage">
            <div id="MidPage">
                <div style="height: 5px; width: 100%"></div>
                <form id="CloudLogin" action="php/Register" method="POST">
                    <p>This is the login for my personal cloud (got to secure this because it has personal data in it)</p>
                    <div id="ContactName">
                        <label for="Username">Username:</label>
                        <input type="text" name="Username" id="User"></input>
                    </div>
                    <div id="ContactPass">
                        <label for="Password">Password:</label>
                        <input type="text" name="Password" id="Pass"></input>
                    </div>
                    <div id="AdminLvl">
                        <label for="lvl">Admin level:</label>
                        <input type="number" name="lvl" id="lvl"></input>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>