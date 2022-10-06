
<div class="border p-5">
    <h2 class="text-center">Category Form</h2>
    <form action="./store.php" method="post">
        <div class="mb-3">
            <label for="category_name" class="form-label">Category Name:</label>
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Category name...">
        </div>
        <div class="mb-3">
            <label for="category_discription" class="form-label">Category Description:</label>
            <textarea class="form-control" name="category_discription" id="category_discription" cols="30" rows="4" placeholder="Enter Category Discription..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>