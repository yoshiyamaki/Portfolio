document.addEventListener("DOMContentLoaded", function() {
  // ページ読み込み時にふわっと表示
  let fadeElems = document.querySelectorAll(".fade-in");
  fadeElems.forEach(function(elem) {
    elem.classList.add("visible");
  });

  // スクロール時に要素を表示
  window.addEventListener("scroll", function() {
    let scrollElems = document.querySelectorAll(".scroll-reveal");

    scrollElems.forEach(function(elem) {
      let rect = elem.getBoundingClientRect();
      if (rect.top < window.innerHeight * 0.8) {
        elem.classList.add("visible");
        
      }
    });
  });
});

// フッターを読み込む
  fetch("footer.html")
    .then(response => response.text())
    .then(data => {
      document.getElementById("footer").innerHTML = data;
    });

// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", function() {
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.getElementById("nav-menu");

  menuToggle.addEventListener("click", function() {
      navMenu.classList.toggle("nav-active");
  });
});

