<?php
if(isset($_POST['search']))
{
 $host="localhost";
 $username="root";
 $password="";
 $databasename="keyword_news";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($keyword_news);

 $search_val=$_POST['search_keywords'];
	
 $results = mysql_query("select * from search where MATCH(title,news, url, keywords) AGAINST('$search_val')");
 while($row=mysql_fetch_array($results))
 {
  echo "<li><a href='https://www.thedailystar.net/".$row['link']."'><span class='title'>".$row['title']."</span><br><span class='desc'>".$row['news']."</span></a></li>";
 }
 exit();
}
?>