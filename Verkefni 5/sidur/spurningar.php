<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 3.3.2017
 * Time: 09:29
 */
include "includes.php";
?>
<h2>Verkefni 5 - API</h2>
<div class="spurningar">
<b>1. 1% Útskýrðu eftirfarandi request verbs:</b><br>
<br>
<li><b>a) POST</b></li>
<p>POST skipunin er þegar þú ert að senda á serverinn gögn og upplýsingar um gögnin til að geyma á servernum eða vinna með og serverinn geymir (stundum að vísu í cachinu ef það er bara verið að vinna með einfaldann vef eða þá ekki gagnagrunn)</p>
<li><b>b) GET</b></li>
<p>GET skipunin er notuð til að sækja upplýsingar eða þá er URL slóðin send á serverinn með öllum þeim upplýsingum sem serverinn þarf á að halda til þess að finna og skila upplýsingunum, get er notað ef að gögnin sem maður sækir eftir eru tilstaðar </p>
<li><b>c) PUT</b></li>
<p>PUT skipunin er notuð til að uppfæra gögn sem eru núþegar til staðar og þá þegar maður sendir þessa skipun þurfa að vera öll viðeigandi gögn tilstaðr til að hægt sé að uppfæra</p>
<li><b>d) DELETE</b></li>
<p>DELETE segir sig eiginlega bara sjálft eða það semsagt fjarlægir og eyðir</p>
<b>2. 1% Hvað er status code og hvað þýða eftirfarandi status codes?</b><br>
<p>Status codes er í raun leið fyrir vafrann og serverinn að tala saman eða þá að vafrinn sendir Beiðni og serverinn svarar,
dæmi: <br> vafrinn bankar hjá félaga sínum sem hann hefur ekki séð lengi, serverinn opnar og getur svarað eins og já (200) hann er heima komdu inn og þá búm færð allt HTML og CSs og javascript sullið,
en síðan er séns þetta sé rétt hús en hann er bara ekki heima og það kemur ekkert svar (204) eða einfaldlega að hann sé búinn að flytja (301) og komi ekki aftur hingað.<br>
</p>
<li><b>a) 200</b></li>
<p>Þetta er merki um að eitthvað hafi tekist og er algengasti kóðinn fyrir 200 bara OK</p>
<li><b>b) 301</b></li>
<p>Þetta er svarið sem serverinn fær ef að það koma skilaboð um að síða sé alveg til nema hún er kominn á aðra slóð eða: Moved Permanently: the resource is now located at a new URL. oft fylgir með síðan nýja Urlið </p>
<li><b>c) 400</b></li>
<p>Þetta er ekki mér að kenna þetta er þér að kenna... eða þá að villur sem eiga heima hjá clientinum kóðinn 400 gefut il kynna að þetta hafi verið slæm beiðni og að beiðnin hafi verið gölluð eða
    Bad Request: the request was malformed. semsagt að gögnin sem voru send frá clientin eða servernum hafi ekki verið eftir staðli eða gölluð</p>
<li><b>d) 404</b></li>
<p>Error 404 Page not found, eða er algengast að komi ef maður slær inn vitlausa slóð, eða þá slóð sem er ekki til síðan er mögulega bara að síðan sem maður er að fara inná hafi bara verið tekin niður eða færð
án þess að það séu upplýsingar um nýja slóð </p>
<li><b>e) 500</b></li>
<p>Þetta er ekki þú, heldur ég, Error code 500 talar um Internal server error, og kemur það fram ef að það er eitthvað í gangi hjá servernum en hann gat ekki skilað af sér betri upplýsingum en það í flestum tilvkum ef þetta kemur upp er oft
um að ræða einhverjar villur á servernum eða í kóðanum, hinsvegar er stundum séns að vandamálið liggi hjá þér en kóðinn stendur hinsvegar fyrir að það sé vandamál með serverinn</p>
<b>3. 1% Hverjar eru helstu nýjungar og breytingar með HTTP 2.0?</b>
    <p>Sem betur fer hefur þetta ekki skemmandi áhrif á HTTP 1.1 eða þá eldri hluti eða apps sem hafa verið kóðuð með það í huga en nýjar síður og applications geta nýtt sér
    nýjungana til að fá betri virkni og örrugari síðu, það sem eru svona helstu breytingarnar er að hvernig að gögn eru flutt milli clientsins og serversins eða er þessu þjappað meira saman og skipt
        meira niður í búta án þess að það hafi áhrif á virknina, að vísu munu myndir og skriptur vera meðhöndlað svipað, síðan getur HTTP2 vefþjónnin einnig tekið við meiri af
        queries í einu og þá meira en bara það sem notandinn er að biðja um sem þýðir að serverinn getur útveigað vafranum gögn sem að hann veit að vafrinn þarf til að keyra út síðu án þess að þurfa bíða eftir að vafrinn býði eftir fyrsta svarinu og án þess að þurfa biðja margoft
        um sama hlutinn, og það forgangsraðar betur beiðnunum og þjappar þannig að það sé ekki verið að eyða tíma í að bíða eftir einhverju sem skiptir minna máli ene annað. Þrátt fyrir einnig að HTTP2 sé enn með stuðning við HTTP eða þá
        síður sem eru ekki með vottorð fyrir að encrypta eða dulkóða gögn yfir þá munu flestir ef ekki allir vafrar fara fram á það að þeir muni aðeins styðja HTTP/2 með HTTPS sem
        þýðir að dulkóðun verði nauðsynleg sem er örrugara fyrir notendur</p>

    </p>
</div>

