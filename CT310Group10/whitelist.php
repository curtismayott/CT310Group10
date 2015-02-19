<!DOCTYPE html>

<!--
edits user bio and is stored in a text file

This may be included into page1 and page2 later


Todo: 

-Strip html tags when inputing new text
-Only allow 192.82 ip addresses to edit
-edit button?


-->
<head>Textbox changing</head><br>

<body>
	<?php
		//checking ip address
		$edit = 0;
		$ip = $_SERVER["REMOTE_ADDR"];
		$ipArray = explode(".",$ip);
		print_r($ipArray);
		
		
		if($ipArray[0] = 192){
			echo $ipArray[0];
			if($ipArray[1] = 82){
				echo $ipArray[1];
				$edit = 1;
				//if edit == 1, then can edit...
			}
		}
	//reading in file to put in text box	
	$oneText = "UserOneBio.txt";
	if(!file_exists($oneText)) touch($oneText); //if file doesn't exit make one
	$oneOpen = fopen($oneText,'r'); 
	if(filesize($oneText) > 0){
		$fileContents = fread($oneOpen,filesize($oneText));
	}else{
		$fileContents = "";
		//file is empty must still define fileContents
	}
	fclose($oneOpen);
	
	//updating bio file
	if (isset($_POST['update'])) {//update button has been hit
	$content = $_POST['text_box'];
	$oneText = "UserOneBio.txt";
	$oneWrite = fopen($oneText,'w') or die("file not found");
	$items = $content;
	//used to fill text
	//fwrite($oneWrite,"This contents is about user one and their life");
	fwrite($oneWrite,$items);
	fclose($oneWrite);
	}
	?>
   <p>TextBox</p>
   <form method="post" action="whitelist.php">
      Bio: <br><textarea name="text_box" rows="5" cols="40" placeholder="Enter Bio Info Here"><?php echo $fileContents; ?></textarea><br/>
     <input type="submit" value="Update" name="update">
   </form>
</body>
