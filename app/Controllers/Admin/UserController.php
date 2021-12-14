<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\User;
class UserController extends BaseController
{
    private $user;
	private $session;
	/**
	 * constructor
	 */
	public function __construct()
	{
		helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        
		$this->user = new User();
		$this->session = session();
	}

	/**
	 * register
	 */
	public function register()
	{
		return view('admin/register');
	}

	/**
	 * register
	 */
	public function create()
	{
		$inputs = $this->validate([
			'name' => 'required|min_length[5]',
			'email' => 'required|valid_email|is_unique[users.email]',
			'password' => 'required|min_length[5]'
		]);

		if (!$inputs) {
			return view('admin/register', [
				'validation' => $this->validator
			]);
		}

		$this->user->save([
			'name' => $this->request->getVar('name'),
			'email'  => $this->request->getVar('email'),
			'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
		]);
		session()->setFlashdata('success', 'Success! registration completed.');
		return redirect()->to(site_url('/admin/login'));
	}

	/**
	 * login form
	 */
	public function login()
	{
		print_r(session()->get('loggedIn'));
		if(!empty(session()->get('loggedIn'))){
			return redirect()->to('admin/dashboard'); 
		}
		return view('admin/login');
	}

	/**
	 * login validate
	 */
	public function loginValidate()
	{
		$inputs = $this->validate([
			'email' => 'required|valid_email',
			'password' => 'required|min_length[5]'
		]);

		if (!$inputs) {
			return view('admin/login', [
				'validation' => $this->validator
			]);
		}

		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');

		$user = $this->user->where('email', $email)->first();

		if ($user) {

			$pass = $user['password'];
			$authPassword = password_verify($password, $pass);

			if ($authPassword) {
				$sessionData = [
					'id' => $user['id'],
					'name' => $user['name'],
					'email' => $user['email'],
					'loggedIn' => true,
				];

				$this->session->set($sessionData);
				return redirect()->to('admin/master');
			}

			session()->setFlashdata('failed', 'Failed! incorrect password');
			return redirect()->to(site_url('/login'));
		}

		session()->setFlashdata('failed', 'Failed! incorrect email');
		return redirect()->to(site_url('/login'));
	}

	/**
	 * Master 
	 * @param NA
	 */
	public function master()
	{	
		return view('admin/master_view');
	}

	/**
	 * User logout
	 * @param NA
	 */
	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('admin/login');
	}
}
