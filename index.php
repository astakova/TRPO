<?php
class A
{
	public function solve($a, $b)
	{
		if ($a==0)
		{
			return NULL;
		}
		else
		{
			return $this->x=-($b/$a);
		}
	}
	protected $x;
}
class B extends A
{
	protected function discriminant($a, $b, $c)
	{
		return $b**2-4*$a*$c;
	}
	public function quadratic_solve($a, $b, $c)
	{
		if($a==0)
		{
			return($this->solve($a, $b));
		}
		$d=$this->discriminant($a, $b, $c);
		if($d<0)
		{
			return NULL;
		}
		if($d==0)
		{
			return $this->x=(-($b)+sqrt($d));
		}
		return $this->x=array((-($b)+sqrt($d))/2*$a,(-($b)-sqrt($d))/2*$a);
		}
	}
$a=new A();
$b=new B();
$b->quadratic_solve(2, 1, 2);
$a->solve(2, 3);
var_dump($a, $b);
?>
		