<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;
use App\Models\Cms\Customer;

class CustomerController extends BaseController
{
	protected $customers;
    /**
	 * constructor
	 */
	public function __construct()
	{
		$this->customers = new Customer();
	}

    public	function login()
	{
		$mobile = $this->request->getPost('mobile');
		$inputs = $this->validate([
            'mobile' => 'required|numeric|regex_match[/^[0-9]{10}$/]',
        ]);

        if (!$inputs) {
            return view('index_view', [
                'validation' => $this->validator
            ]);
        }
		$signInOrSignUp = $this->customers->getAllCusotmerByMobileNo($mobile);

		$data = [
			'id' => $signInOrSignUp['id'],
			'name' => $signInOrSignUp['first_name'],
			'contact' => $signInOrSignUp['contact'],
			'email' => $signInOrSignUp['email'],
			'loggedIn' => true
		];
		session()->set($data);
		
		return redirect()->route('/');
		
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->route('/');
	}

	public function profile()
	{
		return view('customer/index.php');
	}
}
