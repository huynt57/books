<?php

Yii::import('application.models._base.BaseBooks');

class Books extends BaseBooks {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function listBookWithLimitOffset($limit, $offset) {
        $criteria = new CDbCriteria;
        $criteria->limit = $limit;
        $criteria->offset = $offset;
        $result = Books::model()->findAll($criteria);
        return $result;
    }

    public function addBook($book_name, $book_author, $book_year, $book_publisher, $book_image) {
        $model = new Books;
        $model->book_name = $book_name;
        $model->book_author = $book_author;
        $model->book_year = $book_year;
        $model->book_publisher = $book_publisher;
        $model->book_image = $book_image;
        if ($model->save(FALSE)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateBook($book_id, $book_name, $book_author, $book_year, $book_publisher, $book_image) {
        $model = Books::model()->findByAttributes(array('id' => $book_id));
        if ($model) {
            $model->book_name = $book_name;
            $model->book_author = $book_author;
            $model->book_year = $book_year;
            $model->book_publisher = $book_publisher;
            $model->book_image = $book_image;
            if ($model->save(FALSE)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

}
