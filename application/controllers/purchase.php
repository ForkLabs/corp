<?php require(PROTECT);
	
	class Purchase extends Controller {
		function purchase() {
			/* We can load other resources here */
			parent::controller();
			
		}
		
		function index() {
			echo 'Purchase Controller Works!';
		}

		function listen() {

			header('HTTP/1.1 200 OK');

			$payment_status = $_POST['payment_status'];
			$txn_id = $_POST['txn_id'];
			$payment_amount = $_POST['mc_gross'];
			
			$req = 'cmd=_notify-validate';

			foreach ($_POST as $key => $value){
				$value = urlencode(stripslashes($value));
				$req .= "&$key=$value";
			}

			// Set up the acknowledgement request headers
			$header = "POST /cgi-bin/webscr HTTP/1.1\r\n";
			$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

			// Open a socket for the acknowledgement request
			$fp = fsockopen('tls://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

			// Send the HTTP Post request back to PayPal for validation
			fputs($fp, $header . $req);

			while(!feof($fp)) {
				$res = fgets($fp, 1024);

				if(strcmp ($res, "VERIFIED") == 0) {
					// sEND AN EMAIL ANNOUNCING THE ipn MESSAGE
					$mail_from = "payments@forklabsllc.com";
					$mail_to 	= "contact@devontrae.com";
					$mail_subject = 'VERIFIED IPN';
					$mail_body = $req;

					mail($mail_to, $mail_subject, $mail_body, $mail_from);

					// Authentication protocol is complete - OK to process notification contents

					// Possible processing steps for a payment include the following:

					# Check taht the payment_status is completed
					# Check that the txn_id has not been previously processed
					# Check that the receiver_email is your Primary PayPal email
					# Check that payment_amount/payment_currency are correct
					# Process payment
				} else if(strcmp ($res, "INVALID") == 0) { 
					# Authentication protocol is complete - begin error handling

					# Send an email announcing the IPN message is INVALID
					$mail_from = "payments@forklabsllc.com";
					$mail_to = "contact@devontrae.com";
					$mail_subject = "INVALID IPN";
					$mail_body = $req;

					mail($mail_to, $mail_subject, $mail_body, $mail_from);
				}
			}

			fclose($fp); # Close the file
		}
	}

	