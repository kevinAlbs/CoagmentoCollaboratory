<?php
	require_once('../core/Query.class.php');
	
	$newQuery = new Query();
	$ret = $newQuery->setQuery("https://www.google.com/search?q=what+is+the+meaning+of+life&oq=what+is+the+meaning+of+life&aqs=chrome..69i57j5j0l2.4306j0j1&sourceid=chrome&ie=UTF-8");
	$newQuery->setSource("google");
	$newQuery->setUrl("http://google.com");
	$newQuery->setTitle("Query Title");
	$newQuery->setTopResults("Top results");
	if(!$ret){
		echo "Page is not a search engine result";
	}
	
	echo "Inserting a new query into the database <br/>";
	$resultingID = $newQuery->save();
	echo "QueryID: ".$resultingID."<br/><br/>";
	
	echo "Retrieving same query from database using queryID</br>";
	$retrievedQuery = Query::retrieve($resultingID);
	
	if ($retrievedQuery!=NULL)
	{
		echo $retrievedQuery;
	}
	else
		echo "Could not find query";	
?>