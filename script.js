document.getElementById("search-bar").addEventListener("click", eventHand);
document.getElementById("form-eff").addEventListener("click", () => {
  document
    .getElementById("search-bar")
    .classList.remove("search-click-effect-disable");
  document
    .getElementById("search-bar")
    .classList.add("search-click-effect-active");
});
function eventHand() {
  search_anime();

  document.getElementById("search-bar").removeEventListener("click", eventHand);
  document.getElementById("location-tag").addEventListener("click", fadeIn);
  document
    .getElementById("category-tag")
    .addEventListener("click", switchEffect);
}
function fadeIn() {
  const effectElement1 = document.getElementById("header-3");
  const effectElement2 = document.getElementById("header-4");
  document.getElementById("loc-svg").setAttribute("fill", "white");
  const locTag = document.getElementById("location-tag");
  locTag.classList.add("location-tag-active");

  document.getElementById("cat-svg").setAttribute("fill", "#ff2a51");

  const catTag = document.getElementById("category-tag");
  catTag.classList.remove("location-tag-active");

  anime({
    targets: ".header",
    height: ["30vh", "70vh"],
    easing: "easeInOutSine",
    duration: 200,
  });
  anime({
    targets: effectElement1,

    easing: "easeInOutSine",
    duration: 100,
    begin: () => {
      effectElement1.classList.remove("d-none");
      effectElement2.classList.add("d-none");
    },
    complete: () => {
      effectElement1.classList.add("d-flex");
      effectElement2.classList.remove("d-flex");
    },
  });
}
function switchEffect() {
  const effectElement1 = document.getElementById("header-3");
  const effectElement2 = document.getElementById("header-4");
  document.getElementById("cat-svg").setAttribute("fill", "white");
  document.getElementById("loc-svg").setAttribute("fill", "#ff2a51");

  const catTag = document.getElementById("category-tag");
  const locTag = document.getElementById("location-tag");
  locTag.classList.remove("location-tag-active");
  catTag.classList.add("location-tag-active");
  anime({
    targets: ".header",
    height: ["30vh", "70vh"],
    easing: "easeInOutSine",
    duration: 200,
  });
  anime({
    targets: effectElement2,

    easing: "easeInOutSine",
    duration: 100,
    begin: () => {
      effectElement2.classList.remove("d-none");
      effectElement1.classList.add("d-none");
    },
    complete: () => {
      effectElement2.classList.add("d-flex");
      effectElement1.classList.remove("d-flex");
    },
  });
}
function fadeOut() {
  const effectElement1 = document.getElementById("header-3");
  const effectElement2 = document.getElementById("header-4");
  document.getElementById("loc-svg").setAttribute("fill", "#ff2a51");
  document.getElementById("cat-svg").setAttribute("fill", "#ff2a51");
  const locTag = document.getElementById("location-tag");
  const catTag = document.getElementById("category-tag");
  locTag.classList.remove("location-tag-active");
  catTag.classList.remove("location-tag-active");
  anime({
    targets: ".header",
    height: ["70vh", "30vh"],
    easing: "easeInOutQuad",
    duration: 200,
  });
  anime({
    targets: effectElement1,

    easing: "easeInOutSine",
    duration: 100,
    begin: () => {
      effectElement1.classList.remove("d-flex");
    },
    complete: () => {
      effectElement1.classList.add("d-none");
    },
  });
  anime({
    targets: effectElement2,

    easing: "easeInOutSine",
    duration: 100,
    begin: () => {
      effectElement2.classList.remove("d-flex");
    },
    complete: () => {
      effectElement2.classList.add("d-none");
    },
  });
}

