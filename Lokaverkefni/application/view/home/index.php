


<!-- Home Page
==========================================-->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1>Velkomin/nn í <strong><span class="color">Lokaverkefnið</span></strong></h1>
            <p class="lead">Síða sem hjálpar þér að <strong>peppast upp </strong> og ná <strong>árangri í líkamsrækt</strong></p>
            <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- About Us Page
==========================================-->
<div id="tf-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo URL; ?>img/02.png" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <h4>Um okkur</h4>
                        <h2>VIÐ Í <strong>STUTTU MÁLI</strong></h2>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <p class="intro">Það er ekkert sem okkur líkar betur við en árangur, hvort sem það er andlegur, líkamlegur eða efnahagslegur en þegar manni líður vel andlega og líkamlega þá er maður líklegri til að standa sig vel í lífinu og þá bætist það efnahagslega.</p>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Æfingarpógram</strong> - <em>Sérsniðin, hnitmiðin, unnin með þér fyrir þig</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Matarprógram</strong> - <em>Já, við mælum með nammidögum</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Árangur</strong> - <em>Númer 1,2 og 3 eru ánægðir viðskiptavinir</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Page
==========================================-->
                <div id="tf-team" class="text-center">
                    <div class="overlay">
                        <div class="container">
                            <div class="section-title center">
                                <h2>HITTU <strong> LIÐIÐ OKKAR</strong></h2>
                                <div class="line">
                                    <hr>
                                </div>
                            </div>

                            <div id="team" class="owl-carousel owl-theme row">

                                <?php $jsonclient = file_get_contents("http://178.62.25.29/JSON/vinnufolk.JSON");
                                $clients = json_decode($jsonclient,true);

                                foreach ($clients as $client)
                                {
                                    echo '<div class="item">';
                                    echo '<div class="thumbnail">';
                                    echo '<img src="'. $client["Mynd"] .'" alt="..." class="img-circle team-img">';
                                    echo '<div class="caption">';
                                    echo '<h3>'.$client["Nafn"]. '</h3>';
                                    echo '<p>'. $client["Stada"] .'<p>';
                                    echo '<p>'. $client["Texti"] .'</p>';
                                    echo "</div> ";
                                    echo "</div>";
                                    echo "</div> ";
                                }


                                ?>


                            </div>
                        </div>
                    </div>
                </div>



<!-- Services Section
==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Við bjóðum uppá <strong>Persónulega þjálfun</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Ekki hika við að heyra í okkur og fá sérsniði æfingar prógram og matarplan sem hjálpar þér að beina markmiðum þínum í rétta átt</em></small>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-youtube-square"></i>
                <h4><strong>Myndbönd</strong></h4>
                <p>Við erum með myndbönd á youtube þannig að þegar þú ferð og ert ekki viss um hvort þú sért að gera rétt eða ekki, þá getur þú flett upp öllum myndbönum okkar þar</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-home"></i>
                <h4><strong>Ertu fastur/föst heima?</strong></h4>
                <p>Ekkert mál við sníðum þá bara æfingar sem hægt er að gera heimavið, það er ekkert mál að nota heimilið sem líkamsræktarstöð</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-users"></i>
                <h4><strong>Komið saman í hóp</strong></h4>
                <p>Tekið er vel á mótum hópum líka og séð til þess að allir í hópnum nái hámarks a´rangri saman</p>
        </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-level-up"></i>
                <h4><strong>Næsta Level</strong></h4>
                <p>Um leið og þú hefur samband við okkur og segir okkur hverju þú vilt áorka þá vinnum við saman að plani sem mun taka þig á næsta stig</p>
            </div>
        </div>
    </div>
</div>

<!-- Clients Section
==========================================-->
<div id="tf-clients" class="text-center">
    <div class="overlay">
        <div class="container">

            <div class="section-title center">
                <h2>Í SAMSTARFI <strong>MEÐ</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div id="clients" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?php echo URL; ?>img/client/01.png">
                </div>
                <div class="item">
                    <img src="<?php echo URL; ?>img/client/02.png">
                </div>
                <div class="item">
                    <img src="<?php echo URL; ?>img/client/03.png">
                </div>
                <div class="item">
                    <img src="<?php echo URL; ?>img/client/04.png">
                </div>
                <div class="item">
                    <img src="<?php echo URL; ?>img/client/05.png">
                </div>
                <div class="item">
                    <img src="<?php echo URL; ?>img/client/06.png">
                </div>
                <div class="item">
                    <img src="<?php echo URL; ?>img/client/07.png">
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Æfingasection
==========================================-->
<div id="tf-works">

    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
            <h2>KÍKTU A NOKKRAR<strong> ÆFINGAR</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Mikilvægt er að gleyma ekki vöðvaflokki því að vöðvarnir að framan geta ekki stækkað ef að vöðvarnir að aftan geta ekki stutt þá</em></small>
        </div>
        <div class="space"></div>

        <div class="categories">

            <ul class="cat">
                <li class="pull-left"><h4>Flokka eftir týpu:</h4></li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".chest">Bringa</a></li>
                        <li><a href="#" data-filter=".axlir">Axlir</a></li>
                        <li><a href="#" data-filter=".bak" >Bak</a></li>
                        <li><a href="#" data-filter=".legs" >Fætur</a></li>
                        <li><a href="#" data-filter=".hendur" >Hendur</a></li>
                        <li><a href="#" data-filter=".abs" >Magi</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="popup" id="media-popup"><iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe></div>
        <div id="lightbox" class="row">

            <?php $jsonaef = file_get_contents("http://178.62.25.29/JSON/tileaefingar.JSON");
            $aefingar = json_decode($jsonaef,true);

            foreach ($aefingar as $aef)
            {

                echo '<div class="col-sm-6 col-md-3 col-lg-3 ' . $aef["Group"] . '">';
                echo '<a href="#media-popup" data-media="//'.$aef["Link"].'">';
                echo '<div class="portfolio-item">';
                echo '<div class="hover-bg">';


                echo '<div class="hover-text">';
                echo '<h4>'.$aef["Nafn"].'</h4>';
                echo "<small>Æfingar</small>";
                echo "<div class=\"clearfix\"></div>";
                echo "<i class=\"fa fa-plus\"></i>";
                echo "</div>";
                echo '<img src="'.$aef["Mynd"].'" class="img-responsive workmynd" alt="...">';
                echo '';
                echo "</a> </div> </div> </div></a> ";

            }


            ?>

        </div>



        </div>
    </div>

<!-- Hvatningarorðin
==========================================-->
<div id="tf-testimonials" class="text-center">
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




