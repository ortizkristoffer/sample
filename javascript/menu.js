const menu = document.getElementById("menu-btn");
const sidebar = document.getElementById("sideBar");

function showMenu(){
    sidebar.style.display = "block";
   
 
}
function hideMenu(){
    sidebar.style.display = "none";
}

menu.addEventListener("click", showMenu);

function isInMobileView() {
    // Check for touch events
    if (('ontouchstart' in window) || window.navigator.maxTouchPoints > 1) {
      return true;
    }
    return false;
  }
  
  function handleSidebar(sidebarElement) {
    const body = document.body;
  
    let isMobileView = isInMobileView(); // Store initial view state
  
    // Event listener for window resize to detect view changes
    window.addEventListener('resize', () => {
      const currentMobileView = isInMobileView();
  
      if (window.innerWidth > 1024) {
        // Show sidebar on desktop view
        sidebarElement.style.display = 'block'; // Adjust styling as needed
      } else {
        // Handle mobile view or reset display for mobile handling (optional)
        sidebarElement.style.display = 'none';
      }
    });
  
    if (isMobileView && window.innerWidth <= 1024) {
      // Mobile view handling (same as before)
     
      body.addEventListener('touchstart', (event) => {
        const clickedOutsideSidebar = !sidebarElement.contains(event.target);
  
        if (clickedOutsideSidebar) {
          // Hide sidebar if clicked outside
          sidebarElement.style.display = 'none'; // Adjust styling as needed
        }
      });
    }
  }
  
  // Usage:
  handleSidebar(sidebar);


  const profile = document.getElementById("user-btn").addEventListener("click", function(){
        window.location.href = "settings.php";
  });