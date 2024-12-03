<?php

class CharCreate
{
    public static function insertChar($file, $data)
    {
        $array = get_object_vars($data);
        $insert[] = $array;
        put($file, $insert, "a");
        header("location: index.php");
    }

    public static function isEmptySubmit($data)
    {
        if (isset($data->name)) {
            return false;
        } else return true;
    }

    public static function spawn($file, $data)
    {
        if (self::isEmptySubmit($data)) {
            header("location: index.php");
            die();
        }
        self::insertChar($file, $data);
    }
}
