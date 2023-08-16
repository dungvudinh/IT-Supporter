var absoluteElement = document.querySelectorAll(
  ".header__list-items-absolute-child"
);
var absoluteTop = 30;
for (var index in absoluteElement) {
  if (index % 2 == 0) {
    absoluteTop = 30;
  } else absoluteTop = 60;
  if (absoluteElement.hasOwnProperty(index)) {
    absoluteElement[index].style.top = `${absoluteTop}%`;
  }
}

var menuRegister= document.querySelector(".menu-register");
const formReview  = document.querySelector('.formbg-outer_review');
const formRegister = document.querySelector('.formbg-outer_register');
var b = document.querySelector(".header__icon-bars-container");
menuRegister.onclick = function (e) {
  formRegister.classList.add('active');
  formReview.classList.remove('active');
  Object.assign(b.style, {
    transform: "translateX(0)",
    transition: "transform .3s linear",
  });
};
var menuReview= document.querySelector(".menu-review");
menuReview.onclick = function (e) {
  formRegister.classList.remove('active');
  formReview.classList.add('active');
  console.log(formReview)
  Object.assign(b.style, {
    transform: "translateX(0)",
    transition: "transform .3s linear",
  });
};
var closesidebarElement = document.querySelector(
  ".header__icon-bars-container-close"
);
closesidebarElement.onclick = function (e) {
  Object.assign(b.style, {
    transform: "translateX(100%)",
    transition: "transform .3s linear",
  });
};

var contentbackground1 = document.querySelector(".content__background1");
var contentbackground2 = document.querySelector(".content__background2");
var contentbackground2textElement = document.querySelector(
  ".content__background2-text"
);
var contentbackground1textElement = document.querySelector(
  ".content__background1-text"
);
var contentbackgroundleft = document.querySelector(
  ".content__container-background-icon-left"
);
var contentbackgroundright = document.querySelector(
  ".content__container-background-icon-right"
);
var time1, time2;
function startTime1() {
  Object.assign(contentbackground2.style, {
    opacity: "0.9",
  });
  Object.assign(contentbackground1.style, {
    opacity: "0",
  });
  Object.assign(contentbackground2textElement.style, {
    animation: "opacityappear 1s linear ",
  });

  Object.assign(contentbackground1textElement.style, {
    animation: "opacityabsent 0s linear ",
  });
}

function startTime2() {
  Object.assign(contentbackground2.style, {
    opacity: "0",
  });
  Object.assign(contentbackground1.style, {
    opacity: "0.9",
  });
  Object.assign(contentbackground1textElement.style, {
    animation: "opacityappear 1s linear ",
  });

  Object.assign(contentbackground2textElement.style, {
    animation: "opacityabsent 0s linear ",
  });
}

setTimeout(function () {
  startTime1();
  time1 = setInterval(startTime1, 8000);
}, 4000);
setTimeout(function () {
  startTime2();
  time2 = setInterval(startTime2, 8000);
}, 8000);

contentbackgroundleft.onclick = function (e) {
  if (contentbackground2.style.opacity == "0") {
    clearInterval(time1);
    clearInterval(time2);

    startTime1();
    time1 = setInterval(startTime1, 8000);
    time2 = setInterval(startTime2, 4000);
  } else if (contentbackground1.style.opacity == "0") {
    clearInterval(time1);
    clearInterval(time2);

    startTime2();
    time2 = setInterval(startTime2, 8000);
    time1 = setInterval(startTime1, 4000);
  }
};

contentbackgroundright.onclick = function (e) {
  if (contentbackground2.style.opacity == "0") {
    clearInterval(time1);
    clearInterval(time2);

    startTime1();
    time1 = setInterval(startTime1, 8000);
    time2 = setInterval(startTime2, 4000);
  } else if (contentbackground1.style.opacity == "0") {
    clearInterval(time1);
    clearInterval(time2);

    startTime2();
    time2 = setInterval(startTime2, 8000);
    time1 = setInterval(startTime1, 4000);
  }
};

var headerfixed1Element = document.querySelector(".header__fixed-1");
var headerfixed2Element = document.querySelector(".header__fixed-2");
setTimeout(function () {
  Object.assign(headerfixed1Element.style, {
    transform: "translateX(0)",
    transition: "transform .3s linear",
  });
  Object.assign(headerfixed2Element.style, {
    transform: "translateX(0)",
    transition: "transform .3s linear",
  });
}, 500);

var check = 0;
b.onclick = function (e) {
  check -= 5;
  e.target.style.top = `${check}px`;
};

var contentreviewlistElement = document.querySelector(".content__review-list");
var contentreviewitemiconElement = document.querySelectorAll(
  ".content__review-list-items-icon"
);
var res = 0;

contentreviewitemiconElement[0].onclick = function (e) {
  res += 100;
  if (res <= 0) {
    Object.assign(contentreviewlistElement.style, {
      marginLeft: `${res}%`,
      transition: "margin-left .4s linear",
    });
  } else {
    res -= 100;
  }
};

contentreviewitemiconElement[2].onclick = function (e) {
  res -= 100;
  if (res >= -200) {
    Object.assign(contentreviewlistElement.style, {
      marginLeft: `${res}%`,
      transition: "margin-left .4s linear",
    });
  } else {
    res += 100;
  }
};

contentreviewitemiconElement[1].onclick = function (e) {
  res = 0;
  Object.assign(contentreviewlistElement.style, {
    marginLeft: `${res}%`,
    transition: "margin-left .4s linear",
  });
};

var headericonsearchElement = document.querySelector(".header__icon-search");
headericonsearchElement.onclick = function (e) {
  Object.assign(document.querySelector(".header__icon-search-fixed").style, {
    display: "block",
    animation: "fadeIn2 .4s linear",
  });
};

var headericonsearchfixedcloseElement = document.querySelector(
  ".header__icon-search-fixed-close"
);
headericonsearchfixedcloseElement.onclick = function (e) {
  e.stopPropagation();
  Object.assign(document.querySelector(".header__icon-search-fixed").style, {
    display: "none",
    animation: "appearIn 14s linear",
  });
};
