<div id="NavContainer">
    <div id="NavBarContainer">
        <div id="NavDropContainer"><img id="dropimage" src="Images/Dropdown.png" alt="menu button"></div>
        <div id="NavFill"></div>
    </div>
    <ul id="NavList">
        <a href="Find_Us"><li class="NavBox">About me</li></a>
        <li class="NavSpacer">
            <div class="NavSpacerFirst"></div>
            <div class="NavSpacerMid"></div>
            <div></div>
        </li>
        <a href="Comp_Course"><li class="NavBox">Qualifications</li></a>
        <li class="NavSpacer">
            <div class="NavSpacerFirst"></div>
            <div class="NavSpacerMid"></div>
            <div></div>
        </li>
        <a href="Design_Course"><li class="NavBox">Previous projects</li></a>
        <li class="NavSpacer">
            <div class="NavSpacerFirst"></div>
            <div class="NavSpacerMid"></div>
            <div></div>
        </li>
        <?php 
            if (session_status() === PHP_SESSION_ACTIVE){ $Cloud_label = "Personal cloud storage"; }
            else { $Cloud_label = "Login"; }
            echo "<a href=\"Login\"><li class=\"NavBox\">$Cloud_label</li></a>";
        ?>
    </ul>
</div>
<script src="js/NavigationAnimation.js" type="text/javascript" defer></script>