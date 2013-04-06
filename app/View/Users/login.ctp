
<?php echo $this->Form->create('User'); ?>

 <div id="login-box" class="corners shadow tabs-ui">
                <!-- tab ctrls -->
                <div class="login-box-header corners">
                    <h2>LOGIN</h2>
                        <ul class="tabs">
                            <li><a href="#tabs-1">Login</a></li>
                            <li><a href="#tabs-3">Forgot password</a></li>
                        </ul>
                </div>


                <!-- tab 1 -->
                <div id="tabs-1" class="tabbox">


<div class="login-box-info-small corners">
                        <p><?php   echo $this->Session->flash('auth');  ?>
                            <?php echo $this->Session->flash();  ?> </p>
                    </div>



                    <div class="login-box-row-wrap corners">
                        <label for="username">Username:</label>

                        <?php 
        echo $this->Form->input('username',array('class' => 'input-1','label'=> false));
					?> 
                    </div>
                    <div class="login-box-row-wrap corners">
                        <label for="password">Password:</label> 
                         <?php 
        echo $this->Form->input('password',array('class' => 'input-1 password','label' => false));
					?>    
                    </div>
                    <div class="login-box-row corners">
                        <input type="checkbox" name="" id="field-remember"/> <label for="field-remember">Remember me?</label>
                        <input type="submit" name="" value="Login" id="submit"/>
                    </div>
                </div>
                <!-- tab 2 -->
                
                <!-- tab 3 -->
                <div id="tabs-3" class="tabbox">
                    <div class="login-box-warning-small corners">
                        <p>Please send us email! math@emu.edu.tr </p>
                    </div>                                     
                </div>
                
            </div>
<?php echo $this->Form->end(); ?>