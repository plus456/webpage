<? 
function fibonacci($n, $first = 0, $second = 1) { 
  $fib = [$first, $second]; 
  for($i=1; $i<$n; $i++) { 
    $fib[] = $fib[$i] + $fib[$i-1]; 
    echo $i ."&nbsp;". $fib[$i] ."&nbsp;". $fib[$i+1]/$fib[$i] ."<br/>"; 
 } 
} 
fibonacci(10); 
?>