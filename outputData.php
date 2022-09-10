<?
require_once 'connect.php';

$bd_data = $connect->query("SELECT * FROM info");
$bd_data ->execute();
$data = $bd_data->fetchALL(PDO::FETCH_ASSOC);
foreach($data as $table_data){
    ?>
    <tr class="table_row">
        <td class="table_items"><?=$table_data['id_order']?></td>
        <td class="table_items table_items--grey"><?=$table_data['product']?></td>
        <td class="table_items table_items--grey"><?=$table_data['name']?></td>
        <td class="table_items table_items--grey"><?=$table_data['surname']?></td>
        <td class="table_items table_items--grey"><?=$table_data['address']?></td>
        <td class="table_items table_items--grey"><?=$table_data['phone']?></td>
        <td class="table_items table_items--grey"><?=$table_data['contract_number']?></td>
    </tr>
    <?
};
?>