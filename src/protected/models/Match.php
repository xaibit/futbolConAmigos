<?php

/**
 * This is the model class for table "match".
 *
 * The followings are the available columns in table 'match':
 * @property integer $idMatch
 * @property integer $localTeam
 * @property integer $visitantTeam
 * @property string $date
 * @property integer $afaDate
 * @property string $place
 * @property integer $localGoals
 * @property integer $visitantGoals
 * @property integer $competition
 *
 * The followings are the available model relations:
 * @property Competition $competition0
 * @property Team $localTeam0
 * @property Team $visitantTeam0
 * @property Prediction[] $predictions
 * @property Question[] $questions
 * @property Questionmatch[] $questionmatches
 */
class Match extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'match';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('localTeam, visitantTeam, afaDate, localGoals, visitantGoals, competition', 'numerical', 'integerOnly'=>true),
			array('place', 'length', 'max'=>100),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idMatch, localTeam, visitantTeam, date, afaDate, place, localGoals, visitantGoals, competition', 'safe', 'on'=>'search'),
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
			'localTeam0' => array(self::BELONGS_TO, 'Team', 'localTeam'),
			'visitantTeam0' => array(self::BELONGS_TO, 'Team', 'visitantTeam'),
			'predictions' => array(self::HAS_MANY, 'Prediction', 'match'),
			'questions' => array(self::HAS_MANY, 'Question', 'match'),
			'questionmatches' => array(self::HAS_MANY, 'Questionmatch', 'match'),
			'competition' => array(self::BELONGS_TO, 'Competition', 'competition'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMatch' => 'Id Match',
			'localTeam' => 'Local',
			'visitantTeam' => 'Visitante',
			'date' => 'Dia',
			'afaDate' => 'Fecha',
			'place' => 'Lugar',
			'localGoals' => 'Goles Local',
			'visitantGoals' => 'Goles Visitante',
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

		$criteria->compare('idMatch',$this->idMatch);
		$criteria->compare('localTeam',$this->localTeam);
		$criteria->compare('visitantTeam',$this->visitantTeam);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('afaDate',$this->afaDate);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('localGoals',$this->localGoals);
		$criteria->compare('visitantGoals',$this->visitantGoals);
		$criteria->compare('competition',$this->competition);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Match the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
