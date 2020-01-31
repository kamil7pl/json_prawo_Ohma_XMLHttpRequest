
    <?php
	if(isset($_GET['natezenie']) && isset($_GET['napiecie'])){
	$natezenie=filter_var($_GET['natezenie'], FILTER_SANITIZE_STRING);//filter
	$napiecie=filter_var($_GET['napiecie'], FILTER_SANITIZE_STRING);//filter
	if($natezenie>0 && $napiecie>0){
	$opor=$napiecie/$natezenie;
	$jsonOpor=json_encode($opor);
	echo $jsonOpor;
	}
	else echo "Proszę podać natężenie większe od zera (dodatnie). Tak samo dla napięcia.";
	}
	?>

