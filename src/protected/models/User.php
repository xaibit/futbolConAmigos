<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $idUser
 * @property string $name
 * @property string $lastname
 * @property string $born
 * @property string $email
 * @property string $state
 * @property string $city
 * @property string $nickname
 * @property integer $score
 * @property string $male
 * @property string $password
 * @property string $dni
 *
 * The followings are the available model relations:
 * @property Group[] $groups
 * @property Prediction[] $predictions
 * @property Usergroup[] $usergroups
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('score', 'numerical', 'integerOnly'=>true),
			array('name, lastname, state, city, nickname, password', 'length', 'max'=>100),
			array('email', 'length', 'max'=>200),
			array('email', 'length', 'max'=>200),
			array('male', 'length', 'max'=>1),
			array('email', 'required'),
			array('password', 'required', 'on'=>'insert'),
			array('nickname', 'required'),
			array('name', 'required'),
			array('lastname', 'required'),	
			array('born', 'safe'),
			array('dni', 'length', 'max'=>15),
			array('born', 'default', 'setOnEmpty' => true, 'value' => null),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUser, name, lastname, born, email, state, city, nickname, score, male, password, dni', 'safe', 'on'=>'search'),
			array('email', 'unique', 'message' => '{attribute}: {value} ya existe.'),
			array('nickname', 'unique', 'message' => '{attribute}: {value} ya existe.'),
			array('email', 'email')			
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
			'groupsAsAdmin' => array(self::HAS_MANY, 'Group', 'userAdmin'),
			'predictions' => array(self::HAS_MANY, 'Prediction', 'user'),
			'usergroups' => array(self::HAS_MANY, 'Usergroup', 'user'),
			'groups' => array(self::MANY_MANY, 'Group', 'usergroup(user, group)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUser' => 'Id User',
			'name' => 'Nombre',
			'lastname' => 'Apellido',
			'born' => 'Fecha de Nacimiento',
			'email' => 'e-mail',
			'state' => 'Provincia',
			'city' => 'Ciudad',
			'nickname' => 'Usuario',
			'score' => 'Puntos',
			'male' => 'Sexo',
			'password' => 'Contrase&ntilde;a',
			'dni' => 'DNI',
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

		$criteria->compare('idUser',$this->idUser);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('born',$this->born,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('score',$this->score);
		$criteria->compare('male',$this->male,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('dni',$this->dni,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
				$this->password = crypt($this->password, $salt);
	
			}
			return true;
		}
		else
			return false;
	}
	
	public function calculatePoints($matchs)
	{
		$predictions = $this->predictions;
		$total = 0;
		 
		foreach ($predictions as $prediction) {
			if (in_array($prediction->match, $matchs)) {
				$total += $prediction->calculatePoints();
				var_dump('usuario: ' . $this->idUser . ' partido: ' . $prediction->match . ' puntos: ' . $total);
			}			
		}
		$this->score += $total;
		$this->save();	
		return $this->score;	
	}
}
