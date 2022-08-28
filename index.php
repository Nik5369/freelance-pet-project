<?php
   if(isset($_POST["submit"])) {

$numberPhone = $_POST['phone'];
$name = $_POST['name'];
$ch = curl_init("https://sms.ru/sms/send");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_TIMEOUT, 30);
   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
       "api_id" => "5A6331BC-4D99-6087-810F-047A8FFE473E",
       "multi" => array(
           "79674316941"=> ('Имя: '. $name . ', телефон: ' . $numberPhone),
           "79207778284"=> ('Имя: '. $name . ', телефон: ' . $numberPhone),
           $numberPhone => ("В ближайшее время с вами свяжется наш специалист.")),
       "json" => 1
)));
$body = curl_exec($ch);
curl_close($ch);

}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Вскрытие замков</title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=Style.css>
    <link rel="stylesheet" href=StyleMobile.css>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/zamok_na_vkaldku.ico" type="image/x-icon">
    <meta name="keywords" content="вскрыть, замок, вскрытие, замков, авто, гараж, сейф, машины, машину"/><meta name="description" content="Вскрытие замков в Туле, без повреждений, 24/7. Квартиры, авто, гаражи, сейфы. Оперативный выезд по городу, приезжаем в течение 30 мин. Открываем аккуратно.  На связи круглосуточно, без выходных."/><meta property="og:title" content="Вскрытие замков квартир, авто. Замена замков."/><meta property="og:description" content="Вскрытие замков квартир, входных и межкомнатных дверей, машин, гаражей, сейфов, навесных замков. Оперативный выезд по городу, приезжаем в течение 30 мин. открываем аккуратно, без повреждения двери. На связи круглосуточно, без выходных, 24/7."/>

</head>
<body>

<div class="container">
<div class="header">
    <div  class="logo">
        <img src="img/logo.png" width="160px" height="157px">
    </div>
    <div class="privet">
            <h1>Аварийная служба вскрытия замков без повреждений</h1>
    </div>
    <div class="header_info">
        <div class="specialisti">
            <div class="speciasisti_oboznachenie">
                <p>Свободных специалитсов:</p>
            </div>
            <div class="specialisti_kolichestvo">
                <p>2/5</p>
            </div>
        </div>
        <div class="header_online">
            <div class="pulse"></div>
            Всегда на связи
        </div>
    </div>
</div>
<div class="phone_number">
    <div >
 <a href="tel:+8-(4872)-71-69-41" class="phone_border">8 - (4872) - 71 - 69 - 41</a>

    </div>

</div>
<div class="samoe" method="post">
    <div class="register" method="post">
        <div class="vizov">
            <h2>Вызов специалиста!</h2>
            <p>Введите ваши контактные данные и наш специалист непременно с вами свяжется</p>
        </div>

    <form method="post">

        <div class="form-group">
            <p class="name_form">Имя</p>
            <input name="name" type="text" class="form-control" id="name">
          </div>


        <div class="form-group">
            <p class="name_form">Телефон</p>
            <input name="phone" type="tel" class="form-control" id="phone">
          </div>


   <button for="btn" type="submit" class="btn btn-primary" name="submit" id="btn" value="1">Отправить запрос</button>

    </form>

    </div>

    <div class="slider">

<aside class="gablok_sedakoda">
<div class="slayder_karusel">
    <span><img src="img/slider/car.jpg" alt=""></span>
    <span><img src="img/slider/garage.jpg" alt=""></span>
    <span><img src="img/slider/house.jpg" alt=""></span>
    <span><img src="/img/slider/safe.jpg" alt=""></span>
    <span><img src="img/slide1.jpg" alt=""></span>
</div>
</aside>

</div>

