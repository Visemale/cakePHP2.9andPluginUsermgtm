<!--Card-->
            <div class="card card-cascade wider reverse my-4 pb-5">

                <!--Card image-->
                <div class="view view-cascade overlay wow fadeIn">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(133).jpg" class="img-fluid">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
                    <!--Title-->
                    <h4 class="card-title"><strong>My adventure</strong></h4>
                    <h5 class="blue-text"><strong>Photography</strong></h5>

                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>

                        <a class="btn btn-primary btn-lg">Primary button</a>
                        <a class="btn btn-secondary btn-lg">Secondary button</a>
                        <a class="btn btn-default btn-lg">Default button</a>

                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
<!--<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Dashboard'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid">
				<div class="um_box_mid_content_mid_left">
					Hello <?php echo h($user['User']['name']); ?>
					<br/><br/>
			<?php   if ($this->UserAuth->getGroupName()=='Admin') { ?>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Add User",true),"/addUser") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("All Users",true),"/allUsers") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Add Group",true),"/addGroup") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("All Groups",true),"/allGroups") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Permissions",true),"/permissions") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Profile",true),"/viewUser/".$this->UserAuth->getUserId()) ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Edit Profile",true),"/editUser/".$this->UserAuth->getUserId()) ?></span><br/><br/>
			<?php   } ?>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Change Password",true),"/changePassword") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Profile",true),"/myprofile") ?></span><br/><br/>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>-->
