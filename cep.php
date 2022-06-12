<?php 

function getAdress() {
    $adress= (object)[
        'cep' => '',
        'uf' => '',
        'localidade' => '',
        'bairro' => '',
        'logradouro' => ''
    ];

    if(isset($_POST['cep'])) {
    $cep= $_POST['cep'];

    //ignora caract. especiais e coloca o hifen automat.
    $cep= preg_replace('/[^0-8]/','',$cep);

    //verifica se o cep é válido
    if(preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep)) {
        $url= "https://viacep.com.br/ws/{$cep}/json/";

        $adress= json_decode(file_get_contents($url));
        } else {
            $adress-> cep;
        }
    }
    return $adress;    
}
?>