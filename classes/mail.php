<?php
class Mail
{
  public $to = '';
  public $subject = '';
  public $message = '';

  public function setTo(string $to) {
      $this->to = $to;
  }
    public function setSubject(string $subject) {
        $this->to = $subject;
    }
    public function setMessage(string $message) {
        $this->to = $message;
    }

    public function getTo():string {
      return $this->to;
    }
    public function getSubject():string {
        return $this->subject;
    }
    public function getMessage():string {
        return $this->message;
    }
}