    <div id="page-content">
        <form action="" method="GET" id="recipe-search">
            <input type="text" placeholder="Suchen" />
        </form>
        
        <div id="list-items">
            <?php
            foreach($this->vars["recipes"] as $key => $value){
                ?>
                    <div class="item">
                        <a href="<?php echo PROJECT_FOLDER; ?>list/recipe/<?php echo $value["id"]; ?>">
                            <div class="item-image">
                               <img src="<?php echo PROJECT_FOLDER; ?>res/example_image.jpg" />
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
    </div>