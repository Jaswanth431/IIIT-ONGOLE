//to disable and enable the toggle icon
$(document).ready(function() {
    $(".menu-toggle").click(function() {
        $(".navigation").toggleClass("visible");
        $(".menu-toggle").toggleClass("active-icon");
    });

    //to stop animating while page loading
    $("body").removeClass("preload");
});

//to make side navogation fixed in all pages that contains side navigation

//selecting side navigation
const ele = document.querySelector(".side-navigation");

//getting height
var height = document.querySelector("header").offsetHeight + document.querySelector(".location").offsetHeight;

window.addEventListener("scroll", () => {
    var targetposition = ele.getBoundingClientRect().top;
    var contentBoxPosition = document.querySelector(".content-box").getBoundingClientRect().top;

    if (targetposition <= 0) {
        if (!ele.classList.contains("fixed_side_navigation")) {
            ele.classList.add("fixed_side_navigation");
        }
    }
    if (contentBoxPosition > 0) {
        if (ele.classList.contains("fixed_side_navigation")) {
            ele.classList.remove("fixed_side_navigation");
        }
    }
});

//for popup windows

window.onhashchange = function() {
    //code
    var full_url = document.URL; // Get current url
    var url_array = full_url.split("="); // Split the string into an array with / as separator
    var last_segment = url_array[url_array.length - 1]; // Get the last part of the array (-1)
    if (!isNaN(parseInt(last_segment))) {
        document.querySelector("embed").src = "pdfs/faculty/" + last_segment + ".pdf";
        document.querySelector(".faculty-profile-box").style.display = "block";
        document.querySelector(".faculty").style.display = "block";

        document.querySelector(".faculty").style.backgroundColor = "rgba(0,0,0,0.7)";
    }
};

function ChangeUrl(title, url) {
    if (typeof history.pushState != "undefined") {
        var obj = { Title: title, Url: url };
        history.pushState(obj, obj.Title, obj.Url);
    } else {
        alert("Browser does not support HTML5.");
    }
}

var e = document.querySelector(".into");

if(e != null){
    e.addEventListener("click", () => {
    document.querySelector(".faculty-profile-box").style.display = "none";
    document.querySelector(".faculty").style.display = "none";

    var full_url = document.URL; // Get current url
    var url_array = full_url.split("#"); // Split the string into an array with / as separator
    var url = url_array[0];
    ChangeUrl("page1", url);
});

}

