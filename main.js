document.querySelectorAll('.container-block').forEach(item => {
    item.addEventListener('click', event => {
        var x = item.nextElementSibling;
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block"
        }
    })
  })

  function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }