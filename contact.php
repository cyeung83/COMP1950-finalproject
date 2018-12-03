<!doctype html>
<html lang="en">

    <?php
        $pageName = "Contact"; 
        include "./templates/head.php" 
    ?>

    <body>
        <div class="wrapper">

            <?php include "./templates/header.php"?>

            <main class="contact-main">
                <div class="contact-wrapper">
                    <section class="instructor-details">
                        <h1>Instructor Contact Info</h1>
                        <table>
                            <tr>
                                <th>Instructor:</th>
                                <td>Michael Whyte</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>Michael_Whyte@bcit.ca</td>
                            </tr>
                        </table>
                    </section>
                    
                    <div class=form-wrapper>
                        <h2>Got questions?<br>Send us a message!</h2>
                        <form>
                            <label class="formfield-span">Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                            <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                            <label class="formfield-span" for="email">E-mail</label>
                            <input class="formfield-span" type="email" id="email" name="email" placeholder="E-mail" required>
                            <label class="formfield-span" for="studentnumber">BCIT Student number</label>
                            <input class="formfield-span" type="text" id="studentnumber" name="studentnumber" placeholder="Student Number">
                            <div class="radio-wrapper formfield-span">
                                <input type="radio" id="prospective-radio" name="studenttype" value="prospective">
                                <label for="prospective-radio">Prospective Student</label>
                                <input type="radio" id="current-radio" name="studenttype" value="current">
                                <label for="current-radio">Current Student</label>
                            </div>
                            <textarea class="formfield-span" name="message" rows=10 placeholder="Message" required></textarea>
                            <button class="formsubmitbtn formfield-span" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </main>

            <?php include "./templates/footer.php"?>

        </div>
    </body>
    <?php include "./templates/scripts.php"?>
</html>