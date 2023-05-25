<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php //if (WP_ENV == 'production') : ?>
    <?php echo \Roots\view('partials/gtaghead')->render(); ?>
    <?php //endif ?>
    <?php echo \Roots\view('partials/favicon')->render(); ?>

  </head>

  <body> 
    <?php wp_body_open(); ?>
    <?php //if (WP_ENV == 'production') : ?>
    <?php echo \Roots\view('partials/gtagbody')->render(); ?>
    <?php //endif ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
