<?php

/**
 *
 */
class MailForm extends CFormModel
{
	public $subject;
	public $body;	

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// subject and body are required
			array('subject, body', 'required'),			
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'subject'=>'Asunto',
			'body'=>'Texto e-mail'			
		);
	}
}