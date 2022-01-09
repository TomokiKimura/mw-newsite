// パララックス
const targetFactor = 0.25;
const windowHeight = Math.min(window.innerHeight, document.documentElement.clientHeight);

const parallax = document.getElementsByClassName('parallax');
const targets = Array.prototype.slice.call(parallax);

window.addEventListener("scroll", () => {
	const scrollY = Math.max(window.pageYOffset, document.documentElement.scrollTop);

	for (const target of targets) {
		const targetOffsetTop = target.offsetTop;
		const scrollYStart = targetOffsetTop - windowHeight;
		target.style.backgroundPositionY = (scrollY > scrollYStart) ? `${(scrollY - targetOffsetTop) * targetFactor}px` : 'top';
	}
});

// ヘッダースクロール縮小
window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  header.classList.toggle("scroll-nav", window.scrollY > 100);
});