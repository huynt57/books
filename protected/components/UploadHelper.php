<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UploadHelper {

    public static function getUrlUpload($obj) {
        $ext_arr = array('png', 'jpg', 'jpeg', 'bmp');
        $name = StringHelper::filterString($_FILES['file']['name']);
        $storeFolder = Yii::getPathOfAlias('webroot') . 'uploads/';
        $tempFile = $_FILES['file']['tmp_name'];
        $targetFile = $storeFolder . $name;
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        if (in_array($ext, $ext_arr)) {
            if (move_uploaded_file($tempFile, $targetFile)) {
                return $targetFile;
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
    }

}
