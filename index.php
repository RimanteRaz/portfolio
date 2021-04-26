<?php
  include 'contactform.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <nav>
      <div class="container">
        <div class="brand">
          <h4 class="bold site-name"><a href="">RR</a></h4>
        </div>
        <div class="mobile-nav">
          <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#examples">Examples</a></li>
            <li><a href="#contact">Contact Me</a></li>
          </ul>
        </div>
        <div class="desktop-nav">
          <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#examples">Examples</a></li>
            <li><a href="#contact">Contact Me</a></li>
          </ul>
        </div>
        <div class="burger">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>
    <!-- HERO -->
    <div class="hero container">
      <div class="cta-card">
        <div class="card-top"></div>
        <div class="card-body">
          <h1>
            This <strong>front-end</strong> developer is looking for a
            <strong>challenge</strong>!
          </h1>
          <div class="card-body-btm">
            <a href="#about" class="btn-secondary">About</a>
            <a href="#contact" class="btn-primary">Contact</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ABOUT -->
    <div class="about" id="about">
      <h2 class="section-title">About</h2>
      <div class="grid-4x6 container">
        <div class="about-me-box">
          <div>
            <p>👋 Hi, Rimantė here!</p>
            <p>I’m working on becoming the next top front-end developer!</p>
            <p>Things that I 💚 include:</p>
            <ul>
              <li>Learning.</li>
              <li>Solving complex problems.</li>
              <li>Making things easy for others.</li>
              <li>
                Repeatedly resizing the window to check whether the layout is
                fluently accommodating different screen sizes.
              </li>
            </ul>
          </div>
        </div>
        <div class="skills">
          <h5 class="bold">Skills</h5>
          <div class="skill-grid">
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/html.png" alt="html logo" />
              </div>
              <p class="text-small">HTML</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/css.png" alt="CSS logo" />
              </div>
              <p class="text-small">CSS</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/js.png" alt="JS logo" />
              </div>
              <p class="text-small">JavaScript</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/bootstrap.png" alt="Bootstrap logo" />
              </div>
              <p class="text-small">Bootstrap</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/sass.png" alt="Sass logo" />
              </div>
              <p class="text-small">Sass</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/webpack.png" alt="Webpack logo" />
              </div>
              <p class="text-small">Webpack</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/gulp.png" alt="Gulp logo" />
              </div>
              <p class="text-small">Gulp</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/node.png" alt="Node.js logo" />
              </div>
              <p class="text-small">Node.js</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/react.png" alt="React logo" />
              </div>
              <p class="text-small">React.js</p>
            </div>
            <div class="grid-item">
              <div class="skill-logo">
                <img src="images/skills/php.png" alt="PHP logo" />
              </div>
              <p class="text-small">PHP</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- EXAMPLES -->
    <div class="examples" id="examples">
      <h2 class="section-title">Examples</h2>
      <!-- UGDYMO INOVACIJOS -->
      <div class="main-example container">
        <div class="example-image">
          <img src="images/ugdymo-inovacijos/ugdymo-inovacijos-2.jpg" alt="example of webpage" />
          <img src="images/ugdymo-inovacijos/ugdymo-inovacijos-1.jpg" alt="example of webpage" />
          <img src="images/ugdymo-inovacijos/ugdymo-inovacijos-3.jpg" alt="example of webpage" />
        </div>
        <div class="example-description">
          <h4>Ugdymo inovacijos</h4>
          <div class="example-tags">
            <span class="tag">Development</span>
            <span class="tag">Design</span>
          </div>
          <div class="example-about">
            <p>
              A platform for teachers to share their innovative practices and
              showcase the talent of Lithuanian edu cators.
            </p>
            <p>
              Website is responsive, easy to customize and manage. The blog can
              be categorised by subjects and competencies to make it easier for
              teachers to find the right post.
            </p>
            <p>
              <strong>Technologies:</strong> HTML, SCSS, JS, Gulp, Wordpress
              theme development (PHP).
            </p>
          </div>
          <div class="example-buttons">
            <a href="http://ugdino.rimanteraz.com/" class="btn-primary">Preview</a>
            <a href="https://github.com/RimanteRaz/ugdymo-inovacijos-wp-theme" class="btn-primary">Code</a>
          </div>
        </div>
      </div>
      <!-- INTERNACTIONAL -->
      <div class="main-example container">
        <div class="example-image">
          <img src="images/internactional/internactional-2.jpg" alt="example of webpage" />
          <img src="images/internactional/internactional-1.jpg" alt="example of webpage" />
          <img src="images/internactional/internactional-3.jpg" alt="example of webpage" />
        </div>
        <div class="example-description">
          <h4>InternACTional</h4>
          <div class="example-tags">
            <span class="tag">Development</span>
            <span class="tag">Design</span>
          </div>
          <div class="example-about">
            <p>
              A website for a project that is developing an international
              internship framework. The goal of the site is to share good
              practices, success stories and hold all necessary information for
              current and future participants.
            </p>
            <p>
              <strong>Technologies:</strong> HTML, CSS, Bootstrap, Wordpress
              theme development (PHP).
            </p>
          </div>
          <div class="example-buttons">
            <a href="http://internactional.rimanteraz.com/" class="btn-primary">Preview</a>
            <a href="https://github.com/RimanteRaz/internactional-wp-theme" class="btn-primary">Code</a>
          </div>
        </div>
      </div>
      <!-- OTHER PROJECTS -->
    </div>
    <!-- CONTACT ME -->
    <div class="contact-me" id="contact">
      <div class="container">
        <div class="contact-form">
          <h2 class="section-title">Contact me</h2>
          <form method="post" id="contact-me">
            <div class="row-2-col">
              <div>
                <label for="name">Name:</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Your name..."
                />
              </div>
              <div>
                <label for="email">Email:</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  placeholder="Your email adress..."
                />
              </div>
            </div>
            <label for="message">Message:</label>
            <textarea
              name="message"
              id="message"
              rows="7"
              required
              placeholder="Your message..."
            ></textarea>
            <?php if (!empty($error_msg)){
              echo $error_msg;
            }?>
            <?php if (!empty($success_msg)){
              echo $success_msg;
            }?>
            <div class="btn-div">
              <button type="submit" name="submit" class="btn-primary">
                Send
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
