<?php

class InsertController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionSample() {
        $json = file_get_contents('E:\xampp\htdocs\books\protected\data\data.json');
        $arr = json_decode($json, true);
        foreach ($arr["Books"] as $item) {
            $model = new Books();
            $model->book_description = $item['Description'];
            $model->book_name = $item['Title'];
            $model->book_image = $item['Image'];
            $model->book_author = 'Anonymous';
            $model->book_publisher = 'It Ebook';
            $model->book_year = 2009;
            $model->created_at = time();
            $model->updated_at = time();
            $model->status = 1;
            $model->save(FALSE);
        }
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
