<?php

/**
 * This is the model class for table "prediction".
 *
 * The followings are the available columns in table 'prediction':
 * @property integer $idPrediction
 * @property integer $localGoals
 * @property integer $visitantGoals
 * @property string $score
 * @property integer $question1
 * @property integer $answer1
 * @property integer $question2
 * @property integer $answer2
 * @property integer $question3
 * @property integer $answer3
 * @property integer $question4
 * @property integer $answer4
 * @property integer $question5
 * @property integer $answer5
 * @property integer $user
 * @property integer $match
 * @property string $predictioncol
 *
 * The followings are the available model relations:
 * @property Match $match0
 * @property User $user0
 * @property Question $question10
 * @property Question $question20
 * @property Question $question30
 * @property Question $question40
 * @property Question $question50
 */
class Prediction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prediction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('localGoals, visitantGoals, question1, answer1, question2, answer2, question3, answer3, question4, answer4, question5, answer5, user, match', 'numerical', 'integerOnly'=>true),
			array('score', 'length', 'max'=>15),
			array('predictioncol', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPrediction, localGoals, visitantGoals, score, question1, answer1, question2, answer2, question3, answer3, question4, answer4, question5, answer5, user, match, predictioncol', 'safe', 'on'=>'search'),
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
			'match' => array(self::BELONGS_TO, 'Match', 'match'),
			'user' => array(self::BELONGS_TO, 'User', 'user'),
			'question1' => array(self::BELONGS_TO, 'Question', 'question1'),
			'question2' => array(self::BELONGS_TO, 'Question', 'question2'),
			'question3' => array(self::BELONGS_TO, 'Question', 'question3'),
			'question4' => array(self::BELONGS_TO, 'Question', 'question4'),
			'question5' => array(self::BELONGS_TO, 'Question', 'question5'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPrediction' => 'Id Prediction',
			'localGoals' => 'Goles Local',
			'visitantGoals' => 'Goles Visitante',
			'score' => 'Puntos',
			'question1' => 'Pregunta 1',
			'answer1' => 'Respuesta 1',
			'question2' => 'Pregunta 2',
			'answer2' => 'Respuesta',
			'question3' => 'Pregunta 3',
			'answer3' => 'Respuesta',
			'question4' => 'Pregunta 4',
			'answer4' => 'Respuesta',
			'question5' => 'Pregunta 5',
			'answer5' => 'Respuesta',
			'user' => 'Usuario',
			'match' => 'Partido',
			'predictioncol' => 'Predictioncol',
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

		$criteria->compare('idPrediction',$this->idPrediction);
		$criteria->compare('localGoals',$this->localGoals);
		$criteria->compare('visitantGoals',$this->visitantGoals);
		$criteria->compare('score',$this->score,true);
		$criteria->compare('question1',$this->question1);
		$criteria->compare('answer1',$this->answer1);
		$criteria->compare('question2',$this->question2);
		$criteria->compare('answer2',$this->answer2);
		$criteria->compare('question3',$this->question3);
		$criteria->compare('answer3',$this->answer3);
		$criteria->compare('question4',$this->question4);
		$criteria->compare('answer4',$this->answer4);
		$criteria->compare('question5',$this->question5);
		$criteria->compare('answer5',$this->answer5);
		$criteria->compare('user',$this->user);
		$criteria->compare('match',$this->match);
		$criteria->compare('predictioncol',$this->predictioncol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Prediction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}