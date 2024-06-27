export const initialize = {
    open: false,
    onFaq: false,
    yPosition: 0,
    footerHeight: 0,
    navbarHeight: 0,
    onScroll() {
        this.yPosition = window.scrollY
    },
    setOnFaq() {
        const url = new URL(window.location.href)
        this.onFaq = (url.hash === '#faq') ? true : false
    }
}
