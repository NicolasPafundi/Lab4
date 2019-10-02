<?php
namespace Models;
    class Cellphone{
        private $Id;
        private $Code;
        private $Brand;
        private $Model;
        private $Price;

      



        public function getId()
        {
                return $this->Id;
        }


        public function setId($Id)
        {
                $this->Id = $Id;

        }

        public function getCode()
        {
                return $this->Code;
        }


        public function setCode($Code)
        {
                $this->Code = $Code;
        }


        public function getBrand()
        {
                return $this->Brand;
        }

 
        public function setBrand($Brand)
        {
                $this->Brand = $Brand;

        }

        public function getModel()
        {
                return $this->Model;
        }


        public function setModel($Model)
        {
                $this->Model = $Model;

                return $this;
        }

        public function getPrice()
        {
                return $this->Price;
        }

        public function setPrice($Price)
        {
                $this->Price = $Price;

        }
    }



?>