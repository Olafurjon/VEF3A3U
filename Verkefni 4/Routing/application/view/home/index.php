<div class="container">
    <h1>Spurningarnar - Verkefni 4</h1>
    <h2>a. Hver er vandinn við að útfæra MVC fyrir vef (lágmark 100 orð)?</h2>
    <p>Það þarf náttúrulega að vera gert rétt, ef að MVC er ekki gert rétt þá náttúrulega virkar það ekki og getur verið leiðinlegt ef maður klúðrarði honum alveg að finna hvar vandamálið liggur, síðan</p>
    er ekki alveg málið að útfæra MVC ef þú ert með einhverja 1 page mega basic síðu. síðan eru ókóstir hvað það getur reynst verið flókið að setja svona upp og pæla í þessu, einnig er vandinn við að útfæra þetta er að það virkar best ef þú ert með nokkra developera og þeir þurfa að vinna samhliða, og vinna
    rétt til að skemma ekki fyrir hinum. síðan einhver sem er kannski PHP meistari þarf að vita samt sitt og hvað um önnur forritunarmál og hafa í huga hvernig þetta mun virka allt saman, það þarf alveg talsverða grunnþekkingu á nokkrum forritunarmálum til að nýta þetta rétt.
    <h2>b. Hvað er og hvernig virkar routing (lágmark 100 orð)? Komdu með skýringardæmi (ekki kóða).</h2>
    <p>Maður fær að sjá vel í MINI3 frameworkinu hvernig það virkar, það er t.d. þegar þú smellir á link eða url eða eitthvað falið sem redirect-ar urlinu, það sem routingið gerir
    er að redirecta því t.d. á aðra heimasíðu eða jafnvel function eða method sem þú ert með í einhverjum klasa t.d ef þú ert með síðu sem er <u>www.banki.is</u> og þú ert
    með eitthvað textbox sem tekur við tölu sem þú slærð inn eins og íslenskum krónum og breytir því í bandaríkja dali, segjum að þú slærð inn 1000 kr og ýtir svo á submit takka
    eða jafnvel eitthvað sem er augljós linkur þá ertu kominn á síðu sem heitir kannski <u>www.banki.is/exhange/isltousd/1000</u> þá er routingið að sjá um að þetta farið rétt inn
    með parametrum í functionið og það skilist á sem eðlilega máta til þín.Indexið fær URLið og byrjar routinging og Routingið vinnur úr URI-inu til að vinna úr og skilar bara mun snyrtilegri
    vefslóð og meira Search Engine Friendly, dæmi um endurskrifun á urli er eins og að þetta <u>http://example.com/wiki/index.php?title=Page_title</u> getur verið skrifað svona <u>http://example.com/wiki/Page_title</u>
    </p>
    <h2>c. Hvað er Static routing?</h2>
    <p>Static routing er ekki endilega besta lausnin þegar kemur að routing en þá ertu yfirleitt með t.d. gagnagrunni eða gagna töflu þar sem allar mögulegar leiðir sem
        notandinn gæti notað semsagt verið með hverja einustu leið setta upp sem mun vera sótt í sem getur nefnilega veirð trímafrek aðgerð og getur skapað vesen í performance og í
        viðhaldi og getur veri flókið. Mikill ókostur við static routing er t.d. að ef það er breytt öllu án þess að uppfæra routing töfluna sem maður er með þá getur allt farið í fo**,


    <h2>d. Hvað er Dynamic routing? </h2>
    <p>Dynamic routing virkar svipað nema í staðinn fyrir að vera búinn að predefine-a eins og væri helvíti fyrir mjög stórar síður þá er unnið með þetta þannig að skipanir og linkar eru klipptir </p>
    niður til að kalla á viðeigandi functiona og aðferðið með eða án parametrum og ásamt viðeigandi klössm sem býr þá bara til leiðina þannig í raun þarf bara að setja kóðann þannig upp að hann
    klippi út óþarfa t.d. get requests eða þannig og skili þá bara urliinu <a href="http://178.62.25.29/books/index">http://178.62.25.29/books/index</a> þótt í raun á síðunni skili bara ../books því að í controllernm er það að þegar index er kallað þá
    kallar það í functtionið index sem kallar síðan í book modelið getallbooks og því þetta vinnur svona þá að fara inná t.d. http://178.62.25.29/books/index.php myndi skila villu þar sem að það er verið að kalla í functionið index en ekki í raun index síðuna
    þótt að það sé kallað í það af controllernum... ? virkar flókið en það virkar
    <h2>e. Hvað er Front Controller (lágmark 100 orð)? Komdu með skýringardæmi.</h2>
    <p>Front Contreller er kallað þegar að í MVC eða í mynstrinu sem þú ert með á síðunni er er einn front controller eða einn component sem höndlar og er ábyrgur fyrir öllum
    beiðnum og köllum sem vísar í síður eða aðferðir eins og þegar þú ert að vinna með routing þá verður eiginlega bara að vera front controller, mjög einfalt sýnidæmi með front contoller
    lýtir sirka svona út.</p>

    <ul>Demo:</ul>
    if ($_SERVER['REQUIEST_URI'] == '/help') {<br>
        include 'help.php' ;<br>
    } elseif ($_SERVER['REQUEST_URI'] == '/calendar') { <br>
    include 'calendar.php';<br>
    } else { <br>
    include 'notfound.php';
    }<br>
    að vísu væri flottara að vera með autoloading kannski frekar
    sýnidæmi fengið frá: <a href="http://stackoverflow.com/questions/6890200/what-is-a-front-controller-and-how-is-it-implemented-in-php">Front controller</a>
</div>
