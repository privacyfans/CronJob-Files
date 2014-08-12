<?
class SendEmailCommand extends CConsoleCommand {

  public function getHelp()
	{
		echo "Some cron job";
	}

	public function run($args)
	{
		//Do some cron processing...
		$cronResult="Cron job finished successfuly";
		
		$mail = new YiiMailer;
		//use "cron" view from views/mail
		$mail->setView('cron');
		$mail->setData(array('message' => $cronResult, 'name' => get_class($this), 'description' => 'Cron job', 'mailer' => $mail));
		
		//set properties
		$mail->setFrom('privacyfans@gmail.com', 'Console application');
		$mail->setSubject($cronResult);
		$mail->setTo('privacyfans1990@gmail.com');
		$mail->setAttachment(Yii::getPathOfAlias('webroot.files') . '/yii-1.1.0-validator-cheatsheet.pdf');
		//if you want to use SMTP, configure it in config file or use something like:
		$mail->setSmtp('smtp.gmail.com', 465, 'ssl', true, 'privacyfans@gmail.com', 'achongxxx199003'); // GMail example
		//send
		//for($x=1;$x<=50;$x++){
		if ($mail->send()) {
			echo ' Mail sent successfuly ';
		//	echo PHP_EOL;
		} else {
			echo ' Error while sending email: '.$mail->getError();
		//	echo PHP_EOL;
		}
		//}
		echo PHP_EOL;
	}

}
?>