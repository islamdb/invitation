<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Template for the new android layout">
    <meta name="author" content="Andrew Henry">
    <link rel="icon" href="#">
    <title>Bootstrap Nav Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 80px;
            margin-top: 60px;
        }

        .footer {
            position:fixed;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: #f5f5f5;

            border-top: 1px solid transparent;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar{
            border-top: 1px solid transparent;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        }

        .group-container{
            padding:0;
            height:100%;
        }

        .selectors, .block{
            height:100%;
            width:100%;
        }

        .selectors button{
            border: 0;
            border-radius: 0;
            background-color: #f8f9fa !important;
            width:25%;
            margin-left: 0;
        }

        .selectors button:active{
            border:0;
        }

        .selectors button:focus{
            border:0;
            outline: 0;
            box-shadow: 0 0 0 0px;
        }

        .active, .selector-holder{
            display: flex;
            flex-direction: column;
        }

        .inactive{
            display: none;
        }

        .selector-holder span{
            font-size: 0.8rem;
        }

        /* Colors of the buttons*/
        .button-active, .selectors button:hover, .selectors button:active, .selectors button:focus{
            color: #ff0000;
        }

        .button-inactive{
            color: #000;
        }
    </style>
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
<!-- As a heading -->
<nav class="navbar fixed-top navbar-light bg-light">
    <h2 class="navbar-brand mb-0">App Name</h2>
</nav>
<!-- Begin page content -->
<div class="container-fluid">

    <!-- Home page -->
    <div id="page-home" class="active">
        <h1>Home Page</h1>
        <div class="block">
            <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC

            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            1914 translation by H. Rackham
        </div>
    </div>

    <!-- Feed page -->
    <div id="page-feed" class="inactive">
        <h1>Feed Page</h1>
        <div class="block">
            <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        </div>
        <div class="block">
            <h2>The standard Lorem Ipsum passage</h2>

            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        </div>
        <div class="block">
            <h2>The standard Lorem Ipsum passage</h2>

            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        </div>
    </div>

    <!-- Create page -->
    <div id="page-create" class="inactive">
        <h1>Create Page</h1>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" class="col-form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress" class="col-form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2" class="col-form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity" class="col-form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState" class="col-form-label">State</label>
                    <select id="inputState" class="form-control">Choose</select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip" class="col-form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

    <!-- Account page -->
    <div id="page-account" class="inactive">
        <h2>Account Page</h2>
        <div class="block">
            <h2>The standard Lorem Ipsum passage</h2>

            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        </div>
    </div>
</div>

<!-- Bottom Nav Bar -->
<footer class="footer">
    <div id="buttonGroup" class="btn-group selectors" role="group" aria-label="Basic example">
        <button id="home" type="button" class="btn btn-secondary button-active">
            <div class="selector-holder">
                <i class="material-icons">home</i>
                <span>Home</span>
            </div>
        </button>
        <button id="feed" type="button" class="btn btn-secondary button-inactive">
            <div class="selector-holder">
                <i class="material-icons">view_list</i>
                <span>Feed</span>
            </div>
        </button>
        <button id="create" type="button" class="btn btn-secondary button-inactive">
            <div class="selector-holder">
                <i class="material-icons">create</i>
                <span>Create</span>
            </div>
        </button>
        <button id="account" type="button" class="btn btn-secondary button-inactive">
            <div class="selector-holder">
                <i class="material-icons">account_circle</i>
                <span>Account</span>
            </div>
        </button>
    </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- JS needed for this page -->
<script>
    var currentPageId = "page-home";
    var currentSelectorId = "home";

    //Function for getting the button ids
    function getButtons(){
        //List of button ids
        var list = ["home", "feed", "create", "account"];
        return list;
    }

    //Make sure the window is loaded before we add listeners
    window.onload = function(){
        var pageIdList = getButtons();
        //Add an event listener to each button
        pageIdList.forEach(function(page){
            document.getElementById(page).addEventListener("click", changePage, false);
        });
    }

    function changePage(){
        var currentSelector = document.getElementById(currentSelectorId);
        var currentPage = document.getElementById(currentPageId);
        var pageId = "page-"+this.id;
        var page = document.getElementById(pageId);
        var pageSelector = document.getElementById(this.id);

        if(page.classList.contains("active")){
            return;
        }

        currentSelector.classList.remove("button-active");
        currentSelector.classList.add("button-inactive");
        currentPage.classList.remove("active");
        currentPage.classList.add("inactive");

        pageSelector.classList.remove("button-inactive");
        pageSelector.classList.add("button-active");

        page.classList.remove("inactive");
        page.classList.add("active");

        //Need to reset the scroll
        window.scrollTo(0,0);

        currentSelectorId = this.id;
        currentPageId = pageId;
    }
</script>
</body>
</html>
