<?php $this->view('include/header')?>


<section class="class_65" >
    <h1 class="class_56"  >
        Profile
    </h1>

    <?php if(!empty($row)):?>

    <div class="class_66" >
        <div class="class_67" >
            <div class="class_68" >
                <img src="<?=get_image($row->image,'user')?>" class="class_69" >
                <h1 class="class_70"  >
                  <?=esc($row->username)?>
                </h1>
            </div>
            <a href="<?=ROOT?>/profile" class="<?=$section == 'overview' ? 'class_71' : 'class_74'?>" >
                <div class="class_75" >
                    Overview
                </div>
                <i  class="bi bi-dropbox class_73">
                </i>
            </a>
            <a href="<?=ROOT?>/profile/settings" class="<?=$section == 'settings' ? 'class_71' : 'class_74'?>" >
                <div class="class_75"  >
                    Account Settings
                    <br >
                </div>
                <i  class="bi bi-gear-fill class_73">
                </i>
            </a>
            <a href="<?=ROOT?>/profile/podcasts" class="<?=$section == 'podcasts' ? 'class_71' : 'class_74'?>" >
                <div class="class_76"  >
                    Podcasts
                    <br >
                </div>
                <i  class="bi bi-list-task class_73">
                </i>
            </a>
        </div>
        <div class="class_77" >

        <?php if(message()):?>
            <div class="class_78" >
                <i  class="bi bi-info-circle-fill class_79">
                </i>
                <div class="class_32"  >
                    An error occurred!
                    <br >
                </div>
            </div>
            <div class="class_81" >
                <i class="bi bi-info-circle-fill class_79">
                </i>
                <div class="class_32"  >
                    Action successful!
                    <br>
                </div>
            </div>
        <?php endif;?>


        <?php if($section == "overview"):?>
            <div class="class_30" >
                <div class="class_31"  >
                    User Details
                    <br>
                </div>
            </div>

            <style>
                td {
                    height: 4em;
                }
            </style>

            <table  class="item_class_1 class_84">
                
                
                <tbody >
                    
                    <tr >
                        
                        <th  class="class_85">
                            Username
                        </th>
                        
                        <td >
                            <?=esc($row->username)?>
                        </td>
                        
                    </tr>
                    <tr >
                        
                        <th  class="class_85">
                            First name
                        </th>
                        
                        <td >
                        <?=esc($row->firstname)?>

                        </td>
                        
                    </tr>
                    
                    <tr >
                        
                        <th  class="class_85">
                            Last Name
                            <br>
                        </th>
                        
                        <td >
                            <?=esc($row->lastname)?>

                        </td>
                        
                    </tr>
                    
                    <tr >
                        <th  class="class_85">
                            Email
                        </th>
                        <td >
                            <?=esc($row->email)?>

                        </td>
                    </tr>
                    <tr >
                        <th  class="class_85">
                            Podcasts
                        </th>
                        <td >
                        <?=esc(0)?>

                        </td>
                    </tr>
                    <tr >
                        <td  colspan="2" class="class_86" style="padding: 2em;">
                           <?=esc($row->bio)?>
                        </td>
                    </tr>
                </tbody>
            </table>

        <?php elseif($section == "settings"):?>
            <div class="class_30" >
                <div class="class_87"  >
                    Edit User Details
                    <br >
                </div>
            </div>

            <form action="" method="post" enctype="multipart/form-data" >
                <table  class="item_class_1 class_84">
                    
                    <thead >
                        
                    </thead>
                    
                    <tbody >
                        <tr>
                            <td colspan="2" style="padding: 10px; text-align:center;" >
                                <label>
                                    <img src="<?=get_image($row->image)?>" alt="Profile photo" style="width: 150px; height: 150px; object-fit:cover;cursor:pointer;">
                                    <input onchange="display_image(event)" type="file" name="image" style="display:none;">
      	<div><small style="color:red;"><?=$user->getError('image')?></small></div>

                                   <!-- show image on load  -->
                                    <script>
										function display_image(e)
										{
											let file = e.currentTarget.files[0];
											let allowed = ['image/jpeg','image/png','image/webp'];
											if(!allowed.includes(file.type))
											{
												alert("File type not valid! File types allowed: "+allowed.toString().replaceAll('image/',''));
												return;
											}

											e.currentTarget.parentNode.querySelector("img").src = URL.createObjectURL(file);
										}
									</script>

                                </label>
                            </td>
                        </tr>
                        
                        <tr >
                            
                            <th  class="class_85">
                                Username
                            </th>
                            
                            <td  class="class_88" style="flex-direction: column; text-align: left;">
                                <input value="<?=old_value('username',$row->username)?>" placeholder="" type="text" name="username" class="class_89" >
      	<div><small style="color:red;"><?=$user->getError('username')?></small></div>

                            </td>
                        </tr>
                        <tr >
                            <th  class="class_85">
                                First name
                            </th>
                            
                            <td  class="class_88" style="flex-direction: column; text-align: left;">
                                
                                <input value="<?=old_value('firstname',$row->firstname)?>" placeholder="" type="text" name="firstname" class="class_89" >
      	<div><small style="color:red;"><?=$user->getError('firstname')?></small></div>

                            </td>
                            
                        </tr>
                        
                        <tr >
                            
                            <th  class="class_85">
                                Last Name
                                <br >
                            </th>
                            
                            <td  class="class_88" style="flex-direction: column; text-align: left;">
                                <br>
                                <input value="<?=old_value('lastname',$row->lastname)?>" placeholder="" type="text" name="lastname" class="class_89" >
      	<div><small style="color:red;"><?=$user->getError('lastname')?></small></div>

                            </td>
                            
                        </tr>
                        
                        <tr >
                            <th  class="class_85">
                                Email
                            </th>
                            <td  class="class_88" style="flex-direction: column; text-align: left;">
                                <br>
                                <input value="<?=old_value('email',$row->email)?>" placeholder="" type="email" name="email" class="class_89" >
      	<div><small style="color:red;"><?=$user->getError('email')?></small></div>

                            </td>
                        </tr>
                        <tr >
                            <th  class="class_85">
                                Password
                            </th>
                            <td  class="class_88" style="flex-direction: column; text-align: left;">
                                <input value="<?=old_value('password')?>" placeholder="Leave empty to keep old password" type="password" name="password" class="class_89" >
      	<div><small style="color:red;"><?=$user->getError('password')?></small></div>

                            </td>
                        </tr>
                        <tr >
                            <th  class="class_85">
                                Retype Password
                            </th>
                            <td  class="class_88" style="flex-direction: column; text-align: left;">
                                <input placeholder="" type="text" name="retype_password" class="class_89" >
                            </td>
                        </tr>
                        <tr >
                            <th  class="class_85">
                                Bio
                            </th>
                            <td  class="class_88" style="flex-direction: column; text-align: left;">
                                
                                <textarea placeholder="" name="bio" class="class_96" ><?=old_value('bio',$row->bio)?></textarea>
								<div><small style="color:red"><?=$user->getError('bio')?></small></div>
                            </td>
                        </tr>
                        <tr >
                            <th  class="class_85">
                                <br>
                            </th>
                            <td style="text-align: left;">
                                <button class="class_98" >
                                    Save
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

        <?php elseif($section == "podcasts"):?>
            <div class="class_30" >
                <div class="class_87"  >
                    Recent Podcasts
                    <br >
                </div>
            </div>
            <div class="class_33" >
                <div class="class_42" >
                    <img src="<?=ROOT?>/assets_home/images/young-woman-making-podcast-medium-shot_23-2149386577.jpg"  backup="" class="class_43 item_class_8">
                </div>
                <div class="class_99" >
                    <div class="class_45"  >
                        Episode 03: Create this awesome html template with a free tool
                        <br>
                    </div>
                    <div class="class_38"  >
                        By John Doe | November 24th 2023 |1:45:00
                        <br>
                    </div>
                    <div class="class_46" >
                        <audio controls="" class="class_47" >
                            <source src="" type="audio/mpeg" >
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="class_33" >
                    <div class="class_42" >
                        <img src="<?=ROOT?>/assets_home/images/side-view-happy-woman-doing-radio_23-2148808743.jpg"  backup="" class="class_43 item_class_9">
                    </div>
                    <div class="class_99" >
                        <div class="class_45"  >
                            Episode 03: Create this awesome html template with a free tool
                            <br >
                        </div>
                        <div class="class_38"  >
                            By John Doe | November 24th 2023 |1:45:00
                            <br >
                        </div>
                        <div class="class_46" >
                            <audio controls="" class="class_47" >
                                <source src="" type="audio/mpeg" >
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="class_33" >
                        <div class="class_42" >
                            <img src="<?=ROOT?>/assets_home/images/side-view-young-man-holding-cup_23-2149386531.jpg"  backup="" class="class_43 item_class_10">
                        </div>
                        <div class="class_99" >
                            <div class="class_45"  >
                                Episode 03: Create this awesome html template with a free tool
                                <br >
                            </div>
                            <div class="class_38"  >
                                By John Doe | November 24th 2023 |1:45:00
                                <br >
                            </div>
                            <div class="class_46" >
                                <audio controls="" class="class_47" >
                                    <source src="" type="audio/mpeg" >
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <div class="class_51" >
                            <div class="class_52"  >
                                First
                            </div>
                            <div class="class_53"  >
                                1
                            </div>
                            <div class="class_54"  >
                                2
                            </div>
                            <div class="class_54"  >
                                2
                            </div>
                            <div class="class_52"  >
                                Next
                            </div>
                        </div>
        <?php endif?>

                    </div>
                </div>
        <?php else :?>
            <div class="class_78" >
                <i  class="bi bi-info-circle-fill class_79">
                </i>
                <div class="class_32"  >
                    Ooopps! This user is not found!!
                </div>
            </div>
        <?php endif?>

            </section>

<?php $this->view('include/footer')?>
