const sidebarFirstTopicUp = document.getElementById("midterm-sidebar-first-topic-up");
const sidebarFirstTopicDown = document.getElementById("midterm-sidebar-first-topic-down");

const sidebarSecondTopicUp = document.getElementById("midterm-sidebar-second-topic-up");
const sidebarSecondTopicDown = document.getElementById("midterm-sidebar-second-topic-down");

const sidebarThirdTopicUp = document.getElementById("midterm-sidebar-third-topic-up");
const sidebarThirdTopicDown = document.getElementById("midterm-sidebar-third-topic-down");

const sidebarFirstTopicList = document.getElementById("midterm-first-topic-list");
const sidebarSecondTopicList = document.getElementById("midterm-second-topic-list");
const sidebarThirdTopicList = document.getElementById("midterm-third-topic-list");

function showSidebarList(show, hide,list1, list2, list3){
    show.style.display = "block";
    hide.style.display = "none";
    list1.style.display = "block";
    list2.style.display = "none";
    list3.style.display = "none";
}

function hideSidebarList(show, hide, list){
    show.style.display = "block";
    list.style.display = "none";
    hide.style.display = "none";
}
function navigation(show, hide){
    show.style.display = "block";
    hide.style.display = "none";
}

sidebarFirstTopicDown.addEventListener("click", function(){
    showSidebarList(sidebarFirstTopicUp, sidebarFirstTopicDown, sidebarFirstTopicList, sidebarSecondTopicList, sidebarThirdTopicList);
    navigation(sidebarSecondTopicDown, sidebarSecondTopicUp);
    navigation(sidebarThirdTopicDown, sidebarThirdTopicUp);
    
});

sidebarFirstTopicUp.addEventListener("click", function(){
    hideSidebarList(sidebarFirstTopicDown, sidebarFirstTopicUp, sidebarFirstTopicList);
});

sidebarSecondTopicDown.addEventListener("click", function(){
    showSidebarList(sidebarSecondTopicUp, sidebarSecondTopicDown, sidebarSecondTopicList, sidebarFirstTopicList);
    navigation(sidebarFirstTopicDown, sidebarFirstTopicUp);
    navigation(sidebarThirdTopicDown, sidebarThirdTopicUp);
});

sidebarSecondTopicUp.addEventListener("click", function(){
    hideSidebarList(sidebarSecondTopicDown, sidebarSecondTopicUp, sidebarSecondTopicList);
});

sidebarThirdTopicDown.addEventListener("click", function(){
    showSidebarList(sidebarThirdTopicUp, sidebarThirdTopicDown, sidebarThirdTopicList, sidebarFirstTopicList, sidebarSecondTopicList);
    navigation(sidebarFirstTopicDown, sidebarFirstTopicUp);
    navigation(sidebarSecondTopicDown, sidebarSecondTopicUp);
    sidebarSecondTopicList.style.display = "none";
});

sidebarThirdTopicUp.addEventListener("click", function(){
    hideSidebarList(sidebarThirdTopicDown, sidebarThirdTopicUp, sidebarThirdTopicList);
 
});


function scroll(elementId) {
    const element = document.getElementById(elementId); 
  
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    } else {
      console.error("Element with ID", elementId, "not found!"); 
    }
  }


const midtermfirstTopicListOne = document.getElementById("midterm-first-topic-list-one").addEventListener("click", function() {
    scroll("midterm-first-topic-first-space");
});
  
const midtermfirstTopicListTwo = document.getElementById("midterm-first-topic-list-two").addEventListener("click", function() {
    scroll("midterm-first-topic-second-space");
});
  
const midtermfirstTopicListThree = document.getElementById("midterm-first-topic-list-three").addEventListener("click", function() {
    scroll("midterm-first-topic-third-space");
});
  
const midtermfirstTopicListFour = document.getElementById("midterm-first-topic-list-four").addEventListener("click", function() {
    scroll("midterm-first-topic-fourth-space");
});


const midtermSecondTopicListOne = document.getElementById("midterm-second-topic-list-one").addEventListener("click", function() {
    scroll("midterm-second-topic-first-space");
});
  
const midtermSecondTopicListTwo = document.getElementById("midterm-second-topic-list-two").addEventListener("click", function() {
    scroll("midterm-second-topic-second-space");
});
  
const midetrmSecondTopicListThree = document.getElementById("midterm-second-topic-list-three").addEventListener("click", function() {
    scroll("midterm-second-topic-third-space");
});
  
const midtermSecondTopicListFour = document.getElementById("midterm-second-topic-list-four").addEventListener("click", function() {
    scroll("midterm-second-topic-fourth-space");
});

const midtermThirdTopicListOne = document.getElementById("midterm-third-topic-list-one").addEventListener("click", function() {
    scroll("midterm-third-topic-first-space");
});
  
const midtermThirdTopicListTwo = document.getElementById("midterm-third-topic-list-two").addEventListener("click", function() {
    scroll("midterm-third-topic-second-space");
});
  
const midtermThirdTopicListThree = document.getElementById("midterm-third-topic-list-three").addEventListener("click", function() {
    scroll("midterm-third-topic-third-space");
});
  
const midtermThirdTopicListFour = document.getElementById("midterm-third-topic-list-four").addEventListener("click", function() {
    scroll("midterm-third-topic-fourth-space");
});
const midtermThirdTopicListFive = document.getElementById("midterm-third-topic-list-five").addEventListener("click", function() {
    scroll("midterm-third-topic-fifth-space");
});

function scrollToTopOnReload() {
    setTimeout(function() {
        window.scrollTo(0, 0);
    }, 0);
}

window.addEventListener('beforeunload', function() {
    window.scrollTo(0, 0);
});

window.addEventListener('load', scrollToTopOnReload);

//search-engine

