<?php
    namespace DAO;
    use Models\Cellphone as Cellphone;
    interface IUserRepository
    {
        function Add(Cellphone $newCellphone);
        function GetAll();
        function GetByCellphoneId($CellphoneId);
    }
?>