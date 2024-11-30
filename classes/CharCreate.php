<?php

class CharCreate
{
    private function insertChar($file, $data)
    {
        put($file, $data, "a");
    }

    private function isEmptySubmit()
    {
        if (isset($this->name)) {
            return false;
        } else return true;
    }

    public function spawn($file, $data)
    {
        //error handles
        if ($this->isEmptySubmit()) {
            header("location: index.php");
            die();
        }

        //if no error
        $this->insertChar($file, $data);
    }
}
