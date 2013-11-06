
<section>
<div id="content">
        <h2>Update Profile</h2>
        <form method='POST' action='/users/p_profile_update'>  <!-- Naming convention = /controller/post or method -->

                <div class="picture" style="background: url('<?=$user->picture;?>') center center no-repeat;"></div>

                <a href="#" id="first_name" data-type="text" data-pk="1" data-url="/users/p_profile_picture" data-title="">
                        <input type='text' name='first_name' placeholder='<?=$user->first_name;?>'><br />
                </a>
                <a href="#" id="last_name" data-type="text" data-pk="1" data-url="/users/p_profile_picture" data-title="">
                        <input type='text' name='last_name' placeholder='<?=$user->last_name;?>'><br />
                </a>
                <a href="#" id="email" data-type="text" data-pk="1" data-url="/users/p_profile_picture" data-title="">
                        <input type='text' name='email' placeholder='<?=$user->email;?>'><br /> 
                        <!-- Query database to be sure email doesn't already exist -->
                </a>

                <input type='password' name='password' placeholder='Password'><br />
                
                <div class="button"><input type='Submit' value='Save'></div></a>
        
        </form>
        
         </div>
</section>