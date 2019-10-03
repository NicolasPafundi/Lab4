<?php
    namespace DAO;
    use Models\Cellphone as Cellphone;
    interface ICellphoneDAO
    {
        function Add(Cellphone $newCellphone);
        function GetAll();
        function GetByCellphoneId($CellphoneId);
    }
?>