<?php 
?>
<h1>
<?php echo esc_html( get_admin_page_title() ); ?>
</h1>
<?php 

use Inc\Data\Read;

$read = new Read ();

echo $read->register();