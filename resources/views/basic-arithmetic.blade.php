
<br>
<h1 style="text-align: center;font-family: Verdana;color: orange;">BASIC ARITHMETIC OPERATIONS</h1>


<center>
@if($operator == "multiplication")
	<h1>Operations: Multiplication</h1>
	<h1>Multiplicant: {{ $number1 }}</h1>
	<h1>Multiplier: {{ $number2 }}</h1>
	<h1>Product: {{ $number1*$number2 }}</h1>



@elseif($operator == "addition")
	<h1>Operations: Addtion</h1>
	<h1>Addent: {{ $number1 }}</h1>
	<h1>Adder: {{ $number2 }}</h1>
	<h1>Sum: {{ $number1+$number2 }}</h1>

@elseif($operator == "division")

	<h1>Operations: Division</h1>
	<h1>Dividend: {{ $number1 }}</h1>
	<h1>Divisor: {{ $number2 }}</h1>
	<h1>Quotient: {{ $number1/$number2 }}</h1>

@elseif($operator == "subtraction")

	
	<h1>Operations: Subtraction</h1>
	<h1>Minuend: {{ $number1 }}</h1>
	<h1>Subtrahend: {{ $number2 }}</h1>
	<h1>Difference: {{ $number1-$number2 }}</h1>


@endif
</center>