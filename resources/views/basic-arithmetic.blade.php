




@php
$op = "";
$mmr1 = "";
$mmr2 = "";
$answer = "";
@endphp

@if($operator == "mul")

	@php
	$op = "MULTIPLIACTION";
	$mmr1 = "Multiplicand".": ".$n1;
	$mmr2 = "Multiplier".": ".$n2;
	$answer = "Product".": ".($n1*$n2);
	
	@endphp


@elseif($operator == "add")

	@php
	$op = "ADDITION";
	$mmr1 = "Addend".": ".$n1;
	$mmr2 = "Adder".": ".$n2;
	$answer = "Sum".": ".($n1+$n2);
	@endphp	

@elseif($operator == "div")

	@php
	$op = "DIVISION";
	$mmr1 = "Divident".": ".$n1;
	$mmr2 = "Divisor".": ".$n2;

	if($n1 == 0 || $n2 == 0)
	{
		$answer = "Quotient".": 0";
	}
	else
	{
		
		$answer = "Quotient".": ".($n1/$n2);
	}
	

	@endphp	

@elseif($operator == "sub")
	
	@php
	$op = "SUBTRACTION";
	$mmr1 = "Minuend".": ".$n1;
	$mmr2 = "Subtrahend". ": ".$n2;
	$answer = "Difference".": ".($n1-$n2);
	@endphp	
	
	


@endif

<h1>{{ $op }}</h1>

	<p>{{ $mmr1 }}</p>
	<p>{{ $mmr2 }}</p>
	<p>{{ $answer }}</p>


