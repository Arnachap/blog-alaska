<?php

class Message extends Database
{
    public static function getMessages()
    {
        $db = self::dbConnect();
        $allMessages = $db->query('SELECT id, username, email, message, message_date, DATE_FORMAT(message_date, \'%d %M\') AS message_date_format, viewed FROM messages ORDER BY message_date DESC');
        $messages = [];
        
        foreach ($allMessages as $message)
        {
            $messages[] = new MessageObject($message);
        }
        
        return $messages;
    }

    public static function postMessage(array $messageData)
    {
        $db = self::dbConnect();
        $message = $db->prepare('INSERT INTO messages(username, email, message, message_date) VALUES(?, ?, ?, NOW())');

        return $message->execute($messageData);
    }

    public static function deleteMessage($messageId)
    {
        $db = self::dbConnect();
        $deleteMessage = $db->prepare('DELETE FROM messages WHERE id = ?');

        return $deleteMessage->execute(array($messageId));
    }

    public static function viewMessage($messageId)
    {
        $db = self::dbConnect();
        $viewMessage = $db->prepare('UPDATE messages SET viewed = true WHERE id = ?');

        return $viewMessage->execute(array($messageId));
    }
}