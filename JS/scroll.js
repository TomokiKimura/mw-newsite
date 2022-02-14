// クリックで下部にスクロール
! function() {
  for (var e = document.querySelectorAll('a[href^="#"]'), t = function(t) {
      e[t].addEventListener("click", (function(n) {
        n.preventDefault();
        var o = e[t].getAttribute("href"),
          i = document
          .getElementById(o.replace("#", ""))
          .getBoundingClientRect()
          .top + window.pageYOffset - 60;
        window.scrollTo({ top: i, behavior: "smooth" })
      }))
    }, n = 0; n < e.length; n++)
    t(n);
}();