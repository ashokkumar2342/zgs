<?php

namespace App\Listeners;

use App\Events\SendSmsEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
class SendSms
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendSmsEvent  $event
     * @return void
     */
    public function handle(SendSmsEvent $event)
    {  
          

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_URL, 'http://login.businesslead.co.in/api/mt/SendSMS?user=icapss&password=icaps@231&senderid=icapsr&channel=Trans&DCS=0&flashsms=0&number='.$event->mobile.'&text='.urlencode($event->message).'&route=1');
        // curl_exec($ch); 


        
        //  $msg=urlencode($event->message);
 
        //  $url = "http://180.179.218.150/sendurlcomma.aspx?user=20084062&pwd=zad@184&senderid=ZADRTK&mobileno=$event->mobile&msgtext=$msg";
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $curl_scraped_page = curl_exec($ch);
        // curl_close($ch);
        // echo $curl_scraped_page;
        //  Log::info($event->mobile.' : '.$event->message);
        
        
        
        
        $msg=urlencode($event->message);
 
 
        $url = "http://180.179.218.150/sendurlcomma.aspx?user=20089373&pwd=123456&senderid=ZADRTK&mobileno=$event->mobile&msgtext=$msg&smstype=13"; 
 
        $url = "http://180.179.218.150/sendurlcomma.aspx?user=20089373&pwd=123456&senderid=ZADRTK&mobileno=$event->mobile&msgtext=$msg&smstype=13";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $curl_scraped_page = curl_exec($ch);
        curl_close($ch);
      
        Log::info($event->mobile.' : '.$event->message);

       // $msg=urlencode($event->message);
        
        
       //  $url = "http://203.129.225.68/API/WebSMS/Http/v1.0a/index.php?username=zgsrtk1&password=123456&sender=zgsrtk&to=$event->mobile&message=$msg&reqid=1&format=json&route_id=428&sendondate=date()";
       //  $ch = curl_init($url);
       //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       //  $curl_scraped_page = curl_exec($ch);
       //  curl_close($ch);
        
       //  Log::info($event->mobile.' : '.$event->message);
         
    }
}
