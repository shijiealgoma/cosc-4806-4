<?php

//reminders controller

class Reminders extends Controller{

  public function index(){
    echo "Reminders";
    $reminder = $this->model('Reminder');
    $list_of_reminders = $reminder->get_all_reminders();
    print_r($list_of_reminders);
    die;
    $this->view('reminders/index');
  }

  //get reminders
  public function getReminders(){
    
  }
}

  