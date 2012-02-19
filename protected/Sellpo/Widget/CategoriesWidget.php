<?php
class CategoriesWidget extends CWidget {
	
	public function run() {
		$root = Sellpo_DAO_CategoriesDAO::getTree();
		
		echo "<div>";
		
		self::printCategory($root, 0);
		
		echo "</div>";
		
		echo "test CategoriesWidget(run())::";
	}
	
	private function printCategory($category, $level) {
		for ($i = 0; $i < $level; $i++) {
			echo '_';
		}
		echo ''.$category->name.'<br>';
		
		foreach ($category->subcategories as $cat) {
			self::printCategory($cat, $level + 1);
		}
		
	}
}

?>