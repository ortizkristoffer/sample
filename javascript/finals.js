const sidebarFirstTopicUp = document.getElementById("finals-sidebar-first-topic-up");
const sidebarFirstTopicDown = document.getElementById("finals-sidebar-first-topic-down");

const sidebarSecondTopicUp = document.getElementById("finals-sidebar-second-topic-up");
const sidebarSecondTopicDown = document.getElementById("finals-sidebar-second-topic-down");

const sidebarFirstTopicList = document.getElementById("finals-first-topic-list");
const sidebarSecondTopicList = document.getElementById("finals-second-topic-list");


function showSidebarList(show, hide,list1, list2, ){
    show.style.display = "block";
    hide.style.display = "none";
    list1.style.display = "block";
    list2.style.display = "none";

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
    showSidebarList(sidebarFirstTopicUp, sidebarFirstTopicDown, sidebarFirstTopicList, sidebarSecondTopicList);
    navigation(sidebarSecondTopicDown, sidebarSecondTopicUp);

    
});

sidebarFirstTopicUp.addEventListener("click", function(){
    hideSidebarList(sidebarFirstTopicDown, sidebarFirstTopicUp, sidebarFirstTopicList);
});

sidebarSecondTopicDown.addEventListener("click", function(){
    showSidebarList(sidebarSecondTopicUp, sidebarSecondTopicDown, sidebarSecondTopicList, sidebarFirstTopicList);
    navigation(sidebarFirstTopicDown, sidebarFirstTopicUp);

});

sidebarSecondTopicUp.addEventListener("click", function(){
    hideSidebarList(sidebarSecondTopicDown, sidebarSecondTopicUp, sidebarSecondTopicList);
});



function scroll(elementId) {
    const element = document.getElementById(elementId); 
  
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    } else {
      console.error("Element with ID", elementId, "not found!"); 
    }
  }


const midtermfirstTopicListOne = document.getElementById("finals-first-topic-list-one").addEventListener("click", function() {
    scroll("finals-first-topic-first-space");
});
  
const midtermfirstTopicListTwo = document.getElementById("finals-first-topic-list-two").addEventListener("click", function() {
    scroll("finals-first-topic-second-space");
});
  
const midtermfirstTopicListThree = document.getElementById("finals-first-topic-list-three").addEventListener("click", function() {
    scroll("finals-first-topic-third-space");
});
  
const midtermfirstTopicListFour = document.getElementById("finals-first-topic-list-four").addEventListener("click", function() {
    scroll("finals-first-topic-fourth-space");
});


const midtermSecondTopicListOne = document.getElementById("finals-second-topic-list-one").addEventListener("click", function() {
    scroll("finals-second-topic-first-space");
});
  
const midtermSecondTopicListTwo = document.getElementById("finals-second-topic-list-two").addEventListener("click", function() {
    scroll("finals-second-topic-second-space");
});
  
const midetrmSecondTopicListThree = document.getElementById("finals-second-topic-list-three").addEventListener("click", function() {
    scroll("finals-second-topic-third-space");
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

let topic = [
    { title: "Elements and Categories of Risks", link: "#finals-first-topic-first-space", module: "1"},
    { title: "Risk Monitoring and Response", link: "#finals-first-topic-second-space", module: "1"},
    { title: "Incident Handling and Documentation", link: "#finals-first-topic-third-space", module: "1"},
    { title: "Backup and Recovery", link: "#finals-first-topic-fourth-space", module: "1"},

    { title: "Netiquette", link: "#finals-second-topic-first-space", module: "2"},
    { title: "Firewall and Software", link: "#finals-second-topic-second-space", module: "2"},
    { title: "Authentication Mechanisms", link: "#finals-second-topic-third-space", module: "2"},
];

const midetrmResultBox = document.querySelector(".result-box-finals");
const midetrmInputBox = document.getElementById("input-box-finals");

midetrmInputBox.onkeyup = onSearch;

function onSearch() {
    let result = [];
    let input = midetrmInputBox.value;

    if (input.length) {
        result = topic.filter((query) => {
            return query.title.toLowerCase().includes(input.toLowerCase());
        });
    } else {
        midetrmResultBox.innerHTML = '';
    }

    display(result);
}

function display(result) {
    let ul = document.createElement("ul");

    result.map((item) => {
    
        const link = document.createElement("a");
        link.href = item.link;
        link.addEventListener(`click`, () => clickLink(item.module));
        
        const li = document.createElement("li");
        li.textContent = item.title;
        link.appendChild(li);

        ul.appendChild(link);
    });

    midetrmResultBox.innerHTML = '';
    midetrmResultBox.appendChild(ul);
}

document.body.addEventListener('click', function(event) {
    if (event.target !== midetrmInputBox) {
        midetrmResultBox.innerHTML = '';
    }
});

