let form = document.getElementById("reg-form");
let nextButton = document.getElementById("next-btn");
let backButton = document.getElementById("back-btn");
let tabs = document.getElementsByClassName("tab");

let currentTab;
setCurrentTab(0)

nextButton.addEventListener("click", function () {
    backButton.style.opacity = "1";
})

function swapTab(x) {
    setCurrentTab(currentTab + x);
}

function setCurrentTab(x) {
    currentTab = x;

    (currentTab === 0) ? toggleVisibility(backButton, false)
        : toggleVisibility(backButton, true);

    showStep(x);

    if (currentTab === (tabs.length - 1)) {
        nextButton.value = "Завершить";
    } else if (currentTab === (tabs.length)) {
        tabs[currentTab - 1].style.display = "contents";
        form.submit();
    } else {
        nextButton.value = "Далее";
    }
}

function showStep(x) {
    for (let i = 0; i < tabs.length; i++) {
        let tab = tabs[i];
        if (i === x) {
            tab.style.display = "contents";
        } else {
            tab.style.display = "none";
        }
    }
}

function toggleVisibility(dom, isVisible) {
    dom.style.opacity = isVisible ? "1" : "0";
    backButton.style.pointerEvents = isVisible ? "auto" : "none";
}
