<?php

/**
 * This is the model class for table "usergroup".
 *
 * The followings are the available columns in table 'usergroup':
 * @property integer $idUserGroup
 * @property integer $user
 * @property integer $group
 * @property string $score
 * @property integer $adminPending
 * @property integer $userPending
 *
 * The followings are the available model relations:
 * @property User $player
 * @property Group $grouprel
 */
class Usergroup extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usergroup';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user, group, adminPending, userPending', 'numerical', 'integerOnly'=>true),
			array('score', 'length', 'max'=>15),
			array('user', 'checkUniqunessUserGroup', 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUserGroup, user, group, score, adminPending, userPending', 'safe', 'on'=>'search'),
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
			'player' => array(self::BELONGS_TO, 'User', 'user'),
			'grouprel' => array(self::BELONGS_TO, 'Group', 'group'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUserGroup' => 'Id User Group',
			'user' => 'Usuario',
			'group' => 'Grupo',
			'score' => 'Puntos',
			'adminPending' => 'Pendiente Aprobaci&oacute;n Administrador',
			'userPending' => 'Pendiente Aprobaci&oacute;n Usuario'
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

		$criteria->compare('idUserGroup',$this->idUserGroup);
		$criteria->compare('user',$this->user);
		$criteria->compare('group',$this->group);
		$criteria->compare('score',$this->score,true);
		$criteria->compare('adminPending',$this->adminPending);
		$criteria->compare('userPending',$this->userPending);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usergroup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function checkUniqunessUserGroup($attribute,$params) {
		if(Usergroup::model()->count('user=:user AND t.group=:group',
				array(':group'=>$this->group, ':user'=>$this->user)) > 0) {
			$this->addError($attribute, "Ya se encuentra inscripto en el grupo");
		}
	}
}
