<?php
                                    $month=$_GET["month"];
                                    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
                                    $sql="select * from eflux_table_1  where month = $month order by num desc";
                                    $result=mysqli_query($con, $sql);
                                    while($row=mysqli_fetch_array($result)){
                                        $num=$row["num"];
                                        $tag=$row["tag"];
                                        $image=$row["image"];
                                        $sub_txt=$row["sub_txt"];
                                        $title=$row["title"];
                                        $main_txt=$row["main_txt"];
                                        $regist_day=$row["regist_day"];
                                        $month=$row["month"];
                                
                                ?>
<div class="panel_container container_sub container_search">
    <div class="panel_label">
        <div class="panel_label_text">
            <h2>
                <?=substr($regist_day,0,4);?> <?=substr($month,1,6);?>
            </h2>
        </div>
    </div>
    <div class="panel_scrolling_area">
        <div class="panel_content_area">
            <a href="page_1_detail_page.php?num=<?=$num?>">
                <div class="panel_content">
                    <div class="panel_content_img">
                        <img class="lozad" data-src="img/table1_img/<?=$image?>" alt=""
                            src="img/table1_img/<?=$image?>" />
                    </div>
                    <div class="panel_content_text fontstyle">
                        <h4><?=$sub_txt?></h4>
                        <h3><?=$title?></h3>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>
<?php
                                }
                                ?>
<div class="scrollBar"></div>
