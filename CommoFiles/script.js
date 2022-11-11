// Nav Bar

// Contact Form
var navContactUsBtn = document.getElementById("navContactUs");
var adminLoginBtn = document.querySelector('#adminLoginBtn');
var closeFormBtn = document.querySelector("#closeForm");
var backDrop = document.querySelector(".backdrop");



navContactUsBtn.addEventListener("click", () => {
    document.querySelector(".contactUsDisplay").style.display = "block";
    document.querySelector(".backdrop").style.display = "block";
})



backDrop.addEventListener("click", closeFormWindow);
closeFormBtn.addEventListener("click", closeFormWindow);
loginCloseFormBtn.addEventListener("click", closeFormWindow);

function closeFormWindow() {
    document.querySelector(".contactUsDisplay").style.display = "none";
    backDrop.style.display = "none";
}

// Side Bar
var sideBarLabel = document.querySelector('.sideBarLabelContainer');
function openSideMenuLabel() {
    sideBarLabel.style.display = "block";
}
function closeSideMenuLabel() {
    sideBarLabel.style.display = "none";
}

var sideBarMenu = document.querySelector('.sideBarMenu');
var sideBarIcons = document.querySelector('.sideBarIcons');
var incompletionMsgBtn = document.querySelector('.incompletionMsg');
function openSideBarMenu() {
    if (sideBarIcons.style.display == 'block') {
        sideBarIcons.style.display = 'none';
        sideBarLabel.style.display = "none";
        // document.querySelector('.sideBarMenuExpand').style.display="block";
    }
    else { 
        sideBarIcons.style.display = 'block';
        sideBarLabel.style.display = "block";

        setTimeout(() => {
            sideBarLabel.style.display = "none";
        }, 3000);
    }
}

function incompAlertOpen(){
    incompletionMsgBtn.style.display = "block";
}
function incompAlertClose(){
    incompletionMsgBtn.style.display = "none";
}