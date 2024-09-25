let dropList = document.getElementById('NavList');
let mainPage = document.getElementById('MainPage');
let dropVisibility = false;

document.getElementById('NavDropContainer').addEventListener('click', DropControls);
function DropControls(){
    if (dropVisibility){
        dropList.style.display = "none";
        dropList.style.visibility = "hidden";
        mainPage.style.display = "flex";
        mainPage.style.visibility = "visible";
        dropVisibility = false;
    } else if (!dropVisibility){
        dropList.style.display = "flex";
        dropList.style.visibility = "visible";
        mainPage.style.display = "none";
        mainPage.style.visibility = "hidden";
        dropVisibility = true;
    }
}