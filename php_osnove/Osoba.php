<?php
// https://www.php-fig.org/psr/
// Definicija klase
// Klasa je opisnik objekta
class Osoba
{
    // svojstva klase
    public $ime;
    public $prezime;

    //metode klase
    public function getImePrezime()
    {
        // $this je obraćanje klasi u kojoj se nalazimo
        // znak -> omogućuje pristup svojtvima i metodama na klasi/objektu
        return $this->ime . ' ' . $this->prezime;
    }

}


// učahurivanje
class Smjer
{
    // privatno svojstvo
    private $naziv;

    // javne get set metode
    public function getNaziv()
    {
        return $this->naziv;
    }

    public function setNaziv($naziv)
    {
        $this->naziv=$naziv;
    }


    public function getAkronim()
    {

        $djelovi = explode(' ',$this->naziv);
        elog($djelovi);
        $akronim='';
        foreach($djelovi as $dio){
            $akronim .= mb_strtoupper(mb_substr($dio,0,1));
            elog($akronim);
        }
        return $akronim;
    }
}


//princip nasljeđivanje
class Entitet
{
    private $id;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
    }
    
}

class Grupa extends Entitet
{
    private $naziv;

    public function getNaziv(){
		return $this->naziv;
	}

	public function setNaziv($naziv){
		$this->naziv = $naziv;
	}
}

class Operater extends Entitet
{
    private $email;
    
    public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

}
