<section class="contact_complete">
<section class="contact_adress">
<section class="contactsection" id="contact">
        <h2 class="section__title">Contact</h2>
            <h3 class="contact__title" id="call_me">Call Me</h3>
        
        <div class="flex__contact">
            <i class="fas fa-phone-alt"></i>
            <span class="contact__subtitle">555-123-456</span>
            
        </div>
    </div>
    <div class="contact_information">

        <h3 class="contact__title">Email</h3>
    
    <div class="flex__contact">
        <i class="fas fa-at"></i>
        <span class="contact__subtitle">Thomas@Anderson.com</span>
    </div>
</div>
     </div>

    </section>
        <div class="contact_information">

            <h3 class="contact__title">Location</h3>
    
        <div class="flex__contact">
            <i class="fas fa-map-marker-alt"></i>
            <span class="contact__subtitle"> 123 Matrix street, Los Angeles CA 92210</span>
        </div>
    </div>
</div>
<hr>
<?php if (!empty($_GET["fname"])): ?>
<div>
<p>Thank you <?=$_GET['fname']?>! Your message has been sent. You have received a confirmation to this adress :  <?=$_GET['email']?></p>
<?php endif; ?></div>

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
        <button id="buttonsend" type="submit" value="Send Message">Send</button> 
    </div>
</form>

</section>
</section>
