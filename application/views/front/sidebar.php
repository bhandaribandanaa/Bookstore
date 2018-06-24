<div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>
                            
                            
                            <div class="panel-body">
                             <?php
                                $i=1;   
                                foreach($categories as $r){
                            ?>
                                <ul class="nav nav-pills nav-stacked category-menu">
                                    <li>
                                        <a href="http://localhost/interface-bookstore/front/category_controller/getbookscategory/?cat_id=<?php echo $r->cat_id?>"><?php echo $r->cat_title?></a>
                                        <ul>
                                        <?php
                                            $j=1;   
                                            foreach($subcategories as $sub){
                                                if($r->cat_title==$sub->category){
                                                ?>
                                                    
                                                    <li><a href="http://localhost/interface-bookstore/front/category_controller/getbookscategory/?subcat_id=<?php echo $sub->subcat_id?>"><?php echo $sub->subcat_title?></a>
                                                    </li>
                                                <?php
                                                $j++;
                                                }
                                        }
                                        ?>
                                        </ul>
                                    </li>
                                                                 

                                </ul>
                                <?php
                                    $i++;
                                }
                                ?>

                            </div>
                        </div>