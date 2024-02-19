<?php
namespace app\models;


class Telegram {
const TELEGRAM_BOT_ID = 'FYTURFRF67IR67IR67FRFTYFDTDRED';
/**
* Отправка сообщений через ТГ
* @var $id int  айди тово кому отправка идёт
* @var $message string что имеено отправляем
*/    
public static function sendMessage($id,$message){
	$ch = curl_init('https://example.com'.self::TELEGRAM_BOT_ID);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HEADER, false);
	$html = curl_exec($ch);
	curl_close($ch);
	return $html;
	}
/**
* @fun getMessages() выводит все собщения которые пришли в бот!
*/
public static function getMessages(){
		$listMessages = array();
		return $listMessages;
	}

}
