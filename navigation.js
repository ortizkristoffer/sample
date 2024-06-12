const modules = document.getElementById("modules");
const down1 = document.getElementById("down");
const up1 = document.getElementById("up");
const first = document.getElementById("list");

const secondModules = document.getElementById("second-module");
const secondDown = document.getElementById("second-down");
const secondUp = document.getElementById("second-up");
const second = document.getElementById("second-list");

function showText(text, hide, show, close){
    text.style.display = "block";
    show.style.display = "none";
    close.style.display = "block";
    hide.style.display = "none"
}

function hideText(text, hide, show, close){
    text.style.display = "none";
    show.style.display = "block";
    close.style.display = "none";
    hide.style.display = "none"
}

down1.addEventListener("click", function(){
    showText(first, second, down1, up1);
});

up1.addEventListener("click", function(){
    hideText(first, second, down1, up1);
});

secondDown.addEventListener("click", function(){
    showText(second, first, secondDown, secondUp);
});

secondUp.addEventListener("click", function(){
    hideText(second, first, secondDown, secondUp);
});

const firstTopic = document.getElementById("first-topic");
const secondTopic = document.getElementById("second-topic");
const thirdTopic = document.getElementById("third-topic");
const fourtTopic = document.getElementById("fourth-topic");

const one = document.getElementById("one");
const two = document.getElementById("second");
const three = document.getElementById("third");
const four = document.getElementById("fourth");

const firstDiv = document.getElementById("first-module-div");

function scroll(element, div, secondDiv){
    div.style.display = "block";
    secondDiv.style.display = "none";
    element.scrollIntoView({ behavior: 'smooth' }); 
}

one.addEventListener("click", function(){
    scroll(firstTopic, firstDiv, secondDiv);
});
two.addEventListener("click", function(){
    scroll(secondTopic, firstDiv, secondDiv);
});
three.addEventListener("click", function(){
    scroll(thirdTopic, firstDiv, secondDiv);
});
four.addEventListener("click", function(){
    scroll(fourtTopic, firstDiv, secondDiv);
});

const firstTopic2 = document.getElementById("first-topic-2");
const secondTopic2 = document.getElementById("second-topic-2");
const thirdTopic2 = document.getElementById("third-topic-2");
const fourtTopic2 = document.getElementById("fourth-topic-2");

const one2 = document.getElementById("one-2");
const two2 = document.getElementById("second-2");
const three2 = document.getElementById("third-2");
const four2 = document.getElementById("fourth-2");

const secondDiv = document.getElementById("second-module-div");

one2.addEventListener("click", function(){
    scroll(firstTopic2, secondDiv, firstDiv);
});
two2.addEventListener("click", function(){
    scroll(secondTopic2, secondDiv, firstDiv);
});
three2.addEventListener("click", function(){
    scroll(thirdTopic2, secondDiv, firstDiv);
});
four2.addEventListener("click", function(){
    scroll(fourtTopic2, secondDiv, firstDiv);
});

const menu = document.getElementById("menu-icon");
const sidebar = document.getElementById("sideBar");
const back = document.getElementById("back-btn");

back.style.display = "none";

function showMenu(){
    sidebar.style.display = "block";
    back.style.display = "block";
 
}
function hideMenu(){
    sidebar.style.display = "none";
}

menu.addEventListener("click", showMenu);
back.addEventListener("click", hideMenu);

down1.click();
one.click();