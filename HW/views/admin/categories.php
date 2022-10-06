<?php
include_once "./../../app/class/Category.php";
include_once"./../include/header.php";
$categoryObj=new Category;
$data = $categoryObj->viewCategory();



?>

<table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $sl=0;
                            foreach ($data as $category) { 
                                
                                // print_r($data);

                                ?>
                           
                                <td><?= ++$sl;?></td>
                                <td><?= $category['id']?></td>
                                <td><?= $category['category_name'];?></td>
                                <td><?= $category['description'];?></td>
                                <td>
                                    <a href="./showCategory.php?id=<?=$category['id']?>" class="btn btn-primary">Details</a>
                                    <a href="./editCategory.php?id=<?=$category['id']?>" class="btn btn-success">Edit</a>
                                    <a href="./deleteCategory.php?id=<?=$category['id']?>" onclick="return confirm('Are You Sure Want to Delete ?')" class="btn btn-danger" onclick="gdsfgd">Delete</a>
                                </td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>

<?php
    include_once"./../include/footer.php";
?>