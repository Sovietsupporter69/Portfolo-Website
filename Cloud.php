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
                <form id="ContactForm" action="php/SubmitStuff" method="POST">
                    <p>Please fill out the contact form bellow if you want to contact us.</p>
                    <div id="ContactTitle">
                        <label for="Title">Title:</label>
                        <input type="text" name="ContentTitle" id="Title"></input>
                    </div>
                    <div id="ContactContent">
                        <label for="Content">Explain what you want to talk about:</label>
                        <textarea cols="4" name="ContentContent" id="Content"></textarea>
                    </div>
                    <div id="ContactName">
                        <label for="First">First Name:</label>
                        <input type="text" name="ContentFirstName" id="First"></input>
                        <label for="Last">Last Name:</label>
                        <input type="text" name="ContentLastName" id="Last"></input>
                    </div>
                    <div id="ContactEmail">
                        <label for="Email">Email:</label>
                        <input type="text" name="ContentEmail" id="Email"></input>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>