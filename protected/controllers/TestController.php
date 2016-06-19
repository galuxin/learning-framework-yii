<?php

class TestController extends Controller
{

  public function actionIndex($id=6, $category="cat", $user=1)
  {
    //$users = User::model()->findAll('`name` = :name', array(':name'=>"vanya")); // :name (:) - означає що буде перевірка на валідність
    $users = User::model()->findAllByAttributes(array('name'=>"vanya", 'email'=>'aa@gmail.com'));

    $newUser = new User;
    $newUser->email = 'aa@gmail.com';
    $newUser->password = '4444';
    $newUser->name = 'vanya';
    //$newUser->id_role = 4;
    $newUser->save();


    $this->render('index', array(
      'users' => $users,
      'errors' => $newUser->errors,
    ));
  }
}
