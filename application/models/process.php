<?php
	session_start();
class process extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function index()
    {
        $query = $this->db->query('SELECT * FROM cars');
        return $query;
    }
    function view_car($id)
    {
        $query = $this->db->query('SELECT * FROM cars WHERE id ='.$id);
        return $query;
    }
    public function record_count() {
        return $this->db->count_all("cars");
    }
    function allcars_newest()
    {
        $query = $this->db->query('SELECT * FROM cars ORDER BY id DESC');
        
        return $query;
    }
    function allcars_oldest()
    {
        $query = $this->db->query('SELECT * FROM cars ORDER BY id ASC');
        
        return $query;
    }
    function logout()
    {
        session_destroy();
        return;
    }
     function bus()
    {
        $query = $this->db->query('SELECT * FROM cars WHERE style = "bus"');
        return $query;
    }
    function sudan()
    {
        $query = $this->db->query('SELECT * FROM cars WHERE style = "sudan"');
        return $query;
    }
    function minivan()
    {
        $query = $this->db->query('SELECT * FROM cars WHERE style = "minivan"');
        return $query;
    }
    function suv()
    {
        $query = $this->db->query('SELECT * FROM cars WHERE style = "suv"');
        return $query;
    }
    function coupe()
    {
        $query = $this->db->query('SELECT * FROM cars WHERE style = "coupe"');
        return $query;
    }
    function hatchback()
    {
        $query = $this->db->query('SELECT * FROM cars WHERE style = "hatchback"');
        return $query;
    }
    function add_to_favourites($id){
	    $query = $this->db->query('SELECT * FROM favourites WHERE users_id = '.$_SESSION['id']);
	    foreach ($query->result() as $item) 
	    {
		    if($item->cars_id == $id){
			    return;
		    }
	    }
	     $this->db->query('INSERT INTO favourites(users_id, cars_id) VALUES ('.$_SESSION["id"].', '.$id.')');   
	     
	     return;
    }
    function delete_favourite($id)
    {
        $this->db->query('DELETE FROM favourites WHERE id ='.$id);
        $k = 0;
        foreach($_SESSION['favourites'][1] as $value){
	        if($value == $id){
		        unset($_SESSION['favourites'][1][$k]);
		        unset($_SESSION['favourites'][0][$k]);
	        }
	        
	        $k++;
        }
//         var_dump($_SESSION['favourites']);
        return;
    }
    function register($thepost)
    {
	    $query = $this->db->query('SELECT * FROM users');
	    $condition;
	    foreach ($query->result() as $item) 
	    {
// 		    var_dump($thepost);
// 		    echo md5($thepost['password']);
			
		    if ($thepost['email'] == $item->email && md5($thepost['password']) == $item->password){
			    /*
$cars = array();
			    $fav_id = array();
*/
			    $_SESSION['name'] = $item->username;
			    $_SESSION['id'] = $item->id;
			    $_SESSION['email'] = $item->email;
			    $_SESSION['is_admin'] = $item->is_admin;
			    /*
$query2 = $this->db->query('SELECT * FROM favourites WHERE users_id = '.$item->id);
			    $k = 0;$j = 0;
			    foreach($query2->result() as $item2){
				    $cars[$k] = $item2->cars_id;
				    $k++;
			    }
			    foreach($query2->result() as $item2){
				    $fav_id[$j] = $item2->id;
				    $j++;
			    }
			    $holder = array();
			    $holder[0] = $cars;
			    $holder[1] = $fav_id;
			    $_SESSION['favourites'] = $holder;
*/
			    $condition = 1;
			    break;
		    }
		    else{
			    $_SESSION['login_error'] = 'Login/password is incorrect';
			    $condition = 2;
		    }
	    }
		        
		return $condition;
    }
    
    function signup($thepost)
    {
	    $query = $this->db->query('SELECT * FROM users');
	    $condition;
	    foreach ($query->result() as $item) 
	    {
		    if ($thepost['email'] == $item->email){
			    $_SESSION['signup_error'] = 'Email already exists';
			    $condition = 2;
			    return $condition;
		    }
	    }
	     $_SESSION['signup_success']="You have succesfully registered!";
			    $this->db->query('INSERT INTO users(username, email, password, is_admin) VALUES ("'.$thepost["username"].'", "'.$thepost["email"].'", "'.md5($thepost["password"]).'", "no")');    
		$condition = 1;
		        
		return $condition;
    }
    function add_new($thepost){
	     $this->db->query('INSERT INTO cars(make, model, color, car_condition, style, year, price, image_link, description, mileage) VALUES ("'.$thepost["make"].'", "'.$thepost["model"].'", "'.$thepost["color"].'", "'.$thepost["condition"].'","'.$thepost["style"].'",'.$thepost["year"].','.$thepost["price"].',"'.$thepost["image"].'", "'.$thepost["description"].'",'.$thepost["mileage"].')');  
	     $_SESSION['successful_addition'] = 'Car successfully added!';
        return;
    }
    
    function profile_favourites(){
	    $cars = array();
			    $fav_id = array();
	    $query = $this->db->query('SELECT * FROM cars');
	    $query2 = $this->db->query('SELECT * FROM favourites WHERE users_id = '.$_SESSION["id"]);
			    $k = 0;$j = 0;
			    foreach($query2->result() as $item2){
				    $cars[$k] = $item2->cars_id;
				    $k++;
			    }
			    foreach($query2->result() as $item2){
				    $fav_id[$j] = $item2->id;
				    $j++;
			    }
			    $holder = array();
			    $holder[0] = $cars;
			    $holder[1] = $fav_id;
			    $_SESSION['favourites'] = $holder;
        return $query;
    }
    function admin(){
	    $query = $this->db->query('SELECT * FROM cars');
        return $query;
    }
    
    function delete_car($id){
	    $this->db->query('DELETE FROM cars WHERE id ='.$id);
        return;
    }
    
    function get_specific_cars($thepost){
	    if ($thepost['condition'] == 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] == 'All Miles'){
		    $query = $this->db->query('SELECT * FROM cars');
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
	    }
	    else if($thepost['condition'] == 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] != 'All Miles'){
		    $query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'] .'" AND price <= '. $thepost['price'] . ' AND mileage = '. $thepost['miles']);
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
	    }
	    else if($thepost['condition'] != 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] .'" AND price <= '. $thepost['price'] . ' AND mileage = '. $thepost['miles']);
			/*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/		    
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] .'" AND make = "'. $thepost['make'] . '" AND mileage = '. $thepost['miles']);
			/*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/		    
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] .'" AND make = "'. $thepost['make'] . '" AND price <= '. $thepost['price']);
			/*
foreach ($query->result() as $row) {
                $data[] = $row;
            }	
*/	    
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE price <= '. $thepost['price'] . ' AND mileage = '. $thepost['miles']);
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'] . '" AND mileage = '. $thepost['miles']);
		   /*
 foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'] . '" AND price <= '. $thepost['price']);
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'].'"');
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'].'"');
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE price <= '. $thepost['price']);
		   /*
 foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE mileage = "'. $thepost['miles'] . '"');
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] . '" AND mileage = '. $thepost['miles']);
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] . '" AND price <= '. $thepost['price']);
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] . '" AND make = "'. $thepost['make'] .'"');
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
		else{
			$query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'] .'" AND price <= '. $thepost['price'] . ' AND mileage = '. $thepost['miles']);
		    /*
foreach ($query->result() as $row) {
                $data[] = $row;
            }
*/
		}
	    return $query;
    }
    
 function get_specific_cars_count($thepost){
	    if ($thepost['condition'] == 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] == 'All Miles'){
		    $query = $this->db->query('SELECT * FROM cars');
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
	    }
	    else if($thepost['condition'] == 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] != 'All Miles'){
		    $query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'] .'" AND price <= '. $thepost['price'] . ' AND mileage = '. $thepost['miles']);
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
	    }
	    else if($thepost['condition'] != 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] .'" AND price <= '. $thepost['price'] . ' AND mileage = '. $thepost['miles']);
			foreach ($query->result() as $row) {
                $data[] = $row;
            }		    
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] .'" AND make = "'. $thepost['make'] . '" AND mileage = '. $thepost['miles']);
			foreach ($query->result() as $row) {
                $data[] = $row;
            }		    
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] .'" AND make = "'. $thepost['make'] . '" AND price <= '. $thepost['price']);
			foreach ($query->result() as $row) {
                $data[] = $row;
            }		    
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE price <= '. $thepost['price'] . ' AND mileage = '. $thepost['miles']);
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'] . '" AND mileage = '. $thepost['miles']);
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'] . '" AND price <= '. $thepost['price']);
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'].'"');
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'].'"');
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE price <= '. $thepost['price']);
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] == 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE mileage = "'. $thepost['miles'] . '"');
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] != 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] . '" AND mileage = '. $thepost['miles']);
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] == 'All Makes' && $thepost['price'] != 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] . '" AND price <= '. $thepost['price']);
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else if($thepost['condition'] != 'both' && $thepost['make'] != 'All Makes' && $thepost['price'] == 'All Prices' && $thepost['miles'] == 'All Miles'){
			$query = $this->db->query('SELECT * FROM cars WHERE car_condition = "'. $thepost['condition'] . '" AND make = "'. $thepost['make'] .'"');
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
		else{
			$query = $this->db->query('SELECT * FROM cars WHERE make = "'. $thepost['make'] .'" AND price <= '. $thepost['price'] . ' AND mileage = '. $thepost['miles']);
		    foreach ($query->result() as $row) {
                $data[] = $row;
            }
		}
	    return $query->num_rows;
    }
    
    
}

?>