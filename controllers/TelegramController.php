<?php
namespace app\controllers;
use app\models\Telegram;
use yii\web\Controller;
class TelegramController extends Controller{
    public function actionIndex(){
        $message= Telegram::find()->all();
        return $this->render('index', compact('message'));
    }
        // public function actionTextMessage(){
        //     $res = \Yii::$app->telegram->sendMessage([
        //         'chat_id' => $chat_id,
        //         'text' => 'hello world!!' 
        //         ]);
        //         }
        //         public function actionSendMessage($idTelegram,$message){
        //             Telegram::sendMessage((int)$idTelegram,$message);
        //             }
        //             public function actionGetAllMesages(){
        //                 $listMessages = Telegram::getMessages();
        //                  return $this->render('contact', [
        //                         'listMessages'=> $listMessages
        //                     ]);
        //                 }

}