<?
set_time_limit(300);
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
   	        $a12=$a12."zx";
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
			$a11=$a11."zx".$b[$i];  
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


          
    preg_match_all ("/a[\s]+[^>]*?href[\s]?=[\s\"\']+".
                    "(.*?)[\"\']+.*?>"."([^<]+|.*?)?<\/a>/", 
                    $var, $matches);
        
    $matches = $matches[1];
    $list = array();

    foreach($matches as $var)
    {    
        print($var."<br>");
    }


// The fread_url function allows you to get a complete
// page. If CURL is not installed replace the contents with
// a fopen / fget loop

    function fread_url($url,$ref="")
    {
        if(function_exists("curl_init")){
            $ch = curl_init();
            $user_agent = "Mozilla/4.0 (compatible; MSIE 5.01; ".
                          "Windows NT 5.0)";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
            curl_setopt( $ch, CURLOPT_HTTPGET, 1 );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION , 1 );
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION , 1 );
            curl_setopt( $ch, CURLOPT_URL, $url );
            curl_setopt( $ch, CURLOPT_REFERER, $ref );
            curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
            $html = curl_exec($ch);
            curl_close($ch);
        }
        else{
            $hfile = fopen($url,"r");
            if($hfile){
                while(!feof($hfile)){
                    $html.=fgets($hfile,1024);
                }
            }
        }
        return $html;
    }

function rel2abs($rel, $base)
    {
        /* return if already absolute URL */
        if (parse_url($rel, PHP_URL_SCHEME) != '') return $rel;

        /* queries and anchors */
        if ($rel[0]=='#' || $rel[0]=='?') return $base.$rel;

        /* parse base URL and convert to local variables:
         $scheme, $host, $path */
        extract(parse_url($base));

        /* remove non-directory element from path */
        $path = preg_replace('#/[^/]*$#', '', $path);

        /* destroy path if relative url points to root */
        if ($rel[0] == '/') $path = '';

        /* dirty absolute URL */
        $abs = "$host$path/$rel";

        /* replace '//' or '/./' or '/foo/../' with '/' */
        $re = array('#(/\.?/)#', '#/(?!\.\.)[^/]+/\.\./#');
        for($n=1; $n>0; $abs=preg_replace($re, '/', $abs, -1, $n)) {}

        /* absolute URL is ready! */
        return $scheme.'://'.$abs;
    }

	
	
	
function getcontent1($file)
{

$file=preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $file);
$file=preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', "", $file);
$file=preg_replace('/<link\b[^>]*>/is', "", $file);

