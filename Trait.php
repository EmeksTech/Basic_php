<?php 

trait Notifiable{
    public function notify($message){
       echo $message;
    }
   

}

class SMS{
    use Notifiable;

}
class Email{
    use Notifiable;

}

class PushNotification{
use Notifiable;
}

$sms = new SMS();
$sms->notify("we are doing a promo, dail *24556*765# to stand a chance to win a Car.");
echo"<br>";
$send_mail = new Email();
$send_mail->notify("Hello how are doing today");
echo "<br>";

$send_pushnotification = new PushNotification();
$send_pushnotification->notify("Reminder: meeting by 4pm!");
?>