<?php
namespace app\models;


class Telegram {
/** @var TELEGRAM_BOT_ID string айди телеги */
const TELEGRAM_BOT_ID = 'FYTURFRF67IR67IR67FRFTYFDTDRED';
/** @var TELEGRAM_BOT_URL string айди телеги */
const TELEGRAM_BOT_URL = 'https://api.telega......';
/**
* Отправка сообщений через ТГ
* @var $id int  айди тово кому отправка идёт
* @var $message string что имеено отправляем
*/    
public static function sendMessage($id=null,$message=null){
	try{
		if($id != null and $message!=null){
			$ch = curl_init('https://example.com'.self::TELEGRAM_BOT_ID);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_HEADER, false);
			$html = curl_exec($ch);
			curl_close($ch);
			return $html;
		}else{
			echo "Ты втираешь мне какуюто дичь!";
			die();
		}
	}catch(\Exeption $e){
		echo $e->getMessages();	
		}
	}
/**
* @fun getMessages() выводит все собщения которые пришли в бот!
*/
public static function getMessages(){
		$listMessages = array();
		return $listMessages;
	}

}