function addingInput() {
  // Get the container element where the input element will be added
  const container = document.getElementById("search-container");

  // Create the input element with type "text", class "form-control", and ID "form-eff"
  const inputElement = document.createElement("input");
  inputElement.setAttribute("type", "text");
  inputElement.setAttribute("class", "form-control ps-5");
  inputElement.setAttribute("id", "form-eff");
  inputElement.setAttribute("placeholder", "Search the Medicine");

  inputElement.style.border = "none";

  // Append the input element to the container
  container.appendChild(inputElement);
  document.getElementById("form-eff").addEventListener("click", () => {
    document
      .getElementById("search-bar")
      .classList.remove("search-click-effect-disable");
    document
      .getElementById("search-bar")
      .classList.add("search-click-effect-active");
  });
}
function removingDivs() {
  document.getElementById("st-1").remove();
  document.getElementById("st-2").remove();
}
function removingInputs() {
  document.getElementById("form-eff").remove();
}
function addingDivs() {
  const container = document.getElementById("search-container");

  // Create the first main div with class "col-5 pt-3 ps-2" and ID "st-1"
  const mainDiv1 = document.createElement("div");
  mainDiv1.setAttribute("class", "col-5 pt-3 ps-2");
  mainDiv1.setAttribute("id", "st-1");

  // Create the inner div with class "search-text"
  const innerDiv1 = document.createElement("div");
  innerDiv1.setAttribute("class", "search-text");

  // Create the paragraph element with inline styles
  const paragraph1 = document.createElement("p");
  paragraph1.textContent = "Location";
  paragraph1.style.fontSize = "16px";
  paragraph1.style.fontWeight = "400";

  // Append the paragraph to the inner div
  innerDiv1.appendChild(paragraph1);

  // Append the inner div to the main div
  mainDiv1.appendChild(innerDiv1);

  // Append the first main div to the container
  container.appendChild(mainDiv1);

  // Create the second main div with class "col-5 pt-3 ps-3" and ID "st-2"
  const mainDiv2 = document.createElement("div");
  mainDiv2.setAttribute("class", "col-5 pt-3 ps-3");
  mainDiv2.setAttribute("id", "st-2");

  // Create the inner div with class "search-text"
  const innerDiv2 = document.createElement("div");
  innerDiv2.setAttribute("class", "search-text");

  // Create the paragraph element with inline styles
  const paragraph2 = document.createElement("p");
  paragraph2.textContent = "Category";
  paragraph2.style.fontSize = "16px";

  // Append the paragraph to the inner div
  innerDiv2.appendChild(paragraph2);

  // Append the inner div to the main div
  mainDiv2.appendChild(innerDiv2);

  // Append the second main div to the container
  container.appendChild(mainDiv2);
}

function search_anime() {
  anime({
    targets: ".search-bar-group ",
    width: ["25vw", "50vw"],
    easing: "easeInOutQuad",
    duration: 300,
  });
  anime({
    targets: ".header",
    height: ["15vh", "30vh"],
    easing: "easeInOutQuad",
    duration: 300,
  });
  const effectElement = document.getElementById("header-2");
  anime({
    targets: effectElement,

    easing: "easeInOutSine",
    duration: 300,
    begin: () => {
      effectElement.classList.remove("d-none");
    },
    complete: () => {
      effectElement.classList.add("d-flex");
    },
  });
  document
    .getElementById("content-body")
    .addEventListener("click", searcheventHandler);
  removingDivs();
  addingInput();

  function searcheventHandler(event) {
    anime({
      targets: ".header",
      height: ["30vh", "15vh"],
      easing: "easeInOutQuad",
      duration: 300,
    });
    anime({
      targets: ".search-bar-group ",
      width: ["50vw", "25vw"],
      easing: "easeInOutQuad",
      duration: 100,
    });
    const effectElement = document.getElementById("header-2");
    anime({
      targets: effectElement,

      easing: "easeInOutSine",
      duration: 100,
      begin: () => {
        effectElement.classList.remove("d-flex");
      },
      complete: () => {
        effectElement.classList.add("d-none");
      },
    });

    document
      .getElementById("content-body")
      .removeEventListener("click", searcheventHandler);
    document.getElementById("search-bar").addEventListener("click", eventHand);
    document
      .getElementById("search-bar")
      .classList.add("search-click-effect-disable");
    document
      .getElementById("search-bar")
      .classList.remove("search-click-effect-active");
    fadeOut();
    removingInputs();
    addingDivs();
  }
}

function cityLoad(id) {
  var city = document.getElementById("city_area");
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      city.classList.remove("justify-content-center");
      city.classList.remove("align-items-center");
      city.classList.remove("d-flex");
      city.classList.add("pt-3");
      document.getElementById("city_area").innerHTML = t;
    }
  };

  r.open("GET", "cityLoadProcess.php?did=" + id, true);
  r.send();
}
