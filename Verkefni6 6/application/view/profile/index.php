
<div id="tf-about">
    <div class="container text-center">
        <div class="col-md-9">

            <div class="section-title ">
                <h4>Upplýsingar</h4>
            </div>
            <div class="dpimg">
            <img class="dpmynd" src="<?php echo URL.'/img/profile/dp_default/defaultmale.png';?>"
            </div>
                <form class="register" action="<?php echo URL;?>profile/breyta" method="post">

                    <label for="nafn">Nafn:</label>
                    <input id="nafn" name="nafn" type="text" value=" <?php echo $info[0]->name; ?>" required>
                    <label for="user">Notendanafn:</label>
                    <span id="user-availability-status"></span>
                    <input id="user" name="user" type="text" value="<?php echo $info[0]->username;?>" readonly ><br>
                    <label for="pass">Lykilorð:</label>
                    <input id="pass" name="pass" type="password" required>
                    <label for="confpass" >Staðfesta Lykilorð:</label>
                    <input id="confpass" name="confpass" type="password" required>
                    <label for="datejoined" >Aðgangur Stofnaður:</label>
                    <input id="datejoined" name="datejoined" type="datetime" value="<?php echo $info[0]->date_joined;?>" disabled >
                    <input id="btbreyta" name="breyta" type="submit" value="Breyta">
                </form>

            </div>

            <hr>
            <div class="clearfix"></div>

        </div>
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




