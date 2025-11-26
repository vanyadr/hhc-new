<!-- Все php функции которые вы видите тут стирать нельзя, иначе всё может поломаться -->

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<!-- Функция body_class нужна чтоб wordpress мог контролировать классы для тега body, 
 её удалять нельзя. Если нужно чтоб изначально висел какой-то ваш класс на body то
 передайте эти классы в эту функцию строкой через пробелы, 
 например вот так: body_class('body-class, body-opened');  -->

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>