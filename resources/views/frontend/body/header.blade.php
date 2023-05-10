  <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
                <a href="#" class="navbar-brand py-1 m-0"><span></span><img src="images/logo/stays hotel group LOGO.png" width="100px" height="40px"></a>
                <div class="header-search d-xl-none my-auto ml-auto py-1">
                    <a href="#" class="search-button" onClick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                </div>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>
        
                <div class="collapse navbar-collapse" id="myNavbar1">

                      <div class="container">
                        
                           
                   
                          <ul class="navbar-nav ml-auto navbar-search-link"  style=" margin-top: 23px;">
                       
                         
                        
                        <li class="dropdown-item search-btn" style="padding: 0px 0;">
                            <a href="#" class="search-button" onClick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                        </li>

                       <li >
                            <a href="{{url('/')}}" class="nav-link" >Home</a>
                            
                        </li> 

                          

                       @if(Auth::check()) 
                       <li >
                            <a href="{{route('list.index')}}" class="nav-link" >Todo List</a>
                            
                        </li>
                        <li >
                            <a href="{{route('logout')}}" class="nav-link" > logout</a>
                            
                        </li>
                        @else
                         <li >
                            <a href="{{route('user.login.view')}}" class="nav-link" > login</a>
                            
                        </li>

                        @endif
                        <!-- <li >
                            <a href="#" class="nav-link" >Register</a>
                            
                        </li> -->
                         <li >
                            <a href="#" class="" >  @if(Auth::check())
                                Welcome - {{Auth::user()->name}}
                                  @else

                                  @endif
                            </a>
                            
                        </li>

                    </ul>
                        
                  
                    
                       
                    

               
           </div>
                 
                    
                </div><!-- end navbar collapse -->


            </div>
            <!-- End container -->

            <br/>
                 
                    
                          
                        
                    
                    
                

        </nav>


        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Todo List</h2>
        
                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                                <a href="#home-links" class="items-list active" data-toggle="collapse" aria-expanded="false">
                                <span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu text-danger" id="home-links">
                                    <a class="items-list active" href="#">home</a>
                                    <a class="items-list" href="#">login</a>
                                    <a class="items-list" href="#">register</a>
                                    <a class="items-list" href="#">About me</a>
                                  
                                </div><!-- end sub-menu -->
       
                               
        
                        
                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->