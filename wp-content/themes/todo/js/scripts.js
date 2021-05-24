window.onload = function(){

  // Detect AVIF support
  detectAvif();

  // Menu Handler
  menuHandler();

  // Tabs
  tabsHandler();

}

function detectAvif(){
  var AVIF = new Image();
	AVIF.onload = AVIF.onerror = function () {
    var formatFound = AVIF.height == 2
    document.documentElement.className += formatFound ? 'avif' : 'no-avif'
	}
	AVIF.src = 'data:image/avif;base64,AAAAIGZ0eXBhdmlmAAAAAGF2aWZtaWYxbWlhZk1BMUIAAADybWV0YQAAAAAAAAAoaGRscgAAAAAAAAAAcGljdAAAAAAAAAAAAAAAAGxpYmF2aWYAAAAADnBpdG0AAAAAAAEAAAAeaWxvYwAAAABEAAABAAEAAAABAAABGgAAAB0AAAAoaWluZgAAAAAAAQAAABppbmZlAgAAAAABAABhdjAxQ29sb3IAAAAAamlwcnAAAABLaXBjbwAAABRpc3BlAAAAAAAAAAIAAAACAAAAEHBpeGkAAAAAAwgICAAAAAxhdjFDgQ0MAAAAABNjb2xybmNseAACAAIAAYAAAAAXaXBtYQAAAAAAAAABAAEEAQKDBAAAACVtZGF0EgAKCBgANogQEAwgMg8f8D///8WfhwB8+ErK42A=';
}

function menuHandler(){
  var $link = document.getElementById('menu-button');
  var $closeLink = document.getElementById('close-button');
  var $menu = document.getElementById('menu-wrapper');
  var activeClass = 'is-active';

  $link.addEventListener('click', function(e){
    e.currentTarget.classList.add(activeClass);
    $menu.classList.add(activeClass);
    return false;
  });

  $closeLink.addEventListener('click', function(e){
    $link.classList.remove(activeClass);
    $menu.classList.remove(activeClass);
  });

  $menu.addEventListener('click', function(e){
    var isLink = e.target.tagName.toLowerCase() === "a";
    if(isLink){
      $link.classList.remove(activeClass);
      $menu.classList.remove(activeClass);
    }
  })

}

function tabsHandler(){
  var $tabLink = document.querySelectorAll('.tabs-links li a');
  var $tabContents = document.querySelectorAll('.tabs-contents .tab');
  var existHashInUrl = location.hash;

  $tabLink.forEach(function(item){
    item.addEventListener('click', function(e){
      e.preventDefault();
      $tabLink.forEach(function(link){
        var isActive = link.hash === e.target.hash
        link.classList[ isActive ? 'add' : 'remove']('is-active');
      })
      $tabContents.forEach(function(item){
        var isActive = ('#' + item.id) === e.target.hash
        item.classList[ isActive ? 'add' : 'remove']('is-visible');
      })
      return false;
    })
  })

  if(existHashInUrl){
    var linkQuery = document.querySelectorAll("a[href='" + location.hash + "']");
    var hasLink = linkQuery.length > 0
    if( hasLink ){
      linkQuery[0].click();
      document.getElementById('tabs').scrollIntoView();
    }
  }

}