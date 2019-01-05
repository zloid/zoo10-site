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
        let elemObjTwo = document.querySelector(`[href=\'/${shortUrlStr}\']`);
        if (elemObj != null && shortUrlStr != '/') {
            elemObj.className += ' active';
        } else if (elemObjTwo != null && shortUrlStr != '/') {
            elemObjTwo.className += ' active';
        }
    }
    markCurrentPageInMenu();

    function createHOneFromTitle() {
        let titleTextStr = document.querySelector('title').innerHTML.toUpperCase();
        titleTextStr == 'ICRAZY' && (titleTextStr = 'iCrazy 🙌');
        titleTextStr == 'U N I (SINGLE)' && (titleTextStr = 'uni (single)');
        titleTextStr == 'ZOO10!' && (titleTextStr = '☃');
        let placeBeforePlayerObj = document.querySelector('#hOne');
        // titleTextStr == 'ZOO10!'
            // && (document.querySelector('.bg-h-one').style.background = '#ccc');
        placeBeforePlayerObj.innerHTML = '<h1><span class="bg-h-one">' + titleTextStr + '</span></h1>';                
        console.log('placeBeforePlayerObj:', placeBeforePlayerObj)
    }
    createHOneFromTitle();



})()
