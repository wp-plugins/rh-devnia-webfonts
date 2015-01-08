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

<div class="wrap">
<?php    echo "<h2>" . __( 'RH Devnia fonts chooser', 'devnia_trdom' ) . "</h2>"; ?>

<form name="devnia_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="devnia_hidden" value="Y">
	<?php    echo "<h4>" . __( 'select font', 'devnia_trdom' ) . "</h4>"; ?>
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
        </p>
     	<div class="prev"><?php // _e('Previwe text', 'devnia_trdom' ) ?></div>
        <hr />

	<p class="submit">
	<input type="submit" class="btn btn-primary" name="Submit" value="<?php _e('Update Options', 'devnia_trdom' ) ?>" />
	</p>
</form>
</div>