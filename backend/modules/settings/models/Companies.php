<?php

namespace backend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_email
 * @property string $company_adress
 * @property string $company_start_date
 * @property string $company_created_date
 * @property string $company_status
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_email', 'company_adress', 'company_start_date', 'company_created_date', 'company_status'], 'required'],
            [['company_start_date', 'company_created_date'], 'safe'],
            [['company_status'], 'string'],
            [['company_name', 'company_email'], 'string', 'max' => 100],
            [['company_adress'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'company_email' => 'Company Email',
            'company_adress' => 'Company Adress',
            'company_start_date' => 'Company Start Date',
            'company_created_date' => 'Company Created Date',
            'company_status' => 'Company Status',
        ];
    }
}
