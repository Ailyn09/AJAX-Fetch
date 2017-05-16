<?php 
$conn = new mysqli('localhost', 'root', '1234', 'dbname');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}

if (isset($_POST['catid'])) {
    $result = $conn->query("SELECT * FROM subcategories WHERE categoryid='{$_POST['catid']}' ORDER BY name");
    if ($result->num_rows > 0) {
    	while ($row = $result->fetch_assoc()) {?>
        <div class="col-lg-3 product-category">
        	<div class="card">
        		<img class="card-img-top" src="images/subcategory/<?php echo $row['subcategoryimages'] ?>" alt="Card image cap" onclick="window.location.href = 'products.html'">
        		<div class="card-block">
        			<h4 class="card-title"><?php echo $row['name'] ?></h4>
        			<p class="card-text"><?php echo $row['description'] ?></p>
        		</div>
        	</div>
        </div>
    <?php 	}
    } 
}
?>
