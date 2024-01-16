
<div class="main-sidebar sidebar-style-2" style="background-color: #ffffff;">   
      
      <ul class="sidebar-brand mt-3">

      
              <!-- gambar user -->
              <?php if( $user ) : ?>
                <img alt="image" src="<?= base_url('assets/images/profiles/') . $user['image']; ?>" class="rounded-circle mr-1" width="100px" height="100px">
              <?php else: ?>
                <img alt="image" src="<?= base_url('assets/images/profiles/') . $admin['foto']; ?>" class="rounded-circle mr-1" width="100px" height="100px">
              <?php endif; ?>
             

            <div class="mb-3">
              <!-- nama member -->
              <?php if( $user ) : ?>
                <a href="#" class="text-gray"><?= $user['name_user']; ?></a>
              <?php else: ?>
                <a href="#" class="text-gray"><?= $admin['name']; ?></a>
              <?php endif; ?>
            </div>
        
              </ul>

              <ul class="sidebar-menu" style="background-color: #ffffff;">

                  <!-- QUERY MENU -->
                  <?php
      
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                        FROM `user_menu` JOIN `user_access_menu`
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
                        $menu = $this->db->query($queryMenu)->result_array();
                  ?>

                  <!-- LOOPING MENU -->
                  <?php foreach ($menu as $m) : ?>
                    <div class="sidebar-heading menu-header text-gray ml-3 mt-3">
                        <?= $m['menu']; ?>
                    </div>

                  <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                  <?php
                      $menuId = $m['id'];
                      $querySubMenu = "SELECT *
                                  FROM `user_sub_menu` JOIN `user_menu`
                                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                  WHERE `user_sub_menu`.`menu_id` = $menuId
                                  AND   `user_sub_menu`.`is_active` = 1 ";
                      $subMenu = $this->db->query($querySubMenu)->result_array();
                  ?>
              
                  <?php foreach($subMenu as $sm) :
                    if ($title == $sm['title']) : ?>
                      <!-- Nav Item - Charts -->
                      <li class="nav-item active">
                        <?php else : ?>
                          <li class="nav-item">

            
                    <?php endif; ?>
                      <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                        <i class="<?= $sm['icon']; ?>"></i>
                        <span><?= $sm['title']; ?></span>
                      </a>
                    </li>
              

                  <?php endforeach; ?>

                  <hr class="sidebar-divider d-none d-md-block">
                  
                  <?php endforeach; ?>
                
                  </li>

                  <!-- Sidebar Toggler (Sidebar) -->
                    <div class="sidebar-gone" id="sidebar-gone">
                      <button class="sidebar-gone" type="button" data-toggle="collapse" data-target="sidebar-mini" aria-control="sidebar-mini" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span> 
                      </button>
                     

</ul>

</div>

