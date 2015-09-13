<?
function extracttags2($content,$tag1,$tag2)
{    //Declaring Variables
    $a=$content;
    $a1=$tag1;
    $a5=$tag2;
    
    //Splitting content and getting the count
	$b=str_split($a);
	$c1=count($b);
	
	//Splitting the tag1 and getting it's count
	$a2=str_split($a1);
	$c2=count($a2);

	//Splitting the tag2 and getting it's count
	$a7=str_split($a5);
	$c3=count($a7);
	//echo $c3;
	
		//echo "Starting";
	//asd
	
	//Looping through the content  in the array and  and splitting them  and here is the main finction starts
	for($i=0;$i<$c1;$i++)
	{
  		$c=$i;
        
		//Checking Whether the each word is tag1 by looping the content till count of first tag 
  		for($j=0;$j<$c2;$j++)
  		{
			$a3=$a3.$b[$i];
			$i=$i+1;
 		}
	  	//echo $a3;
	  	//echo "<BR>";
	  	// If tag1 is equal to the word in the content E.g <tag1>=<tag1>
  		if($a3==$a1)
  		{
   	        //echo "s1<BR>";
   	        //Finding for the other end tag tag2 fom tag1 and looping
   	        //
   	        $a12=$a12."";
   			for($k=$c;$k<$c1;$k++)
  			 {  
    			$d11=$k;
    			//Checking whether when the tag2 comens
	   			for($m=0;$m<$c3;$m++)
	  			{
        			$a8=$a8.$b[$k];
        			$k=$k+1;
        		}
        		
        		//If <tag2> is equal to <tag2>
      		   	if($a8==$a5)
   	  			{   //echo "sucess";
  	   				//Just Looping the content till tag's end is reached(Content is Removed here)
					$d12=$k-1;
					$i=$d12;
        			$k=$c1;			
	  			}
	  			else
	  			{
		  			$k=$d11;
		  			$a12=$a12.$b[$k];
		  			
	  			}
      			$a6="";
				$a8="";	
			}
			//echo $a12;
			//echo "<BR>";
			$a12=$a12;
		
		}
  		else
  		{   
		   //Adding the extra content ,content other than removed tags..
      		$i=$c;
      	
      	
      		//echo "<BR>";
			$a11=$a11."".$b[$i];  
   			//echo $a3;
  			// echo "<BR>";
			//	echo "n";
  		}

  		$a3="";
  		$a2="";
	    
	}
	unset($a11);
	unset($b);
	unset($content);
	unset($a2);
		//echo $a12;
		
	return ($a12);
}
function removetags($content,$tag1,$tag2)
{    //Declaring Variables
    $a=$content;
    $a1=$tag1;
    $a5=$tag2;
    
    //Splitting content and getting the count
	$b=str_split($a);
	$c1=count($b);
	
	//Splitting the tag1 and getting it's count
	$a2=str_split($a1);
	$c2=count($a2);

	//Splitting the tag2 and getting it's count
	$a7=str_split($a5);
	$c3=count($a7);
	//echo $c3;
	
	
	//asd
	
	//Looping through the content  in the array and  and splitting them  and here is the main finction starts
	for($i=0;$i<$c1;$i++)
	{
  		$c=$i;
        
		//Checking Whether the each word is tag1 by looping the content till count of first tag 
  		for($j=0;$j<$c2;$j++)
  		{
			$a3=$a3.$b[$i];
			$i=$i+1;
 		}
	  	//echo $a3;
	  	//echo "<BR>";
	  	// If tag1 is equal to the word in the content E.g <tag1>=<tag1>
  		if($a3==$a1)
  		{
   	        //echo "s1<BR>";
   	        //Finding for the other end tag tag2 fom tag1 and looping
   	        //
   			for($k=$c;$k<$c1;$k++)
  			{  
    			$d11=$k;
    			//Checking whether when the tag2 comens
	   			for($m=0;$m<$c3;$m++)
	  			{
        			$a8=$a8.$b[$k];
        			$k=$k+1;
        		}
        		
        		//If <tag2> is equal to <tag2>
      		   	if($a8==$a5)
   	  			{   //echo "sucess";
  	   				//Just Looping the content till tag's end is reached(Content is Removed here)
					$d12=$k-1;
					$i=$d12;
        			$k=$c1;			
	  			}
	  			else
	  			{
		  			$k=$d11;
	  			}
      			$a6="";
				$a8="";	
			}
		}
  		else
  		{   
		   //Adding the extra content ,content other than removed tags..
      		$i=$c;
			$a11=$a11.$b[$i];  
   			//echo $a3;
  			// echo "<BR>";
			//	echo "n";
  		}

  		$a3="";
  		$a2="";
	
	}
	return ($a11);
}

function extract_unit($string, $start, $end)
{
$pos = stripos($string, $start);
$str = substr($string, $pos);
$str_two = substr($str, strlen($start));
$second_pos = stripos($str_two, $end);
$str_three = substr($str_two, 0, $second_pos);
$unit = trim($str_three); // remove whitespaces

return $unit;
}
function strip_html_tags( $text )
{
    $text = preg_replace(
        array(
          // Remove invisible content
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
          // Add line breaks before and after blocks
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
        ),
        $text );
    return strip_tags( $text );
}
?>
