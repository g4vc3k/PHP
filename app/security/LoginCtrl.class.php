<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/security/LoginForm.class.php';
//pobranie parametrów


class LoginCtrl {

    private $msgs;
    private $form;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new LoginForm();
    }

    public function getParams(){
        $this->form->login = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
        $this->form->pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
    }

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(){

	if(!(isset($this->form->login) && isset($this->form->pass))) {
		return false;
	}

	if($this->form->login == "") {
		$this->msgs->addError('Nie podano loginu');
	}
	if($this->form->pass == "") {
		$this->msgs->addError('Nie podano hasła');
	}

	if($this->msgs->isError()) return false;

	if($this->form->login == "raz" && $this->form->pass == "raz") {
		session_start();
		$_SESSION['role'] = 'raz';
		return true;
	}
	if($this->form->login == "tydzien" && $this->form->pass == "tydzien") {
		session_start();
		$_SESSION['role'] = 'tydzien';
		return true;
	}
    
    if($this->form->login == "miesiac" && $this->form->pass == "miesiac") {
		session_start();
		$_SESSION['role'] = 'miesiac';
		return true;
	}
    
    if($this->form->login == "rok" && $this->form->pass == "rok") {
		session_start();
		$_SESSION['role'] = 'rok';
		return true;
	}
	
	$this->msgs->addError('Niepoprawny login lub hasło');
	return ! $this->msgs->isError();
}
public function process(){

	global $conf;

	$this->getparams();
	
	if (!$this->validate()){
		header($conf->app_url.'/security/login.html');
	}else{
		header("Location: ".$conf->app_url);
	}

	$this->generateView();
}

public function generateView(){

	global $conf, $role;
	
	$smarty = new Smarty();
	$smarty->assign('conf',$conf);
	$smarty->assign('role',$role);
	$smarty->assign('msgs',$this->msgs);
	$smarty->assign('form',$this->form);

	$smarty->display($conf->root_path.'/app/security/login.html');
}
}