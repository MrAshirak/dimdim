<?php 

menu();

function menu(){
  echo " 
  Dim Dim CLI \n
        
       [1] EC Anual
       [2] EC Mensal
";

$option  = readline('Opção: ');

  switch($option){
  
    case '1':
      endividamentoComumAnual();
    break;

    case '2':
      endividamentoComumMensal();
      break;

  /*  case default:
      echo 'Opção invalida!';
      break;*/
  }
}

function endividamentoComumMensal(){
  
  $salario =  readline("Seu salario até o final do mês: ");
  $dividas = readline("Total de dividas até o final do mês: ");

  $EC = $dividas / $salario ;

  $EC = sprintf("%.2f%%", $EC * 100);

  echo "Taxa de endividamento mensal: {$EC}";
}

function endividamentoComumAnual(){
  
  $salario =  readline("Seu salario até o final do ano: ");
  $dividas = readline("Total de dividas até o final do ano: ");

  $EC = $dividas / $salario ;

  $EC = sprintf("%.2f%%", $EC * 100);

  echo "Taxa de endividamento anual: {$EC}";
}
