import throttle from 'lodash/throttle';

class StickyHeader {

	constructor() {
		this.siteHeader = document.querySelector('.site-header');
		this.events();
	}

	events() {
		window.addEventListener("scroll", throttle(() => this.showStickyOnScroll(), 200));
	}

	showStickyOnScroll() {
		if (window.scrollY > 100) {
			this.siteHeader.classList.add("site-header--on-scroll");
		} else {
			this.siteHeader.classList.remove("site-header--on-scroll");
		}
	}
}

new StickyHeader();