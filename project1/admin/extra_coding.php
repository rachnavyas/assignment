<?php
   
// for checkbox 
 ?>        
 <input type="ckeckbox" name="chk[]" value="english"
                <?php
                $l=$d->language;
                $le=explode(",",$l);
                if(in_array("english",$le))
                {
                    echo $checked="checked";
                }
                ?>>English
                <input type="ckeckbox" name="chk[]" value="Gujarati"
                <?php
                $l=$d->language;
                $le=explode(",",$l);
                if(in_array("english",$le))
                {
                    echo $checked="checked";
                }
                ?>>Gujarati
    