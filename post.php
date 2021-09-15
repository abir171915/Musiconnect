<?php
    include('db.php');
    class Post
    {
        private $error="";
       public function create_post($data){
           if(!empty($data['post'])){
                $post= addslashes($data['post']);
                $id= $_SESSION['m_id'];
                $postid= $this->create_postid();
                $sql="insert into posts (postid,m_id,post) values ('$postid','$id','$post')";
                $res=mysqli_query($con,$sql)
           }
           else{
                $this->error .="Please type something! <br> ";
           }
           return $this->error;
       } 
       private function create_postid(){
           $lenght= rand(4,19);
           $number = "";
           for($i=0; $i < $lenght; $i++){
               $new_rand= rand(0,9);
               $number = $number . $new_rand;
           }
           return $number;
       }
    }
?>