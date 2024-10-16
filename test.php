<?php
include_once "member.php";
include_once "pleno.php";
$nuevoSocio=new Member(12);

echo $nuevoSocio->calculateAge('2005-01-27');

echo $nuevoSocio->calcularCuota('2005-01-27');

$nuevoFullMember=new FullMember(12);

echo $nuevoFullMember->calcularCuota('2005-01-27');