<?php

use yii\helpers\Html;

include __DIR__ . '/_header.php';

/* @var $this yii\web\View */

?>
<div class="<?= "$modelId-$actionId" ?>">

    <h1><?= Html::encode( $this->title ) ?></h1>
	
	<?= $this->render( '_form', $_params_ ) ?>

</div>
