<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="http://localhost/CookingManagement/css/main.css" rel="stylesheet">
    <title>Koch Manager</title>
</head>
<body>
    <div id="page-header">
        <div id="page-header-box">
            <div id="page-header-content">
                <div>
                    <h2><strong>Was solll ich heute kochen?</strong></h2><br />
                    Ideen für heute:
                </div>
            </div>
        </div>
    </div>    <div id="page-content">
        <form action="" method="GET" id="recipe-search">
            <input type="text" placeholder="Suchen" />
        </form>
        
        <div id="list-items">
            <?php
            foreach($this->vars["recipes"] as $key => $value){
                ?>
                    <div class="item">
                        <a href="">
                            <div class="item-image">
                                <a href="./list/recipe/<?php echo $value["id"]; ?>"><img src="./res/example_image.jpg" /></a>
                            </div>
                        </a>
                        <div class="item-name">
                            <?= $value["name"]; ?>
                        </div>
                    </div>
                <?php
            }
            ?>
        </div>
    </div>        <div id="page-footer">
            <div id="page-footer-menue">
                <a href="./list/"><i class="fa-solid fa-house active"></i></a>
                <a href="./suggestion/"><i class="fa-solid fa-question"></i></a>
                <a href="./list/create"><i class="fa-solid fa-plus"></i></a>
            </div>
        </div>
    </body>
</html>