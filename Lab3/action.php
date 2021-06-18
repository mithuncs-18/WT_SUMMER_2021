<?php include "control/process.php"; ?>
<?php
   	

	   //Get form data
	   $formdata = array(
	      'fname'=> $_POST["fname"],
	      'email'=>$_POST["email"],
	      'password'=> $_POST["pass"],
          'comm'=> $_POST["comm"],
          'gender'=> $_POST["gender"],
          'Singing'=> $_POST["sing"],
          'Dancing'=> $_POST["dance"],
          'Reading'=> $_POST["read"],
          'Fileupload' => $target_file,
          

	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    

	 foreach($mydata as $myobject)
	 {
		foreach($myobject as $key=>$value)
		{
			echo "your ".$key." is ".$value."<br>";
		} 
	}
	
?>