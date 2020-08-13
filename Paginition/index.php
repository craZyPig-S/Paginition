<?php
require_once "./Paginition.php";

$pagnition_data = array(
    'url'                       => 'http://localhost/library-web/index.php',
    'total_rows'                => 60,
    'page_items'                => 10,
    'f_page'                    => 1,
    'first_link_text'           => '&lsaquo; First',
    'next_link_text'            => '&gt; Next',
    'previous_link_text'        => '&lt; Previous',
    'last_link_text'            => 'Last &rsaquo;',
    'full_tag_name'             => 'ul',
    'first_tag_name'            => 'li',
    'last_tag_name'             => '',
    'cur_tag_names'             => array('strong'),
    'next_tag_name'             => array('strong'),
    'prev_tag_name'             => array('strong'),
);
$pagnition_data_class = array(
    'full_tag_class'    => array('pagination'),
    'first_tag_class'   => array(''),
    'last_tag_class'    => array(''),
    'cur_tag_class'     => array(''),
    'next_tag_class'    => array(''),
    'prev_tag_class'    => array(''),
    'attribute_class'   => array('btn'),
);
$page = new Paginition($pagnition_data, $pagnition_data_class);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pagnition Example For Custom Pagnition</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php echo $page->get_paginition_query_string() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>