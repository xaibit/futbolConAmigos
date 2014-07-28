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
 * @property string $create
 * @property string $update
 *
 * The followings are the available model relations:
 * @property Match $matchRel
 * @property User $user
 * @property Question $ques1
 * @property Question $ques2
 * @property Question $ques3
 * @property Question $ques4
 * @property Question $ques5
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
			array('create, update', 'safe'),
			array('match', 'checkUniqunessUserPrediction', 'on'=>'insert'),
			array('match', 'checkExpiration'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPrediction, localGoals, visitantGoals, score, question1, answer1, question2, answer2, question3, answer3, question4, answer4, question5, answer5, user, match, predictioncol, create, update', 'safe', 'on'=>'search'),
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
			'matchRel' => array(self::BELONGS_TO, 'Match', 'match'),
			'user' => array(self::BELONGS_TO, 'User', 'user'),
			'ques1' => array(self::BELONGS_TO, 'Question', 'question1'),
			'ques2' => array(self::BELONGS_TO, 'Question', 'question2'),
			'ques3' => array(self::BELONGS_TO, 'Question', 'question3'),
			'ques4' => array(self::BELONGS_TO, 'Question', 'question4'),
			'ques5' => array(self::BELONGS_TO, 'Question', 'question5'),
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
			'create' => 'Fecha Creaci&oacute;n',
			'update' => 'Fecha Actualizaci&oacute;n',
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
		$criteria->compare('create',$this->create,true);
		$criteria->compare('update',$this->update,true);

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

	public function checkUniqunessUserPrediction($attribute,$params) {
		if(Prediction::model()->count('user=:user AND t.match=:match',
				array(':match'=>$this->match, ':user'=>$this->user)) > 0) {
			$this->addError($attribute, "Ya complet&oacute; el p&aacute;lpito para este partido");
		}
	}
	
	public function checkExpiration($attribute, $params) {		
		if ((strtotime($this->matchRel->date) - time()) < (60 * 60)) {
			$this->addError($attribute, "Ya no puede completar el p&aacute;lpito para este partido");
		}
	}
}
