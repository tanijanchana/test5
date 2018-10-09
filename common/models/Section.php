<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $id
 * @property string $section_code
 * @property string $section_name
 * @property int $status
 */
class Section extends \yii\db\ActiveRecord
{
    public $duck = 5000;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['section_code', 'section_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'section_code' => Yii::t('app', 'Section Code'),
            'section_name' => Yii::t('app', 'Section Name'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
