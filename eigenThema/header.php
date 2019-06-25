<!DOCTYPE html>
<html <?=language_attributes()?>>
<head>
    <meta charset="<?=bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Robbe van der Lee">
    <meta name="description" content="Mijn wordpress thema">
    <title><?=bloginfo('name')?></title>
    <?=wp_head()?>
</head>
<body>
    <header class="header" style="background-image:url('<?=get_template_directory_uri()?>/img/background.jpg')">
        <div class="header__logo">
            <a href="<?=home_url()?>"><h1 class="header__title"><?=bloginfo('name')?></h1></a>
            <p class="header__description"><?=bloginfo('description')?></p>
        </div>
        <nav class="header__links">
            <?php $arguments = ['theme_location' => 'header',]; ?>
            <?=wp_nav_menu($arguments)?>
        </nav>
    </header>
    <aside>
        <ul>
            <?=dynamic_sidebar('widget_aside')?>
        </ul>
    </aside>