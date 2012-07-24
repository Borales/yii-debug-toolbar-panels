<?php
/**
 * @var $this YiiDebugToolbarPanelVarDumper
 */

foreach( $this->getLogs() as $category => $categoryLogs ) {
    $c = 0;
?>
<h4 class="collapsible"><?=$category?></h4>
<table>
<thead>
	<tr>
		<th><?=YiiDebug::t('Value')?></th>
		<th width="10%"><?=YiiDebug::t('Time')?></th>
	</tr>
</thead>
<tbody>
<?php
    foreach( $categoryLogs as $log ) {
        echo CHtml::openTag('tr', array('class' => ($c%2?'odd':'even')));
        echo CHtml::tag('td', array(), $log[0]);
        echo CHtml::tag('td', array(), date('H:i:s.',$log[3]).sprintf('%06d',(int)(($log[3]-(int)$log[3])*1000000)));

        echo CHtml::closeTag('tr');
        $c++;
    }
?>
</tbody>
</table>
<?php } ?>