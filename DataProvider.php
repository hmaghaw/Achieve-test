<?php
class DataProvider {
	private $db;
	function __construct(PDO $mydb){		
		$this->db=$mydb;
	}

	public function getColorVotes($id){
		$result=array();
		$Sql="SELECT
			  votes.city,
			  colors.color,
			  SUM(votes.votes) AS color_total,
			  colors.color_id
			FROM votes
			  RIGHT OUTER JOIN colors
				ON votes.color_id = colors.color_id
			WHERE colors.color_id = $id
			GROUP BY colors.color,
					 colors.color_id";
		$st=$this->db->query($Sql);
		
		foreach($st as $rec){
			if (isset($rec['color_total'])){
				$result['color_total']=$rec['color_total'];	
			} else {
				$result['color_total']=0;
			}
		}
		return $result;
	}
	public function getColors(){
		$result=array();
		$Sql="SELECT
				  colors.color_id,
				  colors.color
				FROM colors";
		$st=$this->db->query($Sql);
		$i=0;
		foreach($st as $rec){
			$result[$i]['color_id']=$rec['color_id'];
			$result[$i]['color']=$rec['color'];
			$i++;			
		}
		return $result;
	}

}