<?php include 'data.php' ?>

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
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
      </a>
    </nav>
    <section class="home" id="home">
      <h1>You are not prepared for my CV !</h1>
    </section>
  </header>
  <div class="wrapper">
    <aside class="sidebar">
      <div></div>
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

      <h1 class="skills">Skills</h1>
      <ul>
        <li>Glaive</li>
        <li>
          <img src="img/glaive.png" alt="glaive" class="icone-skill" /><img src="img/glaive.png" alt="glaive"
            class="icone-skill" />
          <img src="img/glaive.png" alt="glaive" class="icone-skill" />
        </li>
        <li>Flying</li>
        <li>
          <img src="img/wings.png" alt="wings" class="icone-skill" /><img src="img/wings.png" alt="wings"
            class="icone-skill" />
          <img src="img/wings.png" alt="wings" class="icone-skill" />
        </li>
        <li>Two faces</li>
        <li>
          <img src="img/two-face.png" alt="faces" class="icone-skill" />
          <img src="img/two-face.png" alt="faces" class="icone-skill" />
          <img src="img/two-face.png" alt="faces" class="icone-skill" />
        </li>
        <li>Immolation aura</li>
        <li>
          <img src="img/flame.png" alt="flame" class="icone-skill" /><img src="img/flame.png" alt="flame"
            class="icone-skill" /><img src="img/flame.png" alt="flame" class="icone-skill" />
        </li>
      </ul>
    </aside>
    <main>
      <div class="divider" id="qualities"></div>
      <section class="qualites">
        <div class="title-container">
          <div class="left-img-title"></div>
          <h1>Qualites</h1>
          <div class="right-img-title"></div>
        </div>
        <section class="quality-wrapper">
          <?php foreach($qualities as $title => $qualitie): ?>
          <div>
            <img src="img/<?= $qualitie['image'] ?>">
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
          <div class="image-eternite"></div>
          <div class="eternite">
            <h2>Well of Eternity</h2>
            <p>
              To save my people, unwillingly i have used the power of Weel of Eternity
              to repell the demons invasion resulting in the destruction of the well,
              unfourtunatly my people judged me as a traitor...
            </p>
          </div>
        </div>
        <div class="experience">
          <div class="tychondrius">
            <h2>Tychondrius</h2>
            <p>
              I have defeated Tychondrius, leader of the Burning Legion,
              but do to so i had to sacrifice my soul to the demonic fel powers from the
              skull of Guldan, it provided me the powers to battle such powerful beings.
            </p>
          </div>
          <div class="image-tychondrius"></div>
        </div>
        <div class="experience">
          <div class="image-arthas"></div>
          <div class="arthas">
            <h2>Arthas</h2>
            <p>
              I fought Arthas leader of the Scourge(The Undead Army) in the Northrend.
              A campaign of more horror the living have nevr seen. Many of my companions fallen in the fields
              of battle. But in the end victory over the Scourge was obtained.
            </p>
          </div>
        </div>
        <div class="experience">
          <div class="illidari">
            <h2>The Illidari</h2>
            <p>
              To this day i continue gathering more and more followers who preach my demonic
              ways to fight demons and rid the Universe of the Legion(Army of Demons)
            </p>
          </div>
          <div class="image-illidari"></div>
        </div>
      </section>
      <div class="divider" id="formations"></div>
      <section class="formation">
        <div class="title-container">
          <div class="left-img-title"></div>
          <h1>Education</h1>
          <div class="right-img-title"></div>
        </div>
        <div class="image-formation"></div>
        <div class="formations">
          <div class="formation-detail">
            <h2>Archidruid</h2>
            <p>
              <b>Teacher</b>: Cenarius (Demi-god, guardian of the grove).
              Learning sage magic.
            </p>
          </div>
          <div class="formation-detail">
            <h2>Magician</h2>
            <p>
              <b>Teacher</b>: Rhonin (human, archmage and leader of the Kirin
              Tor). Learning arcane magic.
            </p>
          </div>
          <div class="formation-detail">
            <h2>Warlock</h2>
            <p>
              <b>Teacher</b>: Gul'dan (orc, warlock, necromancer).
               Absorption of powers from his skull.
            </p>
            <p>
              <b>Teacher</b>: Sargeras (Black Titan, leader of the legion).
              Burnt Illidan's eyes and scarred his body through fel flame
              resulting with tattoos that grand demonic powers.
            </p>
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
            <form action="">
              <input type="text" placeholder="First Name" />
              <input type="text" placeholder="Last Name" />
              <input type="email" name="" placeholder="Your Email" />
              <input type="text" name="" placeholder="Contact Number" />
              <textarea name="" placeholder="Your Message" id="" cols="30" rows="10"></textarea>
              <input type="submit" value="Send" />
            </form>
          </div>
        </div>
      </section>
      <div class="divider"></div>
    </main>
  </div>
  <script src="js/script.js"></script>
</body>

</html>