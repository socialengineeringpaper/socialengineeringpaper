<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function index()
    {
        
    }

	//
	// ─── CAPTCHA ────────────────────────────────────────────────────────────────────
	//

		
	public function new_captcha()
	{
		$this->session->set_userdata('captcha_status', '');
		echo new_captcha_fn();
	}


	public function check_captcha()
	{
		$captcha = $this->input->post('captcha');
		$phone = $this->input->post('phone');
		$stored_captcha = $this->session->userdata('captcha');
		// $submitted_captcha = $this->input->post('captcha');
		// $this->input->post();
		// echo "stored_captcha: $stored_captcha\n";
		// echo "submitted_captcha: $captcha\n";
		

		//eliminate every char except 0-9
		$justNums = preg_replace("/[^0-9]/", '', $phone);

		//eliminate leading 1 if its there
		if (strlen($justNums) == 11) {
			$justNums = preg_replace("/^1/", '',$justNums);
		}
		//if we have 10 digits left, it's probably valid.
		if (strlen($justNums) == 10) 
		{
			$isPhoneNum = true;
		}

		if ($this->session->has_userdata('captcha')) {
			if ( strtolower($captcha) === strtolower($stored_captcha) && $isPhoneNum == true) {
				$this->session->set_userdata('captcha_status', 'passed');
				$this->session->set_userdata('phone', $justNums);
				exit('true');
			}
		}
		exit( 'false');
	}


}

/* End of file Api.php */
