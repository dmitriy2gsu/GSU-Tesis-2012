<?php
class Sellpo_DAO_CategoriesDAO {

	public static function getTree() {
		$categories = self::getCategories();
		// get root category
		$cursor = $categories->find(array("id" => 1));
		$root = self::fillCategory($categories->findOne());
		
		return $root;
	}
	
	private static function getCategories(){
		$m = new Mongo();
		return $m->sellpo->categories;
	}
	
	private static function fillCategory($category_arr) {
		$category = new Category();
		$category->id = $category_arr['id'];
		$category->name = $category_arr['name'];
		$category->description = $category_arr['description'];
		
		foreach ($category_arr['subcategories'] as $cat) {
			$category->subcategories[] = self::fillCategory($cat);
		}
		
		return $category;
	}
}

?>