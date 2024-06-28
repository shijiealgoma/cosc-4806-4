<?php

//reminder model
class Reminder{

  public function __construct(){
    // $this->db = db_connect();
  }

  
   public function get_all_reminders(){
     $db = db_connect();
     $statement = $db->prepare("select * from reminders;");
     $statement->execute();
     $rows = $statement->fetchAll(PDO::FETCH_ASSOC);



     return $rows;
   }

  //update reminder
  public function update_reminder($id, $reminder){
    $db = db_connect();
    $statement = $db->prepare("update reminders set reminder = :reminder where id = :id;");
    $statement->bindValue(':reminder', $reminder);
    $statement->bindValue(':id', $id);
    $statement->execute();
  }
  
}