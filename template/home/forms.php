<div id="part-four">
   
                     <form method="POST" onsubmit="return verifForm(this)" action="php/contact.php" >

                        <ul class="formul">
                           <li><h1 class="contact-name">Contact</h1></li>
                            <li><label>Full Name <span class="required">*</span></label>
                              <input type="text" name="nom" class="field-divided" placeholder="First" onblur="verifnom(this)" /> 
                              <input type="text" name="prenom" class="field-divided" placeholder="Last" onblur="verifnom(this)" /></li>
                            <li>
                                <label>Email <span class="required">*</span></label>
                                <input type="email" name="email" class="field-long"  onblur="verifemail(this)"/>
                            </li>
                            <li>
                                <label>Subject</label>
                                <select name="choix" class="field-select">
                                <option value="Comment">Comment</option>
                                <option value="Partnership">Partnership</option>
                                <option value="General Question">General</option>
                                </select>
                            </li>
                            <li>
                                <label>Your Message <span class="required">*</span></label>
                                <textarea name="message" id="field5" class="field-long field-textarea" onblur="verifmessage(this)"></textarea>
                            </li>
                            <li style="display: none ; text-align: centre ; background-color: red ; border-radius: 10px;" id="alerte">
                                 <div style=" height: 30px ; margin: auto ; margin-bottom : 20px "> <h4 style="color: white ;">Check if you have a problem with your data</h4></div>  
                            </li>
                            <li>
                                <input type="submit" value="Send" />
                            </li>
                            
                        </ul>
                        </form>
               
</div>


<script>

function verifForm(f)
{
   var vernom = verifnom(f.nom);
   var verprenom = verifnom(f.prenom);
   var veremail = verifemail(f.email);
   var vermessage = verifmessage(f.message);
   
   if(vernom && verprenom && veremail && vermessage )
      return true;
   else
   {
    verifalerte()
    return false;
      
   }
}

function verifalerte()
{
  document.getElementById("alerte").style.display = "flex";
}

function verifnom(champ)
{
   if(champ.value.length < 2 || champ.value.length >= 20)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifemail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value) || champ.value.length > 50 )
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifmessage(champ)
{
   if(champ.value.length < 5 || champ.value.length > 2000)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function surligne( champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}






</script>