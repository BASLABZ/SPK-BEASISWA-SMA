 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="logo/logo.png" style="width: 50px;" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['access_username']; ?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $_SESSION['access_control']; ?> <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Setting</a></li>
                                <li><a href="contacts.html">Ubah Passoword</a></li>
                                <li class="divider"></li>
                                <li><a href="index.php?logout=1">Keluar</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            SPK
                        </div>
                    </li>
                    <?php 
                        if ($_SESSION['access_control']=='admin') {  
                     ?>
                    <li>
                        <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Master Data</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="index.php?hal=master/user/list">Master User</a></li>
                            <li><a href="index.php?hal=master/students/list">Master Siswa</a></li>
                            <li><a href="index.php?hal=master/criteria/list">Master Kriteria</a></li>
                            <li><a href="index.php?hal=master/subcriteria/list">Master Subkriteria</a></li>
                            
                        </ul>
                    </li>
                     <?php } ?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Perhitungan AHP</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php?hal=penilaian/criteria_penilaian/list">Kriteria</a></li>
                            <li><a href="graph_morris.html">SubKriteria</a></li>
                           
                        </ul>
                    </li>
             
                 
                    <li>
                        <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Penilaian</span>  </a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Laporan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_basic.html">Basic form</a></li>
                            <li><a href="form_advanced.html">Advanced Plugins</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                            <li><a href="form_file_upload.html">File Upload</a></li>
                            <li><a href="form_editors.html">Text Editor</a></li>
                            <li><a href="form_markdown.html">Markdown</a></li>
                        </ul>
                    </li>
                    
                </ul>

            </div>
        </nav>