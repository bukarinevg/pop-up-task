<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property int $id
 * @property string|null $duration
 * @property int|null $appear
 * @property int|null $ios
 * @property int|null $desktop
 * @property int|null $android
 */
class Config extends \yii\db\ActiveRecord
{

    public $show;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['duration','appear', 'ios', 'desktop', 'android'], 'integer'],
         
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'duration' => 'Duration (seconds)',
            'appear' => 'Appear',
            'ios' => 'Ios',
            'desktop' => 'Desktop',
            'android' => 'Android',
        ];
    }

    public static function showDecision($conf){
        if ($conf->appear == 0){
            return 0;
        }
        else if ( $conf->ios == 1 and (str_contains(Yii::$app->request->headers['user-agent'], 'iPhone') or
        str_contains(Yii::$app->request->headers['user-agent'], 'iPad' )) ){
            return 1;
        }
        else if ( $conf->android == 1 and str_contains(Yii::$app->request->headers['user-agent'], 'Android')  ){
            return 1;
        }
        else if($conf->desktop == 1 and str_contains(Yii::$app->request->headers['user-agent'], 'Windows') ){
            return 1;
        }
        else {
            return 0;
        }

    }
}
