<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">Hlavní stránka</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <?php echo anchor('teams/20/1', 'Týmy', 'class="nav-link"');?>
                            </li>                           
                            
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                
                                
                                <?php echo anchor("/Login", '<i class="fas fa-sign-in-alt"></i> Přihlášení', 'class="nav-link"'); ?>
                            </li>
                            <li class="nav-item">
                                
                                
                                <?php if($this->ion_auth->logged_in()){
                                    echo anchor("/Logout", 'Odhlášení', 'class="nav-link"');
                                 }  ?>
                            </li>
                        </ul>
                        
                    </div>
                </nav>   



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

