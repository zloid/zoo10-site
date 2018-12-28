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


    // let bObStr = 'zoro is humanz';
    // let www = bObStr.replace(/$/, ' ppppppp ');

    //  console.log('www:', www)



})()
