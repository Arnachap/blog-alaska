<?php

class MessageObject
{
    private $_id;
    private $_username;
    private $_email;
    private $_message;
    private $_messageDate;
    private $_viewed;

    public function __construct(array $message)
    {
        $this->setId($message['id']);
        $this->setUsername($message['username']);
        $this->setEmail($message['email']);
        $this->setMessage($message['message']);
        $this->setMessageDate($message['message_date_format']);
        $this->setViewed($message['viewed']);
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function setUsername($username)
    {
        $this->_username = $username;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function getMessage()
    {
        return $this->_message;
    }

    public function setMessage($message)
    {
        $this->_message = $message;
    }

    public function getMessageDate()
    {
        return $this->_messageDate;
    }

    public function setMessageDate($messageDate)
    {
        $this->_messageDate = $messageDate;
    }

    public function getViewed()
    {
        return $this->_viewed;
    }

    public function setViewed($viewed)
    {
        $this->_viewed = $viewed;
    }
}