<?php
use yii\bootstrap5\Modal;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
/** @var yii\web\View $this */

$this->title = 'My Task Application';

?>

<script>
    if (<?= $config->show ?>) {
        setTimeout(() => {
        document.getElementById('TypeEmail').click();
    }, <?=  $config->duration * 1000   ?>);
    }
    
</script>

<?php if(Yii::$app->session->hasFlash('success')):?>
    <div class="info">
        <?php  Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif; ?>


<?php

    Modal::begin([            #lg xl    
        'size' => 'modal-lg',
        'options' =>
            ['id' => 'email'], 
        'title' => 'Type your email',
            'toggleButton' => ['hidden' => 'hidden', 'id' => 'TypeEmail' ] 
        ]);
     
        $form = ActiveForm::begin([
         #   'id' => 'mail-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
            ],
        ]); 
        echo $form->field($model, 'email')->textInput();
        echo Html::submitButton('Add', ['class' => 'btn btn-primary', 'name' => 'mail-button']);
        
        ActiveForm::end();        
    
    Modal::end();
        ?>



