<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683305088016!2d-123.1403568843357!3d49.26344827932927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H+4E8!5e0!3m2!1sen!2sca!4v1542829507393" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			
			<h2>WE TAKE CAMPING VERY SERIOUSLY.</h2>
			<p>
				Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.
			</p>

<div class = "email-contact-form">
                    <h2>Send Us An Email!</h2>
                    <form>
                        <p class = "your-name">
                            <label for = "your-name">Name<span class="required">*</span></label><br>
                            <input type = "text" name = "your-name" value-size="40" required><br>
                        </p>
                        <p class = "your-email">
                            <label for = "your-email">Email<span class="required">*</span></label><br>
                            <input type = "text" name = "your-email" value-size="40" required><br>
                        </p>
                        <p class = "subject-input">
                            <label for = "subject-input">Subject<span class="required">*</span></label><br>
                            <input type = "text" name = "subject-input" value-size="40" required><br>
                        </p>
                        <p class = "message-area">
                            <label for = "message-area">Message<span class="required">*</span></label><br>
                            <input type = "text" name = "message-area" cols="40" rows="10" required><br>
                        </p>
                            <input type = "submit" value="submit" id = "submit">
                    </form>
                </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>