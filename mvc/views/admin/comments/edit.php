<h1>Editing Category</h1>
<?php
if (isset($_SESSION["email"]) && $_SESSION["role"] == "customer") {
  echo '<script type = "text/javascript">
  window.location.href = "http://localhost:8081/LTWEB221/"</script>';
}
?>
<?php 
    require_once "../LTWEB221/mvc/views/admin/categories/form_category.php";
?>
<a href="http://localhost:8081/LTWEB221/Category/index">Back</a>
