<?php require_once 'include/header.php'?>

    <h1 class="contact-heading">Contact Us</h1>

    <!-- Contact Page Content Grid -->
    <div class="contact-grid">
        <!-- Left Column: Stadium Map -->
        <div class="left-column">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145822.0559205211!2d150.84574659712322!3d-33.769411094121075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2snp!4v1695546841546!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>

        <!-- Right Column: Contact Form -->
        <div class="right-column">
            <form class="contact-form" id="contactForm" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <div id="nameError" class="error"></div>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" require>
                <div id="emailError" class="error"></div>
        
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <div id="messageError" class="error"></div>
        
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php require_once 'include/footer.php'?>
