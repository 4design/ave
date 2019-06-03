

<?php $id_home = get_option('page_on_front');
    echo $id_home;
?>


<span>PRE-ID:</span> <?php echo get_the_ID(); ?>

<span> ID_HOME : <?php echo $id_home = get_option('page_on_front'); ?></span>

<?php printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID()), true) ); ?> 


<?php $contacto = get_page_by_title('Contacto');
    echo "<pre>";
    var_dump($contacto);
    echo "</pre>";
?>

<?php echo get_permalink($contacto->ID); ?>


<?php $contacto = get_page_by_title('Contacto');
    echo "<pre>";
    var_dump($contacto);
    echo "</pre>";
?>


<?php get_post_meta(get_the_ID(), 'ave_tours_title_textmoney', true);

<?php echo money_format('%i', $costo);?>

