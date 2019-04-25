<?php
    namespace resources\entities;

    class AdminEntity
    {
        private $id;
        private $name;
        private $lastName;
        private $password;
        private $bornDate;
        private $rg;
        private $job;

        public function __construct()
        {
            
        }
        
        public function setId($value)
        {
            $this->id = $value;
        }
        public function getId()
        {
            return $this->id;
        }

        public function setEmail($value)
        {
            $this->email = $value;
        }
        public function getEmail()
        {
            return $this->email;
        }
        
        public function setPassword($value)
        {
            $this->password = $value;
        }
        public function getPassword()
        {
            return $this->password;
        }
        
        public function setName($value)
        {
            $this->name = $value;
        }
        public function getName()
        {
            return $this->name;
        }
        
        public function setLastName($value)
        {
            $this->lastName = $value;
        }
        public function getLastName()
        {
            return $this->lastName;
        }

        public function setJob($value)
        {
            $this->job = $value;
        }
        public function getJob()
        {
            return $this->job;
        }
        
        public function setBornDate($value)
        {
            $this->bornDate = $value;
        }
        public function getBornDate()
        {
            return $this->bornDate;
        }

        public function setRg($value)
        {
            $this->rg = $value;
        }
        public function getRg()
        {
            return $this->rg;
        }
    }