document.addEventListener('DOMContentLoaded', function () {
    let pageLinks = document.querySelectorAll('.pagination .page-link');

    pageLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            let urlCurrent = new URL(window.location.href);
            let urlParameter = urlCurrent.pathname;
            let urlSection = urlParameter.split('/');
            let page = this.getAttribute('data-page');
            window.location.href = `/${urlSection[1]}/${page}`;
          
        });
    });
});