let menuNavStr = `

    
<!-- <div id="cover"> -->
<div class="header container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
        <a href="index.html" class="navbar-brand">
            <img class="logo-nav-img" src="images/zoo10_pattern.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- for broke menu comment below -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav mr-auto">
            <!--<li class="nav-item"><a class="nav-link" href="#">Bio</a></li>-->

            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Discography</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="pesni-pro-dermo-lyubov-by-zoo10.html">Pesni pro dermo - lyubov</a>
                    <a class="dropdown-item" href="children-of-the-sand-single-by-zoo10.html">Children of the sand (single)</a>
                    <a class="dropdown-item" href="just-like-a-girl-single-by-zoo10.html">Just like a girl (single)</a>
                    <a class="dropdown-item" href="#">Album 3</a>
                    <a class="dropdown-item" href="#">Album 3</a>
                </div><!-- dropdown-menu -->
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Play Lists</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Rock my ass!</a>
                    <a class="dropdown-item" href="#">Sad me</a>
                    <a class="dropdown-item" href="#">Play List 3</a>
                </div><!-- dropdown-menu -->
            </li>

            <li class="nav-item "><a class="nav-link" href="rare-songs-by-zoo10.html">Rare songs</a></li>
            <li class="nav-item "><a class="nav-link" href="test.html">TESTTTT!</a></li>
            <li class="nav-item "><a class="nav-link" href="test-two.html">TEST-two</a></li>

        </ul><!-- navbar-nav mr-auto -->
</div><!-- collapse navbar-collapse -->
</nav><!-- navbar -->
</div><!-- .container bb king-->

<div class="container">
        <div class="row">
            <div class="col-12 playerNow">
            
`;

let footerStr = `
           
</div><!--???? col-12 playerNow-->

</div><!-- row -->

<div class="container">
    <div class="row elseNow">
        <div class="col-sm elseNow">
            
        </div>
        <div class="col-sm elseNow">
            
        </div>
        <div class="col-sm elseNow">

        </div>
    </div>
</div>


</div><!-- containers -->

`;
//<div id="soooda">sod</div>    

// document.body.innerHTML += menuNavStr;


let currentUrlTwoStr = window.location.pathname;
// let titleTextStr = currentUrlTwoStr.match(/[-\.\w]*$/ig).join('').replace(/-|\.html/gi, ' ').replace(/single/i, ' - single - ').replace(/index/i, '').toUpperCase();
let titleTextStr = document.querySelector('title').innerHTML.toUpperCase();



let bodyObjStr = document.querySelector('body').innerHTML;
let beginBodyStr = bodyObjStr.replace(/^/, menuNavStr + `<h1> ${titleTextStr} </h1>`);
// beginBodyStr = bodyObjStr.replace(/$/, footerStr);
document.body.innerHTML = beginBodyStr;


let bodyObjStrTwo = document.querySelector('body').innerHTML;
let beginBodyStr2 = bodyObjStrTwo.replace(/$/, footerStr);
document.body.innerHTML = beginBodyStr2;

