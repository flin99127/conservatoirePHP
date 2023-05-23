<?php

class Prof
{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $tel;
    private string $mail;
    private string $adresse;
    private string $instrument;
    private int $salaire;

    public static function afficherTous()
    {
        $req = MonPdo::getInstance() -> prepare("SELECT * FROM vprof");
        $req -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'prof');
        $req -> execute();
        $lesResultats = $req -> fetchAll();

        return $lesResultats;
    }

	/**
	 * @return 
	 */
	public function getId(): int {
		return $this->id;
	}
	
	/**
	 * @param  $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getNom(): string {
		return $this->nom;
	}
	
	/**
	 * @param  $nom 
	 * @return self
	 */
	public function setNom(string $nom): self {
		$this->nom = $nom;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getPrenom(): string {
		return $this->prenom;
	}
	
	/**
	 * @param  $prenom 
	 * @return self
	 */
	public function setPrenom(string $prenom): self {
		$this->prenom = $prenom;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getTel(): string {
		return $this->tel;
	}
	
	/**
	 * @param  $tel 
	 * @return self
	 */
	public function setTel(string $tel): self {
		$this->tel = $tel;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getMail(): string {
		return $this->mail;
	}
	
	/**
	 * @param  $mail 
	 * @return self
	 */
	public function setMail(string $mail): self {
		$this->mail = $mail;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getAdresse(): string {
		return $this->adresse;
	}
	
	/**
	 * @param  $adresse 
	 * @return self
	 */
	public function setAdresse(string $adresse): self {
		$this->adresse = $adresse;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getInstrument(): string {
		return $this->instrument;
	}
	
	/**
	 * @param  $instrument 
	 * @return self
	 */
	public function setInstrument(string $instrument): self {
		$this->instrument = $instrument;
		return $this;
	}

	/**
	 * @return double
	 */
	public function getSalaire(): int {
		return $this->salaire;
	}
	
	/**
	 * @param double $salaire 
	 * @return self
	 */
	public function setSalaire(int $salaire): self {
		$this->salaire = $salaire;
		return $this;
	}
}