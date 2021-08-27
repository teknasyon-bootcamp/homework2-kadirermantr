<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

include_once "functions.php";

if (!isset($id)) { // id değeri yok ise
    $id = 1;
}

if (!isset($title)) { // title değeri yok ise
    $title = "Default title";
}

if (!isset($type)) { // type değeri yok ise
     $type = "normal";
}

switch ($type) { // type değerine göre seçim yapar
    case "urgent":
        $color = "red";
        break;
    case "warning":
        $color = "yellow";
        break;
    case "normal":
        $color = "white";
        break;
}

echo "<div style=background-color:" . $color . ">";
getPostDetails($id, $title); // metoda id ve title değerlerini gönderir
echo "</div>";