//$file= removetags($file,"<img",">");
//$file= removetags($file,"<style","</style>");
//$file= removetags($file,"<link",">");
//$file= removetags($file,"<LINK",">");
//$file= removetags($file,"<span","</span>");
//$file= removetags($file,"<SPAN","</SPAN");
//$file= removetags($file,"<div",">");
//$file= removetags($file,"<DIV",">");
//$file=removetags($file,"<html","</head>");
//echo $file;
//$file=removetags($file,"<a","</a>");
$file= removetags($file,"{","}");
//$file=strip_tags($file,"<br/>,<br>,<style>,<link>,<p>,<div>,<P>,<a>,<B>,<body>");
$file=strip_tags($file,"<b>,<H1>,<h1>,<style>,<link>,<h2>,<h3>,<h4>,<h5>,<span>,<U>,<br>,<br/>,<a>,<li>,<ul>,<p>,<div>");
$i=0;
$file1=explode("</div>",$file);
foreach ($file1 as $file2)
{
  $file2=(preg_replace("#\s+#"," ",$file2));
  
  preg_match_all ("/a[\s]+[^>]*?href[\s]?=[\s\"\']+"."(.*?)[\"\']+.*?>"."([^<]+|.*?)?<\/a>/", $file2, $matches);
  //$file2=removetags($file2,"<a","</a><a");
  //$file2=removetags($file2,"</a",">");
  //$match1=($matches[1]);
  $match2=($matches[2]); 
  $file2a=strip_tags($file2);
  $c1=strlen($file2a);
  $text=implode($match2); 
  //echo $text;
  $text=strip_tags($text);
  $c2=strlen($text);
  $c3=$c1-$c2;
  $c4[$i]=$c1;
  
  if($c3>150)
  {
    //echo $c1 and $c2;
    //echo "</div>";
    // echo "<BR>";
    $file2=strip_tags($file2,"<h1>,<style>,<link>,<span>,<U>,<h1>,<h2>,<b>,<h3>,<h4>,<h5>,<br>,<br/>,<a>,<li>,<ul>,<p>,<div>,<img>");
    $g1=@preg_match("#[&#169;](.*)#",$file2,$f1);
    $file2=preg_replace("#\s+#"," ",$file2);
    //$file2=preg_replace("#<br>(.*)<br>#","<br>",$file2); 
    //$file2=preg_replace("#</br></br>#","</br>",$file2);
    $file3a=strip_tags($file2,"<div>");
    $str1="class=";
    $c1=5;$c2=3;
    //First one
    $pos1=strpos($file3a, $str1);
    $pos1a=$pos1+$c1;
    $pos2=strpos($file3a,">");
    $len=$pos2-$pos1;
    $file3b=substr($file3a,$pos1a,$len-$c1);
    //second one
    $str2="id=";
    $pos1=strpos($file3a, $str2);
    $pos1a=$pos1+$c2;
    $pos2=strpos($file3a,">");
    $len=$pos2-$pos1;
    $file3c=substr($file3a,$pos1a,$len-$c2);
   
    $g1=@preg_match("#(.*)author(.*)#",$file3b,$f1);
    $g2=@preg_match("#(.*)comment(.*)#",$file3b,$f1);
    $g3=@preg_match("#(.*)comment(.*)#",$file3c,$f1);
    $g4=@preg_match("#(.*)author(.*)#",$file3c,$f1);
    $g5=@preg_match("#(.*)subscribe(.*)#",$file3b,$f1);
    $g6=@preg_match("#(.*)subscribe(.*)#",$file3c,$f1);
    //$g4=@preg_match("#(.*)(about)(.*)#",$file3c,$f1);
    //$g3=@preg_match("/id\s*=\s*'[^\']*comment[^\']*'/",$file2,$f1);
    //$g4=@preg_match("/id\s*=\s*'[^\']*comments[^\']*'/",$file2,$f1);
    //$g5=@preg_match("/id\s*=\s*'[^\']*(about||about)[^\']*'/",$file2,$f1);
        
   
    $g6=$g1+$g2+$g3+$g4+$g5+$g6;
    //echo "<BR><BR>$g6<BR>";
    if($g6>0)
    {
     break;
      
    }
    else
    {   
      //$file2=preg_replace("#<div id=\"(.*)about(.*)\"\>(.*)<\/div>#","",$file2);
      //$file2=preg_replace("#<div id=\"(.*)\"comments\"(.*)\"\>(.*)<\/div>#","",$file2);
      //echo "<BR>-----<BR>";
      $file3=$file3.$file2;
      // echo "$file2";
    }  
  }
 
}
return $file3;
}


function getcontent2($html)
{
      foreach($html->find('script') as $e1)
      {
         $e1->outertext="";
      
      }	
      foreach($html->find('style') as $e2)
      {
      $e2->outertext = '';
       }	
      foreach($html->find('link') as $e3)
      {
      $e3->outertext = '';
       }
      foreach($html->find('img') as $e3)
      {
      $e3->outertext = '';
      }
      foreach($html->find('form') as $e3)
      {
      $e3->outertext = '';
      }
      $i=0;
	  $html->save();
	  foreach($html->find('div')as $e4)
      {
        $a1=$e4->id;
       $d1=preg_match("#(.*)(comments|header|comment|footer|navigation|search|logo|bottom)(.*)#",$a1,$b1);
        $a1a=$e4->class;
         $class1=explode(" ",$a1a);
		 $class2=@($class1[0].$class1[1].$class[2].$class[3].$class[4]);
        //$d1a=preg_match("#(.*)(comments|header|comment|footer|navigation|search|logo|bottom)(.*)#",$class2,$b1);
        $c1[$i]=0;
        $d11=$d1+$d1a;
		$d11=0;
        if($d11<=0)
        {  
          $c1[$i]=strlen($e4->plaintext);
	  //echo $e4->plaintext;	  
        }
        else
        {
		  $e4->outertext=""; 
		  $c1[$i]=0;
        }  
        $i=$i+1;
       }
      $html->save();
	 
      $a1=max($c1);
      $b1=array_keys($c1,$a1);
      $d1=$b1[0];
      $ret=$html->find('div',$d1);
      $ret=preg_replace("/<div\b[^>]*>/is", "<div>", $ret);
      $html2=explode("<div>",$ret);
      $i=0;
      foreach ($html2 as $e5)
      {
          preg_match_all ("/a[\s]+[^>]*?href[\s]?=[\s\"\']+"."(.*?)[\"\']+.*?>"."([^<]+|.*?)?<\/a>/", $e5, $matches);
          $match2=$matches[2];
          $text=strip_tags(implode($match2));
          $e6=strlen($text);
          $e5=(preg_replace("#\s+#","",$e5));
          $e7=strlen(strip_tags($e5));
          $c2[$i]=$e7-$e6;
          $i=$i+1;
       } 
      $a2=max($c2);
      $dd1=count($c2);
      $b2=array_keys($c2,$a2);
      $d2=$b2[0];
      $i=0;
      for($i=0;$i<=$dd1;$i++)
      {
        $c3=$a2-($c2[$i]);
        //if(($c3<=$a2)&&(($c2[$i])>200))
		if(($c2[$i])>200)
        {  
		  $html3=$html3.$html2[$i];
        }
		else
		{
			if(($c2[$i])>100)
			{
				$d12=preg_match("#(.*)</p>(.*)#", $html2[$i], $matches);
				if($d12>0)
				{
					$html3=$html3.$html2[$i];
				}
			}
        } 
      }

      $html3=strip_tags($html3,"<b>,<style>,<h2>,<h3>,<h4>,<h5>,<span>,<U>,<br>,<br/>,<a>,<li>,<ul>,<p>");
	  //echo $html3;
			$content1=$html3;
			echo $content1;
}


