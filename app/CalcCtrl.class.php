<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';
require_once $conf->root_path.'/app/security/LoginCtrl.class.php';

include $conf->root_path.'/app/security/check.php';

//pobranie parametrów

class CalcCtrl {
	private $msgs;
    private $form;
    private $result;

public function __construct(){
        $this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
    }

	public function getParams(){
        $this->form->moc = isset($_REQUEST['moc']) ? $_REQUEST['moc'] : null;
        $this->form->czas = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;
        $this->form->cena = isset($_REQUEST['cena']) ? $_REQUEST['cena'] : null;
    }

//walidacja parametrów z przygotowaniem zmiennych dla widoku
public function validate(){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($this->form->moc) && isset($this->form->czas) && isset($this->form->cena))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
    }

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $this->form->moc == "") {
	$this->msgs->addError('Nie podano mocy');
}
if ( $this->form->czas == "") {
	$this->msgs->addError('Nie podano czasu');
}
if ( $this->form->cena == "") {
    $this->msgs->addError('Nie podano ceny');
}

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $this->form->moc )) {
		$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}
	
	if (! is_numeric( $this->form->czas )) {
		$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
	}
    if (! is_numeric( $this->form->cena )) {
        $this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
    }
	return ! $this->msgs->isError();
}




public function process(){
	global $role;
	$this->getparams();
 
	if ($this->validate()) {
		$this->form->moc = floatval($this->form->moc);
            $this->form->czas = floatval($this->form->czas);
            $this->form->cena = floatval($this->form->cena);
            $this->msgs->addInfo('Parametry poprawne.');



			if ($role == 'raz'){
				$this->result->result = round((($this->form->moc/1000) * $this->form->czas * $this->form->cena),2);
                $this->msgs->addError('<h3>Korzystanie z tego urządzenia jednorazowo wyniesie: '.$this->result->result.' zł.</h3>');
			} else {
				$this->msgs->addError('Tylko uzytkownik RAZ może sprawdzić jednorazowe zużycie !');}
                
                if ($role == 'tydzien'){
				$this->result->result = round((($this->form->moc/1000) * $this->form->czas * $this->form->cena * 7),2);
                    $this->msgs->addError('<h3>Korzystanie z tego urządzenia przez tydzień wyniesie: '.$this->result->result.' zł.</h3>');
			} else {
				$this->msgs->addError('Tylko uzytkownik TYDZIEN może sprawdzić tygodniowe zużycie !');}
                    
                    if ($role == 'miesiac'){
				$this->result->result = round((($this->form->moc/1000) * $this->form->czas * $this->form->cena * 30),2);
                        $this->msgs->addError('<h3>Korzystanie z tego urządzenia przez miesiąc wyniesie: '.$this->result->result.' zł.</h3>');
			} else {
				$this->msgs->addError('Tylko uzytkownik MIESIAC może sprawdzić miesieczne zużycie !');}
                        
                        if ($role == 'rok'){
				$this->result->result = round((($this->form->moc/1000) * $this->form->czas * $this->form->cena * 365),2);
                            $this->msgs->addError('<h3>Korzystanie z tego urządzenia przez rok wyniesie: '.$this->result->result.' zł.</h3>');
			} else {
				$this->msgs->addError('Tylko uzytkownik ROK może sprawdzić roczne zużycie !');
                        }


					}
					$this->generateView();
	}
	public function generateView(){
		global $conf, $role;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('role',$role);
	
		$smarty->assign('page_title','Kalkulator');
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
	
		$smarty->display($conf->root_path.'/app/index.html');
}
}