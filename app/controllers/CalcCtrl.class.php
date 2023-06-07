<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {
	private $msgs;
    private $form;
    private $result;

public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
    }

	public function getParams(){
        $this->form->moc = getFromRequest('moc');
        $this->form->czas = getFromRequest('czas');
		$this->form->cena = getFromRequest('cena');
    }


public function validate(){

	if ( ! (isset($this->form->moc) && isset($this->form->czas) && isset($this->form->cena))) {

		return false;
    }

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $this->form->moc == "") {
	getMessages()->addError('Nie podano mocy');
}
if ( $this->form->czas == "") {
	getMessages()->addError('Nie podano czasu');
}
if ( $this->form->cena == "") {
    getMessages()->addError('Nie podano ceny');
}


if (! getMessages()->isError()) {
			
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric ( $this->form->moc )) {
		getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}
	
	if (! is_numeric ( $this->form->czas )) {
		getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
	}

	if (! is_numeric ( $this->form->cena )) {
		getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
	}
}

return ! getMessages()->isError();
}




public function action_calcCompute(){

	$this->getparams();
 
	if ($this->validate()) {
		$this->form->moc = floatval($this->form->moc);
            $this->form->czas = floatval($this->form->czas);
            $this->form->cena = floatval($this->form->cena);
            getMessages()->addInfo('Parametry poprawne.');



			if (inRole('raz')){
				$this->result->result = round((($this->form->moc/1000) * $this->form->czas * $this->form->cena),2);
                getMessages()->addWynik('<h3>Korzystanie z tego urządzenia jednorazowo wyniesie: '.$this->result->result.' zł.</h3>');
			} else {
				getMessages()->addError('Tylko uzytkownik RAZ może sprawdzić jednorazowe zużycie !');}
                
                if (inRole('tydzien')){
				$this->result->result = round((($this->form->moc/1000) * $this->form->czas * $this->form->cena * 7),2);
				getMessages()->addWynik('<h3>Korzystanie z tego urządzenia przez tydzień wyniesie: '.$this->result->result.' zł.</h3>');
			} else {
				getMessages()->addError('Tylko uzytkownik TYDZIEN może sprawdzić tygodniowe zużycie !');}
                    
                    if (inRole('miesiac')){
				$this->result->result = round((($this->form->moc/1000) * $this->form->czas * $this->form->cena * 30),2);
				getMessages()->addWynik('<h3>Korzystanie z tego urządzenia przez miesiąc wyniesie: '.$this->result->result.' zł.</h3>');
			} else {
				getMessages()->addError('Tylko uzytkownik MIESIAC może sprawdzić miesieczne zużycie !');}
                        
					if (inRole('rok')){
				$this->result->result = round((($this->form->moc/1000) * $this->form->czas * $this->form->cena * 365),2);
				getMessages()->addWynik('<h3>Korzystanie z tego urządzenia przez rok wyniesie: '.$this->result->result.' zł.</h3>');
			} else {
				getMessages()->addError('Tylko uzytkownik ROK może sprawdzić roczne zużycie !');
                        }


					}
					$this->generateView();
	}

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Kalkulator zużycia prądu');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		getSmarty()->display('index.html');
	}
	public function action_chroniona(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Kalkulator zużycia prądu');
		getSmarty()->display('chroniona.html');
	}
}



		