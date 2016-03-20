<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('timetable');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
//		$this->load->view('welcome_message');

//		$this->load->helper('directory');
//		$candidates = directory_map(DATAPATH);
//		sort($candidates);

        $this->load->library('parser');

		$timetable = $this->timetable->days();
//		var_dump($timetable["mon"][0]->getCoursename());
		//die();

		$keys = array_keys($timetable);
		$y = array();

		foreach($keys as $key)
		{
			$tmp = array("day" => $key, "course" => $timetable[$key][0]->getCoursename());
			$y[$key] = $tmp;
		}

		/*

		y == data

		in data

		$key =>

		 */
//		var_dump($y);

//        $x = get_object_vars($timetable["mon"][0]);
//
//
//        foreach ($x as $prop) {
//            $z = array('instructor' => $prop);
//            array_push($y, $z);
//        }
		$this->data['pagebody'] = 'welcome_message';

        $this->data['days'] =$y ;



		$this->render();

	}
}
