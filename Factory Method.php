<?php
abstract class Factory {
    abstract function resort($param);
	
}

class Smmakan extends Factory {
    private $context = "mknan";  
    function resort($param) {
    $Factory = NULL;   
        switch ($param) {
            case "mkn":
                $Factory = new mknan;
            break;
            case "minum":
                $Factory = new minum;
            break;
            default:
                $Factory = new mknan;
            break;        
        }     
    return $Factory;
    }
}
  class mminum extends Factory {
    private $context = "mnuman";
    function resort($param) {
        $Factory = NULL;
        switch ($param) {
            case "mnm":
                $Factory = new minum;
            break;      
            case "makan":
                $Factory = new mknan;
            break;
            default:
                $Factory = new minum;
            break;    
        }     
        return $Factory;
    }
	
}
abstract class Factoryr {
    abstract function getmkn();
    abstract function getmnm();
}
abstract class Factoryran {
    private $subject = "Factory";
}

class mknan extends Factoryran {
    private $hnasgor;
    private $hmiyam;
	private $hmigor;
	private $habar;
	
    private static $FactoryrEven = 'rest';
    function __construct() {
        
            $this->hnasgor = 'Rp.25.000';
			$this->hmigor = 'Rp.15.000';
			$this->hmiyam = 'Rp. 30.000';
            $this->habar  = 'Rp. 50.000';     
    }
    function gethnasgor() {return $this->hnasgor;}
}

class minum extends Factoryran {

	private $hjj;
	private $hjm;
	Private $het; 
    function __construct() {
			$this->hjm = 'Rp. 10.000';
			$this->hjj = 'Rp. 10.000';
			$this->het = 'Rp. 7.000';      
    }
	function gethjj() {return $this->hjj;}  
}

writeln('Pembayaran');
  writeln('');

  writeln('Makanan');
  $makan = new Smmakan;
  makan($makan);
  writeln('');

  writeln('Minuman');
  $minum = new mminum;
  minum($minum);
  writeln('');


  function makan($makan) {
    $phpmkn = $makan->resort("mkn");
    writeln('Nasi Goreng : '.$phpmkn->gethnasgor());
    
 
  }
  
	function minum($minum){
	$phpmnm = $minum->resort("minum");
    
    writeln('Jus Jeruk : '.$phpmnm->gethjj());
	
  }

  function writeln($line_in) {
    echo $line_in."<br/>";
  }
?>
