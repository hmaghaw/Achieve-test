<?php
class TableDisplay {
		
	function __construct(){
		
		
	}
	public function showTable($data){	
		?>
		<div class="container">
		  <table>
			<thead>
			  <tr>
				<th>Color</th>
				<th>Votes</th>
			  </tr>
			</thead>
			<tbody>
<?php
		foreach($data as $item){
?>			
			  <tr>
				<td><a href="#" onclick="getData(<?php echo $item['color_id']?>);"><?php echo $item['color']?></a></td>
				<td>
					<input type="hidden" class ="colorCount" id="count_<?php echo $item['color_id']?>" value="0">
					<span id="span_count_<?php echo $item['color_id']?>"></span>
				</td>        
			  </tr>
<?php
		}
?>			  
			  <tr>
				<td><a href="#" onclick="getTotal();">Total</a></td>
				<td><span  id="total">0</span></td>        
			  </tr>
			</tbody>
		  </table>
		</div>
		<?php
	}
}