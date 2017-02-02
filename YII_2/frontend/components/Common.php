<?
namespace frontend\components;

use yii\base\Component;
use yii\helpers\Url;

class Common extends Component
{
	const EVENT_NOTIFY = 'notify_';

	public function sendMail()
	{
		/*
		if (Yii::$app->mail)
			->setFrom
			->setTo($emailFrom)
			->setSubject($subject)
			->setHtmlBody($text)
			->send())
		*/
		{
			$this->trigger(self::EVENT_NOTIFY);
			return true;
		}
	}
	
	public static function getImageHouse($data, $general=true, $original=false)
	{
		$image = [];
		$base = Url::base();
		if ($original)
		{
			$image[] = $base.'uploads/houses/'.$data['id'].'/general/'.$data['general_image'];
		}	
		else
		{
			$image[] = $base.'uploads/houses/'.$data['id'].'/general/small_'.$data['general_image'];
		}
		return $image;
	}
}

?>
