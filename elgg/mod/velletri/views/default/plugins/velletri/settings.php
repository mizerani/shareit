<?php 



$network_name = $vars['entity']->network1;
$about_text = $vars['entity']->about1;


?>


 






<p>
  <b>Write the name of the network:</b>

<?php

echo elgg_view('input/text', array(
    'name'  => 'params[network1]',
    'value' => $network_name,
));


 ?>
</p>

<p>
  <b>Write the text for the about page:</b>

<?php

echo elgg_view('input/plaintext', array(
    'name'  => 'params[about1]',
    'value' => $about_text,
));


 ?>
</p>

