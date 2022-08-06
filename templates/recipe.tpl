<div id="page-content">
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
    </div>