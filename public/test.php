<?php



$NUMERO = '5521969098986';
$ALGO =  'Olá {NOME}, seu pedido de numero {ID}, está aguardando o pagamento de {VALOR} para ser enviado.';


$SUBSTITUI = array('{NOME}','{VALOR}', '{ID}');
$SUBSTITUIDO  = array('Wladi Veras','500', '49494');

$TRATADO  = str_replace($SUBSTITUI, $SUBSTITUIDO, $ALGO);


print "<b>Telefone: " .$NUMERO. "</b> <br><br>";

print "<a href='https://api.whatsapp.com/send?phone=$NUMERO&text=$TRATADO'>click aqui para falar comigo</a>"; 