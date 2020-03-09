const pages = document.querySelectorAll('#dashboard > div[class*=dash]');
const linksAdmin = document.querySelectorAll('aside li');

const arrPages = Array.from(pages);
const arrLinksAdmin = Array.from(linksAdmin);

linksAdmin.forEach(el => {
    el.addEventListener('click', e => {
        let toDisplay = document.querySelector("." + e.target.getAttribute('data-link'));
        arrPages.map(page => {
            if (page.classList.contains('displayed')) {
                page.classList.remove('displayed');
            }
        });
        arrLinksAdmin.map(link => {
            if (link.classList.contains('opened')) {
                link.classList.remove('opened');
            }
        });
        toDisplay.classList.add('displayed');
        e.target.classList.add('opened');
    })
})