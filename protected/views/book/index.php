<div class="row-fluid">
    <div class="span12">
        <h3>Book Management</h3>
        <div class="box box-color box-bordered">

            <button class="btn btn-primary" style="margin-top: 10px; margin-bottom: 10px">Add book</button>
            <div class="box-content nopadding" ng-app="" ng-controller="BookController">

                <table class="table table-hover table-nomargin table-bordered dataTable">

                    <thead>
                        <tr class='thefilter'>
<!--                            <th class='with-checkbox'></th>-->
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
<!--                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Year</th>-->
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
<!--                        <tr>
                            <th class='with-checkbox'><input type="checkbox" name="check_all" id="check_all"></th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Year</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>-->
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book): ?>
                            <tr>
    <!--                            <td class="with-checkbox">
                                    <input type="checkbox" name="check" value="1">
                                </td>-->
                                <td><?php echo $book->id ?></td>
                                <td><?php echo $book->book_name ?></td>
                                <td><img src="<?php echo $book->book_image ?>" height="100" width="100" /></td>
    <!--                                <td><?php //echo $book->book_author    ?></td>
                                <td><?php //echo $book->book_publisher    ?></td>
                                <td><?php //echo $book->book_year    ?></td>-->
                                <td><?php echo $book->book_description ?></td>
                                <td class='hidden-350'>
                                    <?php if ($book->status == 1): ?>
                                        <span class="label label-satgreen"> Active
                                        </span>
                                    <?php endif; ?>
                                    <?php if ($book->status != 1): ?>
                                        <span class="label label-red"> Inactive
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class='hidden-480'>
                                    <a href="#" class="btn" rel="tooltip" title="View"><i class="icon-search" ng-click="detailBook(<?php echo $book->id ?>)"></i></a>
                                    <a href="#" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                    <a href="#" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php $this->renderPartial('detail') ?>
                <?php $this->renderPartial('add') ?>
            </div>
        </div>
    </div>
</div>

<script>
    function BookController($http, $scope) {
        $scope.detail = {};
        $scope.detailBook = function (id) {
            $("#modal-detail").modal("show");
            $("#loading").show();
//         $("#modal-label").hide();
//         $("#des").hide();
//         $('#price').hide();
//         $('#image').hide();
            $http({
                method: 'POST',
                url: '<?php echo Yii::app()->createAbsoluteUrl('book/detailBook') ?>',
                data: $.param({
                    book_id: id
                }),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                },
            }).success(function (response) {
                $("#loading").hide();
//             $("#modal-label").show();
//             $("#des").show();
//             $('#price').show();
//             $('#image').show();
                $scope.detail = response['data'];

            }).error(function (response) {
                // console.log(response);
            });
        }



    }

</script>