<?php

abstract class FrontCommand {
    
    protected function forward() {
        extract($_POST);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url());
        curl_setopt($ch, CURLOPT_POST, count($this->fields()));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->fieldsString($this->fields()));
        curl_exec($ch);
        curl_close($ch);
    }
    
    protected abstract function url();
    
    protected abstract function fields();
    
    private function fieldsString($fields) {
        $fields_string = "";
        if (!is_array($fields)) return "";
        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');
        return $fields_string;
    }
}
