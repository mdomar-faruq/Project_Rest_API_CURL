<?php 
//https://docs.github.com/en/rest/guides/getting-started-with-the-rest-api

$full_name=$_GET["full_name"];//super global

$ch=require_once("init_curl.php");
curl_setopt($ch,CURLOPT_URL,"https://api.github.com/repos/$full_name");
$response=curl_exec($ch);
curl_close($ch);
$data=json_decode($response,true); 
?>
<?php require_once("header.html");?>

<h2><a href="index.php">BACK</a></h2>
<h1> Repository</h1>

<dl>
 <dt>Name</dt>
 <dd><?= $data["full_name"] ?></dd>
 <dt>Description</dt>
 <dd><?= $data["description"] ?></dd>
</dl>

<!-- edit repository -->
<button style=" width: 100px; background-color: green; display: inline-block"><a style="color: white;"
  href="edit.php?full_name=<?= $data["full_name"] ?>">EDIT</a></button>
<!-- delete repository -->
<form method="post" action="delete.php" style="display: inline-block">
 <input type="hidden" name="full_name" value="<?= $data["full_name"] ?>">
 <button style=" width: 100px;">DELETE</button>
</form>


<?php require_once("footer.html");?>