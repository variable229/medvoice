 <?php
   header("Access-Control-Allow-Origin: *");

   // connect to mongodb
   $conn = new MongoClient();
   $db = $conn->test;
   $collection = $db->interns;

   echo "[";
   $cursor = $collection->find();
   foreach ($cursor as $document) {
//	   var_dump( $document );
      echo "{\"Name\":\"" . $document["Name"] . "\",";
	  echo "\"Email\":\"" . $document["Email"] . "\",";
      echo "\"Mobile\":\"" . $document["Mobile"] . "\"},";
   }

   echo "{\"Name\":\"" . "\",";
   echo "\"Email\":\"" . "\",";
   echo "\"Mobile\":\"" . "\"}";
   echo "]";

?>
