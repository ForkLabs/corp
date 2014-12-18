<?php require(PROTECT);
	function _protect($val = null,$method = 'int') {
		if($method == 'int') {
		    (int)$val = mysql_real_escape_string($val);
		    $val = (is_numeric($val) ? $val : -1);
		} else {
		    $val = mysql_real_escape_string($val);
		}
		return $val;
	}
	class Slots extends Controller {
		function __construct() {
			parent::controller();
			$this->users = load_model('users');
			$this->response = array();
			$this->response['status'] = 'success';

		}
		function index() {
			echo $this->userdata['user_id'];
		}
		
		function play_slots() {
		    $play = $_POST['play'];
			$play = true;
			if($play == true) {
				$cur = '';
				$send = '';
				$arr = array('none'=>45.99,'hearts'=>7
				,'twosame'=>20,'xs'=>5,'stars'=>2
				,'twenty'=> 0.1,'bust'=>20);
				$rand = rand(0,100);
				if($rand >= 45.99) $send = 'none';
				elseif($rand >= 20 || $rand > 7) $send = (rand(1,2) == 1 ? 'bust' : 'twosame');
				elseif($rand >= 7 || $rand > 5) $send = 'hearts';	
				elseif($rand >= 5 || $rand > 2) $send = 'xs';
				elseif($rand >= 2 || $rand == 1) $send = 'stars';
				elseif($rand >= 0) $send = 'twenty';
	
			    if($send == 'none') {
				    $this->response['slot1'] = rand(1,4);
					$this->response['slot2'] = rand(1,4);
					if($this->response['slot1'] == $this->response['slot2'])
					{
					    do {
						    $this->response['slot2'] = rand(1,4);
						}while ( $this->response['slot2'] ==  $this->response['slot1'])
					}
					$this->response['slot3'] = rand(1,4);
					$this->response['content'] = 'No same. Lose.';
				}
				elseif($send == 'twenty') {
				    $this->response['slot1'] = 4;
					$this->response['slot2'] = 4;
					$this->response['slot3'] = 4;
					$this->response['content'] = '20% discount on any coil item.';
				}
				die (json_encode($this->response));
			}
		}
	}