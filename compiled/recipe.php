<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo PROJECT_FOLDER; ?>css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo PROJECT_FOLDER; ?>css/main.css" rel="stylesheet">
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
    </div><div id="page-content">
        <div id="list-items">
            <?php
            foreach($this->vars["recipes"] as $key => $value){
                ?>
                    <div class="item">
                        <a href="<?php echo PROJECT_FOLDER; ?>list/recipe/<?php echo $value["id"]; ?>">
                            <div class="item-image">
                                <img src="/CookingManagement/res/example_image.jpg" />
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
                <a href="<?php echo PROJECT_FOLDER; ?>list/"><i class="fa-solid fa-house active"></i></a>
                <a href="<?php echo PROJECT_FOLDER; ?>suggestion/"><i class="fa-solid fa-question"></i></a>
                <a href="<?php echo PROJECT_FOLDER; ?>list/create"><i class="fa-solid fa-plus"></i></a>
            </div>
        </div>
    </body>
</html>