function readlinks1($content)
{
$file=$content;
$file= removetags($file,"<script","</script>");
$file= removetags($file,"<SCRIPT","</SCRIPT>");
$file= removetags($file,"<style","</style>");
$file= removetags($file,"<link",">");
$file= removetags($file,"<LINK",">");
$file= removetags($file,"{","}");
$file=strip_tags($file,"<br/>,<br>,<p>,<div>,<P>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<span>,</h1>,</div>,</h2>,</h3>,</h4>,</h5>,</h6>,<a>,</a>,<B>,</B>,<body>");
        
    preg_match_all ("/a[\s]+[^>]*?href[\s]?=[\s\"\']+"."(.*?)[\"\']+.*?>"."([^<]+|.*?)?<\/a>/", $file, $matches);
$k=15;
	$match1=($matches[1]);
    $match2=($matches[2]); 

	//echo "<pre>";
	//print_r($matches);
	foreach($match1 as $url)
       {    
	       $match4=strip_tags($match2[$i]);
		   if($j>10)
		   {
		   
		      //break;
		      
		    }
			else
			{
			   if((strlen($match4))>30)
			   {
					$match3=trim($match4); 
					$a1=preg_match("#http#",$url,$a2);
					if($a1<=0)
					{
						$url=rel2abs($url, $base);
					}	
					$link1=$url;
					$title1=$match3;		
					$c3=strlen(trim($link1));			 
					$c4=strlen(trim($title1));
					 if(($c3>0)&&($c4>0))
					{
					$text1=$link1."666".$title1."11111111111";
					$text2=$text2.$text1;
					}	
					/*
					$text1=$link1."666".$title1."11111111111";
					$text2=$text2.$text1;
					*/
					$j=$j+1;
			   }		
			   $i=$i+1;
				if($j>$k)
				{
				  //break;		
				}
		    }
		}
		return $text2;
		//exit();
}


