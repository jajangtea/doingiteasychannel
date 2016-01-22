<?php

namespace app\models;

use dektrium\user\models\RegistrationForm as BaseRegistrationForm;

class RegistrationForm extends BaseRegistrationForm{

  public $age;

  public function rules(){
    $rules = parent::rules();
    $rules['usernameLength'] = ['username', 'string', 'min' => 3, 'max' => 255];
    $rules[] = ['age','safe'];
    return $rules;
  }

}
