<?php 
$conn = new mysqli('localhost', 'root', '1234', 'dbname');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM categories ORDER BY category_name");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {?>
    <div class="col-lg-3 product-category">
    	<div class="card">
            <img class="card-img-top" id="image" value="<?php echo $row['category_name']?>" src="images/category/<?php echo $row['categoryimage'] ?>" alt="Card image cap" onclick="window.location.href = 'subcategory.html'">
    		<div class="card-block">
    			<h4 class="card-title"><?php echo $row['category_name']?></h4>
    			<p class="card-text"><?php echo $row['description'] ?></p>
            </div>
        </div>
    </div>
<?php }
} 
?>
 
