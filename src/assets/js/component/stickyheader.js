class StickyHeader {

	constructor() {
		this.siteHeader = document.querySelector('.site-header');
		this.events();
	}

	events() {
		window.addEventListener("scroll", this.showStickyOnScroll.bind(this));
	}

	showStickyOnScroll() {
		if (window.scrollY) {
			this.siteHeader.classList.add("site-header--on-scroll");
		} else {
			if(this.siteHeader.classList.contains("site-header--on-scroll")) {
				this.siteHeader.classList.remove("site-header--on-scroll");
			}
		}
	}
}

new StickyHeader();