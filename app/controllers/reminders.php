<?php

//reminders controller

class Reminders extends Controller{

  public function index(){
    // echo "Reminders";
    $reminder = $this->model('Reminder');
    $list_of_reminders = $reminder->get_all_reminders();

    // code for debug
    // print_r($list_of_reminders);
    // die;
    
    $this->view('reminders/index', ['reminders' => $list_of_reminders]);
  }

  public function create(){
    $reminder = $this->model('Reminder');
    $list_of_reminders = $reminder->get_all_reminders();
    $this->view('reminders/create');
  }
}

  