<?php 
class Client{
    private string $fname;
    private string $lname;
    private string $email;
    private string $password;

    public function __construct($fname,$lname,$email,$password){
        $this->fname=$fname;
        $this->lname=$lname;
        $this->email=$email;
        $this->password=$password;

    }
    public function setFname(string $fname){
        $this->fname=$fname;}
        
        public function setLname(string $lname){
        $this->lname=$lname;}
        
        public function setEmail(string $email){
        $this->email=$email;}
        
        public function setPassword(string $password){
        $this->password=$password;}

        public function getFname(){
            return $this->fname;}
            
            public function getLname(){
                return $this->lname;}
            
            public function getEmail(){
                return $this->email;}
            
            public function getPassword(){
                return $this->password;}



        
}