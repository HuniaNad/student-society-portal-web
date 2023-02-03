(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select("#navbar .scrollto", true);
  const navbarlinksActive = () => {
    let position = window.scrollY + 200;
    navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = select(navbarlink.hash);
      if (!section) return;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  };
  window.addEventListener("load", navbarlinksActive);
  onscroll(document, navbarlinksActive);

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos,
      behavior: "smooth",
    });
  };

  /**
   * Back to top button
   */
  let backtotop = select(".back-to-top");
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add("active");
      } else {
        backtotop.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("body").classList.toggle("mobile-nav-active");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
  });

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let body = select("body");
        if (body.classList.contains("mobile-nav-active")) {
          body.classList.remove("mobile-nav-active");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener("load", () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

  /**
   * Hero type effect
   */
  const typed = select(".typed");
  if (typed) {
    let typed_strings = typed.getAttribute("data-typed-items");
    typed_strings = typed_strings.split(",");
    new Typed(".typed", {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000,
    });
  }

  /**
   * Skills animation
   */
  let skilsContent = select(".skills-content");
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: "80%",
      handler: function (direction) {
        let progress = select(".progress .progress-bar", true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute("aria-valuenow") + "%";
        });
      },
    });
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener("load", () => {
    let portfolioContainer = select(".portfolio-container");
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: ".portfolio-item",
      });

      let portfolioFilters = select("#portfolio-flters li", true);

      on(
        "click",
        "#portfolio-flters li",
        function (e) {
          e.preventDefault();
          portfolioFilters.forEach(function (el) {
            el.classList.remove("filter-active");
          });
          this.classList.add("filter-active");

          portfolioIsotope.arrange({
            filter: this.getAttribute("data-filter"),
          });
          portfolioIsotope.on("arrangeComplete", function () {
            AOS.refresh();
          });
        },
        true
      );
    }
  });

  /**
   * Initiate portfolio lightbox
   */
  const portfolioLightbox = GLightbox({
    selector: ".portfolio-lightbox",
  });

  /**
   * Portfolio details slider
   */
  new Swiper(".portfolio-details-slider", {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });

  /**
   * Testimonials slider
   */
  new Swiper(".testimonials-slider", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  /**
   * Animation on scroll
   */
  window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });

    $("#cvv").hide();
    $("#card-expiry-year").hide();
    $("#card-expiry-month").hide();
    $("#card-holder-name").hide();
    $("#table_div").hide();
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();
})();

// Executive Show Data on pop up
$(".update-excom-btn").click(function(){

  $.post("connections/get_excom_data.php",
  {
    id: this.value
  },
  function(data, status){
    resultObj = JSON.parse(data);
    $("input[name='name']").val(resultObj['name']);
    $("input[name='regNo']").val(resultObj['registration_no']);
    $("input[name='phone']").val(resultObj['contact']);
    $("input[name='email']").val(resultObj['email']);
    $("input[name='role']").val(resultObj['role']);
    $("input[name='id']").val(resultObj['id']);
    console.log(data);
  });
});

$(document).ready(function () {
  var response_item = document.getElementById("carl1").firstElementChild;
  response_item.classList.add("active");
});

// Volunteer Response Show Data on pop up
$(".update-response-btn").click(function(){

  $.post("connections/get_volunteer_data.php",
  {
    id: this.value
  },
  function(data, status){
    resultObj = JSON.parse(data);
    $("input[name='name']").val(resultObj['name']);
    $("input[name='regNo']").val(resultObj['registration_no']);
    $("input[name='contact']").val(resultObj['contact']);
    $("input[name='email']").val(resultObj['email']);
    $("input[name='team']").val(resultObj['team']);
    $("textarea[name='pastExperience']").val(resultObj['goodfit_description']);
    $("input[name='id']").val(resultObj['id']);
    console.log(data);
  });
});

// Show accepted volunteers in table
$(document).ready(function(){

  $.get("connections/get_accepted_volunteer.php",
  function(data, status){
    resultObj = JSON.parse(data);
    newResultObj = resultObj.map(v => ({...v, 
      action: '<button class="btn standard-btn mb-1 update-volunteer-btn" type="button" value="'+v.id+'" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#popup-view-volunteer">Update</button> <button class="btn btn-danger delete-volunteer-btn" type="submit" value="'+v.id+'">Delete</button>'
    }));
   
    $("#volunteer_table_id").DataTable({
      aaData: newResultObj,
      aoColumns: [
        {
          mData: "name",
        },
        {
          mData: "registration_no",
        },
        {
          mData: "email",
        },
        {
          mData: "contact",
        },
        {
          mData: "team",
        },
        {
          mData: "action",
        }
      ],
    });
  });
});

