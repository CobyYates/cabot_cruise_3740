</main>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".myslider").slick({
          autoplay: true,
          dots: true,
          arrows: false,
          cssEase: "ease-out",
          speed: 500,
          autoplaySpeed: 5000
        });
      });
    </script>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "TravelAgency",
        "name": "Cabot Cruises",
        "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
        "openingHours": "Mo-Fr 09:00-16:00",
        "telephone": "+13855551234",
        "faxNumber": "+1385559876",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "1 Washington Ave",
          "addressLocality": "Miami Beach",
          "addressRegion": "FL"
        },
        "image": "http://fullpath.com/logo.png",
        "priceRange": "$500 to $4000"
      }
    </script>

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
<footer>
      <div class="footerContainer">
        <div class="contact">
          <section class="location">
            <h3>Contact Us</h3>
            <p>CABOT CRUISES</p>
            <a
              href="https://www.google.com/maps/search/pier+in+florida+for+cruises/@25.791308,-80.1790951,13z"
            >
              <p>1 Washington Ave,</p>
              <p>Miami Beach, FL 24450</p></a
            >
          </section>
          <section class="phone">
            <h3>Phone</h3>
            <p><a href="tel:1-800-555-1234">1-800-555-1234</a></p>
          </section>
          <section class="hours">
            <h3>Hours of Operation</h3>
            <p>Monday – Friday 9am – 4pm</p>
          </section>
        </div>

        <div class="why">
          <h3>Why Cabot Cruises</h3>
          <p>
            Cabot Cruises is a travel agency providing the best cruise deals on
            our online travel website. We can help you with all inclusive
            vacations including discounted cruises.
          </p>
          <p>
            We do not sell travel to residents of Delaware, Iowa, Florida and
            Washington state because those states are just weird. If you are a
            resident of one of these states, call your congressman and tell them
            to change the regulations.
          </p>
        </div>

        <div class="news">
          <h3>News Letter</h3>
          <p>
            Subscribe to our email list and stay up-to-date with our honest
            offers and latest specials.
          </p>
          <section id="search">
            <form method="get" action="">
              <input
                class="sfield"
                type="search"
                name="s"
                required
                placeholder="email@address.com"
              />
            </form>
            <button class="submitBtn">Submit</button>
          </section>
        </div>

        <div class="social">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter-square"></i></a>
          <a href="#"><i class="fab fa-youtube-square"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-github-square"></i></a>
        </div>

        <div class="developer">
          &copy; 2020 Coby Yates &dash;
          <a href="https://coberapps.com">Coberapps.com</a>
        </div>
      </div>
    </footer>