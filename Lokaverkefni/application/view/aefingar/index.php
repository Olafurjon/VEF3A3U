
<!-- About Us Page
==========================================-->
<div id="tf-about">
    <div class="container text-center ">
            <h4>Bekkpressa með stöng - Reps/kg/hvíld <a class="info" href="https://www.youtube.com/watch?v=oDnQLo5sclQ"> Leiðbeiningar </a></h4>
            <ul class="aefingar">
                <li><input class='reps' type='text' value='10' ></input>/<input class='kg' type='text' >kg </input> /1</li>
                <li><input class='reps' type='text' value='10' ></input>/<input class='kg' type='text' >kg </input> /1</li>
                <li><input class='reps' type='text' value='10' ></input>/<input class='kg' type='text' >kg </input> /1</li>
                <li><input class='reps' type='text' value='10' ></input>/<input class='kg' type='text' >kg </input> /1</li>
                <li><input class='reps' type='text' value='10' ></input>/<input class='kg' type='text' >kg </input> /1</li>
                <li><input class='reps' type='text' value='10' ></input>/<input class='kg' type='text' >kg </input> /1</li>
                <li><input class='reps' type='text' value='10' ></input>/<input class='kg' type='text' >kg </input> /1</li>
                <li><input class='reps' type='text' value='10' ></input>/<input class='kg' type='text' >kg </input> /1</li>
            </ul>
            <hr>

    </div>

<!-- Hvatningarorðin
==========================================-->
<div id="tf-testimonials" class="text-center newpic">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Hvatningarorð</strong> dagsins</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">
                            <?php $json = file_get_contents("http://178.62.25.29/JSON/quotes.JSON");
                            $JSON_dec = json_decode($json,true);
                            $x = random_int(0,count($JSON_dec) -1);
                            $y = random_int(0,count($JSON_dec) -1);
                            $z = random_int(0,count($JSON_dec) -1);
                            while ($y == $x)
                            {
                                $y = random_int(0,count($JSON_dec) -1);
                            }
                            while ($z == $x or $z == $y)
                            {
                                $z = random_int(0,count($JSON_dec) -1);
                            }

                            ?>

                            <h5><?php echo $JSON_dec[$x]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$x]['Author'];?></p>
                        </div>

                        <div class="item">
                            <h5><?php echo $JSON_dec[$y]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$y]['Author'];?></p>
                        </div>

                        <div class="item">
                            <h5><?php echo $JSON_dec[$z]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$z]['Author'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo URL; ?>js/formvalidate.js" type="text/javascript"></script>




