<!doctype html>
<html lang="en">

    <?php
        $pageName = "Contact"; 
        include "./templates/head.php" 
    ?>


    <body>
        <div class="wrapper">

            <?php include "./templates/header.php"?>

            <main>
                <section class="instructor-details">
                    <h1>Contact</h1>
                    <p>Have questions about the course?</p>
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
                    <form>
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                        <label for="email">E-mail Address:</label>
                        <input type="email" id="email" name="email" placeholder="E-mail" required>
                        <label for="studentnumber">BCIT Student number</label>
                        <input type="text" id="studentnumber" name="studentnumber" placeholder="Student Number">
                        <input type="radio" id="prospective-radio" name="studenttype" value="prospective">
                        <label for="prospective-radio">Prospective Student</label>
                        <input type="radio" id="current-radio" name="studenttype" value="current">
                        <label for="current-radio">Current Student</label>
                        <textarea name="message" rows=10 placeholder="Message" required></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </main>

            <?php include "./templates/footer.php"?>

        </div>
    </body>

</html>