// Volunteer Data Showed on pop up
$("body").on('click','.update-volunteer-btn', function(){
  $.post("connections/get_accepted_volunteer_toupdate.php",
  {
    id: this.value
  },
  function(data, status){
    resultObj = JSON.parse(data);
    $("input[name='name']").val(resultObj['name']);
    $("input[name='regNo']").val(resultObj['registration_no']);
    $("input[name='contact']").val(resultObj['contact']);
    $("input[name='email']").val(resultObj['email']);
    $("select[name='team']").val(resultObj['team']);
    $("textarea[name='pastExperience']").val(resultObj['goodfit_description']);
    $("input[name='id']").val(resultObj['id']);
    console.log(data);
  });
});

// Delete Volunteer 
$("body").on('click','.delete-volunteer-btn', function(){
  if(confirm("Are you sure you want to delete the volunteer?")){
    $.get("connections/delete_volunteer.php",
    {
      id: this.value
    },
    function(data, status){
      console.log(data);
      location.reload();
    });
  }
  
});

// Check confirm password
function check(input) { 
	console.log(input.value+" | "+document.getElementById('password').value);
	if (input.value != document.getElementById('password').value) {
		input.style="border-color= #ffb7b7; background-color:#ffb7b7;";
		document.getElementById('reset-btn').disabled = true;
	} else {
		// input is valid -- reset the error message
		input.style="background-color:#ffffff;"
		document.getElementById('reset-btn').disabled = false;
	}
}


// Show all events in semester schedule table
$(document).ready(function(){

  $.get("connections/get_events.php",
  function(data, status){
    resultObj = JSON.parse(data);
    console.log(resultObj);
    newResultObj = resultObj.map(v => ({...v, 
      action: '<button class="btn standard-btn mb-1 update-event-btn" type="button" value="'+v.id+'" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#popup-update-event">Update</button> <button class="btn btn-danger delete-event-btn" type="button" value="'+v.id+'">Delete</button>'
    }));
   
    $("#event_table_id").DataTable({
      responsive: true,
      aaData: newResultObj,
      aoColumns: [
        {
          mData: "name",
        },
        {
          mData: "date",
        },
        {
          mData: "speaker",
        },
        {
          mData: "time",
        },
        {
          mData: "venue",
        },
        {
          mData: "description",
        },
        {
          mData: "action",
        }
      ],
    });
  });
});

// Event Data Showed on pop up
$("body").on('click','.update-event-btn', function(){
  $.post("connections/get_events_toupdate.php",
  {
    id: this.value
  },
  function(data, status){
    resultObj = JSON.parse(data);
    let d = resultObj['date'].split("/");
    let date = d[2] + '-' + d[1] + '-' + d[0];

    let t = resultObj['time'];
    let time = convertTo24Hour(t);

    $("input[name='name']").val(resultObj['name']);
    $("input[name='date']").val(date);
    $("input[name='time']").val(time);
    $("input[name='speaker']").val(resultObj['speaker']);
    $("input[name='venue']").val(resultObj['venue']);
    $("input[name='description']").val(resultObj['description']);
    
    if(resultObj['hide']=="1"){
      $("select[name='status']").val("hide");
    }
    else{
      $("select[name='status']").val("show");
    }
    
    $("input[name='id']").val(resultObj['id']);
  });
});

//convert 12-hour format to 24-hour format
function convertTo24Hour(time) {
  var hours = parseInt(time.substr(0, 2));
  if(time.indexOf('am') != -1 && hours == 12) {
      time = time.replace('12', '0');
  }
  if(time.indexOf('am') != -1 && hours < 10) {
      time = time.replace(hours, '0' + hours);
  }
  if(time.indexOf('pm') != -1 && hours < 12) {
      time = time.replace(hours, hours + 12);
  }
  if(time.includes('am')){
    time = time.replace('am',' ')
  }
  else if(time.includes('pm')){
    time = time.replace('pm',' ')
  }
  return time.trim();
}

// Delete Event 
$("body").on('click','.delete-event-btn', function(){
  if(confirm("Are you sure you want to delete the event?")){
    $.get("connections/delete_event.php",
    {
      id: this.value
    },
    function(data, status){
      console.log(data);
      location.reload();
    });
  }
  
});

// Show notice board events
$(document).ready(function(){

  $.get("connections/get_noticeboard_events.php",
  function(data, status){
    resultObj = JSON.parse(data);
    console.log(resultObj);
   
    $("#notice_table_id").DataTable({
      aaData: resultObj,
      aoColumns: [
        {
          mData: "name",
        },
        {
          mData: "date",
        },
        {
          mData: "speaker",
        },
        {
          mData: "time",
        },
        {
          mData: "venue",
        },
        {
          mData: "description",
        }
      ],
    });
  });
});