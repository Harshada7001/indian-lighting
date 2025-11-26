

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin/dashboard'); ?>" class="brand-link">
                                     <img class="logo" src="<?= base_url('uploads/'); ?>logodfurnusa.png" style="width: 20vh; opacity: .8;"alt=""></br>

      <!--<img src="<?//= base_url('static/backend/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <!--<span class="brand-text font-weight-light"><?php //echo"DFURN"; ?></span>-->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('static/backend/'); ?>dist/img/avatar3.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('fullname'); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="<?= base_url('admin/dashboard'); ?>" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
         
            <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-image"></i>
              <p>
             Home page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/add_banner');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Banner:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/list_banner');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Banner</p>
                </a>
              </li>
			  </li>
			  </ul>
			
			
			  <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-box"></i>
              <p>
             Products :
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('product/add');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('product/manage');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Products:</p>
                </a>
              </li>
			  </li>
			
			    </ul>
				

  <li class="nav-item ">
           <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
            <p>Category 
             <i class="right fas fa-angle-left"></i>
            </p>
            </a>
			 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('category/add');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('category/manage');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Category:</p>
                </a>
              </li>
			  </li>
			  </ul>
			 
<li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Sub-category:
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('subcategory/add');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sub-category:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('subcategory/manage');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Sub-category:</p>
                </a>
              </li>
			  </li>
			    </ul>
			  			 
		
			 <!--<li class="nav-item ">-->
    <!--        <a href="#" class="nav-link ">-->
    <!--          <i class="nav-icon fas fa-pen"></i>-->
    <!--          <p>-->
    <!--         Enquiry:-->
    <!--            <i class="right fas fa-angle-left"></i>-->
    <!--          </p>-->
    <!--        </a>-->
            
     <!--       <ul class="nav nav-treeview">-->
     <!--         <li class="nav-item">-->
     <!--          ">-->
     <!--             <i class="far fa-circle nav-icon"></i>-->
     <!--             <p>AddEnquiry:</p>-->
     <!--           </a>-->
     <!--         </li>-->
     <!--         <li class="nav-item">-->
               
     <!--             <i class="far fa-circle nav-icon"></i>-->
     <!--             <p>ManageEnquiry:</p>-->
     <!--           </a>-->
     <!--         </li>-->
			  <!--</li>-->
			  <!--</ul>-->
          
		  	 <li class="nav-item ">
			<a href="#" class="nav-link ">
				<i class="nav-icon fas fa-edit"></i>
              <p>
             Blog:
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('blog/add');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('blog/manage');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Blog:</p>
                </a>
              </li>
			  </li>
			  </ul>
			  
			  
			  
			  
			  	 <li class="nav-item ">
			<a href="#" class="nav-link ">
				<i class="nav-icon fas fa-edit"></i>
              <p>
             Projects:
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('project/add');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Projects:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('project/manage');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Projects:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('project/addtest');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimonial:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('project/managetest');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Testimonial:</p>
                </a>
              </li>
              
              
			  </li>
			  </ul>
			  
			  	 <li class="nav-item ">
			<a href="#" class="nav-link ">
				 <i class="nav-icon fas fa-user"></i>
              <p>
             Customer Says:
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('customersays/add');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Customersays:</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('customersays/manage');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Customersays:</p>
                </a>
              </li>
			  </li>
			  </ul>
			  
			  <!--<li class="nav-item ">-->
     <!--           <a href="#" class="nav-link ">-->
     <!--             <i class="nav-icon fas fa-copy"></i>-->
     <!--             <p>-->
     <!--            Market we serve:-->
     <!--               <i class="right fas fa-angle-left"></i>-->
     <!--             </p>-->
     <!--           </a>-->
            
     <!--       <ul class="nav nav-treeview ">-->
     <!--         <li class="nav-item">-->
     <!--           <a href="<?= base_url('mws/add');?>" class="nav-link">-->
     <!--             <i class="far fa-circle nav-icon"></i>-->
     <!--             <p>Add MWS:</p>-->
     <!--           </a>-->
     <!--         </li>-->
     <!--         <li class="nav-item">-->
     <!--           <a href="<?= base_url('mws/manage');?>" class="nav-link">-->
     <!--             <i class="far fa-circle nav-icon"></i>-->
     <!--             <p>List MWS:</p>-->
     <!--           </a>-->
     <!--         </li>-->
			  <!--</li>-->
			  <!--  </ul>-->
			    
			    	  <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                 Contact:
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
            
            <ul class="nav nav-treeview ">
             
              <li class="nav-item">
                <a href="<?= base_url('contact/manage');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Contact:</p>
                </a>
              </li>
			  </li>
			    </ul>
			    
			    
			    
			    
			    
          
          <li class="nav-item">
            <a href="<?= base_url('admin');?>" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">LOG OUT</p>
            </a>
          </li>
         
      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>