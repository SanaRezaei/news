<?php 

class Post {
    private $id;
    private $titre;
    private $contenu;   

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        if ($id < 0){
            echo "id must be greater than or equal to 0";
            return $this;
        }
        $this->id = $id;
        return $this;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        if (is_string($titre)){
            echo "title must be string";
            return $this;
        }
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        if (is_string($contenu)){
            echo "content must be string";
            return $this;
        }
        $this->contenu = $contenu;
        return $this;
    }

    public function hydrate(array $donnees){
        foreach ($donnees as $cle => $valeur){
            $methode = 'set'.ucfirst($cle);
            if (method_exists($this, $methode)){
                $this->$methode($valeur);
            }
        }
    }

    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
}


?>