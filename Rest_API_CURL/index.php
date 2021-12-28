<?php 
//https://docs.github.com/en/rest/guides/getting-started-with-the-rest-api

$ch=require_once("init_curl.php");
curl_setopt($ch,CURLOPT_URL,"https://api.github.com/user/repos");
$response=curl_exec($ch);
curl_close($ch);
$data=json_decode($response,true);

//show repository
// foreach($data as $repository){
// echo $repository["full_name"]." ".
// $repository["name"]." ".
// $repository["description"]."<br> "; //if error use this function-> htmlspecialchars() 
     
// }

?>
<?php require_once("header.html");?>

<h1>My Repository </h1>

<!-- <button class="warning small">ok</button> -->
<button style="width: 40%; "><a style="color: white;" href="new.php">Create New repository</a></button>

<table>
 <thead>
  <tr>
   <th>Name</th>
  </tr>
 </thead>
 <tbody>
  <?php  foreach($data as $repository): ?>
  <tr>

   <td>
    <a href="show.php?full_name=<?= $repository["full_name"] ?>">
     <?= $repository["name"] ?>
    </a>
   </td>

  </tr>
  <?php endforeach; ?>
 </tbody>
</table>

<?php require_once("footer.html");?>