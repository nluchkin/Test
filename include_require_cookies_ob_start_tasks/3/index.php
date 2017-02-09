<?php
//если есть параметр и если он непустой
if (isset($_GET['color']) && $_GET['color']!="") {
    setcookie('color',$_GET['color']);
    header('Location: 03.php');
}
//если первая загрузка страницы установить куку со значением по умолчанию
elseif (!isset($_COOKIE['color'])) {
    setcookie('color', 'black');
}
?>

<form method="get" action="">
    <select name="color">
        <?php
        //зададим массив цветов для удобства и пробежимся по нему
        $colors = array('red', 'blue', 'yellow', 'green');
        foreach ($colors as $font_color) {
            //закрепим выбранный цвет в списке если текущий цвет будет равен значению из массива
            $selected = ($font_color==$_COOKIE['color']) ? 'selected="selected"' : '';
            ?>
            <option value="<?=$font_color?>" <?=$selected?> ><?=$font_color?></option>
        <?php } ?>

    </select>
    <input type="submit" value="Set color">
</form>


<div style="color: <?= $_COOKIE['color']; ?>  ;">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis semper id orci non gravida. Vivamus fermentum lobortis
        erat pretium vulputate. Sed vitae dolor vitae orci sodales gravida. Nunc tempor gravida magna nec vestibulum.
        Vestibulum non eros lobortis, tempor tortor consequat, faucibus nisi. Nullam tincidunt, nisi gravida interdum
        rhoncus, libero orci fermentum mi, ac imperdiet magna tellus eget sem. Morbi rhoncus sapien massa, eget blandit
        elit suscipit nec. Duis risus est, pharetra eu tortor et, dictum consequat augue. Nunc lobortis nec arcu et ultrices.
        Suspendisse potenti.
    </p>
    <p> Maecenas a feugiat diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        Donec dictum, arcu sed tristique molestie, ex nulla semper quam, eu molestie sapien enim non libero. Vestibulum
        tincidunt condimentum tellus, nec faucibus urna ultrices at. Suspendisse tempor pretium magna ut eleifend. Nulla in
        vehicula erat, sit amet varius ipsum. Nulla elementum ut metus et interdum.
    </p>
    <p> Phasellus a ligula ac erat auctor sollicitudin. Duis ligula massa, ultricies imperdiet sem sed, venenatis faucibus
        nunc. Nam malesuada eget mi a placerat. Mauris convallis placerat finibus. Duis viverra neque eu enim fringilla
        fringilla. Mauris nec varius augue. Vestibulum tortor felis, sodales in eros non, pellentesque vulputate dui.
        Sed ac consectetur nisl, sit amet interdum ex. Suspendisse rutrum porta ligula quis elementum.
    </p>
</div>