</div>
<div class="otchet">
    <div class="privetstvie">
        <h2>Для вас мы открыли:</h2>
    </div>
    <div class="otchet_primer">
        <div class="any">
                <img src="img/otchet/car.png" class="otchet_image" width="150px" height="137px">
                <p>536 <br> машин</p>
        </div>
        <div class="any">
                <img src="img/otchet/safe.png" class="otchet_image" width="150px" height="137px">
                <p>135 <br> сейфов</p>
        </div>
        <div class="any">
                <img src="img/otchet/door.png" class="otchet_image" width="150px" height="137px">
                <p>1084 <br> квартир</p>
        </div>
        <div class="any">
                <img src="img/otchet/garage.png" class="otchet_image" width="150px" height="137px">
                <p>251 <br> гараж</p>
        </div>
    </div>

</div>
<div class="povtorenie_teksta">
    <h1>Аварийная служба экстренной помощи вскрытия входных и межкомнатных дверей, сейфов, автомобилей, гаржей и пр. систем запирания, а так же изготовление и чипирование ключей.</h1>

</div>
<div class="uslugi">
    <div class="first_ryad">
        <div class="element_uslugi">
            <img src="img/uslugi/car.jpg" class="image_uslugi" >
        </div>
        <div class="element_uslugi">
            <p class="text_uslugi">Вскрытие автомобилей любых марок, без повреждений, изготовят утерянные ключи к замку зажигания или дверям автомобиля</p>
        </div>
        <div class="element_uslugi">
            <img src="img/uslugi/house.jpg" class="image_uslugi" >
        </div>
        <div class="element_uslugi">
            <p class="text_uslugi">Вскрытие замков на любых типах квартирных дверей, в том числе и бронированных, преимущественно без повреждения или разрушения конструкции двери</p>
        </div>

    </div>
        <div class="second_ryad">

        <div class="first_part_second_ryad">
            <div class="element_uslugi second_element">
                <p class="text_uslugi">Предлагаем услуги по изготовлению домофонных и замочных ключей. Сотрудничаем и с физическими, и с юридическими лицами.
</p>
            </div>
            <div class="element_uslugi first_element">
                <img src="img/uslugi/garage.jpg" class="image_uslugi" >
            </div>
        </div>

        <div class="first_part_second_ryad">
            <div class="element_uslugi second_element">
                <p class="text_uslugi">Вскрытие сейфов и сейфовых замков всех типов, изготовят ключи по замку.</p>
            </div>
            <div class="element_uslugi first_element">
                <img src="img/uslugi/safe.jpg" class="image_uslugi" >
            </div>
        </div>
    </div>


</div>
<div class="prices_info">
    <div class="prices_logo">
     <h2>Цены на услуги</h2>
    </div>
    <div class="name_and_price">
        <div class="name_prices"><h2>Улсуга</h2></div>
        <div class="price_in_rub"><h2>Цена, руб</h2></div>
    </div>
    <div class="price_uslugi">
        <div class="prices_uslugi_name">
            <p>Вскрытие замка входной двери
</p>
            <p>Вскрытие замка межкомнатной двери
</p>
            <p>Вскрытие отечественного авто
</p>
            <p>Вскрытие иномарки
</p>
            <p>Вскрытие грузового авто и спецтехники
</p>
            <p>Вскрытие сейфа
</p>
            <p>Вскрытие сейфа
</p>
            <p>Замена замка
</p>

        </div>
        <div class="prices_in_rub">
            <p>от 900</p>
            <p>от 700</p>
            <p>от 900</p>
            <p>от 1100</p>
            <p>от 1400</p>
            <p>от 1400</p>
            <p>от 1400</p>
            <p>от 700</p>

        </div>
    </div>
</div>
<div class="footer">
    <div class="footer_text">
        <h1> Быстрое вскрытие замков</h1>
        <p>Опытные мастера к вашим услугам</p>

    </div>
    <div class="footer_phone">
        <span class="test"><a href="tel:+8-(4872)-71-69-41" class="phone_footer">8 - (4872) - 71 - 69 - 41</a></span>
        <div class="footer_online">
            <span class="pulse"></span>
            Всегда на связи
        </div>
    </div>



</div>


</div>
</body>
</html>
