<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <title>Contact me
    </title>
    <link rel="stylesheet" href="styles/reset.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <script type="text/javascript" src="scripts/gen_validatorv4.js"></script>

  </head>
  <body>
    <nav>
      <a href="resume.html">Resume</a>
<!--      <a href="portfolio.html">Portfolio</a> -->
      <a href="projects.html">Example projects</a>
<!--      <a href="blog.html">Blog</a> -->
      <a href="links.html">Links</a>
      <a href="contact.html">Contact Me</a>
    </nav>
    <section>
      <article>
        <p>Thanks for taking the time to view my website. If there is anything that I can help you with, or if you have any feedback for me, please use the form below to send me a message.</p>
        <form action="https://formspree.io/your@email.com" method="POST">
          <input type="text" name="name">
          <input type="email" name="_replyto">
          <input type="submit" value="Send">
        </form>
      </article>
    </section>
    <footer>
      <p>&#169; 2016 james harder</p>
    </footer>
<script type="text/javascript">
// <![cdata[
  var formValidator = new Validator("feedback");
  formValidator.EnableOnPageErrorDisplay();
  formValidator.EnableMsgsTogether();
  formValidator.addValidation("name", "req", "Please enter your name.");
  formValidator.addValidation("email", "req", "Please enter your email assress.");
  formValidator.addValidation("email", "email", "Please provide a valid email adddress.");
  formValidator.addValidation("message","maxlen=2048", "The message is too long.");
// ]]
</script>

  </body>
</html>