function absolutize_url($relative, $base)
{
    $relative = trim($relative);
    $base = trim($base);
    if (!empty($relative))
    {
        preg_match('/^(([^:\/?#]+):)?(\/\/([^\/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/i', $relative, $match);
        for ($i = count($match); $i <= 9; $i++)
        {
            if (!isset($match[$i]))
            {
                $match[$i] = '';
            }
        }
        $relative = array('scheme' => $match[2], 'authority' => $match[4], 'path' => $match[5], 'query' => $match[7], 'fragment' => $match[9]);
        if (!empty($relative['scheme']))
        {
            $target = $relative;
        }
        else if (!empty($base))
        {
            preg_match('/^(([^:\/?#]+):)?(\/\/([^\/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/i', $base, $match);
            for ($i = count($match); $i <= 9; $i++)
            {
                if (!isset($match[$i]))
                {
                    $match[$i] = '';
                }
            }
            $base = array('scheme' => $match[2], 'authority' => $match[4], 'path' => $match[5], 'query' => $match[7], 'fragment' => $match[9]);
            $target = array('scheme' => '', 'authority' => '', 'path' => '', 'query' => '', 'fragment' => '');
            if (!empty($relative['authority']))
            {
                $target = $relative;
                $target['scheme'] = $base['scheme'];
            }
            else
            {
                $target['scheme'] = $base['scheme'];
                $target['authority'] = $base['authority'];
                if (!empty($relative['path']))
                {
                    if (strpos($relative['path'], '/') === 0)
                    {
                        $target['path'] = $relative['path'];
                    }
                    else
                    {
                        if ($base['path'] == '/' || empty($base['path']))
                        {
                            $target['path'] = '/' . $relative['path'];
                        }
                        else
                        {
                            $target['path'] = preg_replace('/^(.*)((\/)([^\/]*))?$/sU', '\\1', $base['path']) . '/' . $relative['path'];
                        }
                    }
                    if (!empty($relative['query']))
                    {
                        $target['query'] = $relative['query'];
                    }
                    $input = $target['path'];
                    while (!empty($input))
                    {
                        // A: If the input buffer begins with a prefix of "../" or "./", then remove that prefix from the input buffer; otherwise,
                        if (strpos($input, '../') === 0)
                        {
                            $input = substr($input, 3);
                        }
                        else if (strpos($input, './') === 0)
                        {
                            $input = substr($input, 2);
                        }
                        // B: if the input buffer begins with a prefix of "/./" or "/.", where "." is a complete path segment, then replace that prefix with "/" in the input buffer; otherwise,
                        else if (strpos($input, '/./') === 0)
                        {
                            $input = substr_replace($input, '/', 0, 3);
                        }
                        else if ($input == '/.')
                        {
                            $input = '/';
                        }
                        // C: if the input buffer begins with a prefix of "/../" or "/..", where ".." is a complete path segment, then replace that prefix with "/" in the input buffer and remove the last segment and its preceding "/" (if any) from the output buffer; otherwise,
                        else if (strpos($input, '/../') === 0)
                        {
                            $input = substr_replace($input, '/', 0, 4);
                            $target['path'] = preg_replace('/(\/)?([^\/]+)$/U', '', $target['path']);
                        }
                        else if ($input == '/..')
                        {
                            $input = '/';
                            $target['path'] = preg_replace('/(\/)?([^\/]+)$/U', '', $target['path']);
                        }
                        // D: if the input buffer consists only of "." or "..", then remove that from the input buffer; otherwise,
                        else if ($input == '.' || $input == '..')
                        {
                            $input = '';
                        }
                        // E: move the first path segment in the input buffer to the end of the output buffer, including the initial "/" character (if any) and any subsequent characters up to, but not including, the next "/" character or the end of the input buffer
                        else
                        {
                            if (preg_match('/^([^\/]+|(\/)[^\/]*)(\/|$)/', $input, $match))
                            {
                                $target['path'] .= $match[1];
                                $input = substr_replace($input, '', 0, strlen($match[1]));
                            }
                            else
                            {
                                // We've ended up in a recursive loop, so do what we otherwise never will: return false.
                                return false;
                            }
                        }
                    }
                }
                else
                {
                    if (!empty($base['path']))
                    {
                        $target['path'] = $base['path'];
                    }
                    else
                    {
                        $target['path'] = '/';
                    }
                    if (!empty($relative['query']))
                    {
                        $target['query'] = $relative['query'];
                    }
                    else if (!empty($base['query']))
                    {
                        $target['query'] = $base['query'];
                    }
                }
            }
            if (!empty($relative['fragment']))
            {
                $target['fragment'] = $relative['fragment'];
            }
        }
        else
        {
            // No base URL, just return the relative URL
            $target = $relative;
        }
        $return = '';
        if (!empty($target['scheme']))
        {
            $return .= "$target[scheme]:";
        }
        if (!empty($target['authority']))
        {
            $return .= "//$target[authority]";
        }
        if (!empty($target['path']))
        {
            $return .= $target['path'];
        }
        if (!empty($target['query']))
        {
            $return .= "?$target[query]";
        }
        if (!empty($target['fragment']))
        {
            $return .= "#$target[fragment]";
        }
    }
    else
    {
        $return = $base;
    }
    return $return;
}

?>
