
// Interactive Timeline for "Experiences"
const experiencesSection = document.querySelector('#expe');
const timelineContainer = document.createElement('div');
timelineContainer.classList.add('timeline-wrap');
experiencesSection.appendChild(timelineContainer);

// Timeline Data
const timelineData = [
    {
        title: 'UI Designer',
        date: 'February 2023 - Present',
        details: 'Proficient in Figma for creating interactive prototypes, user interfaces, and collaborating with teams.'
    },
    {
        title: 'Photography',
        date: 'July 2014 - Present',
        details: 'Extensive experience with Adobe Photoshop for photo editing, graphic design, and image manipulation.'
    },
    {
        title: 'Web Designer',
        date: 'May 2023 - Present',
        details: 'Proficient in Visual Studio Code for writing clean and maintainable HTML, CSS, and JavaScript.'
    }
];

// Load Timeline Content
function loadTimeline() {
    timelineData.forEach(item => {
        const timelineBlock = document.createElement('div');
        timelineBlock.classList.add('timeline-block');

        const timelineHeader = document.createElement('div');
        timelineHeader.classList.add('timeline-header');
        timelineHeader.innerHTML = `<h3>${item.title}</h3><p>${item.date}</p>`;

        const timelineDetails = document.createElement('div');
        timelineDetails.classList.add('timeline-details');
        timelineDetails.innerHTML = `<p>${item.details}</p>`;

        timelineBlock.appendChild(timelineHeader);
        timelineBlock.appendChild(timelineDetails);

        timelineContainer.appendChild(timelineBlock);
    });
}

// Load Timeline Content on Page Load
window.addEventListener('DOMContentLoaded', loadTimeline);

document.addEventListener("DOMContentLoaded", () => {
    const toggleSwitch = document.getElementById("toggle");
  
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
      document.body.classList.add("dark-mode");
      toggleSwitch.checked = true;
    }
  
    // Add event listener to the toggle
    toggleSwitch.addEventListener("change", () => {
      if (toggleSwitch.checked) {
        document.body.classList.add("dark-mode");
        localStorage.setItem("theme", "dark");
      } else {
        document.body.classList.remove("dark-mode");
        localStorage.setItem("theme", "light");
      }
    });
  });
// Add CSS for Dark Mode
const style = document.createElement('style');
style.innerHTML = `
    body.dark-mode {
        background-color: #121212;
        color: #ffffff;
    }
    body.dark-mode a {
        color: #80d4ff;
    }
    body.dark-mode .image-container img {
        filter: brightness(80%);
    }
    .dark-mode-toggle {
        padding: 10px 30px;
        border: solid;
        border-radius: 50px 10px;
        font-size: 14px;
    }
    .dark-mode-toggle:hover{
    background-color: #ecd79e;
    cursor: pointer;
    border-radius: 10px 50px;
}
body.dark-mode {
    background-color: #121212;
    color: #ffffff;
  }
darkModeToggle.textContent{
    font-family: 'Lobster', cursive;
  }
  body.dark-mode #container {
    background-color: #1e1e1e;
  }
  
  body.dark-mode #nav {
    background-color: #1e1e1e;
  }
  
  body.dark-mode #main {
    background-color: #2a2a2a;
  }
  
  body.dark-mode #about,
  body.dark-mode #educ,
  body.dark-mode #expe,
  body.dark-mode #skills,
  body.dark-mode #proj {
    background-color: #2c2c2c;
    border-color: #444444;
  }
  
  body.dark-mode #footer {
    background-color: #1e1e1e;
  }
  body.dark-mode #footer > span{
  color:rgb(252, 249, 249);
  }
  
  body.dark-mode .privacy a,
  body.dark-mode .terms a,
  body.dark-mode .contact a {
    color: #ffffff;
  }
  
  body.dark-mode .privacy:hover,
  body.dark-mode .terms:hover,
  body.dark-mode .contact:hover {
    background-color: #333333;
  }
  
  body.dark-mode #home img,
  body.dark-mode #about img,
  body.dark-mode #educ img,
  body.dark-mode #expe img,
  body.dark-mode #skills img {
    border-color: #555555;
  }
  
  /* Dark mode text and link adjustments */
  body.dark-mode a {
    color: #76c7c0;
  }
  
  body.dark-mode a:hover {
    color: #53a8a0;
  }
`;
document.head.appendChild(style);

document.addEventListener("DOMContentLoaded", () => {
  const navLinks = document.querySelectorAll("#nav a"); // Select all links in the navbar

  navLinks.forEach(link => {
    link.addEventListener("click", event => {
      event.preventDefault(); // Prevent the default jump behavior
      
      const targetId = link.getAttribute("href").substring(1); // Extract the section ID
      const targetElement = document.getElementById(targetId); // Get the target section

      if (targetElement) {
        // Scroll smoothly to the target section
        targetElement.scrollIntoView({
          behavior: "smooth", // Enable smooth scrolling
          block: "start" // Align to the top of the section
        });
      }
    });
  });
});
