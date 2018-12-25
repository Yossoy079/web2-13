<?php

$post_test = $_POST['test'];
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>test.php</title>
<meta charset="utf-8">
</head>
<script type="text/javascript" src="ncmb.min.js" charset="utf-8"></script>
  <script>
    var ncmb = new NCMB("a0009d03990bd9974dd5096ec1d87c512c495fec370da26fdf3cfd794cbcec15", "4e1ccf52ed4da22ae6cab29271859458d9f685342a1f98a71df5c6126b5d5bed");
    
    var TestClass = ncmb.DataStore("TestClass");
    
    var testClass = new TestClass();
    testClass.set("message", echo $post_test.);
    testClass.save()
      .then(function(){
        // 保存に成功した場合の処理
      })
      .catch(function(err){
        // 保存に失敗した場合の処理
      });
  </script>
</html>
