<!DOCTYPE html>
<html>

<head>
	<title>
		TEC410 Web Sequencer
	</title>
</head>
<body onload="">

<?php

	

	$piano = array(
					"Bb" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8967/4329625759280ee6fa2705f340c1979f3f8054fa/mp3/68439-piano-bb-wav.mp3", 
					
					"F#" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8966/d260eaaf648c7857b28d7e45d35d3d6467b70a2b/mp3/68445-piano-f-wav.mp3",
					
					"Eb" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8965/1b22caa7eb732c94a1ec0305c05e307487934143/mp3/68444-piano-eb-wav.mp3",
					
					"C#" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8964/216fa22d8f5189bc92a710ba9459746ee29e0869/mp3/68440-piano-c-wav.mp3",
					
					"G#" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8963/8c93434b9dc2534bd2621a156b220a92b8f091dd/mp3/68447-piano-g-wav.mp3",
					
					"B" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8962/1debf4099650a15fc0f4eed6ba65bd6dbb377f48/mp3/68438-piano-b-wav.mp3",
					
					"F" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8961/f249f96c06a9a79625710edd6fe5364d5083fb2a/mp3/68446-piano-f-wav.mp3",
					
					"A" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8960/75841c44f04ce6dcabfadbbc9e96ac8ea2641e0c/mp3/68437-piano-a-wav.mp3",
					
					"E" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8959/fd2d518d376d8b94ff5e04f21b74fd8d38310c53/mp3/68443-piano-e-wav.mp3",
					
					"D" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8958/e35aeffa263ab248ad3a2b11be8a2174c9640fe6/mp3/68442-piano-d-wav.mp3",
					
					"C" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8957/1c65ffb5e5aca56098e9b95cc041e74b92fea33a/mp3/68441-piano-c-wav.mp3",
					
					"G" => "https://d9olupt5igjta.cloudfront.net/samples/sample_files/8956/131310c2ee3db39e11b59ea150d6a78f75db6e46/mp3/68448-piano-g-wav.mp3"
					);

	$sequence = [];
	//$sequence = array("Bb", "F#", "Eb" , "C#", "G#", "B", "F", "A", "E", "D", "C", "G");
	//array_push($sequence, 4, 3);
	$sequence = array("F", "A", "E", "A", "D",  "C",  "B", "A");
	
	?>
	<button onclick="loopCounter = 0; playSequence(); ">Play sequence of <?php echo count($sequence); ?>&nbsp piano keys</button> </br>
	
	<ol>
	<?php
    for ($i = 0; $i < count($sequence); $i++)
    {
    	?>
			<li>
				<audio id="<?php echo $i; ?>" class="audio" controls onended="playNext();">
					<source src="<?php echo $piano[$sequence[$i]]; ?>" type="audio/mpeg">
					"Cannot play audio file!"
				</audio>
			</li>
        <?php
    }
?> 
</ol>
<script>

//var sequence = new Array();;
var loopCounter = 0;

function playSequence()
{
	
	samplePlaying = document.getElementsByTagName("audio")[loopCounter];
	samplePlaying.play();
	console.log("Play " + document.getElementsByTagName("audio")[loopCounter].id);
	loopCounter++;
}

function playNext()
{
	playSequence();
}

</script>

</body>
</html>
