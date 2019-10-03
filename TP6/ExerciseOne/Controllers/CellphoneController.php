<?php
    namespace Controllers;
    use DAO\CellphoneDAO as CellphoneDAO;
    use DAO\ICellphoneDAO as ICellphoneDAO;

    class CellphoneController
    {
        private $dao;

        public function Index()
        {
          $dao=new CellphoneDAO();
        }

        public function GetAllCellphones(){
            $cellphones=$dao->GetAll();
            return $dao;
        }

        public function AddCellphone($cellphone){
            $dao->Add($cellphone);
        }

        public function GetCellphoneById($cellphoneId){
            $cellphone= $dao->GetById($cellphoneId);
            return $cellphone;
        }

        public function ShowAddCellphones()
        {
            require_once(VIEWS_PATH."add-cellphone.php");
        }

        public function ShowCellphoneList()
        {
            require_once(VIEWS_PATH."cellphone-list.php");
        }




    }
?>