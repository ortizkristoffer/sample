const sidebarFirstTopicUp = document.getElementById("prefinal-sidebar-first-topic-up");
const sidebarFirstTopicDown = document.getElementById("prefinal-sidebar-first-topic-down");

const sidebarSecondTopicUp = document.getElementById("prefinal-sidebar-second-topic-up");
const sidebarSecondTopicDown = document.getElementById("prefinal-sidebar-second-topic-down");

const sidebarFirstTopicList = document.getElementById("prefinal-first-topic-list");
const sidebarSecondTopicList = document.getElementById("prefinal-second-topic-list");


function showSidebarList(show, hide,list1, list2){
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




const prefinalfirstTopicListOne = document.getElementById("prefinal-first-topic-list-one").addEventListener("click", function() {
    scroll("prefinal-first-topic-first-space");
});
  
const prefinalfirstTopicListTwo = document.getElementById("prefinal-first-topic-list-two").addEventListener("click", function() {
    scroll("prefinal-first-topic-second-space");
});
  
const prefinalfirstTopicListThree = document.getElementById("prefinal-first-topic-list-three").addEventListener("click", function() {
    scroll("prefinal-first-topic-third-space");
});
  
const repfinalfirstTopicListFour = document.getElementById("prefinal-first-topic-list-four").addEventListener("click", function() {
    scroll("prefinal-first-topic-fourth-space");
});

const prefinalSecondTopicListOne = document.getElementById("prefinal-second-topic-list-one").addEventListener("click", function() {
    scroll("prefinal-second-topic-first-space");
});
  
const prefinalSecondTopicListTwo = document.getElementById("prefinal-second-topic-list-two").addEventListener("click", function() {
    scroll("prefinal-second-topic-second-space");
});
  
const prefinalSecondTopicListThree = document.getElementById("prefinal-second-topic-list-three").addEventListener("click", function() {
    scroll("prefinal-second-topic-third-space");
});
  
const repfinalSecondTopicListFour = document.getElementById("prefinal-second-topic-list-four").addEventListener("click", function() {
    scroll("prefinal-second-topic-fourth-space");
});


const prefinalSecondTopicListFifth = document.getElementById("prefinal-second-topic-list-five").addEventListener("click", function() {
    scroll("prefinal-second-topic-fifth-space");
});

const prefinalSecondTopicListSixth = document.getElementById("prefinal-second-topic-list-six").addEventListener("click", function() {
    scroll("prefinal-second-topic-sixth-space");
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

function showSuggestions(query) {
    if (query.length === 0) {
        document.getElementById("suggestions").innerHTML = "";
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("suggestions").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "suggest.php?q=" + query, true);
    xhr.send();
}

function fillInput(value) {
    document.getElementsByName("query")[0].value = value;
    document.getElementById("suggestions").innerHTML = "";
    document.getElementById("searchForm").submit();
}

//search-engine

let topic = [
    { title: "Network Awareness", link: "#prefinal-first-topic-first-space", module: "1"},
    { title: "Classification of Hackers", link: "#prefinal-first-topic-second-space", module: "1"},
    { title: "Methods of Cyberattack", link: "#prefinal-first-topic-third-space", module: "1"},
    { title: "Phases of Cybersecurity Attack", link: "#prefinal-first-topic-fourth-space", module: "1"},

    { title: "Spyware", link: "#prefinal-second-topic-first-space", module: "2"},
    { title: "Adware", link: "#prefinal-second-topic-second-space", module: "2"},
    { title: "Rootkits", link: "#prefinal-second-topic-third-space", module: "2"},
    { title: "Ransomeware", link: "#prefinal-second-topic-fourth-space", module: "2"},
    { title: "Trojan Horse", link: "#prefinal-second-topic-fifth-space", module: "2"},
    { title: "Backdoors", link: "#prefinal-second-topic-sixth-space", module: "2"}
];

const prefinalResultBox = document.querySelector(".result-box-prefinal");
const prefinalInputBox = document.getElementById("input-box-prefinal");

prefinalInputBox.onkeyup = onSearch;

function onSearch() {
    let result = [];
    let input = prefinalInputBox.value;

    if (input.length) {
        result = topic.filter((query) => {
            return query.title.toLowerCase().includes(input.toLowerCase());
        });
    } else {
        prefinalResultBox.innerHTML = '';
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

    prefinalResultBox.innerHTML = '';
    prefinalResultBox.appendChild(ul);
}

document.body.addEventListener('click', function(event) {
    if (event.target !== prefinalInputBox) {
        prefinalResultBox.innerHTML = '';
    }
});

