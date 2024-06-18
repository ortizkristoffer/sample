const sidebarFirstTopicUp = document.getElementById("module-one-sidebar-first-topic-up");
const sidebarFirstTopicDown = document.getElementById("module-one-sidebar-first-topic-down");

const sidebarSecondTopicUp = document.getElementById("module-one-sidebar-second-topic-up");
const sidebarSecondTopicDown = document.getElementById("module-one-sidebar-second-topic-down");


const sidebarFirstTopicList = document.getElementById("module-one-first-topic-list");
const sidebarSecondTopicList = document.getElementById("module-one-second-topic-list");


function showSidebarList(show, hide,list1, list2){
    show.style.display = "block";
    list1.style.display = "block";
    list2.style.display = "none";
    hide.style.display = "none";
    
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


const moduleOnefirstTopicListOne = document.getElementById("module-one-first-topic-list-one");
const moduleOnefirstTopicListTwo = document.getElementById("module-one-first-topic-list-two");
const moduleOnefirstTopicListThree = document.getElementById("module-one-first-topic-list-three");
const moduleOnefirstTopicListFour = document.getElementById("module-one-first-topic-list-four");


function scroll(elementId) {
    const element = document.getElementById(elementId); 
  
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    } else {
      console.error("Element with ID", elementId, "not found!"); 
    }
  }
  
  moduleOnefirstTopicListOne.addEventListener("click", function() {
    scroll("module-one-first-topic-first-space");
  });
  
  moduleOnefirstTopicListTwo.addEventListener("click", function() {
    scroll("module-one-first-topic-second-space");
  });
  
  moduleOnefirstTopicListThree.addEventListener("click", function() {
    scroll("module-one-first-topic-third-space");
  });
  
  moduleOnefirstTopicListFour.addEventListener("click", function() {
    scroll("module-one-first-topic-fourth-space");
  });

const secondTopicFirstLesson = document.getElementById("module-two-second-topic-first-space");
const secondTopicSecondLesson = document.getElementById("module-two-second-topic-second-space");
const secondTopicThirdLesson = document.getElementById("module-two-second-topic-third-space");
const secondTopicFourthLesson = document.getElementById("module-two-second-topic-fourth-space");

const moduleTwosecondTopicListOne = document.getElementById("module-two-second-topic-list-one");
const moduleTwosecondTopicListTwo = document.getElementById("module-two-second-topic-list-two");
const moduleTwosecondTopicListThree = document.getElementById("module-two-second-topic-list-three");
const moduleTwosecondTopicListFour = document.getElementById("module-two-second-topic-list-four");

moduleTwosecondTopicListOne.addEventListener("click", function() {
    scroll("module-two-second-topic-first-space");
});
  
moduleTwosecondTopicListTwo.addEventListener("click", function() {
    scroll("module-two-second-topic-second-space");
});
  
moduleTwosecondTopicListThree.addEventListener("click", function() {
    scroll("module-two-second-topic-third-space");
});
  
moduleTwosecondTopicListFour.addEventListener("click", function() {
    scroll("module-two-second-topic-fourth-space");
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
    { title: "Cybersecurity", link: "#module-one-first-topic-first-space", module: "1"},
    { title: "Introduction to Risks, Threats, and Vulnerabilities", link: "#module-one-first-topic-second-space", module: "1"},
    { title: "The CIA Triad", link: "#module-one-first-topic-third-space", module: "1"},
    { title: "Data Classifications and Standards", link: "#module-one-first-topic-fourth-space", module: "1"},
    { title: "Subjects and Objects of Security", link: "#module-two-second-topic-first-space", module: "2"},
    { title: "Security Objectives", link: "#module-two-second-topic-second-space", module: "2"},
    { title: "IT Security Framework", link: "#module-two-second-topic-third-space", module: "2"},
    { title: "Security Architecture", link: "#module-two-second-topic-fourth-space", module: "2"},
];

const resultBox = document.querySelector(".result-box");
const inputBox = document.getElementById("input-box");

inputBox.onkeyup = onSearch;

function onSearch() {
    let result = [];
    let input = inputBox.value;

    if (input.length) {
        result = topic.filter((query) => {
            return query.title.toLowerCase().includes(input.toLowerCase());
        });
    } else {
        resultBox.innerHTML = '';
    }

    display(result);
}

function display(result) {
    let ul = document.createElement("ul");

    result.map((item) => {
        function clickLink(module) {
            if (module === "1") {
                //down1.click();
                //one.click();
            }
            if (module === "2") {
                //secondDown.click();
                //one2.click();
            }
            if (module === "3") {
                alert("Implement the 3rd Module!!!!");
            }
            if (module === "4") {
                alert("Implement the 4th Module!!!")
            }
        }

        const link = document.createElement("a");
        link.href = item.link;
        link.addEventListener(`click`, () => clickLink(item.module));
        
        const li = document.createElement("li");
        li.textContent = item.title;
        link.appendChild(li);

        ul.appendChild(link);
    });

    resultBox.innerHTML = '';
    resultBox.appendChild(ul);
}

document.body.addEventListener('click', function(event) {
    if (event.target !== inputBox) {
        resultBox.innerHTML = '';
    }
});

