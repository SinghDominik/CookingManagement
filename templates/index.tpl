    <div id="page-content">
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
    </div>