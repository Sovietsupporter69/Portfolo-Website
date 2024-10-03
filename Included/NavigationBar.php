
<div id="NavContainer">
    <input type="checkbox" id="BarMover"></input>
    <div id="BurgerContainer">
        <svg id="Burger" width="60" height="56" viewBox="0 0 60 60">
            <line x1="12" y1="16" x2="48" y2="16" class="BurgerLine"></line>
            <line x1="12" y1="31" x2="48" y2="31" class="BurgerLine"></line>
            <line x1="12" y1="46" x2="48" y2="46" class="BurgerLine"></line>
        </svg>
    </div>
    <ul id="NavList">
        <li class="NavSpacer">
            <div class="NavSpacerFirst"></div>
            <div class="NavSpacerMid"></div>
            <div></div>
        </li>
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