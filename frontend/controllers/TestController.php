<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Person;
class TestController extends Controller
{
    public function indexAction()
    {
        $person = new Person();
        // 事件绑定
        $person->on(Person::EVENT_SAY_HELLO, function($event) {
            echo 'hello';
        });
    }
}