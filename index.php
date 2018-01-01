<html>
  <title>Ryan Buxton</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/extras.css">
  <body>

      <!-- Header -->
      <header class="w3-display-container w3-content w3-wide" style="max-width:1500px" id="home">
        <img class="w3-image" src="https://1.bp.blogspot.com/-ZbY05reBEsk/Wc2K8GSQCkI/AAAAAAABCw0/fs-_yvh2c38W3wEFjRyUHHNFUwYjYAhigCLcBGAs/s1600/13.jpg" alt="ryan" style="width:100%">
        <div class="w3-display-topmiddle w3-margin-top w3-center">
          <br><br><br><br><br>
          <h1 class="w3-xxlarge w3-text-black"><b><span class="w3-left w3-padding w3-black w3-opacity-min typewrite" data-period="7000" data-type='[ "Hi, Im Ryan.", "I like computers.", "I make cool stuff with them."]'></span></b></h1>
        </div>
      </header>
      <hr>

      <!-- Body -->
      <div class='w3-container w3-margin'>
        <h1 class="w3-xlarge">ryan@ryan-desktop:~$ ryan -about </h1>
        <p class='w3-large w3-margin-left'>
          I am a high school senior, with a focus on computer science. I plan to attend college in the fall. I have studied Java and Andriod Studio's "almost Java" in school, and have I have taught myself PHP, HTML, basic MySQL, basic C. I also know a lot of Ubuntu tricks and am my school's Cyber Patriot Ubuntu specialist. This site has been developed using these skills I have learned. All the code for this site can be found here.<a href='http://www.github.com/rbuxton1/ryanbuxton-website'>here</a>.
        </p>
      </div>
      <div class='w3-container w3-margin'>
        <h1 class='w3-xlarge'>ryan@ryan-desktop:~$ ryan -status </h1>
        <p class='w3-large w3-margin-left'>
          I am currently working on several projects, the largest of which is my computer science senior project with my good friend, <a href='http://www.github.com/cheezosis/'>Curtis Worthy</a>. Our objective is to build a safe for work arts database for our school's photography department to store student work. The project is called Student Art Archive, or SAA for short. Additionally, I am working on Show Helper, which is a program I wrote for my mom to facilitate model horse show judging. I am currently working on expanding that project to include a database back end.
        </p>
      </div>


      <!-- Footer -->
      <footer class="w3-container w3-theme-dark w3-padding-16">
        <p>
          <div class="w3-center">
            <p> <a href='http://www.github.com/rbuxton1'> << Ryan Buxton 2017 >> </a></p>
          </div>
        </p>
        <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
          <span class="w3-text w3-theme-light w3-padding">Go To Top</span> 
          <a class="w3-text-white" href="#home"><span class="w3-xlarge">
          <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
      </footer>
    </body>
    <!-- Cool writing effect -->
    <script>
      var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
      };

      TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
          this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
          this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
          delta = this.period;
          this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
          this.isDeleting = false;
          this.loopNum++;
          delta = 500;
        }

        setTimeout(function() {
          that.tick();
        }, delta);
      };

      window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
          var toRotate = elements[i].getAttribute('data-type');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
          }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
      };
    </script>
  </html>
