<?php




class comment
{




    private  $info = array(
        "id"=>"id",
        "comment"=>"comment",
        "state"=>"state",
        "idUser"=>"idUser",
        "idPub"=>"idPub"
    );

    function __construct($array)
    {
        foreach ($this->info as $key => $value)
            $this->info[$key] = $array[$key];

    }


    public function getId()
    {
        return $this->info['id'];
    }


    public function getComment()
    {
        return $this->info['comment'];
    }

    public function getState()
    {
        return $this->info['state'];
    }

    public function getIdUser()
    {
        return $this->info['idUser'];
    }

    public function getIdPub()
    {
        return $this->info['idPub'];
    }
}