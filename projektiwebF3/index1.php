 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./home/style1.css">
</head>
<body>
   <?php include 'header.php' ?>
   
      <img src="./img/products-btn.png" alt="" class="products-btn">
    <header>
        <div class="header-content">
            <h2>Ushqim i shëndetshëm dhe pije të freskëta</h2>
            <div class='line'></div>
            <h1> Healthy Lives</h1>
            <a href="#History" class="ctn">Show More</a>
        </div>
    </header>
    <div id="History" ></div>
    <section class="history">
        <div class="title">
            <h1>Më shumë rreth nesh</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./img/franca.jpg" alt="Nga Franca"
                width="500" height="580">
                <h4>Nga Franca</h4>
                <p>Franca, e menduar prej kohësh si qendra e kuzhinës në botë, ka pasur një ndikim të konsiderueshëm në shitje anembanë botës. Pavarësisht nëse është një festë me verë dhe djathë, një ndalesë e shpejtë në furrë buke ose një natë duke shijuar kuzhinën e lartë në qytet, ndikimi francez padyshim mund të shihet gjatë gatimit.</p>
            <a href="http://localhost:8081/Projektiweb22/index.php" class="ctn">Mëso më shumë</a>
            </div>
            <div class="row">
                <div class="col">
                    <img src="./img/kosov.jpg" alt="Ne Kosove"
                    width="500" height="580">
                    <h4>Në Kosovë</h4>
                    <p>Kosova njihet për ushqime tradicionale në shumë vende, madje në products të shumta mund t'i gjejmë ato. është gjithmonë mirë të ndajmë me të tjerët pjesë nga kultura jonë dhe poashtu është gjithmonë mirë të marrim dhe ne nga kulturat tjera. Ne sjellim tek ju ushqimet më të njohura dhe me vlerë nga Franca , ushqime këto të nevojshme për një jetë të shëndetshme   </p>
                <a href="http://localhost:8081/Projektiweb22/index.php" class="ctn">Mëso më shumë</a>
                </div>
        </div>
    </section>
    
   <section class="misioni">
    
       <div class="misioni-content">
        <h1>Misioni yne!</h1>
        <p>Ne jemi të përkushtuar t'ju ndihmojmë të jetoni më shëndetshëm duke ofruar këshilla cilësore, të bazuara në shkencë për shëndetin dhe ushqimin, dhe mbi 4000 receta të miratuara nga dietologët, të cilave mund t'u besoni, janë të mira për ju.</p>
        <a href="http://localhost:8081/Projektiweb22/slideshow.php" class="ctn">Learn More</a>
       </div> 
    
    </section>

    <section class="ushqimi">
        <h2> Lloji i ushqimeve</h2>
        <div class="row">
            <div class="col">
                <img src="./img/vegetarianfood.jpg" alt=""
                width="350" height="400">
                <h4>Ushqim Vegjetarian</h4>
            <a href="http://localhost:8081/Projektiweb22//products.php" class="ctn"> ↓ </a>
            </div>
            <div class="row">
                <div class="col">
                    <img src="./img/meatfood.jpg" alt=""
                    width="350" height="400">
                    <h4>Ushqim me mish</h4>
                <a href="http://localhost:8081/Projektiweb22/products.php" class="ctn"> ↓ </a>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="./img/freegluten.jpg" alt=""
                        width="350" height="400">
                        <h4>Ushqim pa gluten</h4>
                    <a href="http://localhost:8081/Projektiweb22/products.php" class="ctn"> ↓ </a>
                    </div>
            </div>
        

    </section>
    <section class="shendeti">
        <div class="shendeti-content">
         <h1>Trup, mendje dhe shpirt i shendetshem!</h1>
         <p>Kujdesuni për mendjen tuaj, trupi juaj do t'ju falënderojë. Kujdesuni për trupin tuaj, mendja juaj do t'ju falënderojë</p>
        </div>
     
     </section>
     <section class="cilesia">
            <div class="row">
            <div class="col">
                <img src="./img/quality.jpg" alt=""
                width="460" height="550">
                <h4>Ne garantojme cilesi</h4>
            </div>
        <div class="row">
            <div class="col">
                <img src="./img/bio2.jpg" alt=""
                width="550" height="600">
                <h4>Produkte 100% BIO</h4>
            </div>
    </div>
</section>

<section class="Llojet">
    <div class="row">
        <div class="col content-col">
            <h1>Mundësi të ndryshme për ju!</h1>
            <p>Nëse jeni duke kërkuar për ushqime vegane, vegjetariane, pa gluten, pa qumësht, ushqim të pastër, karbohidrate të ulëta ose pa drithëra, atëherë faqja jonë do t'ju ndihmojë shumë.
                <br><br>Mund të gjeni rceta të shijshme ushqimore që nuk përmbajnë shumë përbërës të përpunuar ose sheqerna të shtuar.
            </p>
        </div>
        <div class="col image-col">
            <div class="image-gallery">
                <img src="./img/lehte11.jpeg" alt="Ushqim i lehte"width="250" height="300">
                <img src="./img/smoothie11.jpeg" alt="smoothie" width="250" height="300">
                <img src="./img/shtese11.jpeg" alt="Produkte shtese " width="250" height="300">
                <img src="./img/vlerat11.jpeg" alt="Vlerat ushqyese" width="250" height="300">
            </div>

        </div> 
       
    </div> 
</section>
<?php include 'footer.php' ?>
    <script>
        const productsBtn= document.querySelector('.products-btn')
        const navlinks=document.querySelector('.nav-links')

        productsBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-products')
        })
    </script>
    
</body>
</html>