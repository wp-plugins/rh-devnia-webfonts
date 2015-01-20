<?php 
	if($_POST['devnia_hidden'] == 'Y') {
		//Form data sent
		$body_font = $_POST['devnia_body_font'];
		update_option('devnia_body_font', $body_font);
		
		?>
		<div class="updated"><p><strong><?php _e('Options saved.', 'devnia_trdom' ); ?></strong></p></div>
		<?php
	} else {
		//Normal page display
		$body_font = get_option('devnia_body_font');

	}
	
	
?>
<link href="http://fonts.hosni.netdna-cdn.com/fonts/cdn/file_font/?font=<?php echo $body_font; ?>" rel="stylesheet">
<style>
.prev{
font-family:<?php echo $body_font; ?>;
font-size:16px;
}
</style>
<div class="wrap">
<?php    echo "<h2>" . __( 'RH Devnia fonts chooser', 'devnia_trdom' ) . "</h2>"; ?>

<form name="devnia_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="devnia_hidden" value="Y">
	<?php    echo "<h2>" . __( 'select font', 'devnia_trdom' ) . "</h2>"; ?>
            <p><?php _e('body font', 'devnia_trdom' ); ?>
        <select class="form-control col-md-3" name="devnia_body_font">
        <option value="<?php echo $body_font; ?>" selected="selected"><?php echo $body_font; ?></option>
        <option value="themixarab">the mix arab</option>
        <option value="JF_Flat_Regular">JF Flat Regular</option>
        <option value="VIP_Rawy_Thin">VIP Rawy Thin</option>
        <option value="VIP_Strick">VIP Strick</option>
        <option value="Al-Jazeera-Arabic">Al Jazeera Arabic</option>
        <option value="Droid_Sans_Arabic">Droid Sans Arabic</option>
        <option value="AraJozoor-Regular">AraJozoor Regular</option>
        </select>
        <div class="clearfix"></div>
        <hr />
	<h2><?php _e('Preview text', 'devnia_trdom' ) ?></h2>
        </p>
     	<div class="prev">بسم الله<?php // _e('Previwe text', 'devnia_trdom' ) ?></div>
        <hr />
	<h2></h2>
	<p class="submit">
	<input type="submit" class="btn btn-primary" name="Submit" value="<?php _e('Update Options', 'devnia_trdom' ) ?>" />
	</p>
</form>

<div id="placeholder"></div>



</div>