const textBtnShow1 = document.getElementById("text-btn-show1");
const textBtnHide1 = document.getElementById("text-btn-hide1");
const firstP = document.getElementById("first-p");

const textBtnShow2 = document.getElementById("text-btn-show2");
const textBtnHide2 = document.getElementById("text-btn-hide2");
const secondP = document.getElementById("second-p");

const textBtnShow3 = document.getElementById("text-btn-show3");
const textBtnHide3 = document.getElementById("text-btn-hide3");
const thirdP = document.getElementById("third-p");

const textBtnShow4 = document.getElementById("text-btn-show4");
const textBtnHide4 = document.getElementById("text-btn-hide4");
const fourthP = document.getElementById("fourth-p");


function showTextP(text, show, close){
    text.style.display = "block";
    show.style.display = "none";
    close.style.display = "block";
}

function hideTextP(text, show, close){
    text.style.display = "none";
    show.style.display = "block";
    close.style.display = "none";
}

textBtnShow1.addEventListener("click", function(){
    showTextP(firstP, textBtnShow1, textBtnHide1);
});

textBtnHide1.addEventListener("click", function(){
    hideTextP(firstP, textBtnShow1, textBtnHide1);
});

textBtnShow2.addEventListener("click", function(){
    showTextP(secondP, textBtnShow2, textBtnHide2);
});

textBtnHide2.addEventListener("click", function(){
    hideTextP(secondP, textBtnShow2, textBtnHide2);
});

textBtnShow3.addEventListener("click", function(){
    showTextP(thirdP, textBtnShow3, textBtnHide3);
});

textBtnHide3.addEventListener("click", function(){
    hideTextP(thirdP, textBtnShow3, textBtnHide3);
});

textBtnShow4.addEventListener("click", function(){
    showTextP(fourthP, textBtnShow4, textBtnHide4);
});

textBtnHide4.addEventListener("click", function(){
    hideTextP(fourthP, textBtnShow4, textBtnHide4);
});


const textBtnShow12 = document.getElementById("text-btn-show12");
const textBtnHide12 = document.getElementById("text-btn-hide12");
const firstP2 = document.getElementById("first-p-2");

const textBtnShow22 = document.getElementById("text-btn-show22");
const textBtnHide22 = document.getElementById("text-btn-hide22");
const secondP2 = document.getElementById("second-p-2");

const textBtnShow32 = document.getElementById("text-btn-show32");
const textBtnHide32 = document.getElementById("text-btn-hide32");
const thirdP2= document.getElementById("third-p-2");

const textBtnShow42 = document.getElementById("text-btn-show42");
const textBtnHide42 = document.getElementById("text-btn-hide42");
const fourthP2 = document.getElementById("fourth-p-2");

textBtnShow12.addEventListener("click", function(){
    showTextP(firstP2, textBtnShow12, textBtnHide12);
});

textBtnHide12.addEventListener("click", function(){
    hideTextP(firstP2, textBtnShow12, textBtnHide12);
});

textBtnShow22.addEventListener("click", function(){
    showTextP(secondP2, textBtnShow22, textBtnHide22);
});

textBtnHide22.addEventListener("click", function(){
    hideTextP(secondP2, textBtnShow22, textBtnHide22);
});

textBtnShow32.addEventListener("click", function(){
    showTextP(thirdP2, textBtnShow32, textBtnHide32);
});

textBtnHide32.addEventListener("click", function(){
    hideTextP(thirdP2, textBtnShow32, textBtnHide32);
});

textBtnShow42.addEventListener("click", function(){
    showTextP(fourthP2, textBtnShow42, textBtnHide42);
});

textBtnHide42.addEventListener("click", function(){
    hideTextP(fourthP2, textBtnShow42, textBtnHide42);
});