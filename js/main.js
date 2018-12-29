; (function () {
    function resize() {
        $(document).ready(function () {
            $('.top-bg-image').height($(window).height());
        })

    }

    // resize();
    window.addEventListener('resize', () => {
        // resize();
    })


    function markCurrentPageInMenu() {
        // let currentUrlStr = document.location.pathname;
        let currentUrlStr = window.location.pathname;
        // let currentUrlStr = window.location.href;
        let shortUrlStr = currentUrlStr.match(/[-\.\w]*$/ig).join('');
        let elemObj = document.querySelector(`[href=\'${shortUrlStr}\']`);
        if (elemObj != null && shortUrlStr != 'index.html') {
            (elemObj.className += ' active');
        }
    }

    markCurrentPageInMenu();

    // function createH1FromTitle() {
        // let titleTextStr = document.querySelector('title').innerHTML;
        // console.log('titleTextStr:', titleTextStr);
        // let bodyObjStr = document.querySelector('body').innerHTML;
        // let beginBodyStr = bodyObjStr.replace(/^/, titleTextStr);
        // document.body.innerHTML = beginBodyStr;
    // }

    // createH1FromTitle();

    // let bObStr = 'zoro is humanz';
    // let www = bObStr.replace(/$/, ' ppppppp ');

    //  console.log('www:', www)



})()
