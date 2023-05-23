<?php

class Eleve
{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $tel;
    private string $mail;
    private string $adresse;
    private int $niveau;
    private int $bourse;
    public static function insertEleve(int $id, int $niveau, int $bourse)
    {
        $req = MonPdo::getInstance() ->prepare("insert into eleve(ideleve, niveau, bourse) values(:id, :niveau, :bourse)");

        $req->bindParam('id', $id , PDO::PARAM_INT);
        $req->bindParam('niveau', $niveau, PDO::PARAM_INT);
        $req->bindParam('bourse', $bourse, PDO::PARAM_INT);
		$req -> execute();
    }
    public static function afficherTous()
    {
        $req = MonPdo::getInstance() -> prepare("SELECT * FROM veleve");
        $req -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'eleve');
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
	public function getNiveau(): string {
		return $this->niveau;
	}
	
	/**
	 * @param  $niveau 
	 * @return self
	 */
	public function setNiveau(int $niveau): self {
		$this->niveau = $niveau;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getBourse(): string {
		return $this->bourse;
	}
	
	/**
	 * @param  $bourse 
	 * @return self
	 */
	public function setBourse(int $bourse): self {
		$this->bourse = $bourse;
		return $this;
	}
}