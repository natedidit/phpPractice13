<?php
class ExceptionHandler {
public static function printException (Exception $e)
{
 print 'Uncaught '.get_class($e).', code: ' . $e->getCode() . "<br>Message: " . htmlentities($e->getMessage()) . "\n";
}

public static function handleException(Exception $e)
{
 self::printException($e);
 }
}

set_exception_handler(array("ExceptionHandler", "handleException"));

class NewException extends Exception {}

try {
 throw new NewException("Catch me once", 1);
}
catch (Exception $e) {
 ExceptionHandler::handleException($e);
}

throw new Exception("Catch me twice", 2);
?>