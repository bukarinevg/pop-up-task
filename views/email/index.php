<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use app\models\Email;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
?>

<h1>email/index</h1>

<?php
$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
    <?= $form->field($config, 'duration') ?>
    <?= $form->field($config, 'appear')->checkBox(['data-size'=>'small',  'id'=>'appear']) ?>
    <?= $form->field($config, 'ios')->checkBox(['data-size'=>'small',  'id'=>'ios']) ?>
    <?= $form->field($config, 'desktop')->checkBox(['data-size'=>'small',  'id'=>'desktop']) ?>
    <?= $form->field($config, 'android')->checkBox(['data-size'=>'small',  'id'=>'android']) ?>
   

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Apply', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider
    ,
    
    'columns' => [
        
        'email'
    ]
    ]);
?>

<p>
    
</p>
