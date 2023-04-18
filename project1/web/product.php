<style>
    #member-item
    {
        margin-bottom:100px;
        height:100px;
        width:100px;
        
    }
    #text
    {
        margin-top:100px;
        margin-bottom:300px;
        display:flex;
    }
   
    </style>
    <form method="post">
<div class="container">
<section class="team-member-section">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Mobile</h2>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
                foreach($all_data as $pro)
                {
                ?>
        <div id="member-item" class="member-item set-bg"  data-setbg="../admin/upload/<?php echo $pro->pimg;?>">
 
                </div>
                       <img src="../admin/upload/<?php echo $pro->pimg;?>" alt="" class="img-fluid">
          
                <h5><?php echo $pro->pname;?></h5>
                <span>$<?php echo $pro->price;?></span>
                <input type="hidden" value="<?php echo $pro->pid;?>" name="pid">
            <input type="number" name="qty">
                    <button type="submit" name="submit"> add to bag</button>
                </form>
        <!-- </div> -->
        <?php
                }

        ?>
        
    
        
        
        
        
        
        
    </section>
    </div>