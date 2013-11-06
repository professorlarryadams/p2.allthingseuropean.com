<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 
	
	 public function index() {
        echo "This is the index page";
    }

	public function signup() {

        # Setup view
            $this->template->content = View::instance('v_users_signup');
            $this->template->title   = 'Sign Up';

        # Render template
            echo $this->template;
	}

	public function p_signup() {

    # More data we want stored with the user
    $_POST['created']  = Time::now();
    $_POST['modified'] = Time::now();

    # Encrypt the password  
    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

    # Create an encrypted token via their email address and a random string
    $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string()); 

    # Insert this user into the database 
    $user_id = DB::instance(DB_NAME)->insert("users", $_POST);
	
	# Upload image
        Upload::upload($_FILES, "/images/flags/", array("JPG", "JPEG", "jpg", "jpeg", "gif", "GIF", "png", "PNG"), $user_id);
        
        # Filename (la.jpg)
		$filename = $_FILES['picture']['name']; 
		# Filename format (jpg, png, gif)
        $extension = substr($filename, strrpos($filename, '.')); 
		# user_id plus file extion (la.jpg)
        $avatar = $user_id.$extension; 

        # Add Image to DB in "picture" column
        $data = Array("picture" => $picture);
        DB::instance(DB_NAME)->update("users", $data, "WHERE user_id = '".$user_id."'"); 
 
    # They now have to log in 
    Router::redirect("/users/login/?success-true");

	}

	public function p_login() {

    $_POST['last_login']  = Time::now();
    $_POST['timezone'] = Time::now();
	
	# Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
    $_POST = DB::instance(DB_NAME)->sanitize($_POST);

    # Hash submitted password so we can compare it against one in the db
    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

    # Search the db for this email and password
    # Retrieve the token if it's available
    $q = "SELECT token 
        FROM users 
        WHERE email = '".$_POST['email']."' 
        AND password = '".$_POST['password']."'";

    $token = DB::instance(DB_NAME)->select_field($q);

    # If we didn't find a matching token in the database, it means login failed
    if(!$token) {

    # Send them back to the login page
    Router::redirect("/users/login/?error=true");

    # But if we did, login succeeded! 
    } else {

        /* 
        Store this token in a cookie using setcookie()
        Important Note: *Nothing* else can echo to the page before setcookie is called
        Not even one single white space.
        param 1 = name of the cookie
        param 2 = the value of the cookie
        param 3 = when to expire
        param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
        */
        setcookie("token", $token, strtotime('+2 weeks'), '/');

        # Send them to the main page - or whever you want them to go
        Router::redirect("/users/profile");

    }
		}
	
  public function login($error = NULL, $success = NULL) {
        
        # Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Login";

        # Pass data to the view
        $this->template->content->error = $error;
        $this->template->content->success = $success;

        # Render template
        echo $this->template;

    }

	public function logout() {

    # Generate and save a new token for next login
    $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

    # Create the data array we'll use with the update method
    # In this case, we're only updating one field, so our array only has one entry
    $data = Array("token" => $new_token);

    # Do the update
    DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

    # Delete their token cookie by setting it to a date in the past - effectively logging them out
    setcookie("token", "", strtotime('-2 weeks'), '/');

    # Send them back to the main index.
    Router::redirect("/");

	}
	
	public function profile($user_name = NULL) {
		
	# If user is blank, they're not logged in; redirect them to the login page
    if(!$this->user) {
    Router::redirect('/users/login');
    }
    
    $this->template->content = View::instance('v_users_profile');

    # $title is another variable used in _v_template to set the <title> of the page
    $this->template->title = "Profile";
	
	# Query
            $q = "SELECT *
                FROM posts 
                WHERE user_id = ".$this->user->user_id;

        # Run the query, store the results in the variable $posts
        $posts = DB::instance(DB_NAME)->select_rows($q);

        # Pass data to the View
        $this->template->content->posts = $posts;

        # Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);  
        
        # Use load_client_files to generate the links from the above array
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

    # Pass information to the view fragment
    $this->template->content->user_name = $user_name;

    # Render View
    echo $this->template;

	}

	public function profile_update() {
        // Set up the view
        $this->template->content = View::instance('v_users_profile_update');
        $this->template->title   = "Update Profile";

        // Render the view
        echo $this->template;

    }


    public function p_profile_update() {


        $q = "UPDATE    users
            SET         first_name = '".$_REQUEST['first_name']."',
                        last_name = '".$_REQUEST['last_name']."',
                        email = '".$_REQUEST['email']."'
            WHERE       email = '".$this->user->email."'";

        DB::instance(DB_NAME)->query($q);
        
		# Send them back to the login page with a success message
		Router::redirect("/users/profile");

        
        
    }

} # eoc