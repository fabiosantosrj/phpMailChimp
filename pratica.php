
<?php
 require_once('/MailchimpMarketing/vendor/autoload.php');

 $mailchimp = new MailchimpMarketing\ApiClient();
 
 $mailchimp->setConfig([
	 'apiKey' => '2167e92dccdc45268eb811abb0e018dc-us17',
	 'server' => 'us17.api.mailchimp.com'
 ]);
 
 $email = "evertonprogramadorcriativo@gmail.com";
 $list_id = "629cd7c4d6";
 $subscriber_hash = md5(strtolower($email));
 
 try {
	 $response = $mailchimp->lists->getListMemberTags($list_id, $subscriber_hash);
	 echo "Urist has been tagged {$response["total_times"]} times.";
 } catch (MailchimpMarketing\ApiException $e) {
	 echo $e->getMessage();
 }

?>