<?php namespace DAO;
use DAO\ICellphoneDAO as ICellphoneDAO;
use Models\Cellphone as Cellphone;
class CellphoneDAO implements ICellphoneDAO{
    private $CellphoneList = array();
    public function GetAll(){
        $this->RetrieveData();
        return $this->CellphoneList;
    }
    public function GetById($CellphoneId){
        $this->RetrieveData();
        $Cellfounded = null;

        if(!empty($this->CellphoneList)){
            foreach($this->CellphoneList as $Cellphone){
                if($Cellphone->getCellphoneId() == $CellphoneId){
                    $Cellfounded = $Cellphone;
                }
            }
        }
        return $Cellfounded;
    }
    public function Add(Client $newCellphone){

        $this->RetrieveData();

        array_push($this->CellphoneList, $newCellphone);
        $this->SaveData();
    }
    //Json Persistence
    private function SaveData()
    {
        $arrayToEncode = array();
        foreach($this->CellphoneList as $Cellphone)
        {
            $valuesArray["firstName"] = $Cellphone->getFirstName();
            $valuesArray["lastName"] = $Cellphone->getLastName();
            $valuesArray["dni"] = $Cellphone->getDni();
            $valuesArray["email"] = $Cellphone->getEmail();
            $valuesArray["CellphoneId"] = $Cellphone->getCellphoneId();
            $valuesArray["password"] = $Cellphone->getPassword();
            array_push($arrayToEncode, $valuesArray);
        }
        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

        file_put_contents('../Data/Cellphones.json', $jsonContent);
    }
    private function RetrieveData()
    {
        $this->CellphoneList = array();
        if(file_exists('../Data/Cellphones.json'))
        {
            $jsonContent = file_get_contents('../Data/Cellphones.json');
            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
            foreach($arrayToDecode as $valuesArray)
            {
                $Cellphone = new Cellphone();
                $Cellphone->setCellphoneId($valuesArray["CellphoneId"]);
                $Cellphone->setCode($valuesArray["Code"]);
                $Cellphone->setBrand($valuesArray["Brand"]);
                $Cellphone->setModel($valuesArray["Model"]);
                $Cellphone->setPrice($valuesArray["Price"]);
                array_push($this->CellphoneList, $Cellphone);
            }
        }
    }
}
?>