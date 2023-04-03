<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$moc,&$czas,&$cena){
	$moc = isset($_REQUEST['moc']) ? $_REQUEST['moc'] : null;
	$czas = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;
    $cena = isset($_REQUEST['cena']) ? $_REQUEST['cena'] : null;
}


//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$moc,&$czas,&$cena,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($moc) && isset($czas) && isset($cena))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
    }

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $moc == "") {
	$messages [] = 'Nie podano mocy';
}
if ( $czas == "") {
	$messages [] = 'Nie podano czasu';
}
if ( $cena == "") {
    $messages [] = 'Nie podano ceny';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (count ( $messages ) != 0) return false;

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $moc )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $czas )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
    if (! is_numeric( $cena )) {
        $messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
    }
    
    if (count ( $messages ) != 0) return false;
	else return true;

}

function process(&$moc,&$czas,&$cena,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$moc = intval($moc);
	$czas = intval($czas);
    
    //wykonanie operacji
			if ($role == 'raz'){
				$result = round((($moc/1000) * $czas * $cena),2);
                $messages [] = '<h3>Korzystanie z tego urządzenia jednorazowo wyniesie: '.$result.' zł.</h3>';
			} else {
				$messages [] = 'Tylko uzytkownik RAZ może sprawdzić jednorazowe zużycie !';}
                
                if ($role == 'tydzien'){
				$result = round((($moc/1000) * $czas * $cena * 7),2);
                    $messages [] = '<h3>Korzystanie z tego urządzenia przez tydzień wyniesie: '.$result.' zł.</h3>';
			} else {
				$messages [] = 'Tylko uzytkownik TYDZIEN może sprawdzić tygodniowe zużycie !';}
                    
                    if ($role == 'miesiac'){
				$result = round((($moc/1000) * $czas * $cena * 30),2);
                        $messages [] = '<h3>Korzystanie z tego urządzenia przez miesiąc wyniesie: '.$result.' zł.</h3>';
			} else {
				$messages [] = 'Tylko uzytkownik MIESIAC może sprawdzić miesieczne zużycie !';}
                        
                        if ($role == 'rok'){
				$result = round((($moc/1000) * $czas * $cena * 365),2);
                            $messages [] = '<h3>Korzystanie z tego urządzenia przez rok wyniesie: '.$result.' zł.</h3>';
			} else {
				$messages [] = 'Tylko uzytkownik ROK może sprawdzić roczne zużycie !';
                        }
		/*case 'times' :
			$result = $x * $y;
			break;
		case 'div' :
			if ($role == 'admin'){
				$result = $x / $y;
			} else {
				$messages [] = 'Tylko administrator może dzielić !';
			}
			break;
		default :
			$result = round((($moc/1000) * $czas * $cena),2);
			break; */
	}

//definicja zmiennych kontrolera
$moc = null;
$czas = null;
$cena = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($moc,$czas,$cena,$result);
if ( validate($moc,$czas,$cena,$messages) ) { // gdy brak błędów
	process($moc,$czas,$cena,$messages,$result);
}

    
    
    

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';