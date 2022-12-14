<?php 

include 'data.php';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $contact = array_map('trim', $_POST);

  if (empty($contact['firstname'])) {
    $errors[] = 'First name is mandatory';
  }

  $firstnameMaxLength = 60;
  if (strlen($contact['firstname']) > $firstnameMaxLength) {
    $errors[] = 'First name must have less than ' . $firstnameMaxLength . 'characters';
  }
  if (empty($contact['lastname'])) {
    $errors[] = 'Lastname is mandatory';
  }

  $firstnameMaxLength = 60;
  if (strlen($contact['firstname']) > $firstnameMaxLength) {
    $errors[] = 'Last Name must have less than ' . $firstnameMaxLength . ' characters';
  }

  if (empty($contact['email'])) {
    $errors[] = 'Email is mandatory';
  }

  $emailMaxLength = 255;
  if (strlen($contact['email']) > $emailMaxLength) {
    $errors[] = 'Email must have less than' . $emailMaxLength . ' characters';
  }

  if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Wrong format for the email ' . htmlentities($contact['email']);
  }

  if (empty($contact['message'])) {
    $errors[] = 'A message is needed';
  }

  if (empty($errors)) {
    header('Location: /index.php?send=true');
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Illidan Stormrage CV</title>
  <link rel="stylesheet" href="styles/main.css" />
  <link rel="stylesheet" href="styles/sidebar.css" />
  <link rel="stylesheet" href="styles/nav.css" />
  <link rel="stylesheet" href="styles/contact.css" />
</head>

<body>
  <header>
    <aside class="responsive-top">
      <div><img src="img/phone.png" alt="phone" class="icone-contact" /><span>999-545-523</span></div>
      <div><img src="img/temple.png" alt="home" class="icone-contact" /><span>Black Temple</span></div>
      <div><img src="img/mail.png" alt="mail" class="icone-contact" /><span>illidan@gmail.com</span></div>
    </aside>
    <nav>
      <div class="logo-title">
        <img src="img/logo.png" alt="logo" />
        <h2>Illidan Stormrage</h2>
      </div>
      <ul class="items" id="items">
        <li><a href="#home">Home</a></li>
        <li><a href="#qualities">Qualities</a></li>
        <li><a href="#experiences">Experiences</a></li>
        <li><a href="#formations">Education</a></li>
        <li><a href="#contacter">Contact</a></li>
      </ul>
      <a class="burger" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />

        </svg>
      </a>
    </nav>
    <section class="home" id="home">
      <h1>You are not prepared for my CV !</h1>
    </section>
  </header>
  <div class="wrapper">
    <aside class="sidebar">
      <img src="img/portrait.gif" alt="illidan">
      <ul>
        <li>
          <img src="img/phone.png" alt="phone" class="icone-contact" /><span>999-545-523</span>
        </li>
        <li>
          <img src="img/temple.png" alt="home" class="icone-contact" /><span>Black Temple</span>
        </li>
        <li>
          <img src="img/mail.png" alt="mail" class="icone-contact" /><span>illidan@gmail.com</span>
        </li>
      </ul>

      <h1 class="skills1">Skills</h1>
      <ul>
        <li>Glaive</li>
        <li>
          <img src="img/glaive.png" alt="glaive" class="icone-skill" /><img src="img/glaive.png" alt="glaive" class="icone-skill" />
          <img src="img/glaive.png" alt="glaive" class="icone-skill" />
        </li>
        <li>Flying</li>
        <li>
          <img src="img/wings.png" alt="wings" class="icone-skill" /><img src="img/wings.png" alt="wings" class="icone-skill" />
          <img src="img/wings.png" alt="wings" class="icone-skill" />
        </li>
        <li>Immolation aura</li>
        <li>
          <img src="img/flame.png" alt="flame" class="icone-skill" /><img src="img/flame.png" alt="flame" class="icone-skill" /><img src="img/flame.png" alt="flame" class="icone-skill" />
        </li>
      </ul>
    </aside>
    <main>
      <section class="skills">
        <div class="title-container">
          <div class="left-img-title"></div>
          <h1>Skills</h1>
          <div class="right-img-title"></div>
        </div>
        <section class="skill-wrapper">
          <?php foreach ($skills as $title => $skill) : ?>
            <div>
              <h2><?= $title ?></h2>
            </div>
          <?php endforeach; ?>
        </section>
      </section>
      <div class="divider" id="qualities"></div>
      <section class="qualites">
        <div class="title-container">
          <div class="left-img-title"></div>
          <h1>Qualities</h1>
          <div class="right-img-title"></div>
        </div>
        <section class="quality-wrapper">
          <?php foreach ($qualities as $title => $qualitie) : ?>
            <div>
              <img src="img/<?= $qualitie['image'] ?>" alt="<?= $title ?>">
              <h2><?= $title ?></h2>
              <p><?= $qualitie['text'] ?></p>
            </div>
          <?php endforeach ?>
        </section>
      </section>
      <div class="divider" id="experiences"></div>
      <section class="experiences">
        <div class="title-container">
          <div class="left-img-title"></div>
          <h1>Experiences</h1>
          <div class="right-img-title"></div>
        </div>
        <div class="experience">
          <img src="img/Illidan-eternite.jpg" alt="Well of eternity">
          <div class="experience-text-container">
            <h2>Well of Eternity</h2>
            <p>
              To save my people, unwillingly i have used the power of Weel of Eternity
              to repell the demons invasion resulting in the destruction of the well,
              unfourtunatly my people judged me as a traitor...
            </p>
          </div>
        </div>
        <div class="experience-reverse">
          <div class="experience-text-container">
            <h2>Tychondrius</h2>
            <p>
              I have defeated Tychondrius, leader of the Burning Legion,
              but do to so i had to sacrifice my soul to the demonic fel powers from the
              skull of Guldan, it provided me the powers to battle such powerful beings.
            </p>
          </div>
          <img src="img/Illidan-tychondrius.jpg" alt="Tychondrius">
        </div>
        <div class="experience">
          <img src="img/Illidan-arthas.jpg" alt="Illidan versus Arthas">
          <div class="experience-text-container">
            <h2>Arthas</h2>
            <p>
              I fought Arthas leader of the Scourge(The Undead Army) in the Northrend.
              A campaign of more horror the living have nevr seen. Many of my companions fallen in the fields
              of battle. But in the end victory over the Scourge was obtained.
            </p>
          </div>
        </div>
        <div class="experience-reverse">
          <div class="experience-text-container">
            <h2>The Illidari</h2>
            <p>
              To this day i continue gathering more and more followers who preach my demonic
              ways to fight demons and rid the Universe of the Legion(Army of Demons)
            </p>
          </div>
          <img src="img/Illidan-illidari.jpg" alt="Illidari">
        </div>
      </section>
      <div class="divider" id="formations"></div>
      <section class="formation">
        <div class="title-container">
          <div class="left-img-title"></div>
            <h1>Education</h1>
          <div class="right-img-title"></div>
        </div>
        <div class="formation-wrapper">
            <div class="formation-detail">
              <div class="detail">
                <h2>Druid</h2>
                <p>
                  Cenarius (demigod and guardian of the grove):My brother (Malfurion Stormrage) and I studied druidism and its magic under Cenarius, 
                  Since then, I have acquired knowledge and considerable power over everything related to nature.
                </p>
              </div>
              <img src="img/cenarius_experiences.png" alt="Cenarius">
            </div>
            <div class="formation-detail">
              <div class="detail">
                <h2>Magician</h2>
                <p>
                Rhonin (Archmage and Leader of the Kirin Tor): While defending Zin-Azshari,
                Rhonin granted me more power through mastery of arcane magic.
                To this day, my arcane powers grow stronger and stronger.
                </p>
              </div>
              <img src="img/rhonin_experiences.jpg" alt="Rhonin">
            </div>
            <div class="formation-detail">
              <div class="detail">
                <h2>Warlock</h2>
                <p>
                Sargeras (Dark Titan, leader of the Burning Legion): 
                I went to Sargeras for more power, which he granted me. 
                Indeed, to acquire the powers of the Burning Legion, 
                Sargeras burned my eyes and covered my body with tattoos which gave me a lot of demonic power.
                </p>
              </div>
              <img src="img/sargeras_experiences.png" alt="Sargeras">
            </div>
        </div>
      </section>
      <div class="divider" id="contacter"></div>
      <section class="contact-section">
        <div class="title-container">
          <div class="left-img-title"></div>
          <h1>Contact</h1>
          <div class="right-img-title"></div>
        </div>
        <div class="container">
          <div class="form-box">
            <form action="index.php#contacter" method="POST" novalidate>
              <ul>
                <?php 
                if (!empty($_GET['send'])) { ?>
                  <p>Your message has been sucessfully sent</p>
                <?php 
                } else {
                foreach ($errors as $error) : ?>
                  <li><?= $error ?></li>
                <?php endforeach; 
                } ?>
              </ul>
              <label for="firstname">First Name</label>
              <input type="text" id="firstname" name="firstname" placeholder="Sylvanas" required value="<?= $contact['firstname'] ?? '' ?>">
              <label for="lastname">Last Name</label>
              <input type="text" id="lastname" name="lastname" placeholder="Windrunner" required value="<?= $contact['lastname'] ?? '' ?>">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="<?= $contact['email']  ?? '' ?>" placeholder="sylvwindrunner@wow.com" required>
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="10" required><?= $contact['message'] ?? '' ?></textarea>
              <div><button>Send</button></div>
            </form>
          </div>
        </div>
      </section>
      <footer>
        <div>
          <a href="#a">Legal information</a>
          <span>|</span>
          <a href="#a">Disclaimer</a>
          <span>|</span>
        </div>
        <a href="#a">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
          </svg>
        </a>
        <a href="#a">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg>
        </a>
        <a href="#a">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
        </a>
      </footer>
    </main>
  </div>
  <script src="js/script.js"></script>
</body>
</html>