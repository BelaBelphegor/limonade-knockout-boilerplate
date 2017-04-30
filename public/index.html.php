<?php
?>
<section data-bind="with: chosenData">
	<table data-bind="width: chosenData">
		<thead><tr><th>Name<th><th>Stats</th></tr></thead>
	</tbody>
		<tr><td data-bind="text: name"></td>
		<td data-bind="foreach: stats"><span data-bind="text: base_stat"> </span></td></tr>

	</table>
</section>
