<?php

class Impot
{
     /**
      * Revenus annuels
      * @var float
      */
    private $revenus;

     /**
      * Nom 
      * @var string
      */
    private $nom; 
    
    const TAUX15 = 0.15;
    const TAUX20 = 0.2;

    
    /**
     * Summary of __construct
     * @param int $revenus
     * 
     * @param string $nom
     */
    public function __construct(float $revenus, string $nom)
    {
        $this->revenus = $revenus;
        $this->nom = $nom;
    }

	/**
	 * @return mixed
	 */
	public function getRevenus() {
		return $this->revenus;
	}
	
	/**
	 * @param mixed $revenus 
	 * @return self
	 */
	public function setRevenus($revenus): self {
		$this->revenus = $revenus;
		return $this;
	}

	/**
	 * Montant des impôts après calcul
	 * @return string
	 */
	public function getnom() {
		return $this->nom;
	}

    /**
     * Get nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom
     *
     * @param  string  $nom  Nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function CalculImpot($impots)
    {
        if($this->revenus < 15000) {
            $impots = $this->revenus * self::TAUX15;
            return $impots;
        } elseif ($this->revenus >= 15000) {
            $impots = $this->revenus * self::TAUX20;
            return $impots;
        }
    }

    public function AfficheImpot($nom, $impots)
    {
        
    }
}