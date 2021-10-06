<section class="contactsection" id="contact">
        <h2 class="section_title">Contact</h2>
        <span class="section_subtitle">Get in Touch</span>

            <h3 class="contact_title">Call Me</h3>
        
        <div class="flex_contact">
            <i class="fas fa-phone-alt"></i>
            <span class="contact_subtitle">555-123-456</span>
            
        </div>
    </div>
    <div class="contact_information">

        <h3 class="contact_title">Email</h3>
    
    <div class="flex_contact">
        <i class="fas fa-at"></i>
        <span class="contact_subtitle">Thomas@Anderson.com</span>
    </div>
</div>
     </div>


        <div class="contact_information">

            <h3 class="contact_title">Location</h3>
    
        <div class="flex_contact">
            <i class="fas fa-map-marker-alt"></i>
            <span class="contact_subtitle"> 123 Matrix street, Los Angeles CA 92210</span>
        </div>
    </div>
</div>
<hr>
<?php if (!empty($_GET["fname"])): ?>
<h3>Merci <?=$_GET['fname']?> votre message a bien ete envoyer a votre email <?=$_GET['email']?></h3>
<?php endif; ?>

<form method="GET" class="contact_form" id="contactForm"><br>
    <div class="contact_content">
        <label for="firstname" class="contact_label">First Name</label><br>
        <input type="text" id="firstname" class="contact_input" name="fname" required><br>
        <label for="lastname" class="contact_label">Last Name</label><br>
        <input type="text" id="lastname" class="contact_input" name="lname"><br>
        <label for="email" class="contact_label">Email</label><br>
        <input type="email" id="email" class="contact_input" name="email" required><br>
        <label for="message" class="contact_label">Message</label><br>
        <textarea id="message" name="message" class="message" required></textarea>
        <br><br>  
        <i class="fas fa-paper-plane"></i>
        <input type="submit" value="Send Message">

    </div>
</form>

</section>
