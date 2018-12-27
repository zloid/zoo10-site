let menuNavStr = `
    
<!-- <div id="cover"> -->
<div class="header container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
        <a href="index.html" class="navbar-brand">Zoo10</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- for broke menu comment below -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav mr-auto">
            <!--<li class="nav-item"><a class="nav-link" href="#">Bio</a></li>-->
            <li class="nav-item "><a class="nav-link" href="rare-songs-by-zoo10.html">Rare songs</a></li>
            <li class="nav-item "><a class="nav-link" href="test.html">TESTTTT!</a></li>
            <li class="nav-item "><a class="nav-link" href="test-two.html">TEST-two</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Play Lists</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Rock my ass!</a>
                    <a class="dropdown-item" href="#">Sad me</a>
                    <a class="dropdown-item" href="#">Play List 3</a>
                </div><!-- dropdown-menu -->
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Discography</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Album 1</a>
                    <a class="dropdown-item" href="#">Album 2</a>
                    <a class="dropdown-item" href="#">Album 3</a>
                </div><!-- dropdown-menu -->
            </li>
        </ul><!-- navbar-nav mr-auto -->
</div><!-- collapse navbar-collapse -->
</nav><!-- navbar -->
</div><!-- .container bb-->

`;

let footerStr = `    
    
   
`;

// document.body.innerHTML += menuNavStr;


let bodyObjStr = document.querySelector('body').innerHTML;
let beginBodyStr = bodyObjStr.replace(/^/, menuNavStr);
document.body.innerHTML = beginBodyStr;


let bodyObjStrTwo = document.querySelector('body').innerHTML;
let beginBodyStr2 = bodyObjStrTwo.replace(/$/, footerStr);
document.body.innerHTML = beginBodyStr2;

 