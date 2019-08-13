<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promoção - Cada Compra Vale</title>
    <style>
        
        img.promo-img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
        }
        
        html, 
        body {
            margin: 0 !important;
            padding: 0 !important;
        }

        @media screen and (max-width: 767px){
            .img-wrapper-desktop{
                display: none;
            }
        }

        @media screen and (min-width: 768px){
            .img-wrapper-mobile{
                display: none;
            }
        }

    </style>
</head>
<body>
    <div class="img-wrapper-desktop">
        <img class="promo-img" src="{{ asset('img/promo_desktop.jpg') }}" alt="">
    </div>
    <div class="img-wrapper-mobile">
        <img class="promo-img" src="{{ asset('img/promo_mobile.jpg') }}" alt="">
    </div>
</body>
</html>