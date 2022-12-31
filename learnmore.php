<?php include('partials/menu.php');?>
 
   <div class="small-container">
       <div class="row row-2">
           <h2>How it works in 3 simple steps</h2>
           <select id = "opt" onchange = "optionHandler(this.value)">
               <option value="">Select an option</option>
               <option value="ls">Looking to sponsor</option>
               <option value="ts">Looking for sponsors</option>
           </select>
       </div>
       <script>
       function optionHandler(value)
       {
            //window.location.assign(`${value}.html`);
            if(value=="ls")
            {
                lt();
            }
            else if(value=="ls")
            {
                ls();
            }
        }
       function ls(){
           RegForm.style.transform = "translateX(0px)";
           LoginForm.style.transform = "translateX(0px)";
           Indiacator.style.transform = "translateX(100px)";
           
       }
       function lt(){
           RegForm.style.transform = "translateX(300px)";
           LoginForm.style.transform = "translateX(300px)";
           Indiacator.style.transform = "translateX(0px)";
           
       }
        </script>
       
    </div>
       
    
   <?php include('partials/footer.php');?>