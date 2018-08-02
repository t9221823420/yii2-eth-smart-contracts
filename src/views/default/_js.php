<?php

use yii\helpers\Html;
use yii\helpers\Url;

// <?php $this->registerJs( $this->render('_js.php', ['section' => 'onload']), $this::POS_END ); ?>

?>
<?php if( $printTags ?? false ) : ?>
<script type='text/javascript'><?php endif; ?>
	
	<?php switch($section) : case 'onload' : ?>
	
	$( function () {
		
	} );
	
	<?php break; case 'template' : ?>
	
	<?php break; default: ?>
	
	<?php endswitch; ?>
	<?php if( $printTags ?? false ) : ?></script><?php endif; ?>
