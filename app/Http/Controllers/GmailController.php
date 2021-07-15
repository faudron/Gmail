<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gmail;

class GmailController extends Controller
{
    //
    public function index(){

    	if (! function_exists('imap_open')){
        
        	die('IMAP is not configured.');
    	
    	} else {
    	
    		$connection = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', env('CLIENT_MAIL'), env('CLIENT_PASS')) or die('Cannot connect to Gmail: ' . imap_last_error());

	        $emailData = imap_search($connection, 'SUBJECT "DevOps" BODY "DevOps" TEXT "DevOps" SINCE "1 June 2021"',SE_UID, "UTF-8");
        
        	$mails_new = [];
        	
        	if (! empty($emailData)) {


        		foreach ($emailData as $emailIdent) {

					$overview = imap_fetch_overview($connection, $emailIdent, 0);

					$existente = Gmail::getMailbyHash($overview[0]->uid);

					if(is_null($existente)){

						$message = imap_fetchbody($connection, $emailIdent, '1.1');
						$messageExcerpt = substr($message, 0, 150);
						$partialMessage = trim(quoted_printable_decode($messageExcerpt)); 
						
						$mail = new Gmail();
						$mail->from = iconv_mime_decode($overview[0]->from);
						$mail->subject = utf8_decode(imap_utf8($overview[0]->subject));
						$mail->date = date("Y-m-d H:i:s", strtotime($overview[0]->date));
						$mail->hash = $overview[0]->uid;

						$mail->save();
						$mails_new[]=$mail;
				    }
				}
			}

        	imap_close($connection);
			
			$mails_old = Gmail::orderBy('created_at', 'DESC')->get();

    		return view('gmail',["mails_new"=>$mails_new,"mails_old"=>$mails_old]);
    	
    	}
    }


    public function _imap_utf8_fix($string){

        return iconv_mime_decode($string,0,"UTF-8");

    }
}