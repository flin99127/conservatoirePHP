<?php

class Admin
{
    private $login;
    private $mdp;

	/**
	 * @return mixed
	 */
	public function getLogin() {
		return $this->login;
	}
	
	/**
	 * @param mixed $login 
	 * @return self
	 */
	public function setLogin($login): self {
		$this->login = $login;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMdp() {
		return $this->mdp;
	}
	
	/**
	 * @param mixed $mdp 
	 * @return self
	 */
	public function setMdp($mdp): self {
		$this->mdp = $mdp;
		return $this;
	}
	public static function verifier($login, $mdp)
	{
		$req = MonPdo::getInstance()->prepare("select * from co where login =:login and mdp=:mdp");
		$req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'admin');
		$req->bindParam('login', $login);
		$req->bindParam('mdp', $mdp);
		$req->execute();
		$lesResultats = $req->fetchAll();
		$nb_lignes = count($lesResultats);
		
		if($nb_lignes == 0)
		{
			$req = false;
		}
		else
		{
			$req = true;
		}
		return $req;
	}
}