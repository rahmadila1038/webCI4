<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function show(){
		$data['nama']= 'Rahmadila N';
		$data['npm']= '1817051038';
		$data['jurusan']= 'Ilmu Komputer';

		echo view('Mahasiswa/header');
		echo view('Mahasiswa/index', $data);
		echo view('Mahasiswa/footer');
	}

	//--------------------------------------------------------------------

}
