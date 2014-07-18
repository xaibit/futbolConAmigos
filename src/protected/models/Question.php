<?php

/**
 * This is the model class for table "question".
 *
 * The followings are the available columns in table 'question':
 * @property integer $idQuestion
 * @property string $text
 * @property string $answer1
 * @property string $answer2
 * @property string $answer3
 * @property string $answer4
 * @property string $answer5
 * @property string $score
 * @property integer $bonus
 * @property integer $answerOK
 * @property integer $match
 *
 * The followings are the available model relations:
 * @property Prediction[] $predictions
 * @property Prediction[] $predictions1
 * @property Prediction[] $predictions2
 * @property Prediction[] $predictions3
 * @property Prediction[] $predictions4
 * @property Match $match0
 * @property Questionmatch[] $questionmatches
 */
class Question extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bonus, answerOK, match', 'numerical', 'integerOnly'=>true),
			array('text', 'length', 'max'=>400),
			array('answer1, answer2, answer3, answer4, answer5', 'length', 'max'=>100),
			array('score', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idQuestion, text, answer1, answer2, answer3, answer4, answer5, score, bonus, answerOK, match', 'safe', 'on'=>'search'),
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
			'predictionsQ1' => array(self::HAS_MANY, 'Prediction', 'question1'),
			'predictionsQ2' => array(self::HAS_MANY, 'Prediction', 'question2'),
			'predictionsQ3' => array(self::HAS_MANY, 'Prediction', 'question3'),
			'predictionsQ4' => array(self::HAS_MANY, 'Prediction', 'question4'),
			'predictionsQ5' => array(self::HAS_MANY, 'Prediction', 'question5'),
			'match' => array(self::BELONGS_TO, 'Match', 'match'),
			'questionmatches' => array(self::HAS_MANY, 'Questionmatch', 'question'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idQuestion' => 'Id Question',
			'text' => 'Texto',
			'answer1' => 'Respuesta 1',
			'answer2' => 'Respuesta 2',
			'answer3' => 'Respuesta 3',
			'answer4' => 'Respuesta 4',
			'answer5' => 'Respuesta 5',
			'score' => 'Puntos',
			'bonus' => 'Bonus',
			'answerOK' => 'Respuesta Correcta',
			'match' => 'Partido',
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

		$criteria->compare('idQuestion',$this->idQuestion);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('answer1',$this->answer1,true);
		$criteria->compare('answer2',$this->answer2,true);
		$criteria->compare('answer3',$this->answer3,true);
		$criteria->compare('answer4',$this->answer4,true);
		$criteria->compare('answer5',$this->answer5,true);
		$criteria->compare('score',$this->score,true);
		$criteria->compare('bonus',$this->bonus);
		$criteria->compare('answerOK',$this->answerOK);
		$criteria->compare('match',$this->match);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Question the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
