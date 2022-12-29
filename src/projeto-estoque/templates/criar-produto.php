<?php include TEMPLATES . '/includes/header.php' ?>

<h1>Create Product</h1>

<form action="<?php echo HOME; ?>?pagina=/produto/salvar" method="POST" enctype="multipart/form-data">
    <div>
        <label for="name-product">Product's name:</label>
        <input type="text" name="name-product" id="name-product" placeholder="Product's name">
    </div>
    <div>
        <label for="description">Product Description:</label>
        <input type="text" name="description" id="description" placeholder="Product Description">
    </div>
    <div>
        <label for="about">About Product:</label>
        <textarea name="about" id="about" placeholder="About Product"></textarea>
    </div>
    <div>
        <label for="value">Product Value:</label>
        <input type="text" name="value" id="value" placeholder="Product Value">
    </div>
    <div>
        <label for="quantity">Stock Quantity:</label>
        <input type="number" name="quantity" id="quantity" step="10">
    </div>
    <div>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <div>
        <label for="photos">Product Photos:</label>
        <input type="file" name="photos[]" id="photos" multiple>
    </div>

    <button type="submit">Submit Product</button>
</form>

<?php include TEMPLATES . '/includes/footer.php' ?>