<?php
if ( !isset($_REQUEST['term']) )
    exit;

$dblink = mysql_connect('localhost', 'root', '') or die( mysql_error() );
mysql_select_db('shop');

$rs = mysql_query('select kode_produk from produk where kode_produk like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by kode_produk asc limit 0,10', $dblink);

$data = array();
if ( $rs && mysql_num_rows($rs) )
{
    while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
    {
        $data[] = array(
            'label' => $row['kode_produk']
        );
    }
}

echo json_encode($data);
flush();
?>