<?php
namespace app\controllers;
use app\models\Telegram;
use yii\web\Controller;
class TelegramController extends Controller{
    public function actionIndex()
    {
        $message= Telegram::find()->all();
        return $this->render('index', compact('message'));
    }
        public function actionTextMessage(){
            $res = \Yii::$app->telegram->sendMessage([
                'chat_id' => $chat_id,
                'text' => 'hello world!!' 
                ]);
}
}