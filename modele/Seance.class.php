<?php 

class Seance
{
    private int $idProf;
    private int $seance;
    private int $numSeance;
    private string $tranche;
    private string $jour;
    private int $niveau;
    private int $capacite;

    public static function afficherTous()
    {
        $req = MonPdo::getInstance() -> prepare("SELECT * FROM seance");
        $req -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'seance');
        $req -> execute();
        $lesResultats = $req -> fetchAll();

        return $lesResultats;
    }
    public static function afficherProf(int $idprof)
    {
        $req = MonPdo::getInstance() -> prepare("SELECT * FROM seance where idprof = :idprof");
        $req->bindParam('idprof', $idprof , PDO::PARAM_INT);
        $req -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'seance');
        $req -> execute();
        $lesResultats = $req -> fetchAll();

        return $lesResultats;
    }
	public static function afficherCapacite(int $numSeance)
	{
		$req = MonPdo::getInstance() -> prepare("SELECT * FROM seance where numseance = :numseance");
        $req->bindParam('numseance', $numSeance , PDO::PARAM_INT);
        $req -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'seance');
        $req -> execute();
        $lesResultats = $req -> fetchAll();

		foreach($lesResultats as $uneSeance)
		{
			$capacite = $uneSeance->CAPACITE;
		}

        return $capacite;
	}
	public static function afficherNiveau(int $numSeance)
	{
		$req = MonPdo::getInstance() -> prepare("SELECT * FROM seance where numseance = :numseance");
        $req->bindParam('numseance', $numSeance , PDO::PARAM_INT);
        $req -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'seance');
        $req -> execute();
        $lesResultats = $req -> fetchAll();

		foreach($lesResultats as $uneSeance)
		{
			$niveau = $uneSeance->NIVEAU;
		}

        return $niveau;
	}

	/**
	 * @return 
	 */
	public function getIdProf(): int {
		return $this->idProf;
	}

	/**
	 * @return 
	 */
	public function getSeance(): int {
		return $this->seance;
	}

	/**
	 * @return 
	 */
	public function getNumSeance(): int {
		return $this->numSeance;
	}

	/**
	 * @return 
	 */
	public function getTranche(): string {
		return $this->tranche;
	}

	/**
	 * @return 
	 */
	public function getJour(): string {
		return $this->jour;
	}

	/**
	 * @return 
	 */
	public function getNiveau(): int {
		return $this->niveau;
	}

	/**
	 * @return 
	 */
	public function getCapacite(): int {
		return $this->capacite;
	}
}