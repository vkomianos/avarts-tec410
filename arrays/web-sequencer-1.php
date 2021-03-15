<!DOCTYPE html>
<html>

<head>
	<title>
		TEC410 Web Sequencer
	</title>
</head>
<body onload="">

<?php

	$samples = array();
    $samples[0] = "https://freesound.org/data/previews/107/107086_1407525-lq.mp3";
    $samples[1] = "https://freesound.org/data/previews/250/250537_1676145-lq.mp3";
    $samples[2] = "https://freesound.org/data/previews/459/459522_8946488-lq.mp3";
	

	$sequence = [];
	$sequence = array(1, 2, 2, 0);
	array_push($sequence, 2, 1, 2, 0);
	
	?>
	<button onclick="loopCounter = 0; playSequence(); ">Play sequence of <?php echo count($sequence); ?>&nbspsamples</button> </br>
	
	<ol>
	<?php
    for ($i = 0; $i < count($sequence); $i++)
    {
    	?>
			<li>
				<audio id="<?php echo $i; ?>" class="audio" controls onended="playNext();">
					<source src="<?php echo $samples[$sequence[$i]]; ?>" type="audio/mpeg">
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
