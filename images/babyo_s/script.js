function hasClass(ele, cls) {
  return !!ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}

function addClass(ele, cls) {
  if (!hasClass(ele, cls)) ele.className += ' ' + cls;
}

function removeClass(ele, cls) {
  if (hasClass(ele, cls)) {
    var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
    ele.className = ele.className.replace(reg, ' ');
  }
}

//Add event from js the keep the marup clean
function init() {
  document.getElementById('open-menu').addEventListener('click', toggleMenu);
  document.getElementById('body-overlay').addEventListener('click', toggleMenu);
}

//The actual fuction
function toggleMenu() {
  var ele = document.getElementsByTagName('body')[0];
  if (!hasClass(ele, 'menu-open')) {
    addClass(ele, 'menu-open');
  } else {
    removeClass(ele, 'menu-open');
  }
}

//Prevent the function to run before the document is loaded
document.addEventListener('readystatechange', function () {
  if (document.readyState === 'complete') {
    init();
  }
});

console.clear();
var work = document.querySelector('#workOuterShell');
var items = Array.from(work.querySelectorAll('.item'));
var loadMore = document.getElementById('load-more');
maxItems = 6;
loadItems = 3;
hiddenClass = 'hiddenStyle';
hiddenItems = Array.from(document.querySelectorAll('.hiddenStyle'));

items.forEach(function (item, index) {
  console.log(item.innerText, index);
  if (index > maxItems - 1) {
    item.classList.add(hiddenClass);
  }
});

loadMore.addEventListener('click', function () {
  [].forEach.call(
    document.querySelectorAll('.' + hiddenClass),
    function (item, index) {
      if (index < loadItems) {
        item.classList.remove(hiddenClass);
      }

      if (document.querySelectorAll('.' + hiddenClass).length === 0) {
        loadMore.style.display = 'none';
      }
    }
  );
});

// function to show shop now on hover of the product
// (function () {
//   var actionBar = document.querySelector('.action-bar');
//   var shopNow = document.querySelector('.img-shop-now');

//   function showDiv() {
//     actionBar.classList.add('js-is-visible');
//   }

//   function hideDiv() {
//     actionBar.classList.remove('js-is-visible');
//   }

//   shopNow.onmouseover = showDiv;
//   shopNow.onmouseleave = hideDiv;
// })();
