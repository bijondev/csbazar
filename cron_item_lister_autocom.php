<?php
# Configuration Class
include 'CSAdmin/config.php';
	
// Send the headers
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";

echo '<xml>';

$ritlist = $conn->query("SELECT p.p_id, LOWER(p.p_name) as p_name
FROM
    `es_products` AS `p`
        WHERE p.p_published_from_date<=NOW()
        AND p.p_published_to_date>=NOW()
        GROUP BY p.p_id");
foreach($ritlist as $rainrow) {
	$itsku			=	$rainrow['p_id'];
	$itname			=	stripslashes($rainrow['p_name']);
?>
<items>
    <item>
        <id><?php echo @$itsku;?></id>
        <value><?php echo @$itname;?></value>
    </item>
</items>
<?php
}
echo '</xml>';

?>