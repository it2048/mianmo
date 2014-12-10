<?php

/**
 * This is the model class for table "rs_hero".
 *
 * The followings are the available columns in table 'rs_hero':
 * @property integer $id
 * @property string $name
 * @property integer $type
 * @property integer $occupation
 * @property string $img_url
 * @property string $content
 * @property string $add_user
 * @property integer $add_time
 */
class RsHero extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rs_hero';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type, occupation, img_url, content, add_user, add_time', 'required'),
			array('type, occupation, add_time', 'numerical', 'integerOnly'=>true),
			array('name, add_user', 'length', 'max'=>64),
			array('img_url', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, type, occupation, img_url, content, add_user, add_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'type' => 'Type',
			'occupation' => 'Occupation',
			'img_url' => 'Img Url',
			'content' => 'Content',
			'add_user' => 'Add User',
			'add_time' => 'Add Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('occupation',$this->occupation);
		$criteria->compare('img_url',$this->img_url,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('add_user',$this->add_user,true);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RsHero the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
