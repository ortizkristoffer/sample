let topic = [
    { title: "Cybersecurity", link: "#first_topic", module: "1"},
    { title: "Introduction to Risks, Threats, and Vulnerabilities", link: "#second-topic", module: "1"},
    { title: "The CIA Triad", link: "#third-topic", module: "1"},
    { title: "Data Classifications and Standards", link: "#fourth-topic", module: "1"},
    { title: "Subjects and Objects of Security", link: "#first-topic-2", module: "2"},
    { title: "Security Objectives", link: "#second-topic-2", module: "2"},
    { title: "IT Security Framework", link: "#third-topic-2", module: "2"},
    { title: "Security Architecture", link: "#fourth-topic-2", module: "2"},
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
                down1.click();
                one.click();
            }
            if (module === "2") {
                secondDown.click();
                one2.click();
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