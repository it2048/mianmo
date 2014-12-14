<?php

/**
 * This is the model class for table "rs_order".
 *
 * The followings are the available columns in table 'rs_order':
 * @property integer $id
 * @property integer $time
 * @property string $ip
 * @property integer $number
 * @property string $money
 * @property string $beizhu
 * @property string $zone
 * @property string $address
 * @property string $name
 * @property string $mobilephone
 * @property string $postcode
 * @property string $phone
 */
class RsOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rs_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('time, ip, number, money, beizhu, zone, address, name, mobilephone, postcode, phone', 'required'),
			array('time, number', 'numerical', 'integerOnly'=>true),
			array('ip', 'length', 'max'=>16),
			array('money, name', 'length', 'max'=>64),
			array('zone', 'length', 'max'=>128),
			array('address', 'length', 'max'=>1024),
			array('mobilephone, postcode, phone', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, time, ip, number, money, beizhu, zone, address, name, mobilephone, postcode, phone', 'safe', 'on'=>'search'),
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
			'time' => 'Time',
			'ip' => 'Ip',
			'number' => 'Number',
			'money' => 'Money',
			'beizhu' => 'Beizhu',
			'zone' => 'Zone',
			'address' => 'Address',
			'name' => 'Name',
			'mobilephone' => 'Mobilephone',
			'postcode' => 'Postcode',
			'phone' => 'Phone',
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
		$criteria->compare('time',$this->time);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('number',$this->number);
		$criteria->compare('money',$this->money,true);
		$criteria->compare('beizhu',$this->beizhu,true);
		$criteria->compare('zone',$this->zone,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('mobilephone',$this->mobilephone,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('phone',$this->phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RsOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
