; (function () {
    function resize() {
        $(document).ready(function () {
            $('.header').height($(window).height());
        })
         
    }

    resize();
    window.addEventListener('resize', () => {
        resize();
    })

    

})()