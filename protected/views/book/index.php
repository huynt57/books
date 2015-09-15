<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3>
                    Book Management
                </h3>
            </div>
            <div class="box-content nopadding">
                <table class="table table-hover table-nomargin table-bordered usertable">
                    <thead>
                        <tr class='thefilter'>
<!--                            <th class='with-checkbox'></th>-->
                            <th>ID</th>
                            <th>Name</th>
                            <th class='hidden-350'>Author</th>
                            <th class='hidden-1024'>Publisher</th>
                            <th class='hidden-480'>Year</th>
                            <th class='hidden-480'>Description</th>
                            <th class='hidden-480'>Status</th>
                            <th class='hidden-480'>Action</th>
                        </tr>
                        <tr>
<!--                            <th class='with-checkbox'><input type="checkbox" name="check_all" id="check_all"></th>-->
                            <th>ID</th>
                            <th>Name</th>
                            <th class='hidden-350'>Author</th>
                            <th class='hidden-1024'>Publisher</th>
                            <th class='hidden-480'>Year</th>
                            <th class='hidden-480'>Description</th>
                            <th class='hidden-480'>Status</th>
                            <th class='hidden-480'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book): ?>
                            <tr>
    <!--                            <td class="with-checkbox">
                                    <input type="checkbox" name="check" value="1">
                                </td>-->
                                <td><?php echo $book->id ?></td>
                                <td><?php echo $book->book_name ?></td>
                                <td><?php echo $book->book_author ?></td>
                                <td><?php echo $book->book_publisher ?></td>
                                <td><?php echo $book->book_year ?></td>
                                <td><?php echo $book->book_description ?></td>
                                <td class='hidden-350'><span class="label label-satgreen"><?php echo $book->status ?></span></td>
                                <td class='hidden-480'>
                                    <a href="#" class="btn" rel="tooltip" title="View"><i class="icon-search"></i></a>
                                    <a href="#" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                    <a href="#" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>